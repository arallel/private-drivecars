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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('spedometersudah');
            $table->string('keterangan');
            $table->string('totalkm');
            $table->string('liter');
            $table->foreignId('pengguna')->constrained('users')->nullable();
            $table->foreignId('kendaraan')->constrained('cars')->nullable();
            $table->string('spedometersblm')->nullable();
            $table->string('tanggalpenggunaan')->nullable();
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
        Schema::dropIfExists('laporans');
    }
};
