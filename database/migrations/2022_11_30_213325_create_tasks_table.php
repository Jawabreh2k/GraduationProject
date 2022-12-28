<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->on('students')->references('id')->cascadeOnDelete();
            $table->string('name');
            $table->unsignedBigInteger('collage_id');
            $table->foreign('collage_id')->references('id')->on('collages')->cascadeOnDelete();
            $table->unsignedBigInteger('classroom_id');
            $table->foreign('classroom_id')->references('id')->on('classrooms')->cascadeOnDelete();
            $table->unsignedBigInteger('issue_type_id');
            $table->foreign('issue_type_id')->references('id')->on('issue_types')->cascadeOnDelete();
            $table->longText('image_path');
            $table->longText('description');
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
        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign([
                'student_id',
                'collage_id',
                'classroom_id',
                'issue_type_id',
            ]);
            $table->dropColumn([
                'student_id',
                'collage_id',
                'classroom_id',
                'issue_type_id',
                'image_path',
                'description',
            ]);
        });
    }
}
