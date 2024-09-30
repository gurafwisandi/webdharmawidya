<?php

namespace Database\Seeders;

use App\Models\FasilitasModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('fasilitas')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $fasilitas = [
            [
                'description' => '<p style="text-align:justify;">Yayasan Pendidikan Dharmawidya Sekolah Buddha berkomitmen
                                    menyediakan fasilitas yang lengkap dan modern guna mendukung proses belajar mengajar
                                    yang efektif serta pengembangan karakter siswa. Fasilitas ruang kelas dilengkapi dengan
                                    peralatan multimedia seperti proyektor dan perangkat audio-visual untuk meningkatkan
                                    interaksi dalam pembelajaran. Laboratorium komputer dan laboratorium sains menyediakan
                                    sarana bagi siswa untuk mengasah kemampuan teknologi dan melakukan eksperimen ilmiah.
                                    Selain itu, perpustakaan sekolah menawarkan koleksi buku serta sumber daya digital yang
                                    bermanfaat untuk menunjang riset dan minat baca.</p>
                                <p style="text-align:justify;">Untuk mendukung keseimbangan antara akademik dan
                                    spiritualitas, sekolah menyediakan ruang meditasi dan doa, tempat siswa dapat
                                    mempraktikkan ajaran Buddha. Kegiatan ekstrakurikuler dan olahraga juga difasilitasi
                                    dengan aula serbaguna, lapangan olahraga, dan ruang kegiatan khusus. Kantin sekolah
                                    menyediakan makanan sehat dan bergizi, serta taman hijau memberikan suasana segar yang
                                    mendukung kenyamanan belajar. Dengan tambahan akses Wi-Fi gratis, ruang kesehatan (UKS),
                                    dan area parkir yang aman, Yayasan Dharmawidya memastikan bahwa lingkungan sekolah
                                    menjadi tempat yang kondusif untuk pertumbuhan akademis dan karakter siswa secara
                                    menyeluruh.</p>',
            ]
        ];

        foreach ($fasilitas as $key => $value) {
            FasilitasModel::create($value);
        }
    }
}
