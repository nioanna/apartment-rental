<?php

namespace Database\Seeders;

use App\Models\Apartment;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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
