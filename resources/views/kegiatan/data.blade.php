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
                {{-- <div class="offer-banner">
                <div class="banner-body">
                    <h3>Terakreditasi</h3>
                    <p class="price-info"><span class="currency">A</span></p>
                    <p>Kami tempat belajar terbaik</p>
                </div>
                <div class="banner-close"> <i class="fas fa-times"></i></div>
            </div> --}}
            </div>
        </section>
    @endif
    <section class="single-product" id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-13 text--center">
                        <p class="heading-subtitle">Momen Kegiatan Siswa
                            @if ($unit == 'tk')
                                Taman Kana-kanak (TK)
                            @elseif ($unit == 'sd')
                                Sekolah Dasar (SD)
                            @elseif ($unit == 'smp')
                                Sekolah Menengah Pertama (SMP)
                            @elseif ($unit == 'smk')
                                Sekolah Menengah Kejuruan (SMK)
                            @endif
                        </p>
                        <h2 class="heading-title">Daftar Kegiatan Foto dan Video</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a class="active" href="#description" data-bs-target="#description"
                                    aria-controls="description" role="tab" data-bs-toggle="tab"
                                    aria-selected="true">Foto</a></li>
                            <li role="presentation"><a href="#details" data-bs-target="#details" aria-controls="details"
                                    role="tab" data-bs-toggle="tab" aria-selected="false" class="">Video</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="description" role="tabpanel">
                                <div class="projects-gallery container" id="projects-gallery">
                                    <div class="row">
                                        @foreach ($fotos as $item)
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="project-panel">
                                                    <div class="project-img">
                                                        <a
                                                            href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $unit, 'type' => 'foto']) }}">
                                                            <img class=" btn-video"
                                                                src="{{ asset('assets/files/gallery/' . $item->image) }}"
                                                                alt=" item" />
                                                            <div class="product-item">
                                                                <div class="product-content">
                                                                    <div class="product-title">
                                                                        <a
                                                                            href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $unit, 'type' => 'foto']) }}">
                                                                            {{ $item->activity->activity }}
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <span>{{ $item->activity->year }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            @if (count($fotos) > 0)
                                                <a class="btn btn--secondary"
                                                    href="{{ route('kegiatan.moment', ['unit' => $unit, 'type' => 'foto']) }}">Load
                                                    More</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="details" role="tabpanel">
                                <div class="projects-gallery container" id="projects-gallery">
                                    <div class="row">
                                        @foreach ($videos as $item)
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="project-panel">
                                                    <div class="project-img bg-gray">
                                                        <a
                                                            href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $unit, 'type' => 'video']) }}">
                                                            <img src="{{ asset('assets/files/dharma/play.png') }}" />
                                                            <div class="product-item">
                                                                <div class="product-content">
                                                                    <div class="product-title">
                                                                        <a
                                                                            href="{{ route('kegiatan.details', ['id' => Crypt::encryptString($item->activity_id), 'unit' => $unit, 'type' => 'video']) }}">
                                                                            {{ $item->activity->activity }}
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <span>{{ $item->activity->year }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            @if (count($videos) > 0)
                                                <a class="btn btn--secondary"
                                                    href="{{ route('kegiatan.moment', ['unit' => $unit, 'type' => 'video']) }}">
                                                    Load More
                                                </a>
                                            @endif
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
