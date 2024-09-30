<?php

namespace Database\Seeders;

use App\Models\FasilitasImageModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fasilitasImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('fasilitas_image')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $fasilitas_image = [
            [
                'name' => 'Ruang Kelas Modern',
                'image' => 'img-0.png',
            ],
            [
                'name' => 'Laboratorium Komputer',
                'image' => 'img-1.png',
            ],
            [
                'name' => 'Laboratorium Sains',
                'image' => 'img-2.png',
            ],
            [
                'name' => 'Perpustakaan',
                'image' => 'img-3.png',
            ],
            [
                'name' => 'Ruang Meditasi dan Doa',
                'image' => 'img-4.png',
            ],
            [
                'name' => 'Aula Serbaguna',
                'image' => 'img-5.png',
            ],
            [
                'name' => 'Lapangan Olahraga',
                'image' => 'img-6.png',
            ],
            [
                'name' => 'Ruang Kegiatan Ekstrakurikuler',
                'image' => 'img-7.png',
            ],
            [
                'name' => 'Kantin Sehat',
                'image' => 'img-8.png',
            ],
            [
                'name' => 'Area Parkir yang Aman',
                'image' => null,
            ],
            [
                'name' => 'Wi-Fi Gratis',
                'image' => null,
            ],
            [
                'name' => 'Ruang Kesehatan (UKS)',
                'image' => null,
            ],
        ];

        foreach ($fasilitas_image as $key => $value) {
            FasilitasImageModel::create($value);
        }
    }
}
