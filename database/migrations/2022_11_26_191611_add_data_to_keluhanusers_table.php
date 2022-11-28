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
        Schema::table('keluhanusers', function (Blueprint $table) {
            $table->String('nama');
            $table->String('keluhan');
            $table->String('feedback');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keluhanusers', function (Blueprint $table) {
            $table->dropColumn('nama');
            $table->dropColumn('keluhan');
            $table->dropColumn('feedback');
        });
    }
};
