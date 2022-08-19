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
        Schema::create('skripsis', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->string('nama_mahasiswa');
            $table->string('npm');
            $table->double('total_nilai')->default(0)->nullable();
            $table->string('nilai_huruf',1)->default(0)->nullable();
            $table->string('status')->default(0)->nullable();
            $table->string('tanggal');
            $table->time('jam');
            $table->timestamps();

            // $table->unsignedBigInteger('pembimbing1');
            // $table->unsignedBigInteger('pembimbing2');
            // $table->unsignedBigInteger('penguji1');
            // $table->unsignedBigInteger('penguji2');
            // $table->unsignedBigInteger('penguji3');

            // $table->foreign('pembimbing1')->references('id')->on('users');
            // $table->foreign('pembimbing2')->references('id')->on('users');
            // $table->foreign('penguji1')->references('id')->on('users');
            // $table->foreign('penguji2')->references('id')->on('users');
            // $table->foreign('penguji3')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skripsis');
    }
};
