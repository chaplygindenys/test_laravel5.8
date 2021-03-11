<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {

           \Illuminate\Support\Facades\DB::table('users')->insert([

             'name'=>$faker->name,
            'firstname'=>$faker->firstName,
            'lastname'=>$faker->lastName,
            'role'=>$faker->randomElement(['admin','user']),
            'gender'=>$faker->randomElement(['male','female']),
            'email'=>$faker->unique()->email,
            'active'=>$faker->boolean(60),
            'password'=>bcrypt('secret'),
               'created_at'=>now(),
               'updated_at'=>now(),
           ]);
        }
    }
}
