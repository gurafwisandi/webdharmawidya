<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CareersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('careers')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $careers = [
            [
                'title' => 'Guru SD/SMP/SMA (Matematika, Akuntansi, dan Ekonomi)',
                'link' => 'Guru-SD-SMP-SMA-Matematika-Akuntansi-dan-Ekonomi', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Alpha Omega Bimbel adalah sebuah lembaga pendidikan yang berdedikasi untuk memberikan bimbingan belajar berkualitas tinggi kepada siswa. Kami berfokus pada penguasaan kurikulum sekolah nasional serta kurikulum internasional seperti Cambridge, IB, dan IGCSE. Dengan tim pengajar yang berpengalaman dan berkompeten, Alpha Omega Bimbel bertujuan untuk membantu siswa mencapai prestasi akademik optimal serta membangun kepercayaan diri dan motivasi belajar mereka. Kami menyediakan lingkungan belajar yang kondusif dan sumber daya pendidikan yang lengkap untuk mendukung proses pembelajaran yang efektif dan menyenangkan. Alpha omega bimbel memiliki fasilitas belajar yang lengkap dan nyaman.</p>',
                'division' => 'Yayasan',
                'working_day' => 'Part Time',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Public Relations Officer',
                'link' => 'Public-Relations-Officer', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Tanggung jawab: Bertindak sebagai titik kontak utama untuk semua masalah Asosiasi Orang Tua, memfasilitasi komunikasi dan kolaborasi antara asosiasi dan administrasi sekolah. Berinteraksi dengan komunitas eksternal di sekitar sekolah untuk membangun dan memelihara hubungan yang positif, menumbuhkan niat baik dan kerja sama. Mengembangkan dan menerapkan strategi untuk meningkatkan dan menegakkan citra sekolah di antara siswa, orang tua, dan anggota staf melalui komunikasi yang efektif dan kampanye PR. Membantu tim akademik dalam berkomunikasi dengan orang tua mengenai isu-isu terkait sekolah yang relevan, memastikan kejelasan dan transparansi. Membuat dan melaksanakan inisiatif yang ditujukan untuk melibatkan alumni, membina hubungan, dan mempromosikan keterlibatan dalam kegiatan dan inisiatif sekolah. Berkolaborasi dengan tim Pemasaran untuk membuat konten yang menarik untuk platform media sosial, situs web, buletin, dan saluran daring lainnya untuk mempromosikan acara sekolah, prestasi, dan pembaruan. Menjadi tuan rumah dan memandu acara yang terkait dengan hubungan sekolah, memastikan profesionalisme dan antusiasme dalam melibatkan audiens. Berkontribusi dalam penulisan teks, artikel, atau konten lain yang menarik sebagaimana diperlukan untuk mendukung upaya PR dan pemasaran. Mengumpulkan, menyusun, dan menganalisis data yang terkait dengan inisiatif PR dan pemasaran untuk mengukur efektivitas dan menginformasikan strategi masa depan.</p>
                                    <p style="text-align:justify;">Persyaratan: Minimal 3 tahun di bidang Hubungan Masyarakat, dengan rekam jejak yang terbukti dalam mengelola kampanye PR, hubungan masyarakat, dan koordinasi acara. Gelar Sarjana dalam Hubungan Masyarakat, Komunikasi, Pemasaran, atau bidang terkait. Penguasaan bahasa Inggris lisan dan tulisan yang sangat baik, dengan kemampuan untuk berkomunikasi secara efektif dengan berbagai pemangku kepentingan termasuk orang tua, staf, alumni, dan anggota masyarakat. Kemampuan yang terbukti untuk mengembangkan dan menerapkan strategi PR dan pemasaran yang selaras dengan tujuan organisasi dan meningkatkan reputasi sekolah. Keterampilan analitis yang kuat untuk menafsirkan data, mengevaluasi hasil, dan menyesuaikan strategi yang sesuai. Keterampilan interpersonal yang luar biasa untuk membangun dan memelihara hubungan positif secara internal dan eksternal, mewakili sekolah secara profesional dan efektif. Pengalaman dalam mengorganisir dan mengelola acara, dari perencanaan hingga pelaksanaan, memastikan hasil yang lancar dan sukses.</p>',
                'division' => 'Yayasan',
                'working_day' => 'Full Time',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ], [
                'title' => 'Staff Administrasi & Keuangan Sekolah',
                'link' => 'Staff-Administrasi-Keuangan-Sekolah', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Berusia 23 - 40 tahun.
                                    Minimal lulusan D3/S1 dari jurusan Administrasi, Manajemen, atau bidang terkait.
                                    Minimal 3 tahun pengalaman kerja di posisi administrasi sekolah atau bidang administrasi pendidikan lainnya.
                                    Menguasai aplikasi perkantoran seperti Zoom, G-docs, Microsoft Office (Word, Excel, PowerPoint),dll.
                                    Familiar dengan sistem manajemen sekolah,
                                    Memahami prosedur administrasi pendidikan, pengelolaan dokumen sekolah dan administrasi stok serta keuangan.
                                    Mampu berkomunikasi dengan baik, baik secara lisan maupun tulisan. 
                                    Bisa berbahasa Inggris.
                                    Mampu bekerja dalam tim maupun individual
                                    Mampu mengelola waktu dan tugas dengan baik,memiliki inisiatif dalam bekerja.
                                    Berintegritas tinggi, jujur, sopan, dan bertanggung jawab.
                                    Sehat Rohani dan Jasmani
                                    Domisili pilihan : Jakarta Utara (Sunter & Kelapa Gading) dan Gading Serpong.</p>',
                'division' => 'Yayasan',
                'working_day' => 'Full Time',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('careers')->insert($careers);
    }
}
