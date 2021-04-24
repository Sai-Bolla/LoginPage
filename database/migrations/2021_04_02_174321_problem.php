<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Problem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('problem', function (Blueprint $table){
            $table->id('problem_id')->autoIncrement();
            $table->string('description');
            $table->integer('problem_type');//->references('problem_type')->on('problem_id')
                //->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('time_of_solution');
            $table->string('solution');
            $table->integer('hardware');//->references('hardware_id')->on('hardware')
                //->onDelete('cascade')->onUpdate('cascade');
            $table->integer('software');//->references('software_id')->on('software')
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
        Schema::drop('problem');
    }
}
