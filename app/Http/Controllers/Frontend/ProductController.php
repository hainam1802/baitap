<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Favourite;
use App\Models\User;
use App\Models\UserAction;
use Auth;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Group_Item;
use App\Models\SubItem;
use App\Models\Item;
use App\Models\Installment;
use App\Models\InstallmentDetail;
use ArrayObject;
use App\Library\HelpersDevice;
use App\Models\Category;
use App\Models\Product;
use App\Models\Attribute;

use function Doctrine\Common\Cache\Psr6\get;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    public function getSearch(Request $request){
        if($request->ajax()){
            if($request->q == ""){
                return response()->json([
                    'status' => '0',
                    'message' => 'Không có dữ liệu'
                ]);
            }
			$data = Item::with('category')->where(function ($query) use ($request){
				$query->where('title', 'LIKE', '%' . $request->q . '%');
			})
			->where('status',1)
			->limit(20)->get();
			$data->map(function($item) {
				if(isset($item->price_old)){
					$item->price_old = number_format($item->price_old).' ₫';
				}
				$item->price = number_format($item->price) .' ₫';
			});
            return response()->json([
                'status' => '1',
                'data' => $data,
            ]);
        }
        else{
            return response()->json([
                'status' => '0',
                'message' => 'Bạn không có quyền truy cập !'
            ]);
        }
    }
    public function category(Request $request)
    {
        $search = $request->get('q');
		$items_prd = Item::with('category')->with('locale')->with('group')->where('status',1);
        if($search){
            $items_prd = $items_prd->where(function ($query) use ($search){
                $query->where('title', 'LIKE', '%' . $search . '%');
            });
        }
        if($request->filled('categories')){
            $categories = $request->input('categories');
            $categoryIds = explode(',', $categories);
            $items_prd = $items_prd->whereIn('category_id',$categoryIds);
        }
        if($request->filled('groups')){
            $groups = $request->input('groups');
            $groupIds = explode(',', $groups);
            $items_prd = $items_prd->whereIn('group_id',$groupIds);
        }
        if($request->filled('locales')){
            $locales = $request->input('locales');
            $localeIds = explode(',', $locales);
            $items_prd = $items_prd->whereIn('locale_id',$localeIds);
        }
        if($request->filled('price')){
            switch ($request->get('price')) {
                case "0-1000000":
                    $items_prd = $items_prd->where('price','<=',1000000);
                    break;
                case "1000000-3000000":
                    $items_prd = $items_prd->where('price','>=',1000000)->where('price','<=',3000000);
                    break;
                case "3000000-5000000":
                    $items_prd = $items_prd->where('price','>=',3000000)->where('price','<=',5000000);
                    break;
                case "5000000-10000000":
                    $items_prd = $items_prd->where('price','>=',5000000)->where('price','<=',10000000);
                    break;
                case "10000000-12000000":
                    $items_prd = $items_prd->where('price','>=',10000000)->where('price','<=',12000000);
                    break;
                case "12000000-15000000":
                    $items_prd = $items_prd->where('price','>=',12000000)->where('price','<=',15000000);
                    break;
                case "15000000-20000000":
                    $items_prd = $items_prd->where('price','>=',15000000)->where('price','<=',20000000);
                    break;
                case "20000000-50000000":
                    $items_prd = $items_prd->where('price','>=',20000000)->where('price','<=',50000000);
                    break;
                default :
            }
        }
        $items_prd = $items_prd->orderBy('id','desc')->get();
        if ($request->ajax()) {
            if($items_prd && count($items_prd) > 0){
                return view('frontend.pages.func.load_item_prd')->with('items_prd',$items_prd);
            }
            else{
                $res = [
                    'status' => 0,
                    'mess' => 'errror'
                ];
                return response()->json($res);
            }
        }
		else{
            return view('frontend.pages.item_list')->with('items_prd',$items_prd);

        }


    }
    public function getDetail(Request $request, $slug){
        $data = Item::with('group')->with('locale')->with('category')
            ->where(function ($query) use ($slug){
                $query->where('slug','=',$slug);
                $query->orWhere('url','=',$slug);
            })
            ->where('status',1)
            ->first();
		$items_prd = Item::with('category')->with('locale')->with('category')
		->where('status',1)
		->where('category_id',$data->category_id)
		->where('id','!=',$data->id)
		->inRandomOrder()->limit(5)->get();

        return view('frontend.pages.detail')
            ->with('data',$data)
            ->with('items_prd',$items_prd);
    }
    public function postComment(Request $request){
        if ($request->ajax()) {
            $data = [
                'item_id' =>$request->product_id,
                'author_id' =>$request->user_id,
                'content' =>$request->comment,
                'module' =>'comment',
                'status' =>1,
                'comment_parent'=>0
            ];
          $user =  User::where('id',$request->user_id)->first();
          $username = $user->username;
            $userimage  =  $user->image;
            if ($comment = Comment::create($data)){
                $comment_name  = Comment::where('item_id',$request->product_id)->first();
                $comment_parent  = $comment_name->id;

                return response()->json([
                    'status' => 0,
                    'success'=>true,
                    'data'=>[
                        'author_id' => $request->user_id,
                        'author_name' => $username,
                        'author_img' => $userimage,
                        'item_id' => $request->product_id,
                        'content' => $request->comment,
                        'comment_parent' => $comment_parent,
                    ]
                ]);
            }

        } else {
            return response()->json([
                'status' => 0,
                'success'=>true,
                'comment' => $request->comment,
            ]);
        }
    }
    public function postReplyComment(Request $request){
        if ($request->ajax()) {
            $data = [
                'item_id' =>$request->product_id,
                'author_id' =>$request->user_id,
                'content' =>$request->reply_comment,
                'comment_parent'=>$request->parent_id,
                'module' =>'comment',
                'status' =>'1',
            ];
            $user =  User::where('id',$request->user_id)->first();
            $username = $user->username;
            $userimage  =  $user->image;
            if ($comment = Comment::create($data)){
                return response()->json([
                    'status' => 0,
                    'success'=>true,
                    'data'=>[
                        'author_id' => $request->user_id,
                        'author_name' => $username,
                        'author_img' => $userimage,
                        'item_id' => $request->product_id,
                        'content' => $request->reply_comment,
                        'comment_parent' => $request->parent_id,
                    ]
                ]);
            }

        } else {
            return response()->json([
                'status' => 0,
                'success'=>true,
                'comment' => $request->reply_comment,
            ]);
        }
    }


}
