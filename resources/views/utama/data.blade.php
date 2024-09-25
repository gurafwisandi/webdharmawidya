@extends('frontend.main')
@section('content')
    {{-- slider --}}
    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pr-0 pl-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots carousel-dots-white" data-slide="1"
                data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
                data-speed="800" data-slider-id="#custom-carousel">
                @foreach ($sliders as $item)
                    <div class="slide bg-overlay bg-overlay-dark-slider">
                        <div class="bg-section">
                            <img src="{{ asset('assets/files/sliders/' . $item->image) }}" alt="Background" />
                        </div>
                        <div class="container">
                            <div class="slide-content">
                                <div class="row">
                                    <div class="col-12 col-lg-7">
                                        <h2 class="slide-title">{{ $item->title }}</h2>
                                        <p class="slide-desc">{!! $item->description !!}</p>
                                        <div class="hero-action">
                                            @if ($item->link)
                                                <a class="btn btn--white justify-content-between"
                                                    href="{{ $item->link }}">Link <i class="icon-arrow-right"></i></a>
                                            @endif
                                            @if ($item->link && $item->video)
                                                <br>
                                            @endif
                                            @if ($item->video)
                                                <a class="popup-video btn-video" href="{{ $item->video }}">
                                                    <div class="icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="13px"
                                                            height="14px">
                                                            <path fill-rule="evenodd" fill="currentColor"
                                                                d="M2.636,0.588 L12.353,5.718 C13.205,6.398 13.205,7.499 12.353,8.180 L2.636,13.311 C1.783,13.991 -0.000,13.908 -0.000,13.908 L-0.000,-0.009 C-0.000,-0.009 1.783,-0.092 2.636,0.588 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- slider --}}

    {{-- label sekolah --}}
    <section class="features-bar" id="features-bar">
        <div class="container">
            <div class="features-container">
                <div class="feature-head bg-overlay bg-overlay-theme-light">
                    <div class="bg-section">
                        <img src="{{ asset('assets/files/dharma/reservation.jpg') }}" alt="img" />
                    </div>
                    <div class="card-badge">
                        <img src="assets/images/sidebar/unggulan.png" alt="Badge" />
                    </div>
                    @if ($keunggulan)
                        <div class="head-content">
                            <h2>{{ $keunggulan->nama }}</h2>
                            <p>{{ $keunggulan->description }}</p>
                            <p><br>&nbsp;</p>
                        </div>
                    @endif
                </div>
                @foreach ($tagline as $tagline)
                    <div class="feature-panels-holder">
                        <div class="feature-panel">
                            <h2>{{ $tagline->nama }}</h2>
                            <p>{{ $tagline->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- sambutan --}}
    <section class="about about-2" id="about-2">
        <div class="bg-section"><img src="assets/images/background/shape-3.png" alt="Background" /></div>
        <div class="container">
            <div class="heading heading-12">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <p class="heading-subtitle">Mengapa Memilih Kami ?</p>
                        <h2 class="heading-title">Kami pilihan utama pendidikan Karakter dan Akademis</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 offset-lg-1 col-lg-4">
                        <p class="heading-desc" style="text-align: justify">
                            {!! $founders ? substr($founders->description, 0, 920) : '' !!}
                            @if (strlen($founders->description) > 900)
                                ..
                            @endif
                        </p>
                        <div class="about-action">
                            <a class="btn btn--secondary" href="{{ route('visimisi.index') }}">Visi dan Misi <i
                                    class="icon-arrow-right"></i></a>
                            <div class="signature-block">
                                <div class="signature-body">
                                    <h3>{{ $founders ? $founders->name : '' }}</h3>
                                    <p>Ketua Yayasan</p>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="col-12 offset-lg-1 col-lg-6" style="display: grid; place-items: center;">
                        <div class="about-img-holder">
                            <div class="about-img"><img class="img-fluid" src="{{ asset('assets/files/ketua/ketua.jpg') }}"
                                    alt="about Image" />
                                {{-- <div class="offer-banner">
                                    <div class="banner-body">
                                        <h3>{{ $founders ? $founders->name : '' }}</h3>
                                        <p>Ketua</p>
                                        <p class="price-info"><span class="currency">Yayasan</span></p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- sambutan --}}

    {{-- jenjang pendidikan ? --}}
    <section class="services services-2 bg-gray" id="services-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-1 text--center">
                        <p class="heading-subtitle">Jenjang Akademik</p>
                        <h2 class="heading-title">Jenjang Pendidikan Dharma Widya</h2>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="200">
                <div>
                    <div class="service-panel">
                        <div class="service-content">
                            <div class="service-iconku">
                                <img src="{{ asset('assets/files/dharma/logo.png') }}" style="height: 100%"
                                    alt="Service Iconku">
                            </div>
                            <div class="service-title" style="text-align: center;">
                                <h3>
                                    <a href="javascript:void(0);">TK</a><br>
                                    <a href="javascript:void(0);" style="font-size: 17px;">Taman Kanak-kanak</a>
                                </h3>
                            </div>
                            <div class="service-desc">
                                <p>Taman Kanak-kanak adalah tempat awal anak belajar bersosialisasi, bermain, dan
                                    mengembangkan kreativitas. Dengan pendekatan yang menyenangkan, mereka mulai membangun
                                    fondasi pendidikan dan mengenal lingkungan sekitar dengan rasa ingin tahu.</p>
                            </div>
                        </div>
                        <div class="service-img"><img src="{{ asset('assets/images/background/shape-3.png') }}"
                                alt="service img" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-panel">
                        <div class="service-content">
                            <div class="service-iconku">
                                <img src="{{ asset('assets/files/dharma/logo.png') }}" style="height: 100%"
                                    alt="Service Iconku">
                            </div>
                            <div class="service-title" style="text-align: center;">
                                <h3>
                                    <a href="javascript:void(0);">SD</a><br>
                                    <a href="javascript:void(0);" style="font-size: 17px;">Sekolah Dasar</a>
                                </h3>
                            </div>
                            <div class="service-desc">
                                <p>Sekolah Dasar adalah fondasi utama pendidikan, di mana anak belajar keterampilan dasar,
                                    membentuk karakter, dan tumbuh dengan kreativitas serta rasa ingin tahu. Ini adalah
                                    tahap awal yang penting dalam pengembangan pengetahuan dan sikap.</p>
                            </div>
                        </div>
                        <div class="service-img"><img src="{{ asset('assets/images/background/shape-3.png') }}"
                                alt="service img" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-panel">
                        <div class="service-content">
                            <div class="service-iconku">
                                <img src="{{ asset('assets/files/dharma/logo.png') }}" style="height: 100%"
                                    alt="Service Iconku">
                            </div>
                            <div class="service-title" style="text-align: center;">
                                <h3>
                                    <a href="javascript:void(0);">SMP</a><br>
                                    <a href="javascript:void(0);" style="font-size: 17px;">Sekolah Menengah Pertama</a>
                                </h3>
                            </div>
                            <div class="service-desc">
                                <p>Sekolah Menengah Pertama adalah masa transisi penting, di mana siswa mengasah pemahaman,
                                    membentuk jati diri, dan bersiap menghadapi tantangan lebih besar. Pada tahap ini,
                                    mereka dipersiapkan untuk melanjutkan ke jenjang pendidikan berikutnya.
                                </p>
                            </div>
                        </div>
                        <div class="service-img"><img src="{{ asset('assets/images/background/shape-3.png') }}"
                                alt="service img" />
                        </div>
                    </div>
                </div>
                <div>
                    <div class="service-panel">
                        <div class="service-content">
                            <div class="service-iconku">
                                <img src="{{ asset('assets/files/dharma/logo.png') }}" style="height: 100%"
                                    alt="Service Iconku">
                            </div>
                            <div class="service-title" style="text-align: center;">
                                <h3>
                                    <a href="javascript:void(0);">SMK</a><br>
                                    <a href="javascript:void(0);" style="font-size: 17px;">Sekolah Menengah Kejuruan</a>
                                </h3>
                            </div>
                            <div class="service-desc">
                                <p>Sekolah Menengah Kejuruan membekali siswa dengan keterampilan praktis dan keahlian
                                    khusus, mempersiapkan mereka untuk langsung terjun ke dunia kerja atau melanjutkan
                                    pendidikan lebih tinggi. Ini adalah langkah penting menuju karir yang sukses.</p>
                            </div>
                        </div>
                        <div class="service-img"><img src="{{ asset('assets/images/background/shape-3.png') }}"
                                alt="service img" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- metode pembelajaran ? --}}
    <section class="processes processes-3 bg-gray" id="processes-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-3 text-center">
                        <p class="heading-subtitle">Metode Pembelajaran Kami!</p>
                        <h2 class="heading-title">Metode-Metode Pembelajaran</h2>
                    </div>
                </div>
            </div>
            <div class="processes-holder">
                <div class="carousel owl-carousel" data-slide="4" data-slide-rs="2" data-autoplay="true"
                    data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                    @foreach ($metode as $mepem)
                        <div>
                            <div class="process-panel"><img class="panel-shape"
                                    src="assets/images/background/shape-light-1.png" alt="Image" />
                                <p class="process-number">{{ $loop->iteration }}</p>
                                <div class="process-body">
                                    <div class="process-icon">
                                        <i class="{{ $mepem->icon }}"></i>
                                    </div>
                                    <div class="process-content">
                                        <h3>{{ $mepem->nama }}</h3>
                                        <p>Melibatkan siswa secara aktif dalam proses pembelajaran, seperti diskusi
                                            kelompok,
                                            proyek berbasis masalah, dan simulasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- galery --}}
    <section class="industries industries-1" id="industries-1">
        <div class="bg-section"><img src="assets/images/background/8.jpg" alt="Background" /></div>
        <div class="industries-overlay bg-overlay bg-overlay-theme-dark">
            <div class="bg-section"><img src="assets/images/background/1.jpg" alt="Background" /></div>
        </div>
        <div class="industries-content">
            <div class="container">
                <div class="heading heading-2 heading-light">
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="heading-subtitle">Galeri Kegiatan</p>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <h2 class="heading-title">Fasilitas merupakan sarana dan prasarana pembelajaran</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-1">
                            <p class="heading-desc">Galeri Kegiatan sekolah kami memperlihatkan ragam
                                fasilitas modern dan beragam kegiatan yang menginspirasi, mencakup ruang kelas inovatif,
                                perpustakaan lengkap, serta kegiatan ekstrakurikuler yang beragam dan berkesan bagi siswa.
                            </p>
                            <div class="actions-holder"><a
                                    class="btn btn--transparent btn--primary justify-content-between" href="">Lihat
                                    lebih banyak <i class="icon-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="carousel owl-carousel carousel-dots carousel-dots-white" data-slide="3" data-slide-rs="1"
                    data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true"
                    data-speed="200">
                    @foreach ($fotos as $item)
                        <div>
                            <div class="industry-panel" data-hover="">
                                <div class="industry-content">
                                    <div class="industry-title">
                                        <h3><a
                                                href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $item->unit, 'type' => 'foto']) }}">{{ $item->activity->activity }}</a>
                                        </h3>
                                    </div>
                                    <div class="industry-body">
                                        <div class="industry-label"><span>{{ $item->activity->year }}</span></div>
                                        <div class="industry-name">
                                            <h3><a
                                                    href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $item->unit, 'type' => 'foto']) }}">{{ $item->activity->activity }}</a>
                                            </h3>
                                        </div>
                                        <div class="industry-desc">
                                            <p></p>
                                        </div>
                                        <div class="industry-more"><a
                                                href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $item->unit, 'type' => 'foto']) }}"><i
                                                    class="icon-arrow-right"></i>read
                                                more </a></div>
                                    </div>
                                </div>
                                <div class="industry-img"><img src="{{ asset('assets/files/gallery/' . $item->image) }}"
                                        alt="industry img" />
                                    <div class="industry-img-overlay"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- galery --}}

    {{-- ekstrakuler ? --}}
    <section class="features features-2" id="features-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">
                        <p class="heading-subtitle">Ekstrakurikuler Sekolah</p>
                        <h2 class="heading-title">Berbagai kegiatan Ekstrakurikuler sekolah</h2>
                    </div>
                </div>
            </div>
            <div class="features-holder">
                <div class="carousel owl-carousel" data-slide="4" data-slide-rs="2" data-autoplay="true"
                    data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                    @foreach ($eskul as $eskul)
                        <div>
                            <div class="feature-panel feature-panel-2">
                                <div class="feature-content">
                                    <h3>{{ $eskul->nama }}</h3>
                                    <p>{{ $eskul->description }}
                                    </p>
                                </div>
                                <div class="feature-icon"><i class="{{ $eskul->icon }}" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- articels --}}
    <section class="blog blog-grid blog-grid-1" id="blog-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-12 text-center">
                        <p class="heading-subtitle">Recent Articles</p>
                        <h2 class="heading-title">Artikel Terbaru Dharma Widya</h2>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel" data-slide="3" data-slide-rs="2" data-autoplay="true" data-nav="false"
                data-dots="false" data-space="30" data-loop="true" data-speed="800">
                @foreach ($articles as $item)
                    <div>
                        <div class="blog-entry" data-hover="">
                            <div class="entry-img">
                                @if ($item->created_at)
                                    <div class="entry-date"><span
                                            class="month">{{ date('F Y', strtotime($item->created_at)) }}</span><span
                                            class="day">{{ date('d', strtotime($item->created_at)) }}</span>
                                    </div>
                                @endif
                                <div class="entry-img-holder"><img
                                        src="{{ asset('assets/files/articles/' . $item->image) }}"
                                        alt="{{ $item->title }}" />
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <div class="entry-category">
                                        @if ($item->categorys_id != '')
                                            @foreach (explode('|', $item->categorys_id) as $category)
                                                @if ($category)
                                                    @php
                                                        $category = DB::table('categories')
                                                            ->where('id', $category)
                                                            ->first();
                                                    @endphp
                                                    <a href="javascript:void(0)">{{ $category->category }}</a>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                    <div class="divider"></div>
                                    <div class="entry-author">
                                        <p>{{ $item->user ? $item->user->name : '' }}</p>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    @php
                                        $title = str_replace(' ', '-', $item->title);
                                    @endphp
                                    <h4><a
                                            href="{{ route('articles.details', ['id' => $title]) }}">{{ $item->title }}</a>
                                    </h4>
                                </div>
                                <div class="entry-bio" style="text-align: justify">
                                    <p>{!! substr($item->description, 0, 200) !!}</p>
                                </div>
                                <div class="entry-more">
                                    <a class="btn" href="{{ route('articles.details', ['id' => $title]) }}">read
                                        more <i class="icon-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="more-blogs">
                <p><a href="{{ route('articles.index') }}">Lihat artikel lainnya!</a></p>
            </div>
        </div>
    </section>
    {{-- articels --}}
@endsection
