<?php

namespace App\Models;


use App\Traits\Metable;
use Illuminate\Database\Eloquent\Builder;
use DB;

class Item extends BaseModel
{
    use Metable;

    protected $table = 'items';

    protected $guarded = [];

    protected $dates = [
        'created_at',
        'updated_at',
        'ended_at',
        'deleted_at'
    ];

    protected $casts = [
        'params' => 'object',
    ];


    protected $fillable = [
        'idkey',
        'module',
        'title',
        'slug',
        'description',
        'content',
        'image',
        'image_detail',
        'url',
        'author_id',
        'price_old',
        'category_id',
        'group_id',
        'locale_id',
        'price',
        'status',
        'quantity',
        'quantity_people',
        'ended_at',

    ];




    public function item_attributes()
    {
        return $this->hasMany(Item::class,'parent_id','id');
    }

    public function item()
    {
        return $this->belongsTo(Item::class,'parent_id','id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class,'group_id','id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function locale()
    {
        return $this->belongsTo(Locale::class,'locale_id','id');
    }

    public function author(){
        return $this->belongsTo(User::class,'author_id','id');
    }


     public static function boot()
     {
         parent::boot();

    //     //set default auto add  scope to query
    //     static::addGlobalScope('global_scope', function (Builder $model){
    //         $model->where('items.shop_id', session('shop_id'));
    //         $model->where('locale', session('locale'));
    //     });
    //     static::saving(function ($model) {
    //         $model->shop_id = session('shop_id');
    //         $model->locale = app()->getLocale();
    //     });
    //     //end set default auto add  scope to query

    //     static::deleting(function($model) {
    //         $model->groups()->sync([]);
    //         $model->subitem()->delete();
    //         return true;
    //     });
     }


}
