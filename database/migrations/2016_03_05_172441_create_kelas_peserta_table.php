<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasPesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_pesertas', function (Blueprint $table) {
            $table->integer('kelas_id')->unsigned()->nullable();
            $table->foreign( 'kelas_id' )->references('id')-> on( 'kelas' )->onDelete('cascade');

            $table->integer('pesertas_id')->unsigned()->nullable();
            $table->foreign('pesertas_id')->references('id')->on('pesertas')->onDelete('cascade');
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
        Schema::drop('kelas_pesertas');
    }
}
