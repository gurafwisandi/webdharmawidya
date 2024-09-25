<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodePembelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('metode_pembelajaran')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $metode_pembelajaran = [
            [
                'nama' => 'Pembelajaran Aktif',
                'icon' => 'fa fa-code-fork',
                'description' => 'Melibatkan siswa secara aktif dalam proses pembelajaran, seperti diskusi kelompok, proyek berbasis masalah, dan simulasi.',
                'status' => '1',
            ], [
                'nama' => 'Pembelajaran Kolaboratif',
                'icon' => 'fa fa-users',
                'description' => 'Mendorong kerja sama antar siswa dalam mencapai tujuan pembelajaran, seperti kerja kelompok dan diskusi berpasangan.',
                'status' => '1',
            ], [
                'nama' => 'Pembelajaran Berbasis Teknologi',
                'icon' => 'fa fa-share-alt-square',
                'description' => 'Mengintegrasikan teknologi dalam pembelajaran, seperti penggunaan platform pembelajaran online, aplikasi edukasi, dan multimedia interaktif.',
                'status' => '1',
            ], [
                'nama' => 'Pembelajaran Berbasis Proyek',
                'icon' => 'fa fa-object-group',
                'description' => 'Mengajarkan keterampilan praktis dengan memecahkan masalah nyata melalui proyek-proyek pembelajaran',
                'status' => '1',
            ]
        ];
        DB::table('metode_pembelajaran')->insert($metode_pembelajaran);
    }
}
