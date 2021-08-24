<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('app.addresses', function (Blueprint $table) {
            $table->id();

            $table->float('start_long_travel')
                ->comment('longitud inicial del viaje');

            $table->float('start_lat_travel')
                ->comment('latitud inicial del viaje');

            $table->float('end_long_travel')
                ->comment('longitud final del viaje');

            $table->float('end_lat_travel')
                ->comment('latitud final del viaje');
            ;
            $table->softDeletes();
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
        Schema::dropIfExists('app.addresses');
    }
}
