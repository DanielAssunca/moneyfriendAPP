<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('celular');
            $table->string('telefone');
            $table->string('email');
            $table->string('logradouroEndereco');
            $table->string('bairroEndereco');
            $table->integer('numeroEndereco');
            $table->string('cepEndereco');
            $table->string('cidadeEndereco');
            $table->string('observacao');
            $table->string('situacao');
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
        Schema::dropIfExists('clientes');
    }
}
