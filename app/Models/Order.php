<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'address',
        'name',
        'phone',
        'user_id',
        'address_id',
        'created_at',

    ];

    // 1 đơn hàng sẽ có nhiều chi tiết đơn hàng
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }

    // 1 đơn hàng sẽ thuộc về 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // 1 đơn hàng sẽ có 1 địa chỉ
    public function address(){
        return $this->belongsTo(Address::class);
    }

    // 1 đơn hàng chỉ có 1 trạng thái
    public function orderStatus(){
        return $this->belongsTo(OrderStatus::class);
    }
}
