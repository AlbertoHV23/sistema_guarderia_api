<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medic_cards', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->decimal('weight')->nullable();
            $table->decimal('height')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('allergies')->nullable();
            $table->string('medicines')->nullable();
            $table->string('vaccines')->nullable();
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
        Schema::dropIfExists('medic_cards');
    }
}
