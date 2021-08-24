<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Driver;
use App\Models\Travel;
use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Seeder;
use PharIo\Manifest\Author;

class AppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory()
            ->count(10)
            ->has(Driver::factory()
                ->count(1)
                ->has(Car::factory()
                    ->count(1)
                )
            )->create();
       Address::factory(10)->create();

    }

}
