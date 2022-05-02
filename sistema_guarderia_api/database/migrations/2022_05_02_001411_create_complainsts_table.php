<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplainstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complainsts', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->text('reason');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('kid_id');
            $table->foreign('kid_id')->references('id')->on('kids');
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
        Schema::dropIfExists('complainsts');
    }
}
