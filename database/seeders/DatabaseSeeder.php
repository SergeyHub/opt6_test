<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();
        $gender = $faker->randomElement(['male', 'female']);

        for ($i = 0; $i <200; $i++) {

            DB::table('stuffs')->insert([
                'name' => $faker->name($gender),
                'company_id' => $faker->numberBetween(1,50),
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,

            ]);
        }
    }
}
