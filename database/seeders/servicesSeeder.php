<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class servicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('services')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $services = [
            [
                'title' => 'Field Trip/Outing Class',
                'description' => 'Metode pembelajaran yang dilaksanakan Laboratorium',
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Pembelajaran Bahasa',
                'description' => 'Pembelajaran bahasa Inggris dan Mandarin untuk mempersiapkan anak-anak menghadapi globalisasi',
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Kurikulum Holistik',
                'description' => 'Penggabungan antara kurikulum nasional dan pendidikan agama Buddha, Pengembangan keterampilan sosial, emosional, dan kognitif.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Kegiatan Ekstrakurikuler',
                'description' => 'Seni rupa dan kerajinan tangan, Musik dan tari tradisional, Olahraga dan permainan yang mendukung perkembangan fisik.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Kemitraan dengan Orang Tua',
                'description' => 'Workshop dan seminar untuk orang tua, Konsultasi rutin untuk membahas perkembangan anak.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Internet Based Learning',
                'description' => 'Penerapan pembelajaran berbasis E-Learning sebagai media edukasi',
                'unit' => 'sd', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Full Day School',
                'description' => 'Sistem pembelajaran full day yang dimulai pukul 07.00 sampai dengan 16.00 WIB',
                'unit' => 'sd', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Internet Based Learning',
                'description' => 'Penerapan pembelajaran berbasis E-Learning sebagai media edukasi',
                'unit' => 'smp', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Full Day School',
                'description' => 'Sistem pembelajaran full day yang dimulai pukul 07.00 sampai dengan 16.00 WIB',
                'unit' => 'smp', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Internet Based Learning',
                'description' => 'Penerapan pembelajaran berbasis E-Learning sebagai media edukasi',
                'unit' => 'smk', // kb,tk,sd,smp,smk
            ],
            [
                'title' => 'Full Day School',
                'description' => 'Sistem pembelajaran full day yang dimulai pukul 07.00 sampai dengan 16.00 WIB',
                'unit' => 'smk', // kb,tk,sd,smp,smk
            ],
        ];
        DB::table('services')->insert($services);
    }
}
