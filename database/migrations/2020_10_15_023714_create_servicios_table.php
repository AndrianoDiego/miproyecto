<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {

                $table->bigIncrements('id');
                $table->string('nombre1', 100);
                $table->string('paterno', 100);
                $table->string('materno', 100);
                $table->integer('edad');
                $table->string('dia', 100);
                $table->string('evento', 100);
    
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
        Schema::dropIfExists('servicios');
    }
}
