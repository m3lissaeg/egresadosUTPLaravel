<?php

use App\News;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //invoke seeder faker package to seed the database with dummy data
        $faker = Faker::create();

            $new = News::create([
                'user_id' => 2,
                'title' => $faker->sentence,
                'abst' => $faker->sentence,
                'body' => $faker->paragraph,
                'mediapath' => $faker->url,
            ]);
            
        }

 }

