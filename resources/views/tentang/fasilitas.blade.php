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
                                {!! $fasilitas->description !!}
                            </div>
                            @if (count($fasilitas_image) > 0)
                                <div class="entry-infos">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <section class="projects-gallery" id="projects-gallery" style="padding:0px;">
                                                <div class="container">
                                                    <div class="row">
                                                        @php
                                                            $i = 0;
                                                            $ii = 0;
                                                        @endphp
                                                        @foreach ($fasilitas_image as $item)
                                                            <div class="col-12 col-md-12 col-lg-12"
                                                                @if ($ii++ != 0) hidden @endif>
                                                                <div class="project-panel">
                                                                    <div class="project-img">
                                                                        @if ($i++ < 1)
                                                                            <img src="{{ asset('assets/files/fasilitas/' . $item->image) }}"
                                                                                alt=" item" />
                                                                        @endif
                                                                        @if ($item->image)
                                                                            <div class="project-zoom">
                                                                                <i class="far fa-eye"></i>
                                                                                <a class="img-gallery-item"
                                                                                    href="{{ asset('assets/files/fasilitas/' . $item->image) }}"
                                                                                    title="{{ $item->name }}"></a>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="prices-list">
                                                <h3>Fasilitas:</h3>
                                                <ul class="list-unstyled" style="text-align">
                                                    @foreach ($fasilitas_image as $item)
                                                        <li>
                                                            {{ $item->name }}
                                                            <span class="price"><i class="fas fa-check"></i></span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
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
@endsection
