<?php

use Illuminate\Database\Seeder;

use PlatziPHP\Entidades\User;
use PlatziPHP\Entidades\Post;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::truncate();
        Post::truncate();

       factory(User::class , 10)->create()->each(function($user){

           $post = factory(Post::class)->make();

           $user->posts()->save($post);

       });
    }
}
