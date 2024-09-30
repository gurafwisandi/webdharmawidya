@extends('frontend.main')
@section('content')
    <section class="cta cta-1" id="cta-1">
        <div class="container">
            <div class="cta-wrapper">
                <div class="cta-body">
                    <div class="cta-icon"> <img src="assets/images/cta/icon.png" alt="Icon" /></div>
                    <div class="cta-content">
                        <h2>Form Pendaftaran PPDB</h2>
                        <p>Dharma Widya Membuka pendaftaran sekolah dengan berbagai jenjang pendidikan</p>
                    </div>
                </div>
                <div class="cta-action"> <a class="btn btn--secondary-dark" href="javascript:void(0)">Informasi Penerimaan
                        PPDB<i class="icon-arrow-right"></i></a></div>
            </div>
        </div>
    </section>

    <section class="contact contact-2" id="contact-1">
        <div class="contact-overlay bg-overlay bg-overlay-theme-light-inversed">
            <div class="bg-section"><img src="{{ asset('assets/images/background/2.jpg') }}" alt="Background" /></div>
        </div>
        <div class="contact-content">
            <div class="container">
                <div class="contact-panel contact-panel-2">
                    <div class="heading heading-light-2 heading-6">
                        <p class="heading-subtitle">Pilihan Form Pendaftaran PPDB</p>
                        <h2 class="heading-title">Silahkan isi form pendaftaran sesuai data diri Anda</p>
                            <div class="contact-action contact-action-2">
                                <div class="contact-icons contact-icons-2">
                                    <div class="icon"> <a href="javascript:void(0)"> </a><i
                                            class="fimanager flaticon-016-tissues"></i></div>
                                    <div class="icon"> <a href="javascript:void(0)"> </a><i
                                            class="fimanager flaticon-036-cream"></i></div>
                                </div><a class="btn btn--white" href="">our products <i
                                        class="icon-arrow-right"></i></a>
                            </div>

                    </div>
                    <div class="contact-card">
                        <div class="contact-body">
                            <h3 class="card-heading">Form Pendaftaran</h3>
                            <p class="card-desc">Isilah form pendaftaran sesuai dengan data diri Anda dengan
                                sebenar-benarnya</p>
                            <form>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="select-holder">
                                            <label class="form-label" for="sekolah_asal">Sekolah Asal</label>
                                            <select class="form-control" id="sekolah_asal" name="sekolah_asal" required>
                                                <option value=""> -- Pilih --</option>
                                                <option value="1">Dharma Widya</option>
                                                <option value="2">Sekolah Lain</option>
                                                <option value="3">Employee's Child</option>
                                                <option value="4">Siswa Pindahan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="select-holder">
                                            <label class="form-label" for="jenjang_asal">Jenjang Asal</label>
                                            <select class="form-control" id="jenjang_asal" name="jenjang_asal" required>
                                                <option value="">-- Pilih --</option>
                                                <option value="0">TK</option>
                                                <option value="1">SD</option>
                                                <option value="2">SMP</option>
                                                <option value="3">SMK</option>
                                                <option value="4">SMA</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nama">Nama</label>
                                        <input class="form-control" type="text" id="nama" name="nama"
                                            placeholder="Masukan Nama" required />
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nik">NIK</label>
                                        <input class="form-control" type="number" id="nik" name="nik"
                                            placeholder="Masukan Nik" maxlength="15" required />
                                        <div class="invalid-feedback">
                                            Data wajib diisi.
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nik">Nis</label>
                                        <input class="form-control" type="text" id="nis" name="nis"
                                            placeholder="Masukan Nik" maxlength="15" required />
                                        <div class="invalid-feedback">
                                            Data wajib diisi.
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nik">Email</label>
                                        <input class="form-control" type="text" id="email" name="email"
                                            placeholder="Masukan Email" maxlength="15" required />
                                        <div class="invalid-feedback">
                                            Data wajib diisi.
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="nik">Phone</label>
                                        <input class="form-control" type="number" id="phone" name="phone"
                                            placeholder="Masukan Email" maxlength="15" required />
                                        <div class="invalid-feedback">
                                            Data wajib diisi.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn--secondary-dark w-100" type="button" id="simpan">Buat
                                            Akun</button>
                                    </div>
                                </div>
                            </form>
                            <div class="col-12 mt-3">
                                <a href="{{ route('ppdb.create') }}" class="btn btn--secondary-dark w-100"
                                    id="login">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#simpan").click(function() {
                var sekolahAsal = $("#sekolah_asal").val();
                var jenjangAsal = $("#jenjang_asal").val();
                var nama = $("#nama").val();
                var nik = $("#nik").val();
                var nis = $("#nis").val();
                var email = $("#email").val();
                var phone = $("#phone").val();

                if (!sekolahAsal.trim() || !jenjangAsal.trim() || !nama.trim() || !nik.trim()) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Form tidak boleh kosong. Mohon lengkapi semua field yang diperlukan.'
                    });
                } else {
                    var formData = new FormData();
                    formData.append('sekolah_asal', sekolahAsal);
                    formData.append('jenjang_asal', jenjangAsal);
                    formData.append('nama', nama);
                    formData.append('nik', nik);
                    formData.append('email', email);
                    formData.append('nis', nis);
                    formData.append('phone', phone);

                    $.ajax({
                        type: "POST",
                        url: "{{ route('ppdb.store') }}",
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
                            $('#sekolah_asal').val(null).trigger('change');
                            // $("#sekolah_asal").val('');
                            $("#jenjang_asal").val('');
                            $("#nama").val('');
                            $("#nik").val('');
                            $("#email").val('');
                            $("#nis").val('');
                            $("#phone").val('');
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
