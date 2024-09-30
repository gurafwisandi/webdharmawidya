@extends('frontend.main')
@section('content')
    <section class="projects-gallery" id="projects-gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="d-none">Gallery</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4  ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/a.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/a.jpg') }}" title="wind generators item"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4  ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/b.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/b.jpg') }}" title="solar panels item"></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/c.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/c.jpg') }}" title="battery materials item"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4  ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/d.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/d.jpg') }}" title="hydropower plants item"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4  ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/e.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/e.jpg') }}" title="fossil resources item"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 ">
                    <div class="project-panel">
                        <div class="project-img"><img src="{{ asset('assets/images/dharma/f.jpg') }}" alt=" item" />
                            <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item"
                                    href="{{ asset('assets/images/dharma/f.jpg') }}" title="charge controllers item"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center"><a class="btn btn--secondary" href="javascript:void(0)">Load More</a></div>
            </div>
        </div>
    </section>
@endsection
