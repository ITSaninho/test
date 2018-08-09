<?php

use Illuminate\Database\Seeder;
use App\Article_Tag;

class Article_TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article_Tag::class, 500)->create();
    }
}