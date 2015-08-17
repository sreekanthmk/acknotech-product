<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userprofiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('area');
            $table->string('street');
            $table->string('door');
            $table->string('pincode');
            $table->string('landmark_1');
            $table->string('landmark_2');
            $table->string('phone');
            $table->string('gender');
            $table->string('currency');
            $table->string('tax_code');
            $table->string('tax_rate');
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
        Schema::drop('userprofiles');
    }
}
