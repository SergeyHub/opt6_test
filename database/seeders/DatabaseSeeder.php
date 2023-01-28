<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            //'password' => ('\'password\' => \'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi\''),
            'password' => '$2y$10$SwwObP3IjeRyr5COM/zFiug4LKfWp2cRhTNZdYSQl8EZKLIpdC.Zu',
            //'password' => '12345678/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10),
        ]);
    }
}
