<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('nombre3', 100);
            $table->string('apellidos', 100);
            $table->string('telefono', 100);
            $table->string('dirección',100);
            $table->string('cantidad', 100);
            $table->string('color', 100);
            $table->date('fecha', 100);
            
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
        Schema::dropIfExists('productos');
    }
}
