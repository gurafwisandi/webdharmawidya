@extends('frontend.main')
@section('content')
    <section class="blog blog-single" id="blog">
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="/articles">blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-entry">
                        <div class="entry-img">
                            <img src="{{ asset('assets/files/articles/' . $article->image) }}" alt="entry image" />
                            <div class="entry-date">
                                <span class="month">{{ date('M', strtotime($article->created_at)) }}</span>
                                <span class="day">{{ date('d', strtotime($article->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            {{-- <div class="entry-meta">
                                <div class="entry-comments"><span>comments:</span><span class="num">2</span></div>
                                <div class="divider"></div>
                                <div class="entry-share"><span>share</span>
                                    <div class="module module-social">
                                        <a class="share-facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="share-instagram" href="#"><i class="fab fa-instagram"></i></a>
                                        <a class="share-twitter" href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="entry-title">
                                <h2>{{ $article->title }}</h2>
                            </div>
                            <div class="entry-bio" style="text-align: justify;">
                                {!! $article->description !!}</p>
                            </div>
                            <div class="entry-holder">
                                <div class="entry-tags">
                                    <span>Artikel Lainnya tags:</span>
                                    <div>
                                        @foreach ($random as $ran)
                                            <a href="{{ route('articles.details', ['id' => $ran->link]) }}">
                                                {!! substr($ran->title, 0, 85) !!}
                                                @if (strlen($ran->title) > 895)
                                                    ..
                                                @endif
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="entry-share"><span>share:</span>
                                    <div>
                                        <div class="module module-social">
                                            <a class="share-facebook"
                                                href="https://www.facebook.com/sharer/sharer.php?u=https://yourwebsite.com"
                                                target="_blank"">
                                                <i class="fab fa-facebook-f"> </i>
                                            </a>
                                            <a class="share-instagram" href="#">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                            <a class="share-twitter" href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="entry-widget entry-add-comment mb-0 clearfix">
                            <div class="entry-widget-title">
                                <h3>Leave A Reply</h3>
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
                                            <input class="form-control" type="text" placeholder="website" />
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" rows="2" placeholder="Comment"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="custom-radio-group">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadioInline1" name="customRadioInline1" />
                                                    <label for="customRadioInline1">Save my name, email, and website in
                                                        this browser for the next time I comment.</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn--alternative" type="submit">Submit request <i
                                                    class="icon-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="sidebar sidebar-blog">
                        <div class="widget widget-search">
                            <div class="widget-title">
                                <h3>search</h3>
                            </div>
                            <div class="widget-content">
                                <form class="form-search" action="{{ route('form') }}" method="POST" novalidate>
                                    @csrf
                                    <div class="input-group">
                                        <input class="form-control" name="text" type="text"
                                            placeholder="Search ..." />
                                        <button class="btn" type="button"><i class="icon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-recent-posts">
                            <div class="widget-title">
                                <h3>recent posts</h3>
                            </div>
                            <div class="widget-content">
                                @foreach ($recent as $l)
                                    <div class="post active">
                                        <div class="post-img"><img src="{{ asset('assets/files/articles/' . $l->image) }}"
                                                alt="post img" /></div>
                                        <div class="post-content">
                                            <div class="post-title">
                                                <a href="{{ route('articles.details', ['id' => $l->link]) }}">
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
                        <div class="widget widget-categories widget-categories-2">
                            <div class="widget-title">
                                <h3>categories</h3>
                            </div>
                            <div class="widget-content">
                                @foreach ($categories as $article)
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="/search?c={{ $article->category }}"><span>{{ $article->category }}</span>
                                                <i>{{ $article->category_count }}</i>
                                            </a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="widget widget-reservation bg-overlay bg-overlay-theme-light">
                            <div class="bg-section">
                                <img src="assets/images/blog/sidebar/reservation.jpg" alt="img" />
                            </div>
                            <div class="card-badge">
                                <img src="{{ asset('assets/images/sidebar/badge.png') }}" alt="Badge" />
                            </div>
                            <div class="widget-content">
                                <div class="heading heading-5 heading-light-2">
                                    <p class="heading-subtitle">Daftar Sekolah</p>
                                    <h2 class="heading-title">Terbuka Pendaftaran Siswa Baru!</h2>
                                    <p class="heading-desc">Dengan fasilitas yang sangat mumpuni</p>
                                </div>
                                <a class="btn btn--secondary" href="{{ route('kontak.index') }}">
                                    Daftar Sekarang<i class="icon-arrow-right"></i>
                                </a>
                                <a href="tel:0106123214"><span class="fas fa-phone-alt"></span> 62811-9147-278</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
