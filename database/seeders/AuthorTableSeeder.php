<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed bảng tacgia
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('tacgia')->insert([
                'ten_tgia' => $faker->name,
                'hinh_tgia' => $faker->imageUrl(),
            ]);
        }
    }
}
