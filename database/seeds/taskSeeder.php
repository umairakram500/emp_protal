<?php

use Illuminate\Database\Seeder;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=25; $i++){
            DB::table('tasks')->insert([
                'name' => str_random(10),
                'description' => str_random(10).'@gmail.com',
                'days' => mt_rand(00, 10),
                'project_id' => $i,
                'user_id' => mt_rand(1,5)
            ]);
        }
    }
}
