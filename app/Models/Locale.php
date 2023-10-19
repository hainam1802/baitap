<?php

namespace App\Models;


use App\Traits\Metable;
use Illuminate\Database\Eloquent\Builder;

class Locale extends BaseModel
{
    use Metable;

    protected $table = 'locale';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
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
    }


}
