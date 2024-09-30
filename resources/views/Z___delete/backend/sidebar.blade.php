<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <div id="sidebar-menu">
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Menu</li>
                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                <li class="menu-title" key="t-apps">SPK WEIGHT PRODUCT</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-folder-open"></i>
                        <span key="t-ecommerce">Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        @if (Auth::user()->roles == 'Pemilik')
                            <li><a href="" key="t-products">List User</a></li>
                            <li><a href="" key="t-products">Cost & Benefit</a></li>
                            <li><a href="" key="t-products">Alternative</a></li>
                            <li><a href="" key="t-products">Pembobotan</a></li>
                            <li><a href="" key="t-products">Kriteria</a></li>
                        @endif
                        {{-- <li><a href="#" key="t-orders">Voting</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-add-to-queue"></i>
                        <span key="t-file-manager">Pembobotan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="" key="t-product-detail">Perhitungan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-analyse"></i>
                        <span key="t-ecommerce">Nilai & Bobot</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="" key="t-products">Nilai Alternativ</a></li>
                        <li><a href="" key="t-products">Bobot Alternativ</a></li>
                        <li><a href="" key="t-products">Normalisasi</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-align-right"></i>
                        <span key="t-ecommerce">Laporan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="" key="t-products">Pangkat</a>
                        </li>
                        <li><a href="" key="t-products">Anternative S</a></li>
                        <li><a href="" key="t-products">Anternative V</a></li>
                    </ul>
                </li>

                {{-- <li>
                    <a href="{{ route('cost_benefit.index') }}" class="waves-effect">
                        <i class="bx bx-time-five"></i>
                        <span key="t-dashboards">Cost & Benefit</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bobot.index') }}" class="waves-effect">
                        <i class="bx bx-brush-alt"></i>
                        <span key="t-dashboards">Pembobotan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('alternative.index') }}" class="waves-effect">
                        <i class="bx bx-won"></i>
                        <span key="t-dashboards">Alternative</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kriteria.index') }}" class="waves-effect">
                        <i class="bx bx-shekel"></i>
                        <span key="t-dashboards">Kriteria</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('perhitungan_bobot.index') }}" class="waves-effect">
                        <i class="bx bx-stats"></i>
                        <span key="t-dashboards">Perhitungan Bobot</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('input_nilai.create') }}" class="waves-effect">
                        <i class="bx bx-trophy"></i>
                        <span key="t-dashboards">Input Nilai Alternative</span>
                    </a>
                </li> --}}

                {{-- <li>
                    <a href="{{ route('hasil_pembobotan.index') }}" class="waves-effect">
                        <i class="bx bx-shape-circle"></i>
                        <span key="t-dashboards">Alternative Pembobotan</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('pangkat.index') }}" class="waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span key="t-dashboards">Nilai Normalisasi</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="" class="waves-effect">
                        <i class="bx bx-food-menu"></i>
                        <span key="t-dashboards">Pangkat</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="{{ route('alternative_s.index') }}" class="waves-effect">
                        <i class="bx bx-badge"></i>
                        <span key="t-dashboards">Alternative S</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('alternative_v.index') }}" class="waves-effect">
                        <i class="bx bx-badge"></i>
                        <span key="t-dashboards">Alternative v</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</div>
