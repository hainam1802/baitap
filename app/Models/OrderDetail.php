<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends BaseModel
{
    protected $table = 'order_detail';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
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
        'status',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','id')->select(['module','title','description','content','image','url','slug','price','price_old','params','promotion']);
    }
}
