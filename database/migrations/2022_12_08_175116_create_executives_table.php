<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executives', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->longText('location');
            $table->string('password');
            $table->unsignedBigInteger('issue_type_id');
            $table->foreign('issue_type_id')->references('id')->on('issue_types')->cascadeOnDelete();
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
        Schema::table('executives', function (Blueprint $table) {
            $table->dropForeign([
                'issue_type_id'
            ]);
            $table->dropColumn([
                'name',
                'email',
                'phone',
                'location',
                'password',
                'issue_type_id'
            ]);
        });
    }
}
