<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
           $table->string('bonusone');
            $table->string('bonusonepracent');
            $table->string('bonustwo');
            $table->string('bonustwopracent');
            $table->string('bonustrey');
            $table->string('bonustreypracent');
            $table->string('bonusfour');
            $table->string('bonusfourpracent');
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
        Schema::dropIfExists('bonuses');
    }
}
