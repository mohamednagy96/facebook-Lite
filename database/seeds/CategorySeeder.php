<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=FAker\Factory::create();
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));
        for($i=0;$i<6;$i++){
        Category::create([
            'name'=>$faker->department,
            'description'=>$faker->text
        ]);
        }
    }
}
