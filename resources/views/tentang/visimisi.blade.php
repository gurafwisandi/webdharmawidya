@extends('frontend.main')
@section('content')
    <section class="offers offers-2 bg-gray">
        <div class="row g-0">
            <div class="offers-holder bg-overlay">
                <div class="offer-plan plan-top">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="plan-badge"> <img src="assets/images/services/badge.png" alt="Image"></div>
                            <div class="card-icon"><i class="fimanager flaticon-001-house"></i></div>
                            <div class="card-infos">
                                <h2 class="entry-heading">Visi</h2>
                                <div class="row">
                                    {!! $settings->visi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offer-plan plan-bottom">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-icon"><i class="fimanager flaticon-001-house"></i></div>
                            <div class="card-infos">
                                <h2 class="entry-heading">Misi</h2>
                                <div class="row">
                                    {!! $settings->misi !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
