<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OfficeCode');
            $table->string('ReportsTo');
            $table->string('LastName',255);
            $table->string('FirstName',255);
            $table->string('Extension',255);
            $table->string('Email',255);
            $table->string('JobTitle',255);
            $table->timestamps();

            //foreign Table..
            $table->foreign('OfficeCode')->references('Code')->on('offices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
