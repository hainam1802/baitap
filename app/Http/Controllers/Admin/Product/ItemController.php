<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Locale;
use Illuminate\Http\Request;
use App\Models\ActivityLog;
use App\Models\Group;
use App\Models\Item;
use App\Models\SubItem;
use Carbon\Carbon;
use Html;
use App\Library\Files;

class ItemController extends Controller
{
    protected $page_breadcrumbs;
    protected $module;
    protected $moduleCategory;
    public function __construct(Request $request)
    {


        $this->module="product";
        $this->moduleCategory='product-category';


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
            $datatable= Item::with('group')->with('category')->with('locale');

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
            if ($request->filled('position')) {
                $datatable->where('position',$request->get('position') );
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
                    'title',
                    'slug',
                    'image',
                    'locale',
                    'group',
                    'price',
                    'order',
                    'position',
                    'status',
                    'action',
                    'created_at',
                ])


                ->editColumn('created_at', function($data) {
                    return date('d/m/Y H:i:s', strtotime($data->created_at));
                })
                ->editColumn('price', function($data) {
                    return number_format($data->price). ' đ';
                })
                ->editColumn('image', function($data) {
                    return Files::media($data->image);
                })

                ->addColumn('action', function($row) {
                    $temp= "<a href=\"".route('admin.product.edit',$row->id)."\"  rel=\"$row->id\" class=\"btn btn-outline-warning btn-sm mr-1 \"><span>Sửa</span></a>";
                    $temp.= "<a  rel=\"$row->id\" class='btn btn-outline-danger btn-sm mr-1 delete_toggle' data-toggle=\"modal\" data-target=\"#deleteModal\" class=\"delete_toggle\"><i class=\"fa fa-trash-o\"></i> <span>Xóa</span></a>";
                    $temp.= "<a  rel=\"$row->id\" class='btn btn-sm  btn-icon btn-hover-text-white btn-hover-text-white btn-hover-bg-danger delete_toggle' data-toggle=\"modal\" data-target=\"#deleteModal\" class=\"delete_toggle\" title=\"Xóa\"><i class=\"la la-trash\"></i></a>";
                    return $temp;
                })
                ->toJson();
        }
        $dataCategory = Category::orderBy('id')->get();
        $dataGroups = Group::orderBy('id')->get();
        $dataLocale = Locale::orderBy('id')->get();
        return view('admin.product.index')
            ->with('module', $this->module)
            ->with('page_breadcrumbs', $this->page_breadcrumbs)
            ->with('dataCategory', $dataCategory)
            ->with('dataLocale', $dataLocale)
            ->with('dataGroups', $dataGroups);
    }


    public function create(Request $request)
    {
        $this->page_breadcrumbs[] =[
            'page' => '#',
            'title' => __("Thêm mới")
        ];

        $dataCategory = Category::orderBy('id','asc')->get();
        $dataGroups = Group::orderBy('id','asc')->get();
        $dataLocale = Locale::orderBy('id','asc')->get();
         // lấy các thuộc tính


        ActivityLog::add($request, 'Vào form create '.$this->module);
        return view('admin.product.create_edit')
            ->with('module', $this->module)
            ->with('page_breadcrumbs', $this->page_breadcrumbs)
            ->with('dataCategory', $dataCategory)
            ->with('dataLocale', $dataLocale)
            ->with('dataGroups', $dataGroups);

    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
        ],[
            'title.required' => __('Vui lòng nhập tiêu đề'),
        ]);
        $input=$request->all();
        $image_extension = null;
        if(!$request->filled('image')){
            $input['image']= Files::upload_image($request->file('image'),'images',null,null,null,false);
        }
        if($request->image_detail){
            foreach($request->image_detail as $item){
               $image_extension[] = Files::upload_image($item,'images',null,null,null,false);
            }
            $input['image_detail'] = json_encode($image_extension,JSON_UNESCAPED_UNICODE);
        }
        $input['author_id']=auth()->user()->id;
//        $input['price_old'] = (float)str_replace(array(' ', '.'), '', $request->price_old);
//        $input['price'] = (float)str_replace(array(' ', '.'), '', $request->price);


        //xử lý params
        if($request->filled('params')){
            $params=$request->params;
            $input['params'] =$params;
        }
        $data=Item::create($input);
        ActivityLog::add($request, 'Tạo mới thành công '.$this->module.' #'.$data->id);

        if($request->filled('submit-close')){
            return redirect()->route('admin.'.$this->module.'.index')->with('success',__('Thêm mới thành công !'));
        }
        else {
            return redirect()->back()->with('success',__('Thêm mới thành công !'));
        }
    }


    public function show(Request $request,$id)
    {
        //$data = Group::findOrFail($id);
        //ActivityLog::add($request, 'Show '.$this->module.' #'.$data->id);
        //return view('admin.module.item.show', compact('datatable'));
    }

    public function edit(Request $request,$id)
    {


        $this->page_breadcrumbs[] =[
            'page' => '#',
            'title' => __("Cập nhật")
        ];
        $data = Item::with('group')->with('category')->with('locale')->findOrFail($id);

        $dataCategory = Category::orderBy('id','asc')->get();
        $dataGroups = Group::orderBy('id','asc')->get();
        $dataLocale = Locale::orderBy('id','asc')->get();

        ActivityLog::add($request, 'Vào form edit '.$this->module.' #'.$data->id);
        return view('admin.product.create_edit')
            ->with('module', $this->module)
            ->with('page_breadcrumbs', $this->page_breadcrumbs)
            ->with('data', $data)
            ->with('dataCategory', $dataCategory)
            ->with('dataGroups', $dataGroups)
            ->with('dataLocale', $dataLocale);

    }

    public function update(Request $request,$id)
    {

        $data =  Item::with('group')->with('category')->with('locale')->findOrFail($id);

        $this->validate($request,[
            'title'=>'required',
        ],[
            'title.required' => __('Vui lòng nhập tiêu đề'),
        ]);

        $input=$request->all();
        if(!$request->filled('image')){
            $input['image']= Files::upload_image($request->file('image'),'images',null,null,null,false);
        }
        if($request->image_detail){
            foreach($request->image_detail as $item){
                $image_extension[] = Files::upload_image($item,'images',null,null,null,false);
            }
            $input['image_detail'] = json_encode($image_extension,JSON_UNESCAPED_UNICODE);
        }
        //xử lý params
        if($request->filled('params')){
            $params=$request->params;
            $input['params'] =$params;
        }
//        $input['price_old'] = (float)str_replace(array(' ', '.'), '', $request->price_old);
//        $input['price'] = (float)str_replace(array(' ', '.'), '', $request->price);
//        $input['percent_sale'] = (float)str_replace(array(' ', '.'), '', $request->percent_sale);

        $data->update($input);

        ActivityLog::add($request, 'Cập nhật thành công '.$this->module.' #'.$data->id);
        if($request->filled('submit-close')){
            return redirect()->route('admin.'.$this->module.'.index')->with('success',__('Cập nhật thành công !'));
        }
        else {
            return redirect()->back()->with('success',__('Cập nhật thành công !'));
        }
    }

    public function destroy(Request $request)
    {
        $input=explode(',',$request->id);

        Item::where('module','=',$this->module)->whereIn('id',$input)->update(['status' => 0]);
        ActivityLog::add($request, 'Xóa thành công '.$this->module.' #'.json_encode($input));
        return redirect()->back()->with('success',__('Xóa thành công !'));
    }


    public function duplicate(Request $request,$id)
    {

        $data= Item::where('module', '=', $this->module)->find($id);
        if(!$data){
            return redirect()->back()->withErrors(__('Không tìm thấy dữ liệu để nhân bản'));
        }
        $dataGroup= $data->groups()->get()->pluck(['id']);

        $dataNew = $data->replicate();
        $dataNew->title=$dataNew->title." (".((int)$data->duplicate+1) .")";
        $dataNew->slug=$dataNew->slug."-".((int)$data->duplicate+1);
        $dataNew->duplicate=0;
        $dataNew->is_slug_override=0;
        $dataNew->save();
        //set group cho dataNew
        $dataNew->groups()->sync($dataGroup);

        //update data old plus 1 count version
        $data->duplicate=(int)$data->duplicate+1;
        $data->save();

        ActivityLog::add($request, 'Nhân bản '.$this->module.' #'.$data->id ."thành #".$dataNew->id);
        return redirect()->back()->with('success',__('Nhân bản thành công'));


    }


    public function update_field(Request $request)
    {

        $input=explode(',',$request->id);
        $field=$request->field;
        $value=$request->value;
        $whitelist=['status'];

        if(!in_array($field,$whitelist)){
            return response()->json([
                'success'=>false,
                'message'=>__('Trường cập nhật không được chấp thuận'),
                'redirect'=>''
            ]);
        }


        $data=Item::where('module','=',$this->module)::whereIn('id',$input)->update([
            $field=>$value
        ]);

        ActivityLog::add($request, 'Cập nhật field thành công '.$this->module.' '.json_encode($whitelist).' #'.json_encode($input));

        return response()->json([
            'success'=>true,
            'message'=>__('Cập nhật thành công !'),
            'redirect'=>''
        ]);

    }


    // AJAX Reordering function
    public function order(Request $request)
    {


        $source = e($request->get('source'));
        $destination = $request->get('destination');

        $item = Group::where('module', '=', $this->module)->find($source);
        $item->parent_id = isset($destination)?$destination:0;
        $item->save();

        $ordering = json_decode($request->get('order'));

        $rootOrdering = json_decode($request->get('rootOrder'));

        if ($ordering) {
            foreach ($ordering as $order => $item_id) {
                if ($itemToOrder = Group::where('module', '=', $this->module)->find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        } else {
            foreach ($rootOrdering as $order => $item_id) {
                if ($itemToOrder = Group::where('module', '=', $this->module)->find($item_id)) {
                    $itemToOrder->order = $order;
                    $itemToOrder->save();
                }
            }
        }
        ActivityLog::add($request, 'Thay đổi STT thành công '.$this->module.' #'.$item->id);
        return 'ok ';
    }
}
