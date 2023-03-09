<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderStatus extends Model
{
    use HasFactory;

    protected $table = 'order_status';

    protected $fillable = [
        'name',
        'order_id',

    ];

     // 1 trạng thái đơn hàng sẽ có nhiều đơn hàng
     public function orders(){
        return $this->hasMany(Order::class);
    }
}
