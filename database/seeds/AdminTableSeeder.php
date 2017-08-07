<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            'first_name'  => 'Jair',
            'last_name'   => 'Revilla',
            'username'    => 'admin',
            'email'       => 'admin@admin.com',
            'password'    => bcrypt('admin'),
            //'password'    => \Hash::make('admin'),
            'type'        => 'admin',
            'active'      => TRUE,
            'full_name'   => 'Jair Revilla',
            'remember_token' => 'qwertyuiop',
            //'created_at'  => time(),
            //'updated_at'  => time(),
        ));
        \DB::table('user_profiles')->insert(array (
            'user_id' => 1,
            'birthdate' => '1992/12/04'
        ));
    }
}
