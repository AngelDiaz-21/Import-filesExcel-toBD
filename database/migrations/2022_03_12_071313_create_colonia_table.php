<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColoniaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colonia', function (Blueprint $table) {

            $table->id('id_colonia');

            $table->string('clave_Colonia', 5);

            $table->string('clave_CodigoPostal', 10);

            $table->string('nombre_Asentamiento');

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
        Schema::dropIfExists('colonia');
    }
}
