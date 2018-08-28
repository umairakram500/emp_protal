<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            DB::table('users')->insert([
                'name' => str_random(10),
                'email' => ($i==1?'admin':str_random(10)).'@gmail.com',
                'password' => bcrypt('12345'),
            ]);
        }
    }
}
