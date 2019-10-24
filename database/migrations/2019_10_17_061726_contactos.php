<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos', function (Blueprint $table) {
            $table->bigIncrements('id_contactos');

            $table->string('PWeb')->null();
            $table->string('Whatsapp')->null();
            $table->string('Facebook')->null(); //
            $table->string('Twitter')->null();
            $table->string('Instagram')->null();
            $table->string('Youtube')->null();

            $table->BigInteger('negocio_id')->unsigned(); 
            $table->foreign('negocio_id')->references('id')->on('negocios')->onDelete('cascade');
            
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
        Schema::dropIfExists('contactos');
    }
}
