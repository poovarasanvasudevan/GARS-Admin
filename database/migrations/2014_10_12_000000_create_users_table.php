<?php

use Carbon\Carbon;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('email')->nullable();
            $table->string('abhyasiid')->unique();
            $table->string('password', 60);
            $table->integer("location");
            $table->string('mobile')->nullable();
            $table->text('image')->default('img/default.jpg');
            $table->integer('passwordattempts')->default(0);
            $table->date('lastpasswordreset')->default(Carbon::now());
            $table->text('settingpath')->default('/settings/users/');
            $table->boolean('active')->default(TRUE);
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('location')->references('id')->on('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
