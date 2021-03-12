<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * @param Faker $kolbasa
     */
    public function run(Faker $kolbasa)
    {
        for ($i = 0; $i < 100; $i++) {

          DB::table('users')->insert([

             'name'=>$kolbasa->name,
            'firstname'=>$kolbasa->firstName,
            'lastname'=>$kolbasa->lastName,
            'salary'=>$kolbasa->randomFloat(2,100,5000),
            'role'=>$kolbasa->randomElement(['admin','user']),
            'gender'=>$kolbasa->randomElement(['male','female']),
            'email'=>$kolbasa->unique()->email,
            'active'=>$kolbasa->boolean(60),
            'password'=>bcrypt('secret'),
               'created_at'=>now(),
               'updated_at'=>now(),
           ]);
        }
    }
}
