<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garages', function (Blueprint $table) {

            $table->id();

            $table->string('nameAr')->nullable();

            $table->string('nameEn')->nullable();

            $table->string('longitude')->nullable();

            $table->string('latitude')->nullable();

            $table->integer('hourCost')->default(0);

            $table->integer('vipCost')->default(0);

            $table->integer('valetCost')->default(0);

            $table->integer('fineCost')->default(0);

            $table->integer('carCount')->default(0);

            $table->integer('freeHours')->default(0);

            $table->string('status')->nullable(); //avl,not avl

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')->references('id')->on('countries')
                ->onDelete('cascade');

            $table->unsignedBigInteger('governorate_id')->nullable();
            $table->foreign('governorate_id')->references('id')->on('countries')
                ->onDelete('cascade');

            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('countries')
                ->onDelete('cascade');

            $table->unsignedBigInteger('area_id')->nullable();
            $table->foreign('area_id')->references('id')->on('countries')
                ->onDelete('cascade');

            $table->unsignedBigInteger('street_id')->nullable();
            $table->foreign('street_id')->references('id')->on('countries')
                ->onDelete('cascade');

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
        Schema::dropIfExists('garages');
    }
};
