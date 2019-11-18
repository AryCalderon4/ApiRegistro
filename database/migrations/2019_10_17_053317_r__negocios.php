<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RNegocios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negocios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('Nombre');
            $table->string('Descripcion');
            $table->string('Celular')->nullable();
            $table->string('Email');
            $table->string('Horarios')->nullable();
            $table->string('Fotos')->nullable();;
            $table->string('Logo')->nullable();;
            $table->string('Productos');
            $table->string('Categoria');
           
            

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
        Schema::dropIfExists('negocios');
    }
}
