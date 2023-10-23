<?php

namespace App\Models;


use Eloquent;
use Illuminate\Database\Eloquent\Builder;

class Order extends BaseModel
{

    protected $table = 'order';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'params' => 'object',
    ];

    protected $fillable = [
        'module',
        'title',
        'description',
        'content',
        'author_id',
        'ref_id',
        'price',
        'items_id',
        'order',
        'status_confirm',
        'status',
    ];

    //one to one
    public function author()
    {
        return $this->belongsTo(User::class,'author_id','id')->select(['id','username','email']);
    }

    public function user_ref()
    {
        return $this->belongsTo(User::class,'ref_id','id')->select(['id','username','email']);
    }

    public function item_ref()
    {
        return $this->belongsTo(Item::class,'ref_id','id')->select(['id','title']);
    }
    public function order_detail(){
        return $this->hasMany(OrderDetail::class,'order_id');
    }


    public static function boot()
    {
        parent::boot();

    }





}
