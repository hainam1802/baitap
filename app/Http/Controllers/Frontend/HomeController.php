<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Group_Item;
use App\Models\SubItem;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Wards;
use App\Models\Districts;
use App\Models\Provinces;
use ArrayObject;
use App\Library\HelpersDevice;
use function GuzzleHttp\json_decode;
use Cookie;
use Auth;
use App\Library\Helpers;
use DB;
use Validator;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function getCart(Request $request, $id){
        $data = Item::with('group')->with('locale')->with('category')
            ->where('id',$id)
            ->where('status',1)
            ->first();
        return view('frontend.pages.cart',compact('data'));

    }
    public function getCheckout(Request $request, $id){
        $user = Auth::guard('frontend')->user();
        $order = Order::where('author_id',$user->id)->where('module','order')->where('id',$id)->where('status_confirm',2)->firstOrFail();
        $detail = OrderDetail::where('order_id',$order->id)->get();
        return view('frontend.pages.checkout',compact('order','detail'));

    }

    public function getOrder(Request $request, $id){
        $user = Auth::guard('frontend_backup')->user();
        $data = Order::where('author_id',$user->id)->where('module','order')->where('id',$id)->where('status_confirm',1)->firstOrFail();
        $detail = OrderDetail::where('order_id',$data->id)->get();
        if(HelpersDevice::isMobile()) {
            return view('frontend_backup.pages.mobile.checkout',compact('data','detail'));
        }
        else{
            return view('frontend_backup.pages.desktop.checkout',compact('data','detail'));
        }
    }


    public function postOrderNow(Request $request){
        try{
            $validator = Validator::make($request->all(),[
                'fullname'=>'required',
                'phone'=>'required',
                'email'=>'required',
            ],[
                'fullname.required' => __('Vui lòng nhập tên đầy đủ'),
                'phone.required' => __('Vui lòng nhập số điện thoại'),
                'email.required' => __('Vui lòng nhập email'),
            ]);
            $data = Item::where('id',$request->id)
            ->where('status',1)
            ->first();
            if(!$data){
                return redirect()->back()->withErrors(__('Phòng được đặt không hợp lệ.'));


            }
            if ($data->quantity <= 0){
                return redirect()->back()->withErrors(__('Đã hết phòng.'));

            }
            $old_quantity = $data->quantity;
            $data->quantity = $old_quantity-1;
            $data->save();
            $order = Order::create([
                'module' => 'order',
                'author_id' => Auth::guard('frontend')->user()->id,
                'price' => $data->price,
                'content' => $request->note,
                'ref_id' => $data->id,
                'status' => 2,
                'status_confirm' => 2,
            ]);
            $order_detail = array();
            $order_detail = [
                [
                    'module' => 'fullname',
                    'content' => $request->fullname
                ],
                [
                    'module' => 'phone',
                    'content' => $request->phone
                ],

                [
                    'module' => 'email',
                    'content' => $request->email
                ],
            ];
            for($i = 0;$i < count($order_detail); $i++){
               OrderDetail::create([
                    'module' => $order_detail[$i]['module'],
                    'order_id' => $order->id,
                    'content' => $order_detail[$i]['content'],
                ]);
            }

            OrderDetail::create([
                'module' => 'product',
                'order_id' => $order->id,
                'items_id' => $data->id,
                'quantity' => 1,
            ]);
            return redirect()->to('/checkout/'.$order->id);


        }
        catch(\Exception $e){
            Log::error($e);
            return response()->json([
                'status' => 0,
                'message' => "Có lỗi phát sinh, vui lòng thử lại.",
            ]);
        }
    }



}
