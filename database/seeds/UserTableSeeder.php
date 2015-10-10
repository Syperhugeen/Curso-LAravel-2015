<?php

use Illuminate\Database\Seeder;
use PlatziPHP\Entidades\Post;
use PlatziPHP\Entidades\User;

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
