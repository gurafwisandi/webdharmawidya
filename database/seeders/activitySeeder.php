<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class activitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('activitys')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $activitys = [
            [
                'activity' => 'Merching Band',
                'year' => '2024',
                'description' => 'Merching Band Borobudur',
                'status' => '1',
            ], [
                'activity' => 'Field Trip',
                'year' => '2024',
                'description' => 'Field Trip TK di Ancol',
                'status' => '1',
            ]
        ];
        DB::table('activitys')->insert($activitys);
    }
}
