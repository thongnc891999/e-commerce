<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';

    protected $fillable = [
        'name',
    ];

   
    // 1 thể loại thì sẽ có nhiều sản phẩm cùng loại
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
