<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Ubicacion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('ubicacions', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('CP');
            $table->string('Calle');
            $table->string('Num_Interno')->null(); //
            $table->string('Num_Externo');
            $table->string('Fracc');
            $table->string('Ciudad');
            $table->string('Estado');
            
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
        Schema::dropIfExists('ubicacion');
    }
}
