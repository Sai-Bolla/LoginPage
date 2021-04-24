<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProblemForm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProblemForm', function (Blueprint $table) {
            $table->id('FormID')->unique();
            $table->integer('ProblemRef');
            $table->string('Notes')->nullable();
            $table->timestamp('time')->useCurrent();
            //$table->string('LastName');
            $table->string('ReporterID');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ProblemForm');
    }
}
