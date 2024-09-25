<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EskulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('eskul')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $eskul = [
            [
                'nama' => 'Futsal',
                'icon' => 'fa fa-futbol',
                'description' => 'Futsal meningkatkan keterampilan, kebugaran, dan kerjasama tim, menjadikannya favorit siswa sekolah.',
            ], [
                'nama' => 'Merching Band',
                'icon' => 'fa fa-music',
                'description' => 'Meningkatkan keterampilan musik, kerjasama tim, menjadikannya pilihan populer di kalangan siswa sekolah.',
            ], [
                'nama' => 'Basket',
                'icon' => 'fa fa-life-ring',
                'description' => 'Basket melatih keterampilan, kebugaran, dan kerjasama tim, menjadikannya favorit di kalangan siswa.',
            ], [
                'nama' => 'Pramuka',
                'icon' => 'fa fa-sign-language',
                'description' => 'Pramuka melatih keterampilan, kedisiplinan, dan kerjasama, menjadikannya favorit siswa sekolah.',
            ]
        ];
        DB::table('eskul')->insert($eskul);
    }
}
