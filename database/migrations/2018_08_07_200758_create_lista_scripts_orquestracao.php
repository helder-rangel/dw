<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaScriptsOrquestracao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_scripts_orquestracao', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->longText('nome');
            $table->longText('caminho_script');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_scripts_orquestracao');
    }
}
