<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BuatTabelPegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function(Blueprint $table) {
            $table->id();      
            $table->foreignId('id_jabatan')->references('id')->on('jabatan')->cascadeOnDelete(); 
            $table->string('nama_pegawai');           
            $table->enum('jenis_kelamin',['L','P']);           
            $table->date('tgl_lahir');          
            $table->string('foto');           
            $table->string('keterangan');           
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
        Schema::dropIfExists('pegawai');
    }
}
