<?php

namespace Database\Seeders;

use App\Models\StrukturModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class guruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('struktur_guru')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $guru = [
            [
                'name' => 'Doni Herman Purnama',
                'department' => 'Kepala Sekolah',
                'image' => '1.jpg',
                'unit' => 'tk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Melani Metta Dewi',
                'department' => 'Guru',
                'image' => '2.jpg',
                'unit' => 'tk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Didik Purnomo',
                'department' => 'Kepala Sekolah',
                'image' => '1.jpg',
                'unit' => 'sd',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Rani',
                'department' => 'Guru',
                'image' => '2.jpg',
                'unit' => 'sd',
                'fb' => null,
                'x' => null,
                'ink' => null,
            ],
            [
                'name' => 'Rahma',
                'department' => 'Guru',
                'image' => '3.jpg',
                'unit' => 'sd',
                'fb' => null,
                'x' => null,
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Yanti',
                'department' => 'Guru',
                'image' => '4.jpg',
                'unit' => 'sd',
                'fb' => 'https://www.facebook.com/',
                'x' => null,
                'ink' => null,
            ],
            [
                'name' => 'Yanti',
                'department' => 'Guru',
                'image' => '2.jpg',
                'unit' => 'sd',
                'fb' => null,
                'x' => 'https://x.com/',
                'ink' => null,
            ],
            [
                'name' => 'Elawati',
                'department' => 'Kepala Sekolah',
                'image' => '3.jpg',
                'unit' => 'smp',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Endah Purwaningsih',
                'department' => 'Guru',
                'image' => '2.jpg',
                'unit' => 'smp',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Parluhutan Panjaitan',
                'department' => 'Kepala Sekolah',
                'image' => '1.jpg',
                'unit' => 'smk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Niken Feransiska',
                'department' => 'Guru',
                'image' => '2.jpg',
                'unit' => 'smk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Retno Budiningsih',
                'department' => 'Guru',
                'image' => '3.jpg',
                'unit' => 'smk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ],
            [
                'name' => 'Rotua Sormin',
                'department' => 'Guru',
                'image' => '4.jpg',
                'unit' => 'smk',
                'fb' => 'https://www.facebook.com/',
                'x' => 'https://x.com/',
                'ink' => 'https://linkedin.com/',
            ]
        ];

        foreach ($guru as $key => $value) {
            StrukturModel::create($value);
        }
    }
}
