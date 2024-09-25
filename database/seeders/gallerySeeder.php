<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('gallery')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $gallery = [
            [
                'image' => 'a.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'b.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'c.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'd.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'e.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'f.jpg',
                'type' => 'foto',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'g.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'h.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => '<iframe width="400" height="400" src="https://www.youtube.com/embed/UzCeMp5M0FY" title="MARCHING BAND WALUBI DHARMA WIDYA I WAISAK NASIONAL 2568BE/2024 DI CANDI BOROBUDUR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'type' => 'video',
                'activity_id' => '1',
                'iframe' => '1',
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => '<iframe width="400" height="400" src="https://www.youtube.com/embed/wInWvzLWltQ" title="Field Trip - TK Dharma Widya Goes to Sea World Ancol" frameborder="0" allow="accelerometer; autoplay; cdlipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'type' => 'video',
                'activity_id' => '1',
                'iframe' => '1',
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => '<iframe width="400" height="400" src="https://www.youtube.com/embed/qSs0yQbkdZs" title="Hari Penghayatan Dhamma SMP Dharma Widya I Kebun Persahabatan-Purwakarta" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>',
                'type' => 'video',
                'activity_id' => '1',
                'iframe' => '1',
                'unit' => 'kb', // kb,tk,sd,smp,smk
            ], [
                'image' => 'video1.mp4',
                'type' => 'video',
                'activity_id' => '1',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-1.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-2.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-3.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-4.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-5.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-6.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ], [
                'image' => 'gallery-7.jpg',
                'type' => 'foto',
                'activity_id' => '2',
                'iframe' => null,
                'unit' => 'tk', // kb,tk,sd,smp,smk
            ]
        ];
        DB::table('gallery')->insert($gallery);
    }
}
