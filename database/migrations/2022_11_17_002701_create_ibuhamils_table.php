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
        Schema::create('ibuhamils', function (Blueprint $table) {
            $table->id();
            $table->String('Nama');
            $table->String('Nik');
            $table->String('Alamat');
            $table->date('Tanggallahir');
            $table->String('Tinggibadan');
            $table->String('Beratbadan');
            $table->String('Tekanandarah');
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
        Schema::dropIfExists('ibuhamils');
    }
};
