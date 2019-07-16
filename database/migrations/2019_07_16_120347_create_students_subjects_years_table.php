<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsSubjectsYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_subjects_years', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('score');
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('subject_year_id')->unsigned();
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('subject_year_id')->references('id')->on('subjects_years');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_subjects_years');
    }
}
