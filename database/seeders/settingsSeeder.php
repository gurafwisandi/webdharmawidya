<?php

namespace Database\Seeders;

use App\Models\SettingsModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class settingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('settings')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $settings = [
            [
                'apps' => 'School Dharmawidya',
                'icon' => null,
                'maps' => 'https://www.google.com/maps/place/Sekolah+Dharma+Widya/@-6.1455664,106.6201914,15z/data=!4m14!1m7!3m6!1s0x2e69ff571a5a8001:0xc52fb8aabc3e8e70!2sSekolah+Dharma+Widya!8m2!3d-6.1455664!4d106.6201914!16s%2Fg%2F1hm23xvx6!3m5!1s0x2e69ff571a5a8001:0xc52fb8aabc3e8e70!8m2!3d-6.1455664!4d106.6201914!16s%2Fg%2F1hm23xvx6?entry=ttu',
                'contact' => '6283871694512',
                'address' => 'Jl. Iskandar Muda No.90, Neglasari, Kec. Neglasari, Kota Tangerang, Banten 15129',
                'facebook' => 'https://www.facebook.com/sekolahdw',
                'instagram' => 'https://www.facebook.com/sekolahdw',
                'tiktok' => 'https://www.tiktok.com/@sekolahdharmawidya?is_from_webapp=1&sender_device=pc',
                'youtube' => 'https://www.youtube.com/@YayasanPendidikanDharmawidya',
                'email' => 'dharmawidya@gmail.com',
                'clock' => 'Sen-Jum: 07.00 – 13.30 WIB',
                'visi' => '<div class="col-12 col-lg-12">
                                <p class="entry-desc" style="text-align:justify;">Mewujudkan lembaga pendidikan yang unggul dalam pengembangan karakter, pengetahuan, dan spiritualitas, berlandaskan ajaran Buddha, untuk menciptakan generasi yang berakhlak mulia, cerdas, dan berdaya saing di tingkat global.</p>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="advantages-box">
                                    <ul class="advantages-list">
                                        <li><i class="fas fa-check"></i>Pendidikan Holistik</li>
                                        <li><i class="fas fa-check"></i>Spiritualitas dan Moralitas</li>
                                        <li><i class="fas fa-check"></i>Inovasi dalam Pembelajaran</li>
                                        <li><i class="fas fa-check"></i>Keterlibatan Komunitas</li>
                                        <li><i class="fas fa-check"></i>Pengembangan Karakter</li>
                                        <li><i class="fas fa-check"></i>Kesiapan Global</li>
                                        <li><i class="fas fa-check"></i>Pendidikan Berkelanjutan</li>
                                    </ul>
                                </div>
                            </div>',
                'misi' => '<div class="col-12 col-lg-12">
                                <p class="entry-desc" style="text-align:justify;">Misi kami adalah menyediakan pendidikan yang berkualitas, berlandaskan ajaran Buddha, untuk mengembangkan potensi siswa secara menyeluruh, serta membentuk karakter yang baik dan nilai-nilai moral yang tinggi.</p>
                            </div>
                            <div class="col-12 col-lg-12">
                                <div class="advantages-box">
                                    <ul class="advantages-list">
                                        <li><i class="fas fa-check"></i>Kualitas Pendidikan</li>
                                        <li><i class="fas fa-check"></i>Pengembangan Karakter</li>
                                        <li><i class="fas fa-check"></i>Lingkungan Belajar yang Positif</li>
                                        <li><i class="fas fa-check"></i>Inklusi dan Diversitas</li>
                                        <li><i class="fas fa-check"></i>Partisipasi Orang Tua dan Masyarakat</li>
                                        <li><i class="fas fa-check"></i>Pendidikan Spiritual</li>
                                        <li><i class="fas fa-check"></i>Inovasi dan Teknologi</li>
                                        <li><i class="fas fa-check"></i>Kesadaran Lingkungan</li>
                                    </ul>
                                </div>
                            </div>',
            ],
        ];

        foreach ($settings as $key => $value) {
            SettingsModel::create($value);
        }
    }
}
