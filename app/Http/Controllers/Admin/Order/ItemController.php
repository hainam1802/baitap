<?php

namespace App\Http\Controllers\Admin\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\Group;
use App\Models\Item;
use App\Models\SubItem;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Html;
use App\Library\Files;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $page_breadcrumbs;
    protected $module;
    protected $moduleCategory;
    public function __construct(Request $request)
    {


        $this->module="order";
        $this->moduleCategory=null;


        if( $this->module!=""){
            $this->page_breadcrumbs[] = [
                'page' => route('admin.'.$this->module.'.index'),
                'title' => __(config('module.'.$this->module.'.title'))
            ];
        }
    }



    public function index(Request $request)
    {
        ActivityLog::add($request, 'Truy cập danh sách '.$this->module);
        if($request->ajax) {
            $datatable= Order::with(array('order_detail' => function ($query) {
                $query->with(array('item' => function($q){
                    $q->select('id','title')->get();
                }))
                ->where('module', 'product');
            }))->where('module', $this->module);
            if ($request->filled('id'))  {
                $datatable->where(function($q) use($request){
                    $q->orWhere('id', $request->get('id'));
                    $q->orWhere('idkey',$request->get('id') );
                });
            }
            if ($request->filled('title'))  {
                $datatable->where(function($q) use($request){
                    $q->orWhere('title', 'LIKE', '%' . $request->get('title') . '%');
                });
            }

            if ($request->filled('status')) {
                $datatable->where('status',$request->get('status') );
            }
            if ($request->filled('started_at')) {
                $datatable->where('created_at', '>=', Carbon::createFromFormat('d/m/Y H:i:s', $request->get('started_at')));
            }
            if ($request->filled('ended_at')) {
                $datatable->where('created_at', '<=', Carbon::createFromFormat('d/m/Y H:i:s', $request->get('ended_at')));
            }
            return \datatables()->eloquent($datatable)
                ->only([
                    'id',
                    'action',
                    'author_id',
                    'content',
                    'created_at',
                    'description',
                    'price',
                    'module',
                    'product',
                    'status',
                    'price',
                    'processor_id',
                    'real_received_price',
                    'action',
                    'status',
                    'status_confirm',
                    'user',
                    'type',
                ])
                ->editColumn('created_at', function($data) {
                    return date('d/m/Y H:i:s', strtotime($data->created_at));
                })
                ->editColumn('price', function($data) {
                    return number_format($data->price). ' đ';
                })
                ->editColumn('status', function($data) {
                    $result = "";
                    if($data->status_confirm == 1){
                        $result .= '<span class="text-success">Thành công</span>';
                    }
                    else if($data->status_confirm == 2){
                        $result .= '<span class="text-warning">Chờ xử lý</span>';
                    }else if($data->status_confirm == 0){
                        $result .= '<span class="text-danger">Hủy bỏ</span>';
                    }
                    return $result;
                })

                ->addColumn('user', function($row) {
                    $result = "";
                    if($row->author->username != ""){
                        $result .= $row->author->username;
                    }
                    return $result;
                })
                ->addColumn('product', function($row) {
                    $result = $row->item_ref->title;
                    return $result;
                })
                ->addColumn('action', function($row) {
                    $temp= "<a href=\"".route('admin.'.$this->module.'.show',$row->id)."\"  rel=\"$row->id\" class=\"btn btn-sm  btn-icon btn-hover-text-white btn-hover-bg-primary \" title=\"Xem\"><i class=\"la la-eye\"></i></a>";
                    return $temp;
                })
                ->toJson();
        }



        return view('admin.order.index')
        ->with('module', $this->module)
        ->with('page_breadcrumbs', $this->page_breadcrumbs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $data = Order::where('module','order')->where('id',$id)->where('status_confirm',1)->firstOrFail();
        $detail = OrderDetail::where('order_id',$data->id)->get();
        ActivityLog::add($request, 'Truy cập chi tiết đơn hàng '.$data->id);
        return view('admin.order.item.show')
        ->with('module', $this->module)
        ->with('data', $data)
        ->with('detail', $detail)
        ->with('page_breadcrumbs', $this->page_breadcrumbs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function updateOrder(Request $request, $id){
        // tìm đơn hàng
        $data = Order::with('author')->where('id',$id)->first();
        $status_old = $data->status;
        if(!$data){
            return redirect()->back()->withErrors(__('Đơn hàng không hợp lệ !'));
        }
        $status = $request->status;
        DB::beginTransaction();
        $data->status = $status;
        $data->note = $request->note;
        $data->save();
        ActivityLog::add($request, 'Cập nhật trạng thái đơn hàng #'.$data->id. ' từ trạng thái '.$status_old. ' sang trạng thái '.$status);
        DB::commit();
        return redirect()->back()->with('success',__('Cập nhật trạng thái đơn hàng thành công !'));
    }
}
