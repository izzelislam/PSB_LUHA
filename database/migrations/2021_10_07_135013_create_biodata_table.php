<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id');
            $table->foreignId('unit_id');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('no_wali')->nullable();
            $table->string('nama_panggilan');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('anak_ke');
            $table->string('jumlah_saudara');
            $table->string('status_anak');
            $table->text('alamat_lengkap');
            $table->string('berat_badan');
            $table->string('tinggi_badan');
            $table->string('gol_darah')->nullable();
            $table->text('riwayat_sakit')->nullable();
            $table->text('asal_sekolah');
            $table->text('alamat_sekolah');
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
        Schema::dropIfExists('biodata');
    }
}
