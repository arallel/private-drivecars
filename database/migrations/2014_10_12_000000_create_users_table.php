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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ktp')->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('contact')->unique();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('kecamatan');
            $table->string('alamat');
            $table->string('email')->unique();
            $table->string('role')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('status')->default(3);
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
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
        Schema::dropIfExists('users');
    }
};
