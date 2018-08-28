<?php

use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('projects')->insert([
                    'name' => str_random(10),
                    'description' => str_random(100),
                    'user_id' => $i,
                    'company_id' => $i,
                ]);
            }
        }
    }
}
