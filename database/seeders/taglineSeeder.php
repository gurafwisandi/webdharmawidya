<?php

namespace Database\Seeders;

use App\Models\TaglineModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class taglineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('tagline')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $tagline = [
            [
                'nama' => 'Kurikulum Inovatif',
                // 'icon' => 'fa fa-code-fork',
                'description' => 'Terintegrasi, Pendidikan Karakter dan Teknologi dalam Pembelajaran',
                'status' => '1',
            ], [
                'nama' => 'Fasilitas Modern',
                // 'icon' => 'fa fa-users',
                'description' => 'Laboratorium Sains dan Teknologi, Perpustakaan, Fasilitas Olahraga dan Seni',
                'status' => '1',
            ], [
                'nama' => 'Akademis Dan Non-Akademis',
                // 'icon' => 'fa fa-share-alt-square',
                'description' => 'Kompetisi, Proyek Sosial dan Kemanusiaan',
                'status' => '1',
            ], [
                'nama' => 'Sekolah Ungulan',
                // 'icon' => 'fa fa-share-alt-square',
                'description' => 'Dengan Status Kami Sebagai Unggulan Dan Terakreditasi',
                'status' => '1',
            ]
        ];

        foreach ($tagline as $key => $value) {
            TaglineModel::create($value);
        }
    }
}
