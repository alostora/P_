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
        Schema::create('garage_keepers', function (Blueprint $table) {
            $table->id();
            
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
        Schema::dropIfExists('garage_keepers');
    }
};
