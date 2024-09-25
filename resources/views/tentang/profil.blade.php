@extends('frontend.main')
@section('content')
    <section class="about about-1" id="about-1">
        <div class="bg-section">
            <img src="{{ asset('assets/images/background/8.jpg') }}" alt="Background" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img-holder">
                        <div class="about-img">
                            <img class="img-fluid" src="{{ asset('assets/files/ketua/ketua.jpg') }}" alt="about Image"
                                style="width: 600px" />
                            <div class="offer-banner">
                                <div class="banner-body">
                                    <h3>{{ $founders ? $founders->name : '' }}</h3>
                                    <p>Ketua Yayasan</p>
                                    <p class="price-info"><span class="currency">{{ $founders ? $founders->year : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="heading heading-11">
                        <div class="row">
                            <div class="col-12">
                                <p class="heading-subtitle">Sambutan Ketua Yayasan!</p>
                                <h2 class="heading-title">Ketua Yayasan Dharmawidya <br>
                                    {{ $founders ? $founders->name : '' }}
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-2">
                                <p class="heading-desc" style="text-align: justify">
                                    {!! $founders ? $founders->description : '' !!}
                                </p>
                                <div class="about-action"> <a class="btn btn--secondary"
                                        href="{{ route('visimisi.index') }}">Visi Misi <i class="icon-arrow-right"></i></a>
                                    <div class="signature-block">
                                        <div class="signature-body">
                                            <h3>{{ $founders ? $founders->name : '' }}</h3>
                                            <p>Ketua Yayasan</p><img class="signature-img"
                                                src="{{ asset('assets/images/signature/1.png') }}" alt="signature" />
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
