@extends('frontend.main')
@section('content')
    <section class="pricing pricing-1" id="pricing-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-8 text-center">
                        <p class="heading-subtitle">Our Pricing And Plans </p>
                        <h2 class="heading-title">Effective & Flexible Pricing That Adapts Your Needs</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel alternative">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">KB</h3>
                                    <p class="pricing-desc">Our extensive industry experience give us a leg up when it comes
                                        to cleaner, and healthier, than ever before.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="{{ route('kelbel.index') }}">Lihat Detil<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel alternative">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">TK</h3>
                                    <p class="pricing-desc">Our extensive industry experience give us a leg up when it comes
                                        to cleaner, and healthier, than ever before.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="{{ route('kelbel.index') }}">Lihat Detil<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel secondary">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">SD</h3>
                                    <p class="pricing-desc">Providing commercial cleaning services which help you protect
                                        your customers and employees about clean.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="javascript:void(0)">purchase now<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel pricing-body">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">SMP </h3>
                                    <p class="pricing-desc">If you are tired of replacing your service company due to their
                                        complacency or lack of follow-through.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="javascript:void(0)">purchase now<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel primary">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">SMA</h3>
                                    <p class="pricing-desc">If you are tired of replacing your service company due to their
                                        complacency or lack of follow-through.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="javascript:void(0)">purchase now<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex">
                    <div class="pricing-table">
                        <div class="pricing-panel primary">
                            <div class="pricing-body">
                                <div class="pricing-heading">
                                    <h3 class="pricing-title">SMK </h3>
                                    <p class="pricing-desc">If you are tired of replacing your service company due to their
                                        complacency or lack of follow-through.</p>
                                </div>
                            </div>
                            <div class="pricing-price"><a class="btn btn--alternative w-100"
                                    href="javascript:void(0)">purchase now<i class="icon-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="processes-note">
                        <div class="note-bg"><i class="fimanager flaticon-008-hand"></i></div>
                        <p>For a cleaning that meets your highest standards, you need a dedicated team of trained
                            specialists. We arrive at each visit with all supplies needed to thoroughly clean your home with
                            our extensive Cleaning Process. <a href="contact.html">Contact Us For More Information<i
                                    class="icon-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
