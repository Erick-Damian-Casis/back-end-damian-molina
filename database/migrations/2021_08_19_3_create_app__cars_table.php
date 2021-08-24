<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.cars', function (Blueprint $table) {
            $table->id();

            $table->foreignId('driver_id')->constrained('app.drivers');

            $table->string('photo')
                ->comment('fotografia para poder indentificar en coche');

            $table->boolean('available')
                ->default(true)
                ->comment('disponibilidad del coche');

            $table->text('description')
                ->nullable()
                ->comment('una descripcion breve del coche');
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
        Schema::dropIfExists('app.cars');
    }
}
