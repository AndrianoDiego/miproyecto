<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrarClisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_clis', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('nombrecli', 100);
            $table->string('apellidos', 100);
            $table->string('direccion', 100);
            $table->string('producto',100);
            $table->string('cantidad', 100);
            
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
        Schema::dropIfExists('registrar_clis');
    }
}
