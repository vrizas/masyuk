@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('header')
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        <nav class="flex gap-4">
            @if (!Auth::check())
                <a href="#login" class="btn btn-primary btn-rh py-2.5 w-20">Login</a>
                <a href="#signup" class="btn btn-outline btn-primary btn-rh py-2.5 w-20">Signup</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-rh py-2.5 w-20">Logout</button>
                </form>
            @endif
        </nav>
    </header>
@endsection
@section('main')
    <main class="py-4">
        <article>
            <section>
                <h2 class="text-5xl font-bold">Selamat Datang!</h2>
                <p class="text-gray-700">Mau masak apa kita hari ini?</p>
            </section>
            {{-- Form Login --}}
            <section id="login" class="modal">
                <div class="modal-box w-1/2 bg-gray-100 relative">
                    <h2 class="font-bold text-2xl text-center mb-6">Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input w-full bg-gray-50" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input w-full bg-gray-50" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input type="checkbox" id="remember" name="remember"
                                        class="checkbox w-4 h-4 checkbox-remember">

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                    <a href="#" class="absolute top-3 right-3 text-2xl"><i class='bx bx-x'></i></a>
                </div>
            </section>

            {{-- Sign Up --}}
            <div id="signup" class="modal">
                <div class="modal-box w-1/2 bg-gray-100">
                    <h2 class="font-bold text-2xl text-center mb-6">Signup</h2>
                    <a href="#" class="absolute top-3 right-3 text-2xl"><i class='bx bx-x'></i></a>
                </div>
            </div>

            <section class="signup-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="signup-form-wrapper bg-white rounded-lg py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Signup</h3>
                </div>
            </section>
        </article>
        <article class="mt-4 mb-4">
            <input class="input w-full bg-gray-50" type="search" placeholder="Mau cari siapa kita hari ini?">
        </article>
        <x-home-carousel :reseps="$reseps" />
        <article>
            <section class="flex mt-4 items-center justify-between">
                <h2 class="font-bold text-2xl">Aneka Resep</h2>
                <a class="text-sm" href="#">Lihat Semua</a>
            </section>
            <section class="resep-card flex mt-4 flex-wrap gap-8">
                @foreach ($reseps as $resep)
                    <x-resep-card :resep="$resep" />
                @endforeach
            </section>
        </article>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
@endsection
</body>

</html>
