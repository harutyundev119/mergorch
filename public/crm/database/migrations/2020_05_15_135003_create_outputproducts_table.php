<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutputproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outputproducts', function (Blueprint $table) {
            $table->id();
            $table->string('towhomdidhegiveit');
            $table->string('whatdidhegive');
            $table->string('howmuch');
            $table->string('whendidhegiveit');
            $table->string('whentogetitback');
            $table->string('status');
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
        Schema::dropIfExists('outputproducts');
    }
}
