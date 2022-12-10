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
        Schema::create('balita_vitamin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('balita_id');
            $table->foreign('balita_id')->references('id')->on('balitas')->onDelete('cascade');
            $table->unsignedBigInteger('vitamin_id');
            $table->foreign('vitamin_id')->references('id')->on('vitamin')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('balita_vitamin');
    }
};
