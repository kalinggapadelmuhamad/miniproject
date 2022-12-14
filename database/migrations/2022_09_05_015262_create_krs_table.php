<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10);
            $table->string('kode_matkul', 6);
            $table->string('nama_matkul');
            $table->integer('nilai')->default('0');
            $table->enum('status', ['lulus', 'tidak'])->default('tidak');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mhs');
            $table->foreign('kode_matkul')->references('kode_matkul')->on('matkul');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('krs');
    }
}
