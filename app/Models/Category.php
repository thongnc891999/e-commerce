<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id',
    ];

    /**
     * Get the posts for the category.
     */
    // 1 thể loại thì sẽ có nhiều sản phẩm cùng loại
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Get the posts for the category.
     */
    // public function limitProducts()
    // {
    //     return $this->hasMany(Product::class)
    //         ->take(8);
    // }
    
}
