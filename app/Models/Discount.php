<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    protected $table = 'discounts';

    protected $fillable = [
        'name',
        'star_date',
        'end_date',
        'type',
        'discount',
        'description',

    ];


    public function discountProducts(){
        return $this->hasMany(ProductDiscount::class);
    }
}
