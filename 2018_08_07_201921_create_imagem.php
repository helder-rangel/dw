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
            $table->string('caminho');
            $table->string('tamnaho');
            $table->string('largura');
            $table->string('altura');
            $table->string('nome');
            $table->string('status');
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
