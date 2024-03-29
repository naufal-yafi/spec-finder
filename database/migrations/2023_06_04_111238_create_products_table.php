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
            $table->string('image');
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->integer('price');
            $table->text('description');
            $table->text('spesification');
            $table->string('tags');
            $table->string('link');
            $table->integer('promo')->default(0);
            $table->timestamp('promo_duration')->nullable()->default(null);
            $table->foreignId('category_id');
            $table->foreignId('brand_id');
            $table->foreignId('user_id');
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
