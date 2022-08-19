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
        Schema::create('skripsi_user', function (Blueprint $table) {
            // $table->integer('skripsi_id')->unsigned();
            $table->foreignId('skripsi_id')->unsigned()->constrained()->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            // $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->double('nilai')->default(0)->nullable();
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
        Schema::dropIfExists('skripsi_user');
    }
};
