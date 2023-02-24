<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description');
            $table->string('thumbnail')->nullable()->comment('Image for product');
            $table->decimal('price', 8, 2);
            $table->tinyInteger('status')->default('0')->comment('0: (Most bought products) hiển thị sản phẩm được mua nhiều nhất, 1: (out of stock) hiển thị sản phẩm này đã hết hàng');
            $table->integer('quantity');
            $table->tinyInteger('type')->default('0')->comment('0: (discount) hiển thị thông tin sản phẩm giảm giá; 1: (hot) hiển thị thông tin sản nổi bật; 2: (new) hiển thị sản phẩm mới)');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
