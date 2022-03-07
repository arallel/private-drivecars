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
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cars_id')->nullable();
            $table->integer('platmobil')->nullable();
            $table->integer('nostnk')->nullable();
            $table->string('warna')->nullable();
            $table->integer('nobpkb')->nullable();
            $table->string('merkkendaraan')->nullable();
            $table->integer('bahanbakar')->nullable();
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
};
