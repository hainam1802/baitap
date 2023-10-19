<?php

namespace App\Models;


use App\Traits\Metable;
use Illuminate\Database\Eloquent\Builder;

class Category extends BaseModel
{
    use Metable;

    protected $table = 'category';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'params' => 'object',
    ];


    protected $fillable = [
        'id',
        'title',
        'slug',
        'content',
        'description',
        'image',
        'url',
        'author_id',
        'status',
        'started_at',
        'ended_at',
        'created_at',
    ];





    public function author(){
        return $this->belongsTo(User::class,'id','author_id');
    }


    public static function boot()
    {
        parent::boot();
//        //set default auto add  scope to query
//        static::addGlobalScope('global_scope', function (Builder $model) {
//            $model->where('groups.shop_id', session('shop_id'));
//            // $model->where('locale', session('locale'));
//        });
//        static::saving(function ($model) {
//            $model->shop_id = session('shop_id');
//            $model->locale = app()->getLocale();
//        });
//        //end set default auto add  scope to query
//
//        static::deleting(function($group) {
//            $group->items()->sync([]);
//
//        });
    }


}
