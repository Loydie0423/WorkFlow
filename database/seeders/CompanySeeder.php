<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
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
            DB::table('companies')->insert([
                'name' => $faker->company(),
                'url' => $faker->url(),
                'address' => $faker->address(),
                'description' => $faker->sentence(),
                'status' => 'Approved',
                'logo_path' => 'https://placehold.co/400'
            ]);
        }
    }
}
