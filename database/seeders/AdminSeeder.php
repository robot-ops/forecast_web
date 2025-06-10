<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Admin::factory(10)->create();
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 10; $i++) {
            # code...
            Admin::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'occupation' => $faker->jobTitle,
                'phone' => $faker->phoneNumber,
                'gender' => $faker->randomElement(['male', 'female']),
                'profile_picture' => $faker->imageUrl(640, 480, 'people'),
                'status' => $faker->randomElement(['active', 'inactive']),
            ]);
        }
    }
}
