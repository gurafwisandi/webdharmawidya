@extends('frontend.main')
@section('content')
    <section class="blog blog-single" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="blog-entry">
                        <div class="entry-content">
                            <div class="entry-title">
                                <h2>Fasilitas</h2>
                            </div>
                            <div class="entry-bio">
                                <p style="text-align:justify;">Yayasan Pendidikan Dharmawidya Sekolah Buddha berkomitmen
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
                                    menyeluruh.</p>
                            </div>
                            <div class="entry-infos">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <img src="{{ asset('assets/files/fasilitas/fasilitas.png') }}" alt="Image" />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="prices-list">
                                            <h3>Fasilitas:</h3>
                                            <ul class="list-unstyled" style="text-align">
                                                <li>Ruang Kelas Modern<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Laboratorium Komputer<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Laboratorium Sains<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Perpustakaan<span class="price"><i class="fas fa-check"></i></span>
                                                </li>
                                                <li>Ruang Meditasi dan Doa<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Aula Serbaguna<span class="price"><i class="fas fa-check"></i></span>
                                                </li>
                                                <li>Lapangan Olahraga<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Ruang Kegiatan Ekstrakurikuler<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Kantin Sehat<span class="price"><i class="fas fa-check"></i></span>
                                                </li>
                                                <li>Area Parkir yang Aman<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                                <li>Wi-Fi Gratis<span class="price"><i class="fas fa-check"></i></span>
                                                </li>
                                                <li>Ruang Kesehatan(UKS)<span class="price"><i
                                                            class="fas fa-check"></i></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
