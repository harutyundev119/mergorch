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
            $table->string('name');
            $table->string('code');
            $table->string('price');
            $table->string('newprice'); 
            $table->string('quantity');
            $table->string('discrepshn');
            $table->string('catigoric');
            $table->string('subcatigoris');
            $table->string('group');
            $table->string('brend');
            $table->string('lang');
            $table->string('photo');
            $table->string('offeroftheday');
            $table->string('updates');
            $table->string('specialoffers');
            $table->string('show');
            $table->string('otherinfo');
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
