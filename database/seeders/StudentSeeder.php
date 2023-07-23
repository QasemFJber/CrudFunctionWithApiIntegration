<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run()
    {
        // $faker = Faker::create();
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'birthdate' => $faker->date,
                'email' => $faker->unique()->email,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

