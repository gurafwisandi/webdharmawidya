<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class slidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('sliders')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $sliders = [
            [
                'image' => 'bannersiswa.jpg',
                'location' => 'home',
                'title' => 'Sekolah Unggulan',
                'description' => 'Irure adipisicing consequat sunt est mollit aute aliqua laboris dolore occaecat magna. Sit occaecat consectetur commodo ut pariatur sit. Laboris commodo excepteur veniam dolor laborum occaecat excepteur exercitation culpa. Commodo qui dolor excepteur eu in cupidatat fugiat. Dolore voluptate consectetur fugiat proident incididunt sunt irure consectetur sint Lorem ullamco.',
                'link' => null,
                'video' => null, // link youtube
                'unit' => null, // kb,tk,sd,smp,smk
                'status' => '1',
            ], [
                'image' => 'bannersiswa.jpg',
                'location' => 'akademik',
                'title' => 'Sekolah Unggulan',
                'description' => 'Irure adipisicing consequat sunt est mollit aute aliqua laboris dolore occaecat magna. Sit occaecat consectetur commodo ut pariatur sit. Laboris commodo excepteur veniam dolor laborum occaecat excepteur exercitation culpa. Commodo qui dolor excepteur eu in cupidatat fugiat. Dolore voluptate consectetur fugiat proident incididunt sunt irure consectetur sint Lorem ullamco.',
                'link' => null,
                'video' => null, // link youtube
                'unit' => 'kb', // kb,tk,sd,smp,smk
                'status' => '1',
            ], [
                'image' => 'tka.jpg',
                'location' => 'kegiatan',
                'title' => 'TK A',
                'description' => 'Irure adipisicing consequat sunt est mollit aute aliqua laboris dolore occaecat magna. Sit occaecat consectetur commodo ut pariatur sit. Laboris commodo excepteur veniam dolor laborum occaecat excepteur exercitation culpa. Commodo qui dolor excepteur eu in cupidatat fugiat. Dolore voluptate consectetur fugiat proident incididunt sunt irure consectetur sint Lorem ullamco.',
                'link' => null,
                'video' => null, // link youtube
                'unit' => 'kb', // kb,tk,sd,smp,smk
                'status' => '1',
            ], [
                'image' => 'tkb.jpg',
                'location' => 'kegiatan',
                'title' => 'TK B',
                'description' => 'Irure adipisicing consequat sunt est mollit aute aliqua laboris dolore occaecat magna. Sit occaecat consectetur commodo ut pariatur sit. Laboris commodo excepteur veniam dolor laborum occaecat excepteur exercitation culpa. Commodo qui dolor excepteur eu in cupidatat fugiat. Dolore voluptate consectetur fugiat proident incididunt sunt irure consectetur sint Lorem ullamco.',
                'link' => 'akademik/tk',
                'video' => 'https://www.youtube.com/watch?v=wInWvzLWltQ', // link youtube
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'status' => '1',
            ], [
                'image' => 'tkb.jpg',
                'location' => 'home',
                'title' => 'TK B',
                'description' => 'Irure adipisicing consequat sunt est mollit aute aliqua laboris dolore occaecat magna. Sit occaecat consectetur commodo ut pariatur sit. Laboris commodo excepteur veniam dolor laborum occaecat excepteur exercitation culpa. Commodo qui dolor excepteur eu in cupidatat fugiat. Dolore voluptate consectetur fugiat proident incididunt sunt irure consectetur sint Lorem ullamco.',
                'link' => 'akademik/tk',
                'video' => 'https://www.youtube.com/watch?v=wInWvzLWltQ', // link youtube
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'status' => '1',
            ]
        ];
        DB::table('sliders')->insert($sliders);
    }
}
