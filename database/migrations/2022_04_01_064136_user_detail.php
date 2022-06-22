<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nisn', 10)->nullable();
            $table->string('namalengkap');
            $table->date('ttl')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nohp', 12)->nullable();
            $table->string('akunig')->nullable();
            $table->string('posisibermain')->nullable();
            $table->string('riwayatssb')->nullable();
            $table->string('prestasi')->nullable();
            $table->integer('tinggibadan')->nullable();
            $table->integer('beratbadan')->nullable();
            $table->string('namaorangtua')->nullable();
            $table->string('pekerjaanorangtua')->nullable();
            $table->string('info')->nullable();
            $table->string('file')->nullable();
            // $table->enum('status', ['sudah verifikasi', 'belum verifikasi'])->nullable();
            $table->string('status')->nullable();
            // $table->string('pesan')->nullable();
            $table->unsignedBigInteger('id_role')->nullable();
            $table->foreign('id_role')->references('id')->on('roles');
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
        Schema::dropIfExists('user_details');
    }
}
