@extends('frontend.main')
@section('content')
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.888619761703!2d106.61915085054036!3d-6.145659214002614!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ff571a5a8001%3A0xc52fb8aabc3e8e70!2sSekolah%20Dharma%20Widya!5e0!3m2!1sen!2sus!4v1713842854533!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>
    <section class="contact contact-3" id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-panel contact-panel-3">
                    <div class="row">
                        <div class="col-12 col-lg-7 col-xl-7 col-xxl-8">
                            <div class="contact-card">
                                <div class="contact-body">
                                    <h5 class="card-heading">get in touch</h5>
                                    <form>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="name"
                                                    name="contact-name" placeholder="Name" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="mail"
                                                    name="contact-email" placeholder="Mail" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input class="form-control" type="text" id="phone"
                                                    name="contact-phone" placeholder="Phone" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <select class="form-control" id="unit">
                                                    <option value="">select your unit</option>
                                                    <option value="kb">KB</option>
                                                    <option value="tk">TK</option>
                                                    <option value="sd">SD</option>
                                                    <option value="smp">SMP</option>
                                                    <option value="smk">SMK</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" id="message" placeholder="message" name="contact-infos" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <a class="btn btn--secondary-dark justify-content-between"
                                                    id="simpan">submit
                                                    request <i class="icon-arrow-right"></i></a>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-5 col-xxl-4 img-card-holder">
                            <div class="img-card bg-overlay bg-overlay-theme-secondary">
                                <div class="bg-section">
                                    <img src="assets/images/background/9.jpg" alt="image" />
                                </div>
                                <div class="card-content">
                                    <div class="content-top">
                                        <p class="heading-subtitle">Contact</p>
                                        <h2 class="heading-title">{{ $settings->apps }}</h2>
                                        <p class="heading-desc">
                                            {{ $settings->address ? $settings->address : '' }}
                                        </p>
                                    </div>
                                    <div class="content-bottom">
                                        <ul class="list-unstyled contact-infos">
                                            <li class="contact-info"><i class="fas fa-phone-alt"></i>
                                                <p>Phone: <a
                                                        href="https://api.whatsapp.com/send?phone={{ $settings->contact }}">+{{ $settings->contact }}</a>
                                                </p>
                                            </li>
                                            <li class="contact-info"><i class="fas fa-envelope"></i>
                                                <p>Mail: <a href="mailto:{{ $settings->email }}">
                                                        {{ $settings->email }}</a>
                                                </p>
                                            </li>
                                            @if ($settings->clock)
                                                <li class="contact-info"><i class="fas fa-clock"></i>
                                                    <p>{{ $settings->clock }}</p>
                                                </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/vendor/sweetalert2.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#simpan").click(function() {
                var name = $("#name").val();
                var mail = $("#mail").val();
                var phone = $("#phone").val();
                var unit = $("#unit").val();
                var message = $("#message").val();

                if (name === '' || mail === '' || phone === '' || unit === '' || message === '') {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Form tidak boleh kosong. Mohon lengkapi semua field yang diperlukan.'
                    });
                } else {
                    var formData = new FormData();
                    formData.append('name', name);
                    formData.append('mail', mail);
                    formData.append('phone', phone);
                    formData.append('unit', unit);
                    formData.append('message', message);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('kontak.store') }}",
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Sukses!',
                                text: 'Data berhasil disimpan.'
                            });
                            $("#name").val('');
                            $("#mail").val('');
                            $("#phone").val('');
                            $('#unit').val(null).trigger('change');
                            $("#message").val('');
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Terjadi kesalahan saat menyimpan data.'
                            });
                        }
                    });
                }
            });
        });
    </script>
@endsection
