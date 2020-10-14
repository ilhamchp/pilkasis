<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->integer('no_kandidat');
            $table->primary('no_kandidat');
            $table->string('nis');
            $table->boolean('jk_kandidat');
            $table->string('visi');
            $table->string('misi');
            $table->string('foto');
        });

        Schema::table('kandidat', function (Blueprint $table) {
            $table->foreign('nis')->references('nis')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kandidat');
    }
}
