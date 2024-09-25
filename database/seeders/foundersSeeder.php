<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class foundersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('founders')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $founders = [
            [
                'name' => 'Ricky Tansil',
                'description' => '<p style="text-align:justify;">Salam sejahtera bagi kita semua,</p>
                                    <p style="text-align:justify;">Yang terhormat, para undangan,<br>Yang kami hormati, para guru, staf, dan seluruh siswa-siswi Yayasan Pendidikan Buddha,</p>
                                    <p style="text-align:justify;">Pertama-tama, marilah kita panjatkan puji syukur kepada Tuhan Yang Maha Esa, karena berkat rahmat-Nya, kita dapat berkumpul di sini dalam keadaan sehat dan penuh semangat.</p>
                                    <p style="text-align:justify;">Sebagai Ketua Yayasan Pendidikan Buddha, saya ingin menyampaikan rasa terima kasih yang tulus kepada semua pihak yang telah berkontribusi dalam perjalanan yayasan ini. Dukungan dari orang tua, guru, dan masyarakat sangat berarti dalam mewujudkan visi dan misi kami.</p>
                                    <p style="text-align:justify;">Yayasan Pendidikan Buddha berkomitmen untuk memberikan pendidikan yang holistik, mengintegrasikan pengetahuan dengan nilai-nilai spiritual dan moral. Kami percaya bahwa pendidikan tidak hanya tentang pencapaian akademis, tetapi juga tentang pembentukan karakter yang baik, serta pengembangan empati dan toleransi.</p>
                                    <p style="text-align:justify;">Kami mengajak semua siswa-siswi untuk menjadikan lingkungan sekolah sebagai tempat belajar yang tidak hanya berfokus pada akademis, tetapi juga pada pengembangan diri. Mari kita ciptakan suasana yang harmonis, saling menghormati, dan mendukung satu sama lain dalam proses belajar mengajar.</p>
                                    <p style="text-align:justify;">Kepada para guru, terima kasih atas dedikasi dan kerja keras Anda dalam mendidik generasi penerus. Kami percaya, peran Anda sangat penting dalam membimbing dan membentuk karakter siswa-siswi kita.</p>
                                    <p style="text-align:justify;">Akhir kata, mari kita bersama-sama melanjutkan perjalanan ini dengan penuh semangat dan komitmen untuk mencapai tujuan bersama. Semoga Yayasan Pendidikan Buddha semakin maju dan bermanfaat bagi masyarakat.</p>
                                    <p style="text-align:justify;">Terima kasih atas perhatian semua.</p>',
                'year' => '2024',
                'status' => '1',
            ], [
                'name' => 'Shin Tae-yong',
                'description' => 'Merching Band Borobudur',
                'year' => '2023',
                'status' => null,
            ]
        ];
        DB::table('founders')->insert($founders);
    }
}
