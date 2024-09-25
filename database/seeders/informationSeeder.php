<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class informationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('information')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $information = [
            [
                'title' => 'Akreditasi',
                'description' => 'Aliqua elit esse irure nostrud veniam fugiat commodo commodo esse ullamco reprehenderit magna. Veniam quis id commodo sint ullamco elit. Duis sit commodo culpa nulla quis labore laborum id anim amet fugiat. In veniam ut consequat Lorem. Mollit aute et incididunt quis sint esse laboris voluptate elit sint excepteur aliquip sit qui. Deserunt veniam cupidatat pariatur qui id adipisicing. Ea amet enim veniam incididunt consequat. Ad ex magna esse laborum voluptate dolore voluptate minim.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'akreditasi', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Akreditasi',
                'description' => 'Aliqua elit esse irure nostrud veniam fugiat commodo commodo esse ullamco reprehenderit magna. Veniam quis id commodo sint ullamco elit. Duis sit commodo culpa nulla quis labore laborum id anim amet fugiat. In veniam ut consequat Lorem. Mollit aute et incididunt quis sint esse laboris voluptate elit sint excepteur aliquip sit qui. Deserunt veniam cupidatat pariatur qui id adipisicing. Ea amet enim veniam incididunt consequat. Ad ex magna esse laborum voluptate dolore voluptate minim.',
                'unit' => 'kb', // kb,tk,sd,smp,smk
                'type' => 'akreditasi', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Kegiatan',
                'description' => 'Culpa nulla minim pariatur non enim exercitation magna. Id amet anim eu sit anim ut veniam occaecat ut anim. Do cillum sit irure pariatur non anim elit. Est Lorem proident occaecat consectetur fugiat veniam magna eu quis ut sint consequat in. Sunt esse enim ullamco eiusmod cillum eiusmod incididunt sit esse esse consequat culpa laborum.',
                'unit' => 'kb', // kb,tk,sd,smp,smk
                'type' => 'kegiatan', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Prestasi',
                'description' => 'Laborum est officia pariatur est sint enim sunt in duis ad. Irure officia consectetur non adipisicing id velit dolor occaecat consequat non id nisi. Sunt deserunt dolor nulla adipisicing. Pariatur qui aliqua dolor cillum qui eu tempor nostrud deserunt aliquip aute. Anim irure ad pariatur sunt aute qui commodo sint. Aute mollit elit non elit labore adipisicing magna. Duis magna id ut anim.Ut sunt est ullamco mollit ut ad. Nisi eu amet eu laborum in consectetur elit exercitation exercitation ipsum nostrud duis. Ipsum fugiat id et labore et. Reprehenderit enim occaecat consequat labore excepteur mollit magna. Nulla excepteur ex tempor Lorem ut. Officia ut veniam excepteur magna exercitation esse ex. Fugiat nostrud eiusmod fugiat ex Lorem. Ea ipsum proident pariatur reprehenderit laborum Lorem duis. Sunt amet nisi sint do ea nostrud et Lorem cillum magna qui ut sunt. Voluptate officia elit ex magna in commodo nostrud veniam Lorem duis ullamco laboris veniam nulla. Dolor id ea est labore ullamco labore voluptate. Id nulla eu cillum anim labore. Reprehenderit mollit nisi nostrud sit ipsum eiusmod sunt officia qui eu.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'prestasi', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Berita',
                'description' => 'Labore incididunt id non et dolore nostrud tempor aute nulla. Mollit labore velit mollit dolore sunt minim fugiat nisi enim et nisi enim. Eiusmod voluptate duis in labore duis nulla nostrud consequat minim consectetur sit amet sunt. Aliquip deserunt consequat nisi occaecat cupidatat.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'berita', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Metode Pembelajaran dan Kurikulum',
                'description' => 'Non irure voluptate magna et.',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'kurikulum', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Fasilitas',
                'description' => 'Metode pembelajaran yang dilaksanakan Laboratorium',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'fasilitas', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ], [
                'title' => 'Tenaga Pengajar',
                'description' => '<table style="border-collapse: collapse; width: 100%;" border="1"><tbody><tr><td style="width: 50%;">Nama Guru</td><td style="width: 50%;">Mata Pelajaran</td></tr><tr><td style="width: 50%;">Jefry</td><td style="width: 50%;">MTK</td></tr><tr><td style="width: 50%;">Leo</td><td style="width: 50%;">IPS</td></tr><tr><td style="width: 50%;">Sandi</td><td style="width: 50%;">IPA</td></tr></tbody></table>',
                'unit' => 'tk', // kb,tk,sd,smp,smk
                'type' => 'pengajar', // akreditasi,kegiatan,prestasi,berita,kurikulum,fasilitas,pengajar
            ]
        ];
        DB::table('information')->insert($information);
    }
}
