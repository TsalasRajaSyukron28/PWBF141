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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            $table->String('Nama');
            $table->String('Nik');
            $table->String('Jeniskelamin');
            $table->date('Tanggallahir');
            $table->String('Tinggibadan');
            $table->String('Beratbadan');
            $table->String('Alamat');
            $table->String('Namaibu');
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
        Schema::dropIfExists('balitas');
    }
};
