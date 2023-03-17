<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comment_reviews';

    protected $fillable = [
        'user_id',
        'product_id',
        'status',
        'content',
        'rating',
        'created_at',
        'updated_at',

    ];

    // 1 comment sẽ chỉ thuộc về 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // 1 comment sẽ chỉ thuộc về 1 sản phẩm
    public function product(){
        return $this->belongsTo(User::class);
    }
}
