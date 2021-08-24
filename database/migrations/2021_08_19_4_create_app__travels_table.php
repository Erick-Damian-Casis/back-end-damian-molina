<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.travels', function (Blueprint $table) {

            $table->id();

            $table->foreignId('car_id')->constrained('app.cars');
            $table->foreignId('user_id')->constrained('authentication.users');
            $table->foreignId('address_id')->constrained('app.addresses');

            $table->date('date')
                ->comment('fecha que me ayuda a calcular tiempo de viaje');

            $table->float('cost')
                ->comment('costo o valor del viaje');
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
        Schema::connection(env('DB_CONNECTION_APP'))-> dropIfExists('app.travels');
    }
}
