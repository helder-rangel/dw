<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagem', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('caminho');
            $table->integer('tamnaho');
            $table->integer('largura');
            $table->integer('altura');
            $table->longText('nome');
            $table->longText('status');
            $table->integer('orquestracao_id');
            $table->foreign('orquestracao_id')->references('id')->on('orquestracao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imagem');
    }
}
