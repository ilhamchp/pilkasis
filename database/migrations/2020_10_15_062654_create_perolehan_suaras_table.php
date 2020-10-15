<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerolehanSuarasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perolehan_suara', function (Blueprint $table) {
            $table->string('nis_pemilih');
            $table->primary('nis_pemilih');
            $table->integer('no_kandidat_1')->nullable();
            $table->integer('no_kandidat_2')->nullable();
        });

        Schema::table('perolehan_suara', function (Blueprint $table) {
            $table->foreign('nis_pemilih')->references('nis')->on('pengguna')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('no_kandidat_1')->references('no_kandidat')->on('kandidat')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('no_kandidat_2')->references('no_kandidat')->on('kandidat')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perolehan_suara');
    }
}
