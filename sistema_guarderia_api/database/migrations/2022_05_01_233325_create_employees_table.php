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
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('lastname');
            // $table->string('mothers_name');
            $table->string('CURP')->unique();
            $table->string('NSS')->unique();
            $table->string('mail')->unique();
            // $table->string('password');
            $table->string('imagen')->nullable();
            // $table->string('gender');
            $table->unsignedBigInteger('rol_id');
            $table->rememberToken();

            $table->foreign('rol_id')->references('id')->on('roles');
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
        Schema::dropIfExists('employees');
    }
}
