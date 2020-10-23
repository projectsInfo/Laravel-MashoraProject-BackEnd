<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->mediumText('user_image')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('user_gender')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->bigInteger('user_card_id')->nullable();
            $table->bigInteger('user_mobile')->nullable();
            $table->bigInteger('user_phone')->nullable();
            $table->string('country')->nullable();
            $table->string('governorate')->nullable();
            $table->string('work_sector')->nullable();
            $table->integer('graduate_year')->nullable();
            $table->integer('experience_years')->nullable();
            $table->string('information')->nullable();
            $table->mediumText('user_card_image')->nullable();
            $table->integer('user_type')->nullable();
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
