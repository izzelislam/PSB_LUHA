<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibu', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agama_id');
            $table->foreignId('users_id');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->text('alamat_rumah');
            $table->string('no_telepon')->nullable();
            $table->string('pendapatan');
            $table->text('alamat_kantor')->nullable();
            $table->string('no_telepon_kantor')->nullable();
            $table->enum('status', ['diisi', 'belum']);
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
        Schema::dropIfExists('ibu');
    }
}
