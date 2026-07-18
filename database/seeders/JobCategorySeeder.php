<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker = app(\Faker\Generator::class);
        for($i = 0; $i < 10; $i++) {
            DB::table('job_categories')->insert(array(
                'description' => $faker->jobTitle()
            ));
        }
    }
}
