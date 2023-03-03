@extends('templates/basic/layouts/landing', [
    'title' => 'Sign In',
    'bodyClass' => 'login-bg',
])

@section('css')
    <style>
        .login-bg {
            background: url('/assets/landing/img/login-bg.jpg') no-repeat center fixed;
            background-size: cover;
            object-fit: contain;
        }
    </style>
@endsection

@section('content')
    <div class="section">
        <div class="section-1400 padding-top-bottom-120">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-5">
                        <div
                            class="section py-4 py-md-5 px-3 px-sm-4 px-lg-5 over-hide border-4 section-shadow-blue bg-white section-background-24 background-img-top form">
                            <form class="section" method="post" action="{{ route('user.login') }}" class="form">
                                @csrf

                                <h4 class="mb-4 text-sm-center">
                                    Sign in.
                                </h4>

                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-style-with-icon {{ $errors->has('no_bro') ? 'is-invalid' : '' }}"
                                        placeholder="@lang('Username/E-mail/MP Number')" autocomplete="off" name="username"
                                        value="{{ old('username') }}">
                                    <i class="input-icon uil uil-user-circle"></i>
                                    @error('no_bro')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                {{-- <div class="form-group mt-3 ">

                                    <input type="password"
                                        class="form-style form-style-with-icon {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="@lang('Password')" autocomplete="off" name="password">
                                    <i class="input-icon uil uil-lock-alt"></i>

                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div> --}}
                                <div class=" input-group mt-3">
                                    <input type="password"
                                        class="form-control form-style-with-icon {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        placeholder="@lang('Password')" autocomplete="off" name="password" id="password">
                                    <i class="input-icon uil uil-lock-alt"></i>

                                    <div class="input-group-append">
                                        <button class="input-group-text" id="btnPass" type="button"><i
                                                class="uil uil-eye"></i></button>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12 text-sm-center">
                                        <button type="submit" class="btn btn-dark-primary">Sign in<i
                                                class="uil uil-arrow-right size-22 ml-3"></i></button>
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-sm-center size-16">
                                    Belum Punya Akun?
                                    <a href="{{ route('user.register') }}"
                                        class="link link-dark-primary-2 link-normal animsition-link">
                                        Buat Akun
                                    </a>
                                </p>
                                <p class="mb-0 text-sm-center size-16">
                                    Lupa Password?
                                    <a href="{{ route('user.password.request') }}"
                                        class="link link-dark-primary-2 link-normal animsition-link">
                                        Reset Password
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $('#btnPass').on('click', function() {
            var type = $('#password').attr('type');
            if (type == "password") {
                $("#password").attr({
                    type: "text"
                });
            } else {
                $("#password").attr({
                    type: "password"
                });
            }
        })
    </script>
@endpush
