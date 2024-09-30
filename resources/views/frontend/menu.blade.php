<header class="header header-light header-topbar" id="navbar-spy">
    <div class="top-bar">
        <div class="block-left">
            <div class="top-contact">
                @if ($settings->contact)
                    <div class="contact-infos"><i class="fas fa-phone-alt"></i>
                        <div class="contact-body"><a
                                href="https://api.whatsapp.com/send?phone={{ $settings->contact }}">Phone:
                                +{{ $settings->contact }}</a></div>
                    </div>
                @endif
                @if ($settings->email)
                    <div class="contact-infos"><i class="fas fa-envelope"></i>
                        <div class="contact-body"><a href="mailto:{{ $settings->email }}<">Mail:
                                {{ $settings->email }}</a>
                        </div>
                    </div>
                @endif
                @if ($settings->clock)
                    <div class="contact-infos"><i class="fas fa-clock"></i>
                        <div class="contact-body">
                            <p>{{ $settings->clock }}</p>
                        </div>
                    </div>
                @endif
                @if ($settings->maps)
                    <div class="contact-infos contact-directions"><i class="fas fa-map-marker-alt"></i>
                        <div class="contact-body"> <a href="{{ $settings->maps }}" target="_blank">get directions</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="block-right">
            <div class="top-bar-links-wrapper">
                <a class="top-bar-link" href="{{ route('articles.index') }}">Artikel</a>
                <a class="top-bar-link" href="{{ route('karir.index') }}">Karir</a>
            </div>
            <div class="module module-social">
                @if ($settings->tiktok)
                    <a class="share-tiktok" href="{{ $settings->tiktok }}" target="_blank"><i class="fab fa-tiktok"></i>
                    </a>
                @endif
                @if ($settings->facebook)
                    <a class="share-facebook" href="{{ $settings->facebook }}" target="_blank"><i
                            class="fab fa-facebook-f"></i>
                    </a>
                @endif
                @if ($settings->instagram)
                    <a class="share-instagram" href="{{ $settings->instagram }}" target="_blank"><i
                            class="fab fa-instagram"></i>
                    </a>
                @endif
                @if ($settings->youtube)
                    <a class="share-youtube" href="{{ $settings->youtube }}" target="_blank"><i
                            class="fab fa-youtube"></i>
                    </a>
                @endif
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-xl navbar-sticky" id="primary-menu">
        <a class="navbar-brand" href="/">
            <img class="logo logo-dark" src="{{ asset('assets/files/dharma/logo.png') }}" alt="Medisch Logo" />
            <img class="logo logo-mobile" src="{{ asset('assets/files/dharma/logo.png') }}" alt="Medisch Logo"
                style="height:100%" />
        </a>
        <div class="module-holder module-holder-phone">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item" id="contact" data-hover="">
                    <a href="/"><span>Home</span></a>
                </li>
                <li class="nav-item has-dropdown" data-hover="">
                    <a class="dropdown-toggle" data-toggle="dropdown"><span>Tentang</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a href="{{ route('profil.index') }}">
                                <span>Profil dan Sejarah</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('visimisi.index') }}">
                                <span>Visi dan Misi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('fasilitas.index') }}">
                                <span>Fasilitas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-dropdown" data-hover="">
                    <a class="dropdown-toggle" data-toggle="dropdown"><span>Akademik</span></a>
                    <ul class="dropdown-menu">
                        {{-- <li class="nav-item">
                            <a href="{{ route('akademik.index', ['unit' => 'kb']) }}">
                                <span>Kelompok Belajar</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('akademik.index', ['unit' => 'tk']) }}">
                                <span>TK</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akademik.index', ['unit' => 'sd']) }}">
                                <span>Sekolah Dasar (SD)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akademik.index', ['unit' => 'smp']) }}">
                                <span>Sekolah Menengah Pertama (SMP)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('akademik.index', ['unit' => 'smk']) }}">
                                <span>Sekolah Menengah Kejuruan (SMK)</span>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item has-dropdown" data-hover="">
                    <a class="dropdown-toggle" data-toggle="dropdown"><span>Kurikulum*</span></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a href=""><span>E-Learning</span></a></li>
                        <li class="nav-item"><a href=""><span>E-Rapor</span></a></li>
                        <li class="nav-item"><a href=""><span>CBT</span></a></li>
                    </ul>
                </li> --}}
                <li class="nav-item has-dropdown" data-hover="">
                    <a class="dropdown-toggle" data-toggle="dropdown"><span>Kegiatan</span></a>
                    <ul class="dropdown-menu">
                        {{-- <li class="nav-item">
                            <a href="{{ route('kegiatan.index', ['unit' => 'kb']) }}">
                                <span>Kelompok Belajar</span>
                            </a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index', ['unit' => 'tk']) }}">
                                <span>TK</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index', ['unit' => 'sd']) }}">
                                <span>Sekolah Dasar (SD)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index', ['unit' => 'smp']) }}">
                                <span>Sekolah Menengah Pertama (SMP)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a href="{{ route('kegiatan.index', ['unit' => 'smk']) }}">
                                <span>Sekolah Menengah Kejuruan (SMK)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kegiatan.index', ['unit' => 'yayasan']) }}">
                                <span>Yayasan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item" id="contact" data-hover="">
                    <a href="{{ route('kontak.index') }}">
                        <span>Kontak Kami</span>
                    </a>
                </li>
            </ul>
            <div class="module-holder">
                <div class="module-contact">
                    {{-- <a class="btn btn--secondary" href="{{ route('ppdb.index') }}">PPDB*</a> --}}
                    <a class="btn btn--secondary" href="https://sekolah-dharmawidya.sch.id/"
                        target="_blank">Login</a>
                </div>
            </div>
        </div>
    </nav>
</header>
