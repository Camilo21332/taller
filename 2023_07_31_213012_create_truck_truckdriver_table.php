<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckTruckdriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_truckdriver', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_id')->nullable();
            $table->unsignedBigInteger('truckdriver_id')->nullable();
            $table->unsignedBigInteger('package_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();

            $table->foreign('truck_id')
            ->references('id')
            ->on('trucks')->onDelete('cascade');

            $table->foreign('truckdriver_id')
            ->references('id')
            ->on('truckdrivers')->onDelete('cascade');

            $table->foreign('package_id')
            ->references('id')
            ->on('packages')->onDelete('cascade');

            $table->foreign('province_id')
            ->references('id')
            ->on('provinces')->onDelete('cascade');




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
        Schema::dropIfExists('truck_truckdriver');
    }
}
