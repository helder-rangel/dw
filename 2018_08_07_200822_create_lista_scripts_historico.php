<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaScriptsHistorico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_historico', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->date('data');
            $table->longText('historico');
            $table->date('dhi');
            $table->date('dhf');
            $table->double('tgr');
            $table->double('qir');
            $table->double('qinr');
            $table->double('vcpu');
            $table->double('vmem');
            $table->double('threads');
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
        Schema::dropIfExists('lista_historico');
    }
}
