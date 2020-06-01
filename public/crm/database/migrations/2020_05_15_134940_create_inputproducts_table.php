<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputproducts', function (Blueprint $table) {
            $table->id();
           
            $table->string('fromwhomdidhegetit');
            $table->string('whatdidheget');
            $table->string('howmuch');
            $table->string('whendidhereceiveit');
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
        Schema::dropIfExists('inputproducts');
    }
}
