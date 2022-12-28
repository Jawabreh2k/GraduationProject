<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student_number');
            $table->string('password');
            $table->unsignedBigInteger('collage_id')->nullable();
            $table->foreign('collage_id')->references('id')->on('collages')->nullOnDelete();
            $table->unsignedBigInteger('specialty_id')->nullable();
            $table->foreign('specialty_id')->references('id')->on('specialties')->nullOnDelete();
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign([
                'collage_id',
                'specialty_id',
            ]);
            $table->dropColumn([
                'name',
                'student_number',
                'password',
                'collage_id',
                'specialty_id',
            ]);
        });
    }
}
