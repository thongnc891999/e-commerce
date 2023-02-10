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
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable()->comment('Image for product');
            $table->integer('price');
            $table->tinyText('status');
            $table->integer('quantity');
            $table->string('type')->default('0')->comment('hot: (0: (hot) hiển thị thông tin sản nổi bật; 1: (discount) hiển thị thông tin sản phẩm giảm giá; 2: (new) hiển thị sản phẩm mới)');
            $table->integer('discount')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
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
