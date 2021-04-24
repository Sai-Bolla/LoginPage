<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class Hardware extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('hardware', function (Blueprint $table){
            $table->id('hardware_id')->autoIncrement();
            $table->string('hardware_type');//->references('hardware_type')->on('hardware_type')
             //   ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamp('date_of_purchase')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('notes');
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
        Schema::drop('hardware');
    }
}
