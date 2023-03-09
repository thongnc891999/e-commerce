<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'default',
        'address',
        'user_id',
    ];
    // 1 địa chỉ sẽ có nhiều đơn hàng
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // 1 địa chỉ thì chỉ thuộc về 1 user
    public function user()
    {
        return $this->belongsTo(Product::class);
    }

}
