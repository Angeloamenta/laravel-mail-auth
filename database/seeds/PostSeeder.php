<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            $newPost = new Post();
            $newPost->title = 'prova';
            $newPost->image = 'qwerty';
            $newPost->save();
        }
    }
}
