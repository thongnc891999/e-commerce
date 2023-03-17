<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_details';

    protected $fillable = [
        'order_id',
        'product_id',
        'price',
        'quantity',
        'created_at',

    ];

    // 1 chi tiết đơn hàng sữ có nhiều sản phẩm 
    public function products(){
        return $this->hasMany(Product::class);
    }

    // 1 chi tiết đơn hàng chỉ thuộc về 1 đơn hàng
    public function order(){
        return $this->belongsTo(Order::class);
    }

}
