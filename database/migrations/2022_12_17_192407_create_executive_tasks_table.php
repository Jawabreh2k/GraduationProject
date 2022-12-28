<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutiveTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executive_tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('executive_id');
            $table->foreign('executive_id')->references('id')->on('executives')->cascadeOnDelete();
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks')->cascadeOnDelete();
            $table->string('amount');
            $table->string('day_amount');
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
        Schema::table('executive_tasks', function (Blueprint $table) {
            $table->dropForeign([
                'executive_id',
                'task_id',
            ]);
            $table->dropColumn([
                'executive_id',
                'task_id',
                'amount',
                'day_amount',
            ]);
        });
    }
}
