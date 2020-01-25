<?php

use Illuminate\Database\Seeder;

class TweetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweet')->insert([
            'content' => Str::random(250),
            'author' => Str::random(25)
        ]);
    }
}
