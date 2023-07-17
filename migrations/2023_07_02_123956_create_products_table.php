<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('sku', 50)->nullable();
            $table->string('name', 200);
            $table->string('description_summary', 200)->nullable();
            $table->text('description_detail')->nullable();
            $table->unsignedBigInteger('category_id')->default(1);
            $table->integer('price')->default(0);
            $table->integer('discount_price')->default(0);
            $table->datetime('discount_end')->nullable();
            $table->string('image_main', 200);
            $table->integer('quantity')->default(0);
            $table->integer('rating_count')->default(0);
            $table->integer('average_rating')->default(0);
            $table->unsignedBigInteger('brand_id');
            $table->string('slug')->unique();
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
}

