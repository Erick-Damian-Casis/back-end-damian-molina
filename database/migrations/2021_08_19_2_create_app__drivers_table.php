<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection(env('DB_CONNECTION_APP'))->create('app.drivers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('authentication.users');


            $table->string('photo')
                ->comment('foto del conductor para poder indentificarlo');

            $table->string('license')
                ->comment('licencia del conductor');
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
        Schema::dropIfExists('app.drivers');
    }
}
