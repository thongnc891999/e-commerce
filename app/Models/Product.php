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
    

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }

    // public function product_detail(){
    //     return $this->hasOne(ProductDetail::class);
    // }
    
    /**
     * Get the post_detail for the post.
     */
    public function price()
    {
        return $this->hasOne(Price::class);
    }
    
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function productPromotion()
    {
        return $this->belongsTo(ProductPromotion::class);
    }

    public function  promotions()
    {
        return $this->belongsToMany(Promotion::class);
    }

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
