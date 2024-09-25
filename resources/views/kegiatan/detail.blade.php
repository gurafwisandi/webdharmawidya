@extends('frontend.main')
@section('content')
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
    <section class="single-product" id="single-product">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-13 text--center">
                        <p class="heading-subtitle">Momen Kegiatan Siswa</p>
                        <h2 class="heading-title">Daftar Kegiatan Foto dan Video {{ strtoupper($unit) }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tabs">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a class="{{ $type == 'foto' ? 'active' : '' }}"
                                    href="{{ route('kegiatan.moment', ['type' => 'foto', 'unit' => $unit]) }}">Foto</a></li>
                            <li role="presentation"><a class="{{ $type == 'video' ? 'active' : '' }}"
                                    href="{{ route('kegiatan.moment', ['type' => 'video', 'unit' => $unit]) }}">Video</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <h3 class="card-heading">
                                {{ $results[0]->activity->activity . ' ' . $results[0]->activity->year }}</h3>
                            @if ($type == 'foto')
                                <div class="tab-pane {{ $type == 'foto' ? 'active' : '' }}" id="description"
                                    role="tabpanel">
                                    <div class="projects-gallery container" id="projects-gallery">
                                        <div class="row">
                                            @foreach ($results as $item)
                                                <div class="col-12 col-md-6 col-lg-4  ">
                                                    <div class="project-panel">
                                                        <div class="project-img"><img
                                                                src="{{ asset('assets/files/gallery/' . $item->image) }}"
                                                                alt=" item" />
                                                            <div class="project-zoom">
                                                                <i class="far fa-eye"></i>
                                                                <a class="img-gallery-item"
                                                                    href="{{ asset('assets/files/gallery/' . $item->image) }}"
                                                                    title="solar panels item"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="tab-pane {{ $type == 'video' ? 'active' : '' }}" id="details"
                                    role="tabpanel">
                                    <div class="projects-gallery container" id="projects-gallery">
                                        <div class="row">
                                            @foreach ($results as $item)
                                                <div class="col-12 col-md-6 col-lg-4  ">
                                                    <div class="project-panel">
                                                        <div class="project-img">
                                                            @if ($item->iframe)
                                                                {!! $item->image !!}
                                                            @else
                                                                <video width="400" height="400" controls>
                                                                    <source
                                                                        src="{{ asset('assets/files/gallery/' . $item->image) }}"
                                                                        type="video/mp4">
                                                                </video>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog blog-single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-entry">
                        <div class="nav-posts">
                            <div class="prev-post">
                                <a class="btn"
                                    href="{{ route('kegiatan.moment', ['type' => $type, 'unit' => $unit]) }}">
                                    <i class="icon-arrow-right"></i>
                                    Kembali
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
