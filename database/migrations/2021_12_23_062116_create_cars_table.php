<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->double('price');
            $table->string('make');
            $table->string('model');
            $table->date('registration_date');
            $table->string('mileage');
            $table->string('condition');
            $table->string('exterior_color');
            $table->string('interior_color');
            $table->string('transmission');
            $table->string('engine_size');
            $table->string('drivetrain');
            $table->json('features');
            $table->json('images');
            $table->text('description', 60000);
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
        Schema::dropIfExists('cars');
    }
}
