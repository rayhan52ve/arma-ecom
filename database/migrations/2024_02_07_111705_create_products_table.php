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
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->foreignId('product_category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_sub_category_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('price')->nullable();
            $table->string('discount_price')->nullable();
            $table->string('offer_id')->nullable();
            $table->timestamps();
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
