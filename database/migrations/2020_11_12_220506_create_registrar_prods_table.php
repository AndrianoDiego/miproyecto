<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrarProdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_prods', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('nombreprod', 100);
            $table->string('marca', 100);
            $table->string('proveedor', 100);
            $table->string('precio',100);
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
        Schema::dropIfExists('registrar_prods');
    }
}
