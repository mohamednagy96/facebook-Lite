<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $faker = Faker\Factory::create();
    User::create([
        'name'=>'mohammmmmed nagy test',
        'email'=>'mohamed@gmail.com',
        'password'=>Hash::make('12345678'),
        'is_admin'=>0
    ]); User::create([
            'name'=>'mohamed nagy',
            'email'=>'mohamednagy9660@gmail.com',
            'password'=>Hash::make('12345678'),
            'is_admin'=>1
        ]);
    for($i=0;$i<20;$i++){
        User::create([
            'name'=>$faker->name,
            'email'=>$faker->email,
            'password'=>Hash::make('12345678'),
            'is_admin'=>rand(0,1)
        ]);
       }
    }
}
