<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->words(3, true);
            $newPost->content = $faker->paragraph();
            $newPost->category = 'html';
            $newPost->slug = $faker->slug(2);
            $newPost->save();
        }
    }
}
