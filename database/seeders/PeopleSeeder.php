<?php

// database/seeders/PeopleSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('people')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'surname' => $faker->name,
                'phone_number' => $faker->unique()->name,
                'street' => $faker->name,
                'Country' => $faker->Country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
 