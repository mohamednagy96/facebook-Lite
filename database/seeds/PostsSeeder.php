<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Placeholder($faker));
        for($i=0;$i<20;$i++){
            Post::create([
                'title'=>$faker->company,
                'body'=>$faker->realText($maxNbChars = 200, $indexSize = 2),
                'photo'=>$faker->imageUrl($width = 640, $height = 480),
                'cate_id'=>rand(1,6),
                'user_id'=>rand(1,20)
            ]);
        }
    }
}
