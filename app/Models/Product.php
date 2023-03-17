<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    const STATUS_PRODUCT_DISCOUNT = 0; //0: Hằng số sản phẩm giảm giá 
    const STATUS_PRODUCT_HOT = 1; //1: Hằng số sản phẩm nổi bật
    const STATUS_PRODUCT_NEW = 2; //0: Hằng số sản phẩm mới 


    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'description',
        'thumbnail', // dat la so it ay : image hoac thumbnail ---> sua lai file migrate, reset lai DB
        'price',
        'status',
        'quantity',
        'type',
        'category_id',
    ];
    
    // 1 sản phẩm sẽ chỉ thuộc về 1 thể loại
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    // 1 sản phẩm sẽ có nhiều hình ảnh
    public function productImages(){
        return $this->hasMany(ProductImage::class);
    }


    // 1 sản phẩm sẽ có nhiều chi tiết đơn hàng
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    // 1 sản phẩm sẽ có nhiều khuyến mãi
    public function productDiscounts()
    {
        return $this->hasMany(ProductDiscount::class);
    }

    // 1 sản phẩm sẽ có nhiều comment
    public function  comments()
    {
        return $this->hasMany(Comment::class);
    }

    // lấy ra sản phẩm nổi bật
    public function scopeProductHot($query)
    {
        return $query->where('type', self::STATUS_PRODUCT_HOT);
    }

     // lấy ra sản phẩm giảm giá
     public function scopeProductDiscount($query)
     {
         return $query->where('type', self::STATUS_PRODUCT_DISCOUNT);
     }

    // lấy ra sản phẩm mới
    public function scopeProductNew($query)
    {
        return $query->where('type', self::STATUS_PRODUCT_NEW); 
    }
}
