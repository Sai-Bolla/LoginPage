<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personell extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personell', function (Blueprint $table) {
            $table->id('EmployeeID')->unique();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('EmployeePhoneNumber');
            $table->string('EmployeeEmailAdress');
            $table->integer('DepartmentID');
            $table->string('Username')->unique();
            $table->string('Password');
            $table->string('Job');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personell');
    }
}
