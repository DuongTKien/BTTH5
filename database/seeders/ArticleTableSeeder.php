<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed bảng baiviet
        $faker = Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('baiviet')->insert([
                'tieude' => $faker->sentence,
                'ten_bhat' => $faker->word,
                'ma_tloai' => $faker->numberBetween(1, 10),
                'tomtat' => $faker->paragraph,
                'noidung' => $faker->paragraphs(3, true),
                'ma_tgia' => $faker->numberBetween(1, 10),
                'ngayviet' => $faker->dateTimeThisYear,
                'hinhanh' => $faker->imageUrl(),
            ]);
        }
    }
}
