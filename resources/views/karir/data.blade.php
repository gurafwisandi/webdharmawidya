@extends('frontend.main')
@section('content')
    <section class="hero hero-11 bg-overlay bg-overlay-dark-2">
        <div class="bg-section"><img src="{{ asset('assets/files/career/career.png') }}" alt="background" /></div>
    </section>
    <section class="careers careers-1" id="careers">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-19 text-center">
                        <p class="heading-subtitle">Ayo bergabung bersama kami!</p>
                        <h2 class="heading-title">Lowongan pekerjaan Dharma Widya</h2>
                    </div>
                </div>
            </div>
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="2" data-autoplay="true"
                data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                @foreach ($careers as $item)
                    <div class="career-item">
                        <div class="career-meta">
                            <p class="career-type">{{ $item->working_day }}</p>
                            <p class="career-place">{{ $item->division }}</p>
                        </div>
                        <div class="career-content">
                            <h4 class="career-title">{{ $item->title }}</h4>
                            <p class="career-desc">
                                {!! substr($item->description, 0, 200) !!}
                                @if (strlen($item->description) > 200)
                                    ..
                                @endif
                            </p>
                            <a class="career-more btn btn--secondary btn--bordered"
                                href="{{ route('karir.details', ['id' => $item->link]) }}">explore
                                more</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
