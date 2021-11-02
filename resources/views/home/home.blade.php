<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masyuk</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body class="px-12">
    <header class="py-2 flex sticky top-0 items-center justify-between">
        <a href="#" class="flex items-center gap-2">
            <img src="{{ asset('logo.svg') }}" alt="Logo" class="w-7"> 
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        <nav class="flex gap-3 h-1/2">
            <button class="btn-signup bg-gray-400 px-4 py-2 text-sm rounded hover:bg-gray-500">Signup</button>
            <button class="btn-login bg-gray-400 px-4 py-2 text-sm rounded hover:bg-gray-500">Login</button>
        </nav>
    </header>
    <main class="py-4">
        <article>
            <section>
                <h2 class="text-5xl font-bold">Selamat Datang!</h2>
                <p class="text-gray-700">Mau masak apa kita hari ini?</p>
            </section>
            <section class="login-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="login-form-wrapper bg-white rounded-lg py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Login</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
            
                        <div>
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                        </div>
            
                        <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
            
                        <div class="flex items-center justify-end mt-4">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            <x-jet-button class="ml-4">
                                {{ __('Log in') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="signup-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="signup-form-wrapper bg-white rounded-lg py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Signup</h3>
                    <!-- FORM SIGNUP -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                        </div>
            
                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>
            
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>
            
                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                        @endif
            
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>
            
                            <x-jet-button class="ml-4">
                                {{ __('Register') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </section>
        </article>
        <div class="flex my-10">
            <input class="flex-1 rounded-lg" type="search" placeholder="Mau cari siapa kita hari ini?">
        </div>
    </main>
    <script src="{{ asset('js/home.js') }}"></script> 
</body>
</html>