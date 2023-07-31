<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckdrivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truckdrives', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',56);
            $table->string('poblacion');
            $table->string('dni');
            $table->string('cel');
            $table->string('dirección');
            $table->string('salario');

            
        
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
        Schema::dropIfExists('truckdrives');
    }
}
