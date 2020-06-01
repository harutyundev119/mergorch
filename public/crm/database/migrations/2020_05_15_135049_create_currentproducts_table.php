<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrentproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currentproducts', function (Blueprint $table) {
            $table->id();
            $table->string('whoshouldhegetitfrom');
            $table->string('whatshouldheget');
            $table->string('howmuchshouldIget');
            $table->string('whentogetit');
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
        Schema::dropIfExists('currentproducts');
    }
}
