<section id="signup" class="modal z-40 items-center w-screen">
    <div class="modal-box rounded-xl bg-gray-100 relative w-11/12 overflow-auto lg:w-1/2">
        <h2 class="font-bold text-xl text-center mb-2 lg:mb-6 lg:text-2xl">Signup</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group row mb-3">
                <label for="name" class="col-md-4 col-form-label text-sm lg:text-base">{{ __('Nama') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text"
                        class="input w-full bg-gray-50 form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Masukkan nama">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="username" class="col-md-4 col-form-label text-sm lg:text-base">{{ __('Username') }}</label>

                <div class="col-md-6">
                    <input id="username" type="username"
                        class="input w-full bg-gray-50 form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username"
                        placeholder="Masukkan username">

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="form-group row mb-3">
                <label for="email" class="col-md-4 col-form-label text-sm lg:text-base">{{ __('Email') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email"
                        class="input w-full bg-gray-50 form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" placeholder="Masukkan email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="password"
                    class="col-md-4 col-form-label text-sm lg:text-base">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password"
                        class="input w-full bg-gray-50 form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Masukkan password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-4">
                <label for="password-confirm"
                    class="col-md-4 col-form-label text-sm lg:text-base">{{ __('Konfirmasi Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="input w-full bg-gray-50 form-control"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Masukkan konfirmasi password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4 flex flex-col items-center gap-3">
                    <button type="submit" class="btn btn-primary w-full capitalize lg:w-1/2">
                        {{ __('Register') }}
                    </button>
                    <p class="text-sm lg:mt-3">Sudah punya akun? <a href="#login" class="text-info">Login
                            sekarang!</a></p>
                </div>
            </div>
        </form>
        <a href="#" class="absolute top-3 right-3 text-2xl"><i class='bx bx-x'></i></a>
    </div>
</section>
