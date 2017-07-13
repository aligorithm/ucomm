<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lecturer_id');
            $table->string('title');
            $table->string('code');
            $table->dateTime('time');
            $table->string('department');
            $table->integer('units');
            $table->timestamps();
        });

        Schema::create('course_user', function(Blueprint $table){
            $table->integer('user_id');
            $table->integer('course_id');
            $table->primary(['user_id','course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
        Schema::dropIfExists('course_user');
    }
}
