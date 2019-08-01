<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_categoria');
            $table->float('preco');
            $table->string('produto');
            $table->string('descricao');
            $table->integer('quantidadeMaxima');
            $table->float('tamanho');
            $table->integer('quantidadeMinima');
            $table->string('coresDisponiveis');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
