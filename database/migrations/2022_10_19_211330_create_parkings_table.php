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

            $table->string('clientName')->nullable();

            $table->string('clientCarNumber')->nullable();

            $table->string('clientIdentificationNumber')->nullable();

            $table->string('licenceNumber')->nullable();

            $table->string('clientPhone')->nullable();

            $table->string('costType')->nullable();

            $table->string('cost')->nullable();

            $table->string('status')->nullable();

            $table->string('type')->nullable();

            $table->string('notes')->nullable();

            $table->string('code')->nullable();

            $table->string('starts_at')->nullable();

            $table->string('ends_at')->nullable();

            $table->string('accountantsStatus')->default(0);

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
