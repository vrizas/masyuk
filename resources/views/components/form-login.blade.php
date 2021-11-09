<section id="login" class="modal z-40 items-center w-screen">
    <div class="modal-box rounded-xl bg-gray-100 relative w-11/12 overflow-auto lg:w-1/2">
        <h2 class="font-bold text-xl text-center mb-2 lg:mb-6 lg:text-2xl">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row mb-3">
                <label for="username"
                    class="col-md-4 col-form-label  text-sm lg:text-base">{{ __('Email / Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="text"
                        class="input w-full bg-gray-50 form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                        placeholder="Masukkan email / username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="password"
                    class="col-md-4 col-form-label  text-sm lg:text-base">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="input w-full bg-gray-50 form-control" name="password"
                        required autocomplete="current-password" placeholder="Masukkan password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4 mb-3">
                    <div class="form-check">
                        <input type="checkbox" id="remember" name="remember"
                            class="checkbox w-4 h-4 checkbox-remember mr-1">

                        <label class="form-check-label text-sm" for="remember">
                            {{ __('Ingat Saya') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4 flex flex-col items-center gap-3">
                    @if (Route::has('password.request'))
                        <a class="text-sm" href="{{ route('password.request') }}">
                            {{ __('Lupa password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary w-full capitalize lg:w-1/2">
                        {{ __('Login') }}
                    </button>

                    <p class="text-sm lg:mt-3">Belum terdaftar? <a href="#signup" class="text-info">Daftar
                            sekarang!</a></p>
                </div>
            </div>
        </form>
        <a href="#" class="absolute top-3 right-3 text-2xl"><i class='bx bx-x'></i></a>
    </div>
</section>
