<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProblemType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('problem_type', function (Blueprint $table){
            $table->id('problem_id')->autoIncrement();
            $table->string('name');
            $table->string('description');
            $table->integer('parent_type');//->references('problem_id')->on('problem_type')
                //->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('problem_type');
    }
}
