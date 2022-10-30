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
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();

            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('costType')->nullable();
            $table->string('cost')->nullable();
            $table->string('status')->nullable();
            $table->string('notes')->nullable();
            $table->string('userName')->nullable();
            $table->string('carNo')->nullable();
            $table->string('idNo')->nullable();
            $table->string('licenceNo')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('type')->nullable();
            $table->string('code')->nullable();
            
     
            $table->unsignedBigInteger('garage_id')->nullable();
            $table->foreign('garage_id')->references('id')->on('garages')
            ->onDelete('cascade');
            
            $table->unsignedBigInteger('saies_id')->nullable();
            $table->foreign('saies_id')->references('id')->on('users')
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
        Schema::dropIfExists('parkings');
    }
};
