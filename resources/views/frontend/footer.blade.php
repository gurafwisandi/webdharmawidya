<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="footer-widget-title">
                            <h3>Contach</h3>
                        </div>
                        <div class="widget-content">
                            {{-- <p>If you have any questions or need help, feel free to contact with our team.
                            </p> --}}
                            <ul>
                                <li class="phone"><a href="tel:+628119147278"><i
                                            class="fas fa-phone-alt"></i>62811-9147-278</a></li>
                                <li class="address"><a href="#">Jl. Iskandar Muda No.90, Neglasari, Kec.
                                        Neglasari, Kota Tangerang, Banten 15129</a></li>
                            </ul><a class="directions" href="page-locations.html"><i
                                    class="fas fa-map-marker-alt"></i>get directions</a>
                        </div>
                    </div>
                    <!--  End .col-lg-3-->
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 offset-lg-0">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h3>Akademik</h3>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('akademik.index', ['unit' => 'kb']) }}">KB</a></li>
                                <li><a href="{{ route('akademik.index', ['unit' => 'tk']) }}">TK</a></li>
                                <li>
                                    <a href="{{ route('akademik.index', ['unit' => 'sd']) }}">Sekolah Dasar (SD)</a>
                                </li>
                                <li>
                                    <a href="{{ route('akademik.index', ['unit' => 'smp']) }}">
                                        Sekolah Menengah Pertama (SMP)
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('akademik.index', ['unit' => 'smk']) }}">
                                        Sekolah Menengah Kejuruan (SMK)
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2 offset-lg-0">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h3>Jurusan</h3>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="">Multimedia</a></li>
                                <li><a href="">Akuntansi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget widget-newsletter">
                        <div class="widget-content"><a class="btn btn--alternative"
                                href="{{ route('kontak.index') }}">Hubungi Kami</a>
                            <div class="module module-social">
                                @if ($settings->tiktok)
                                    <a class="share-tiktok" href="{{ $settings->tiktok }}" target="_blank"><i
                                            class="fab fa-tiktok"></i>
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
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-copyright">
                <div class="copyright-holder">
                    <div class="copyright"><span>&copy; 2024 Dharma Widya all rights reserved. </span></div>
                    {{-- <div class="copyright-links">
                        <ul class="list-unstyled">
                            <li> <a href="">terms &amp; conditions</a></li>
                            <li> <a href="">privacy policy</a></li>
                            <li> <a href="">sitemap</a></li>
                        </ul>
                    </div> --}}
                </div>
                <div class="payment-holder">
                    {{-- <div class="payment-methods">
                        <a><img src="{{ asset('assets/files/dharma/akreditasib.png') }}" alt="Image" width="30"
                                height="38" /></a>
                        <a><img src="{{ asset('assets/files/dharma/akreditasia.jpeg') }}" alt="Image" width="30"
                                height="38" /></a>
                    </div> --}}
                    <div class="backtop" id="back-to-top" data-hover=""><img
                            src="{{ asset('assets/images/footer/back-top.svg') }}" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
