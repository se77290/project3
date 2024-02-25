<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('country_code');
            $table->string('phone_number');
            $table->binary('personal_photo');
            $table->boolean('activity_status');
            $table->string('email')->unique();
            $table->string('user_name')->unique();
            $table->integer('user_number');
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
