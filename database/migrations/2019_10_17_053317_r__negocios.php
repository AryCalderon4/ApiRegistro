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
            //$table->string('Ubicacion'); 
            $table->string('Celular')->null();//
            $table->string('Email');
            //$table->string('Contactos')->null();// 
            $table->string('Horarios')->null();//
            $table->string('Fotos');//
            $table->string('Logo');//
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
