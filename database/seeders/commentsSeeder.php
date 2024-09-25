<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class commentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('comments')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $comments = [
            [
                'image' => '1.jpeg',
                'name' => 'Sarah',
                'unit' => 'tk',
                'description' => 'Kegiatan ekstrakurikuler di sekolah sangat beragam dan menarik. Saya telah bergabung dengan klub debat dan merasakan perkembangan kemampuan berbicara dan berargumentasi saya secara signifikan.',
            ], [
                'image' => '2.jpg',
                'name' => 'Luna',
                'unit' => 'tk',
                'description' => 'Sekolah ini memberikan pengalaman belajar yang luar biasa! Dengan guru-guru yang berpengalaman dan fasilitas modern, saya merasa terdorong untuk meraih prestasi tertinggi.',
            ], [
                'image' => '3.jpg',
                'name' => 'Karlin',
                'unit' => 'kb',
                'description' => 'Nulla dolore amet pariatur ipsum eu cillum ad excepteur fugiat. In eiusmod labore amet ipsum nostrud. Ex ullamco esse sit ut ad magna non eu ea ea. Est esse reprehenderit eiusmod minim Lorem aute aute. Quis fugiat ad dolore veniam enim sit veniam eu ullamco nisi aute ad. Minim est Lorem eu cillum ea mollit aliquip.',
            ], [
                'image' => '4.jpg',
                'name' => 'Sherly',
                'unit' => 'kb',
                'description' => 'Aliquip consequat enim excepteur laboris incididunt velit incididunt ullamco laborum anim reprehenderit.',
            ], [
                'image' => '5.jpg',
                'name' => 'Baek',
                'unit' => 'kb',
                'description' => 'Duis et laboris in pariatur pariatur officia non ex et ea minim nisi dolor ex.',
            ]
        ];
        DB::table('comments')->insert($comments);
    }
}
