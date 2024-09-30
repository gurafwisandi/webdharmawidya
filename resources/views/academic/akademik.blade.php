@extends('frontend.main')
@section('content')
    @if (count($sliders) > 0)
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
    @endif

    @if (count($struktur) > 0)
        <section class="team team-1" id="team">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-7 text-center">
                            <p class="heading-subtitle">
                                @if ($unit == 'tk')
                                    Taman Kana-kanak (TK)
                                @elseif ($unit == 'sd')
                                    Sekolah Dasar (SD)
                                @elseif ($unit == 'smp')
                                    Sekolah Menengah Pertama (SMP)
                                @elseif ($unit == 'smk')
                                    Sekolah Menengah Kejuruan (SMK)
                                @endif
                                Dharma Widya
                            </p>
                            <h2 class="heading-title">Struktur Organisasi Sekolah</h2>
                        </div>
                    </div>
                </div>
                <div class="carousel owl-carousel" data-slide="4" data-slide-rs="3" data-autoplay="true" data-nav="false"
                    data-dots="false" data-space="30" data-loop="true" data-speed="800">
                    @foreach ($struktur as $item)
                        <div>
                            <div class="member member-2">
                                <div class="member-img"><img src="{{ asset('assets/files/guru/' . $item->image) }}"
                                        alt="Member Richard Muldoone" />
                                </div>
                                <div class="member-content">
                                    <div class="member-info"><a href="javascript:void(0)">{{ $item->name }}</a>
                                        <p>{{ $item->department }}</p>
                                    </div>
                                    <div class="member-social">
                                        @if ($item->fb)
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        @endif
                                        @if ($item->x)
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        @endif
                                        @if ($item->ink)
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if (count($services) > 0)
        <section class="features features-2" id="features-2" style="padding: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="heading heading-7 text-center">
                            <h2 class="heading-title">Layanan dan Keunggulan</h2>
                        </div>
                    </div>
                </div>
                <div class="features-holder">
                    <div class="carousel owl-carousel" data-slide="4" data-slide-rs="2" data-autoplay="true"
                        data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                        @foreach ($services as $item)
                            <div>
                                <div class="feature-panel feature-panel-2">
                                    <div class="feature-content">
                                        <h3>{{ $item->title }}
                                            @if (Str::length($item->title) <= 15)
                                                <br>&nbsp;
                                            @endif
                                        </h3>
                                        <p>{{ $item->description }}
                                            @if (Str::length($item->description) <= 55)
                                                <br>&nbsp;
                                            @endif
                                        </p>
                                    </div>
                                    <div class="feature-image">
                                        <img src="{{ asset('assets/images/favicon/evaluation.png') }}"
                                            alt="{{ $item->title }}">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="service-single" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 order-0">
                    <div class="sidebar sidebar-service">
                        <div class="widget widget-services">
                            <div class="widget-title">
                                <h3>Informasi dan Fasilitas</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    @foreach ($informations as $item)
                                        <li>
                                            <a onclick="show('{{ $item->type }}')">
                                                <span>{{ $item->title }}</span><i class="icon-arrow-right"></i>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="unit" value="{{ $unit }}">
                <div class="col-12 col-lg-8 order-1 order-lg-2">
                    <div class="service-entry">
                        <div class="entry-content">
                            <div id="prestasi-section" class="entry-introduction entry-infos">
                                <div id="showContent" style="text-align: justify"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonial testimonial-3" id="testimonial-3">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-5">
                    <div class="clients-img">
                        <img src="{{ asset('assets/images/testimonial/image.png') }}" alt="image" />
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <h2 class="section-head">Apa Kata Bunda ?</h2>
                    <div class="testimonials-holder">
                        <div class="carousel owl-carousel custom-carousel" data-slider-id="1" data-slide="1"
                            data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="false" data-space="0"
                            data-loop="false" data-speed="800">
                            @foreach ($comments as $item)
                                <div class="testimonial-panel">
                                    <div class="testimonial-body">
                                        <div class="testimonial-content">
                                            <p style="text-align: justify">{!! $item->description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="testimonial-actions">
                        <div class="testimonial-thumbs owl-thumbs" data-slider-id="1">
                            <?php $no = 0; ?>
                            @foreach ($comments as $item)
                                <div class="testimonial-thumb owl-thumb-item {{ $no == 0 ? 'active' : '' }}">
                                    <div class="thumb-img"> <img
                                            src="{{ asset('assets/files/comment/' . $item->image) }}"
                                            alt="{{ $item->name }}" /></div>
                                    <div class="thumb-body">
                                        <h3>{{ $item->name }}</h3>
                                        <p>Wali Murid</p>
                                    </div>
                                </div>
                                <?php $no++; ?>
                            @endforeach
                        </div>
                        <div class="custom-navs">
                            <a class="prev" href="javascript:void(0)"><i class="fas fa-arrow-left"></i></a>
                            <a class="next" href="javascript:void(0)"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .feature-image img {
            max-width: 50px;
            /* Sesuaikan ukuran yang diinginkan */
            height: auto;
        }
    </style>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            show('akreditasi');
        });

        function show(type) {
            unit = document.getElementById('unit').value;
            $.ajax({
                type: "POST",
                url: '{{ route('akademi_content.index') }}',
                data: {
                    "_token": "{{ csrf_token() }}",
                    type,
                    unit
                },
                success: response => {
                    if (response) {
                        document.getElementById('showContent').innerHTML = response;
                    } else {
                        document.getElementById('showContent').innerHTML =
                            ' <h2 class="entry-heading">Tidak ada datax1</h2>';
                    }
                },
                error: (err) => {
                    console.log(err);
                },
            });
        };
    </script>
@endsection
