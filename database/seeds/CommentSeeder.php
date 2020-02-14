<?php

use Illuminate\Database\Seeder;
use App\Comment;
class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        for($i=0;$i<20;$i++){
            Comment::create([
                'body'=>$faker->text,
                'posts_id'=>App\Post::get()->random()->id,
                'users_id'=>App\User::get()->random()->id
            ]);
        }
    }
}
