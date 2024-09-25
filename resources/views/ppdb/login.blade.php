@extends('frontend.main')
@section('content')
    <section class="login" id="login2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-1 text--center">
                        <p class="heading-subtitle">Login PPDB</p>
                        <h2 class="heading-title">PPDB Login</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                    <div class="login-card">
                        <div class="heading heading-1 text--center d-none">
                            <h2 class="heading-title">login1</h2>
                        </div>
                        @if ($errors->has('email'))
                            <div class="p-2">
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('email') }}
                                </div>
                            </div>
                        @endif
                        @if ($errors->has('password'))
                            <div class="p-2">
                                <div class="alert alert-danger" role="alert">
                                    {{ $errors->first('password') }}
                                </div>
                            </div>
                        @endif
                        @if (session()->has('loginError'))
                            <div class="p-2">
                                <div class="alert alert-danger" role="alert">
                                    {{ session('loginError') }}
                                </div>
                            </div>
                        @endif
                        <div class="login-body">
                            <form class="" action="{{ route('login.proses') }}" method="POST" novalidate>
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <label>Email<span class="required">*</span></label>
                                        <input class="form-control" type="text" name="email" id="email"
                                            required="" />
                                    </div>
                                    <div class="col-12">
                                        <label>Password<span class="required">*</span></label>
                                        <input class="form-control" type="password" name="password" id="password"
                                            required="" />
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                            In</button>
                                    </div>
                                    {{-- <div class="col-12">
                                        <input class="btn btn--primary" type="submit" value="LOG IN" /><a
                                            class="forget d-block" href="#">lost your password ?</a>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="login-result"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
