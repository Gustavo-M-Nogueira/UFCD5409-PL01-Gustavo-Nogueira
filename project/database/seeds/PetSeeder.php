<?php

use Illuminate\Database\Seeder;
use App\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pet::class,400)->create();
    }
}
