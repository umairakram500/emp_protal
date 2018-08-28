<?php

use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = 1;
        for($i=1; $i<=5; $i++){
            for($j=1; $j<=5; $j++){
                DB::table('project_user')->insert([
                    
                    'user_id' => $i,
                    'project_id' => $j
                ]);
                $k++;
            }
        }
    }
}
