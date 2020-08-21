<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Tag::truncate();

        Tag::create(['name' => 'campus']);
        Tag::create(['name' => 'educacion']);
        Tag::create(['name' => 'Coronatime']);
        Tag::create(['name' => 'diversion']);
    }
}
