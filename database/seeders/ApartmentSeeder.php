<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apartment::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Apartment::create([
                'street' => $faker->streetAddress,
                'city' => $faker->city,
                'square_footage' => $faker->numberBetween(10, 1000),
                'rooms_num' => $faker->randomDigit,
                'parking' => $faker->randomDigit,
                'user_id' => \App\Models\User::all()->random()->id,
            ]);
        }
    }
}
