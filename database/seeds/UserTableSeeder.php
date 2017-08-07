<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 500; $i ++)
        {
            $firstName = $faker->firstName;
            $lastName = $faker->lastName;
            $id = \DB::table('users')->insertGetId(array (
                'first_name'     => $firstName,
                'last_name'      => $lastName,
                'username'       => $faker->unique()->username,
                'email'          => $faker->unique()->email,
                'password'       => bcrypt('123456'),
                'type'           => $faker->randomElement(['editor', 'contributor', 'subscriber', 'user']),
                'active'         => $faker->boolean,
                'remember_token' => str_random(10),
                'full_name'      => "$firstName $lastName",
                //'created_at'     => time(),
                //'updated_at'     => time(),
            ));
            \DB::table('user_profiles')->insert(array (
                'user_id' => $id,
                'bio'     => $faker->paragraph(rand(2, 5)),
                'website' => 'http://www.' . $faker->domainName,
                'twitter' => 'http://www.twitter.com/' . $faker->userName,
                'birthdate' => $faker->dateTimeBetween('-45 years', '-15 years')->format('Y-m-d')
            ));
        }
    }

}
