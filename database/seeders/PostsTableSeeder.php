<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \DB::table('posts')->truncate();
        $posts = [];
        $faker = Factory::create();

        for ($i = 1; $i <= 6; $i++) {
            $image = "Post Image" . rand(1, 5) . ".jpg";
            $posts[] = [
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'image' => $image,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        \DB::table('posts')->insert($posts);
    }
}
