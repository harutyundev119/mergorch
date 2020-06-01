<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('phone');
            $table->string('region');
            $table->string('address');
            $table->string('country');
            $table->string('roly');
            $table->string('bulance');
            $table->string('typeoforganizationname');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('passport');
            $table->string('hhv');
            $table->string('bonusone');
            $table->string('bonusonepracent');
            $table->string('bonustwo');
            $table->string('bonustwopracent');
            $table->string('bonustrey');
            $table->string('bonustreypracent');
            $table->string('bonusfour');
            $table->string('bonusfourpracent');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
