<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('articles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $articles = [
            [
                'image' => '1.jpg',
                'title' => 'Hari Raya Waisak di Borobudur: Perayaan Spiritualitas dan Kedamaian di Candi Warisan Dunia',
                'link' => 'Hari-Raya-Waisak-di-Borobudur-Perayaan-Spiritualitas-dan-Kedamaian-di-Candi-Warisan-Dunia', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Hari Raya Waisak adalah salah satu perayaan penting bagi umat Buddha di seluruh dunia, dan di Indonesia, perayaan ini memiliki makna khusus ketika dirayakan di Candi Borobudur, sebuah situs warisan dunia yang terletak di Magelang, Jawa Tengah. Waisak merayakan tiga peristiwa penting dalam kehidupan Siddhartha Gautama, yaitu kelahiran, pencapaian pencerahan (Bodhi), dan wafatnya (Parinibbana).</p>
                                    <p style="text-align:justify;"><strong>Makna Hari Waisak</strong><br>Waisak diperingati setiap tahun pada bulan purnama di bulan Mei, yang dikenal sebagai "Purnama Siddhi." Bagi umat Buddha, perayaan ini adalah momen untuk memperingati nilai-nilai ajaran Sang Buddha, seperti cinta kasih, kedamaian, dan kesederhanaan. Umat Buddha melakukan berbagai ritual dan doa sebagai bentuk penghormatan dan rasa syukur atas ajaran Sang Buddha yang membawa kebijaksanaan dan kedamaian.</p>
                                    <p style="text-align:justify;"><strong>Candi Borobudur: Pusat Perayaan Waisak</strong><br>Candi Borobudur, yang dibangun pada abad ke-8 dan merupakan salah satu candi Buddha terbesar di dunia, menjadi pusat perayaan Waisak di Indonesia. Setiap tahun, ribuan umat Buddha dari berbagai negara berkumpul di sini untuk merayakan hari besar ini. Borobudur bukan hanya monumen megah, tetapi juga simbol spiritualitas dan pencerahan, menjadikannya tempat yang sempurna untuk merenungkan ajaran Buddha pada hari Waisak.</p>
                                    <p style="text-align:justify;"><strong>Rangkaian Ritual Waisak di Borobudur</strong><br>Perayaan Waisak di Borobudur biasanya dimulai dengan berbagai rangkaian upacara religius yang khusyuk, di antaranya:</p>
                                    <ul>
                                        <li>
                                            <p style="text-align:justify;"><strong>1. Pengambilan Api Suci</strong><br>Air Suci biasanya diambil dari Umbul Jumprit di Temanggung. Air ini dianggap sebagai simbol kesucian dan kehidupan yang akan disucikan dalam prosesi di Borobudur.</p>
                                        </li>
                                        <li>
                                            <p style="text-align:justify;"><br><strong>2. Prosesi Berjalan Kaki</strong><br>Salah satu bagian paling sakral dari perayaan Waisak adalah prosesi berjalan kaki dari Candi Mendut menuju Candi Borobudur. Umat Buddha berjalan dalam barisan dengan tenang dan penuh khidmat, sembari membawa lilin sebagai simbol pencerahan. Prosesi ini mengingatkan umat pada perjalanan spiritual menuju kebijaksanaan.</p>
                                        </li>
                                        <li>
                                            <p style="text-align:justify;"><br><strong>3. Pelepasan Lampion</strong><br>Salah satu momen yang paling dinantikan oleh para peserta dan pengunjung adalah pelepasan lampion pada malam hari. Ribuan lampion diterbangkan ke langit sebagai simbol harapan, doa, dan kedamaian. Pemandangan lampion-lampion yang melayang di atas Candi Borobudur saat malam purnama adalah pemandangan yang memukau, memberikan rasa damai dan kebersamaan.</p>
                                        </li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Refleksi Nilai-Nilai Waisak</strong><br>Perayaan Waisak di Borobudur bukan hanya sekadar ritual agama, tetapi juga menjadi momen penting untuk merefleksikan ajaran Sang Buddha tentang kehidupan. Dalam perayaan ini, umat Buddha diajak untuk mengembangkan rasa kasih sayang, menghargai kehidupan, dan menjaga harmoni dengan sesama serta alam.</p>
                                    <p style="text-align:justify;">Borobudur, dengan kemegahannya yang tak tertandingi, memberikan suasana yang mendukung untuk perenungan spiritual. Ribuan umat yang berkumpul, baik dari Indonesia maupun dari luar negeri, menunjukkan bagaimana ajaran Buddha dapat menyatukan orang-orang dari berbagai latar belakang dalam cinta kasih dan kedamaian.</p>
                                    <p style="text-align:justify;"><strong>Kesimpulan</strong><br>Hari Raya Waisak di Candi Borobudur adalah perayaan agung yang penuh makna spiritual. Candi yang megah dan kaya akan sejarah ini menjadi saksi bisu dari ribuan umat yang datang untuk merayakan dan merenungkan ajaran Buddha. Setiap tahun, perayaan ini tidak hanya memperkuat ikatan spiritual umat Buddha, tetapi juga memberikan pesan tentang pentingnya menjaga kedamaian, keharmonisan, dan kasih sayang di tengah kehidupan yang modern.</p>
                                    <p style="text-align:justify;">Perayaan Waisak di Borobudur adalah bukti bahwa Indonesia, dengan kekayaan budayanya, terus melestarikan nilai-nilai luhur dari ajaran agama yang telah menjadi bagian dari sejarah panjang bangsa ini.</p>',
                'categorys_id' => '1',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ], [
                'image' => '2.jpg',
                'title' => 'Katina: Ritual Pemberian Jubah sebagai Simbol Kebajikan dalam Agama Buddha',
                'link' => 'Katina-Ritual-Pemberian-Jubah-sebagai-Simbol-Kebajikan-dalam-Agama-Buddha', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Katina adalah salah satu upacara penting dalam tradisi Theravada Buddhisme yang menandai akhir masa <strong>Vassa</strong>, atau masa retret musim hujan yang berlangsung selama tiga bulan. Dalam upacara ini, umat Buddha memberikan persembahan berupa jubah (katina) kepada para bhikkhu sebagai simbol penghormatan, kebajikan, dan dukungan terhadap kehidupan monastik.</p>
                                    <p style="text-align:justify;"><strong>Makna dan Sejarah Katina</strong><br>Kata "Katina" secara harfiah berarti "kokoh" atau "kuat", yang mencerminkan kekuatan kebajikan dan keteguhan batin yang diperoleh para bhikkhu selama masa Vassa. Upacara ini sudah ada sejak zaman Sang Buddha, ketika para bhikkhu menghabiskan masa hujan di satu tempat untuk merenung dan mempraktikkan ajaran Buddha secara mendalam.</p>
                                    <p style="text-align:justify;">Setelah masa Vassa berakhir, umat Buddha memberikan persembahan berupa jubah baru sebagai bentuk dukungan. Tradisi ini muncul dari sebuah kisah saat sekelompok bhikkhu terlambat kembali ke biara mereka setelah mendengarkan ajaran Sang Buddha dan harus melewati musim hujan dengan pakaian yang lusuh. Sebagai bentuk perhatian, umat Buddha pada waktu itu mempersembahkan jubah baru kepada mereka, dan sejak saat itu, tradisi Katina berlangsung setiap tahun.</p>
                                    <p style="text-align:justify;"><strong>Ritual Pemberian Jubah Katina</strong><br>Upacara Katina biasanya berlangsung pada bulan Oktober atau November, setelah berakhirnya Vassa. Prosesi ini dilakukan dengan penuh khidmat, dan melibatkan beberapa tahap penting, yaitu:</p>
                                    <ul>
                                        <li>
                                            <p style="text-align:justify;"><strong>1. Pengumpulan Dana</strong><br>Umat Buddha di seluruh dunia mempersiapkan upacara Katina dengan mengumpulkan dana untuk membeli jubah baru dan kebutuhan lain bagi para bhikkhu. Ini merupakan salah satu bentuk praktik <strong>Dana</strong> (kedermawanan) yang diajarkan oleh Sang Buddha, di mana umat berbuat kebajikan dengan memberi tanpa pamrih.</p>
                                        </li>
                                        <li>
                                            <p style="text-align:justify;"><br><strong>2. Pemberian Jubah</strong><br>Pada hari Katina, umat mempersembahkan jubah baru kepada para bhikkhu. Jubah ini melambangkan dukungan material dari umat, sekaligus sebagai simbol kedekatan spiritual antara umat dan Sangha (komunitas bhikkhu). Para bhikkhu menerima jubah dengan rasa syukur dan mendoakan agar kebajikan yang telah dilakukan oleh umat membawa manfaat bagi kehidupan mereka di masa kini dan masa mendatang.</p>
                                        </li>
                                        <li>
                                            <p style="text-align:justify;"><br><strong>3. Persembahan Lain</strong><br>Selain jubah, umat juga sering mempersembahkan barang-barang lain yang diperlukan oleh para bhikkhu untuk kehidupan sehari-hari, seperti obat-obatan, makanan, dan kebutuhan pokok lainnya. Semua ini dilakukan sebagai bentuk rasa hormat dan tanggung jawab terhadap Sangha.</p>
                                        </li>
                                        <li>
                                            <p style="text-align:justify;"><br><strong>4. Pujian dan Dhamma Talk</strong><br>Setelah persembahan jubah, para bhikkhu biasanya memberikan ceramah Dhamma (Dhamma talk) kepada umat. Ini adalah momen penting bagi umat untuk mendapatkan bimbingan spiritual langsung dari bhikkhu, yang memberikan petuah tentang kebajikan, meditasi, dan ajaran Sang Buddha.</p>
                                        </li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Signifikansi Spiritual Katina</strong><br>Katina bukan hanya sekadar upacara pemberian jubah, tetapi lebih dari itu, ia memiliki makna spiritual yang mendalam. Bagi umat Buddha, Katina adalah waktu untuk mempraktikkan kebajikan dengan memberikan apa yang dibutuhkan oleh para bhikkhu. Ini adalah bentuk nyata dari <strong>Dana Paramita</strong> (kesempurnaan dalam kemurahan hati) yang dapat membawa keberkahan dan ketenangan batin.</p>
                                    <p style="text-align:justify;">Bagi para bhikkhu, masa Vassa adalah kesempatan untuk memperkuat disiplin monastik, meningkatkan meditasi, dan merenungkan ajaran Buddha lebih mendalam. Dengan menerima jubah Katina, mereka menunjukkan bahwa kehidupan monastik mereka didukung oleh kebajikan umat, dan mereka siap melanjutkan jalan spiritual yang ditempuh dengan lebih teguh.</p>
                                    <p style="text-align:justify;"><strong>Perayaan Katina di Berbagai Negara</strong><br>Upacara Katina dirayakan dengan antusias di berbagai negara penganut Theravada Buddhisme, seperti Thailand, Myanmar, Sri Lanka, Laos, dan Kamboja. Di Indonesia, khususnya di kalangan umat Buddha Theravada, upacara ini juga diadakan di vihara-vihara besar dengan melibatkan ratusan umat.</p>
                                    <p style="text-align:justify;">Setiap negara memiliki variasi dalam prosesi Katina, tetapi intinya tetap sama: pemberian jubah kepada bhikkhu sebagai bentuk kebajikan. Di beberapa negara, seperti Thailand, upacara Katina sering kali diiringi dengan festival budaya yang meriah, menampilkan tarian, musik, dan kegiatan sosial sebagai bagian dari perayaan.</p>
                                    <p style="text-align:justify;"><strong>Kesimpulan</strong><br>Upacara Katina adalah salah satu tradisi penting dalam agama Buddha yang menekankan nilai kedermawanan dan kebajikan. Melalui ritual pemberian jubah kepada para bhikkhu, umat Buddha memperkuat ikatan spiritual mereka dengan Sangha, sekaligus menunjukkan rasa hormat dan tanggung jawab terhadap ajaran Buddha.</p>
                                    <p style="text-align:justify;">Bagi umat Buddha, Katina adalah waktu yang sangat dinantikan untuk berbuat kebajikan, mengumpulkan pahala, dan merenungkan makna mendalam dari kehidupan spiritual. Bagi para bhikkhu, jubah Katina adalah simbol dukungan dan kebajikan yang memungkinkan mereka untuk melanjutkan kehidupan monastik dengan penuh kesucian dan komitmen pada jalan pencerahan.</p>
                                    <p style="text-align:justify;">Perayaan Katina yang dilakukan dengan penuh rasa syukur, khidmat, dan kebersamaan menunjukkan bagaimana ajaran Sang Buddha tentang kedermawanan dan kebajikan terus hidup dan berkembang di tengah masyarakat modern.</p>',
                'categorys_id' => '1|2',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ], [
                'image' => '3.jpg',
                'title' => 'Imunisasi Polio di Sekolah Perlindungan Kesehatan untuk Masa Depan Bebas Polio',
                'link' => 'Imunisasi-Polio-di-Sekolah-Perlindungan-Kesehatan-untuk-Masa-Depan-Bebas-Polio', // simbol harus di replace dan dll
                'description' => '<p>Polio, atau poliomyelitis, adalah penyakit menular yang disebabkan oleh virus polio, yang dapat menyebabkan kelumpuhan permanen dan bahkan kematian pada kasus yang parah. Meski sudah jarang ditemui di berbagai negara, polio masih menjadi ancaman serius di beberapa bagian dunia, termasuk Indonesia. Oleh karena itu, imunisasi polio di sekolah-sekolah menjadi salah satu langkah krusial dalam upaya memberantas penyakit ini dan melindungi generasi mendatang.</p>
                                    <p style="text-align:justify;"><strong>Apa Itu Polio?</strong><br>Polio adalah penyakit yang menyerang sistem saraf, dan dapat menular melalui kontak langsung dengan seseorang yang terinfeksi, makanan, atau air yang tercemar virus polio. Sebagian besar kasus polio tidak menunjukkan gejala, namun pada beberapa anak, virus ini bisa menyebabkan kelumpuhan permanen yang memengaruhi tungkai dan otot pernapasan.</p>
                                    <p style="text-align:justify;">Pentingnya pencegahan polio melalui imunisasi menjadi semakin jelas mengingat betapa seriusnya dampak penyakit ini bagi kesehatan jangka panjang anak-anak. Di sinilah peran program imunisasi polio di sekolah sangat penting.</p>
                                    <p style="text-align:justify;"><strong>Imunisasi Polio di Sekolah: Kenapa Penting?</strong><br>Sekolah adalah tempat di mana anak-anak berkumpul dan melakukan aktivitas sehari-hari, sehingga menjadi lokasi strategis untuk melaksanakan imunisasi massal. Pemerintah, melalui program imunisasi sekolah, memastikan anak-anak menerima vaksin polio dengan mudah dan merata. Imunisasi polio yang diberikan di sekolah menjadi salah satu cara paling efektif untuk menjangkau kelompok anak-anak usia sekolah, memastikan mereka terlindungi dari penyakit ini.</p>
                                    <p style="text-align:justify;">Berikut adalah beberapa alasan mengapa imunisasi polio di sekolah sangat penting:</p>
                                    <ul>
                                        <li><p style="text-align:justify;"><strong>1. Mencegah Penyebaran Polio</strong><br>Polio sangat menular, dan virus dapat menyebar dengan cepat di lingkungan yang padat, seperti sekolah. Melalui imunisasi di sekolah, kita dapat mencegah penularan polio di antara anak-anak dan mengurangi risiko terjadinya wabah.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>2. Melindungi Anak dari Kelumpuhan</strong><br>Vaksin polio terbukti sangat efektif dalam melindungi anak-anak dari kelumpuhan akibat infeksi polio. Imunisasi polio dapat membangun kekebalan tubuh anak sehingga mereka terhindar dari risiko kelumpuhan yang dapat memengaruhi kualitas hidup mereka seumur hidup.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>3. Bagian dari Program Nasional Pemberantasan Polio</strong><br>Imunisasi polio di sekolah merupakan bagian dari program nasional pemberantasan polio yang terus diupayakan oleh pemerintah. Program ini bertujuan untuk mencapai <strong>eradikasi polio</strong> di Indonesia, sehingga tidak ada lagi anak-anak yang terkena dampak penyakit ini.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>4. Menjangkau Semua Kalangan Anak</strong><br>Melalui sekolah, imunisasi polio dapat menjangkau anak-anak dari berbagai latar belakang ekonomi dan sosial. Ini membantu memastikan bahwa tidak ada anak yang tertinggal atau tidak mendapatkan vaksin hanya karena kurangnya akses ke fasilitas kesehatan.</p></li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Jenis Vaksin Polio yang Diberikan</strong><br>Ada dua jenis vaksin polio yang diberikan dalam program imunisasi:</p>
                                    <ul>
                                        <li><p style="text-align:justify;"><strong>1. Vaksin Polio Oral (OPV)</strong><br>Vaksin ini diberikan melalui tetes mulut. OPV mengandung virus polio yang dilemahkan dan dapat membangun kekebalan tubuh anak secara alami dengan cepat.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>2. Vaksin Polio Injeksi (IPV)</strong><br>Vaksin ini diberikan melalui suntikan dan mengandung virus polio yang telah dimatikan. IPV lebih banyak digunakan di negara-negara yang telah hampir bebas dari polio karena tidak mengandung risiko penularan virus.</p></li>
                                    </ul>
                                    <p style="text-align:justify;">Di Indonesia, OPV dan IPV digunakan dalam kombinasi sebagai bagian dari program imunisasi dasar. Sekolah sering menjadi tempat di mana vaksin polio oral (OPV) diberikan secara massal kepada anak-anak usia sekolah.</p>
                                    <p style="text-align:justify;"><strong>Program Bulan Imunisasi Anak Sekolah (BIAS)</strong><br>Imunisasi polio di sekolah biasanya dilakukan melalui <strong>Bulan Imunisasi Anak Sekolah (BIAS)</strong>, sebuah program pemerintah yang dijalankan oleh Dinas Kesehatan bekerjasama dengan Dinas Pendidikan. Program BIAS bertujuan untuk memastikan anak-anak usia sekolah dasar (SD) mendapatkan vaksinasi yang dibutuhkan, termasuk vaksin polio.</p>
                                    <p style="text-align:justify;">Dalam program ini, tenaga kesehatan dari puskesmas atau fasilitas kesehatan setempat datang langsung ke sekolah-sekolah untuk memberikan vaksin kepada anak-anak. Program BIAS juga disertai dengan penyuluhan kepada para guru, orang tua, dan anak-anak tentang pentingnya imunisasi sebagai perlindungan dari berbagai penyakit berbahaya, termasuk polio.</p>
                                    <p style="text-align:justify;"><strong>Dukungan Orang Tua dalam Program Imunisasi Polio di Sekolah</strong><br>Peran orang tua sangat penting dalam mendukung keberhasilan program imunisasi polio di sekolah. Dengan memberikan izin dan dukungan penuh, orang tua membantu memastikan anak-anak mereka mendapatkan perlindungan terbaik dari penyakit polio. Orang tua juga diharapkan untuk terus memantau jadwal imunisasi anak, serta memberikan edukasi tentang pentingnya vaksinasi.</p>
                                    <p style="text-align:justify;">Jika anak-anak tidak mendapatkan imunisasi polio di sekolah karena alasan tertentu, orang tua dapat mengunjungi puskesmas terdekat untuk memastikan anak tetap menerima vaksin yang dibutuhkan.</p>
                                    <p style="text-align:justify;"><strong>Menuju Indonesia Bebas Polio</strong><br>Upaya imunisasi polio di sekolah adalah bagian dari langkah besar menuju <strong>Indonesia bebas polio</strong>. Melalui vaksinasi yang merata dan tepat waktu, kita bersama-sama dapat menghapuskan polio dari Indonesia dan dunia. Dengan terus mendukung program imunisasi, baik di sekolah maupun di luar, kita melindungi kesehatan anak-anak kita dan memastikan mereka tumbuh sehat tanpa ancaman penyakit yang mematikan ini.</p>
                                    <p style="text-align:justify;"><strong>Kesimpulan</strong><br>Imunisasi polio di sekolah adalah bagian penting dari program kesehatan masyarakat yang bertujuan untuk melindungi anak-anak dari penyakit berbahaya dan menular. Dengan memberikan vaksin polio kepada anak-anak usia sekolah, pemerintah memastikan bahwa generasi muda kita terlindungi dari risiko polio, sebuah penyakit yang dapat menyebabkan kelumpuhan permanen. Dukungan dari sekolah, tenaga kesehatan, dan orang tua sangat penting dalam keberhasilan program ini, yang akhirnya akan membawa kita lebih dekat menuju masa depan yang bebas polio.</p>',
                'categorys_id' => '2',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ], [
                'image' => '4.jpg',
                'title' => 'Kegiatan Merchandise Band Sekolah: Mendorong Kreativitas dan Kebersamaan',
                'link' => 'Kegiatan-Merchandise-Band-Sekolah-Mendorong-Kreativitas-dan-Kebersamaan', // simbol harus di replace dan dll
                'description' => '<p style="text-align:justify;">Kegiatan merchandise band sekolah merupakan sebuah inisiatif yang melibatkan siswa dalam pembuatan, pemasaran, dan penjualan produk-produk yang berkaitan dengan band sekolah atau band favorit mereka. Kegiatan ini tidak hanya meningkatkan semangat kebersamaan, tetapi juga memberikan pengalaman berharga dalam aspek kreativitas, kewirausahaan, dan pengorganisasian.</p>
                                    <p style="text-align:justify;"><strong>Tujuan Kegiatan Merchandise Band Sekolah</strong></p>
                                    <ul>
                                        <li><p style="text-align:justify;"><strong>1. Mendukung Band Sekolah</strong><br>Kegiatan ini bertujuan untuk mendukung band sekolah dalam hal pendanaan. Hasil penjualan merchandise dapat digunakan untuk membeli alat musik, perlengkapan, atau biaya untuk konser dan acara lainnya.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>2. Meningkatkan Kreativitas Siswa</strong><br>Siswa diberi kesempatan untuk terlibat dalam desain dan produksi merchandise, yang merangsang kreativitas mereka. Proses ini dapat melibatkan pembuatan desain kaos, poster, dan produk lainnya.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>3. Pengalaman Kewirausahaan</strong><br>Melalui kegiatan ini, siswa belajar tentang dasar-dasar kewirausahaan, mulai dari perencanaan, pemasaran, hingga penjualan. Ini memberi mereka pemahaman praktis tentang bagaimana menjalankan bisnis.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>4. Memperkuat Rasa Kebersamaan</strong><br>Kegiatan ini menciptakan kesempatan bagi siswa untuk bekerja sama, berkolaborasi, dan membangun hubungan yang lebih kuat antar anggota band dan teman sekelas.</p></li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Langkah-Langkah Pelaksanaan Kegiatan Merchandise Band Sekolah</strong></p>
                                    <ul>
                                        <li><p style="text-align:justify;"><strong>1. Perencanaan</strong><br>Siswa dan guru dapat membentuk tim kecil untuk merencanakan kegiatan ini. Diskusikan jenis merchandise yang akan dijual, seperti kaos, hoodie, poster, atau aksesori. Tentukan juga desain dan target pasar.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>2. Desain Produk</strong><br>Melibatkan siswa dalam proses desain dapat meningkatkan minat mereka. Adakan lomba desain untuk kaos atau poster yang akan dijual. Pilih desain terbaik untuk diproduksi.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>3. Produksi</strong><br>Setelah desain final dipilih, produk dapat diproduksi. Siswa dapat bekerja sama dengan penyedia layanan cetak lokal atau melakukan produksi secara mandiri untuk barang-barang sederhana.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>4. Pemasaran</strong><br>Rencanakan strategi pemasaran untuk menjangkau penggemar band dan siswa lainnya. Gunakan media sosial, pengumuman di sekolah, dan poster untuk mempromosikan produk.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>5. Penjualan</strong><br>dakan acara penjualan di sekolah, seperti saat acara konser, festival, atau bazaar. Siswa dapat mengelola stan merchandise dan berinteraksi langsung dengan pembeli.</p></li>
                                        <li><p style="text-align:justify;"><br><strong>6. Evaluasi</strong><br>Setelah kegiatan selesai, lakukan evaluasi untuk mengetahui apa yang berhasil dan apa yang bisa diperbaiki di masa mendatang. Diskusikan pengalaman yang didapat selama kegiatan.</p></li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Contoh Merchandise yang Dapat Dijual</strong></p>
                                    <ul>
                                        <li><strong>Kaos dan Hoodie</strong>: Menampilkan logo atau nama band sekolah.</li>
                                        <li><strong>Poster</strong>: Artwork atau foto band saat tampil.</li>
                                        <li><strong>Aksesori</strong>: Pin, stiker, dan gelang dengan desain unik.</li>
                                        <li><strong>CD atau Vinyl</strong>: Jika band sekolah telah merekam musik, produk ini dapat dijadikan merchandise.</li>
                                    </ul>
                                    <p style="text-align:justify;"><strong>Kesimpulan</strong><br>Kegiatan merchandise band sekolah adalah peluang emas bagi siswa untuk mengekspresikan kreativitas, belajar tentang kewirausahaan, dan mendukung band sekolah mereka. Dengan melibatkan siswa dalam setiap tahap dari perencanaan hingga penjualan, kegiatan ini tidak hanya memberikan pengalaman berharga, tetapi juga memperkuat rasa kebersamaan dan cinta terhadap musik di lingkungan sekolah. Kegiatan ini menjadi contoh nyata bagaimana musik dapat menyatukan dan menginspirasi generasi muda.</p>',
                'categorys_id' => '2',
                'user_created' => '1',
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ];
        DB::table('articles')->insert($articles);
    }
}
