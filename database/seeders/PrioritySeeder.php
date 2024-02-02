<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('priorities')->insert([
                'name' => '最優先',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('priorities')->insert([
                'name' => '優先',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('priorities')->insert([
                'name' => '後回し',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
