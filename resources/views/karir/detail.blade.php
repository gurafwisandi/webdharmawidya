@extends('frontend.main')
@section('content')
    <section class="blog blog-single" id="blog">
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="/karir">blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $jobs->title }}</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-entry">
                        <div class="entry-img">
                            <img src="{{ asset('assets/files/career/career.png') }}" alt="entry image" />
                            <div class="entry-date">
                                <span class="month">{{ date('M', strtotime($jobs->created_at)) }}</span>
                                <span class="day">{{ date('d', strtotime($jobs->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <div class="entry-title">
                                <h2>{{ $jobs->title }}</h2>
                            </div>
                            <div class="entry-bio" style="text-align: justify;">
                                {!! $jobs->description !!}</p>
                            </div>
                        </div>
                        <div class="entry-widget entry-add-comment mb-0 clearfix">
                            <div class="entry-widget-title">
                                <h3>Lamar</h3>
                            </div>
                            <div class="entry-widget-content">
                                <form class="mb-0" id="post-comment">
                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <input class="form-control" type="text" placeholder="Name:" />
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <input class="form-control" type="email" placeholder="Email" />
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <input class="form-control" type="text" placeholder="Handphone" />
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control" type="file" placeholder="Handphone" />
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-radio-group">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadioInline1" name="customRadioInline1" />
                                                    <label for="customRadioInline1">Save my name, email, and handphone in
                                                        this browser for the next time I comment.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn--alternative" type="submit">Submit <i
                                                    class="icon-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sidebar sidebar-blog">
                        <div class="widget widget-recent-posts">
                            <div class="widget-title">
                                <h3>Careers posts</h3>
                            </div>
                            <div class="widget-content">
                                @foreach ($random as $l)
                                    <div class="post active">
                                        <div class="post-content">
                                            <div class="post-title">
                                                <a href="{{ route('karir.details', ['id' => $l->link]) }}">
                                                    {!! substr($l->title, 0, 56) !!}
                                                    @if (strlen($l->title) > 56)
                                                        ..
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="post-date">
                                                <span class="date">{{ date('d M Y', strtotime($l->created_at)) }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
