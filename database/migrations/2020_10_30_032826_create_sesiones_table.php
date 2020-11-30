<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSesionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesiones', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nombre2', 100);
            $table->string('paterno', 100);
            $table->string('materno', 100);
            $table->string('email',100);
            $table->integer('edad');
            $table->date('fecha');
            $table->string('albunes', 100);
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
        Schema::dropIfExists('sesiones');
    }
}
