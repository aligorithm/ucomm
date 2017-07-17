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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('matric_number');
            $table->string('slug');
            $table->text('bio');
            $table->string('profile_pic');
            $table->string('cover_pic');
            $table->integer('university_id');
            $table->integer('faculty_id');
            $table->string('level');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('university_id')->references('id')->on('universities')->onDelete('cascade');
//            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');
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
