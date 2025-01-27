<?php

use Illuminate\Database\Seeder;
use App\Person;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonSeeder::class);
        $this->call(PetSeeder::class);
    }
}
