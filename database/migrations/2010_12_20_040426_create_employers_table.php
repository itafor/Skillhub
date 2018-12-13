<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skillReq')->nullable();
            $table->string('noOfAplicant')->nullable();
            $table->string('companyAddress')->nullable();
            $table->string('compPhone')->nullable();
            $table->string('compEmail')->nullable();
            $table->string('compName')->nullable();
            $table->string('gender')->nullable();
            $table->string('state')->nullable();
            $table->string('lga')->nullable();
            $table->string('recruitDeadline')->nullable();
            $table->string('expired')->default('Active');
            $table->string('jobdescription')->nullable();
            $table->string('jobrequirement')->nullable();
            $table->string('jobresponsibility')->nullable();
            $table->string('jobExpLevel')->nullable();
            $table->string('jobTitle')->nullable();
            $table->string('status')->default('Pending');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('employers');
    }
}
