<?php

use App\employee;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SalesRepEmployeeNum');
            $table->string('Name',255);
            $table->string('LastName',255);
            $table->string('FirsName',255);
            $table->string('Phone',255);
            $table->string('Address1',255);
            $table->string('Address2',255);
            $table->string('City',255);
            $table->string('State',255);
            $table->integer('PostalCode');
            $table->float('CreditLimit',19,0);
            $table->timestamps();

            $table->foreign('SalesRepEmployeeNum')->references('id')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
