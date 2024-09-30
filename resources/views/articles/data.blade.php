@extends('frontend.main')
@section('content')
    <section class="blog blog-grid" id="blog">
        <div class="container">
            <div class="row">
                <div class="row mt-5">
                    <div class="col-12 col-lg-8 offset-lg-2">
                        <div class="heading heading-1 text--center">
                            <p class="heading-subtitle">Dharma Widya</p>
                            <h2 class="heading-title">Artikel Kegiatan sekolah serta prestasi</h2>
                        </div>
                    </div>
                </div>
                @isset($text)
                    <div class="row">
                        <div class="col-12 col-lg-12">
                            <div class="widget widget-search" style="background-color: #44d6fe;">
                                <div class="widget-title">
                                    <h3 style="color: white">search</h3>
                                </div>
                                <div class="widget-content">
                                    <form class="form-search" action="{{ route('form') }}" method="POST" novalidate>
                                        @csrf
                                        <div class="input-group">
                                            <input class="form-control" name="text" type="text"
                                                value="{{ $text }}" placeholder="Search ..." />
                                            <button class="btn" type="button"><i class="icon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endisset
                @foreach ($articles as $item)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="blog-entry" data-hover="">
                            <div class="entry-img">
                                @if ($item->created_at)
                                    <div class="entry-date"><span
                                            class="month">{{ date('M Y', strtotime($item->created_at)) }}</span><span
                                            class="day">{{ date('d', strtotime($item->created_at)) }}</span>
                                    </div>
                                @endif
                                <a href="blog-single-sidebar.html"></a>
                                <div class="entry-img-holder"><img
                                        src="{{ asset('assets/files/articles/' . $item->image) }}"
                                        alt="{{ $item->title }}" /></div>
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
                                        <p>{{ $item->user->name }}</p>
                                    </div>
                                </div>
                                <div class="entry-title">
                                    <h4><a
                                            href="{{ route('articles.details', ['id' => $item->link]) }}">{{ $item->title }}</a>
                                    </h4>
                                </div>
                                <div class="entry-bio">
                                    <p>{!! substr($item->description, 0, 200) !!}</p>
                                </div>
                                <div class="entry-more"> <a class="btn"
                                        href="{{ route('articles.details', ['id' => $item->link]) }}">read
                                        more <i class="icon-arrow-right"></i></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12 clearfix text--center">
                    <nav>{{ $articles->links('pagination::bootstrap-4') }}</nav>
                </div>
            </div>
        </div>
    </section>
@endsection
