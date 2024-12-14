<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'gender' => 'male',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'gender' => 'female',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        
    );
    }
}
