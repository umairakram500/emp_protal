<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++){
            DB::table('companies')->insert([
                'name' => str_random(10),
                'description' => str_random(100),
                'user_id' => $i,
            ]);
        }
    }
}
