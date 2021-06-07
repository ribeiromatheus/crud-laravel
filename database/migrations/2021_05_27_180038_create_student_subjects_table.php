<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subjects', function (Blueprint $table) {
            $table->id();
            $table->string('first_grade');
            $table->string('second_grade');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            
            $table->foreign('student_id')
                ->references('id')
                ->on('students');
            
            $table->foreign('subject_id')
                ->references('id')
                ->on('subjects');
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
        Schema::dropIfExists('student_subjects');
    }
}