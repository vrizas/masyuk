<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Masyuk')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('css')
</head>

<body class="w-full px-4 lg:container lg:mx-auto lg:px-0">
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="/" class="flex items-center gap-2">
            <h1 class="text-lg font-bold lg:text-xl">Masyuk</h1>
        </a>
        @if (!Auth::check())
            <nav class="flex items-center gap-6">
                <a href="#search"><i class="bi bi-search"></i></a>
                <button id="hamburger" aria-label="buka navigasi"><i class="bi bi-list text-2xl"></i></button>
                <div class="hamburger-list-wrapper fixed top-0 left-0 z-50 w-screen h-full flex justify-end">
                    <ul
                        class="hamburger-list relative flex flex-col items-center gap-4 bg-base-100 shadow w-1/2 h-full p-5 w-3/4 h-screen transform translate-x-80 transition duration-300 ease-in-out">
                        <li class="w-full"><a href="#"
                                class="text-sm flex justify-center bg-gray-100 py-3 rounded-lg font-md">Lihat
                                Resep</a></li>
                        <li class="w-full"><a href="#"
                                class="text-sm flex justify-center bg-gray-100 py-3 rounded-lg font-md">Buat Resep</a>
                        </li>
                        <li
                            class="w-3/4 flex flex-row items-center absolute bottom-10 left-1/2 transform -translate-x-1/2">
                            <a href="#login"
                                class="text-sm flex flex-1 justify-center font-md btn btn-primary btn-rh capitalize py-1.5 lg:w-20 lg:py-2.5">Login</a>
                            <div class="divider divider-vertical"></div>
                            <a href="#signup"
                                class="text-sm flex flex-1 justify-center font-md btn btn-primary btn-rh capitalize py-1.5 lg:w-20 lg:py-2.5">Signup</a>
                        </li>
                    </ul>
                </div>
                <div id="search" class="modal">
                    <div class="modal-box rounded-none h-full w-full top-0 left-0 py-0 overflow-auto">
                        <div class="flex items-center gap-4">
                            <a href="#" class="text-2xl flex-1/2"><i class="bi bi-chevron-left"></i></a>
                            <div class="flex-1">
                                <livewire:search-dropdown :desktop="false" />
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <nav class="flex items-center gap-8">
                    <a href="#search"><i class="bi bi-search"></i></a>
                    <div class="dropdown dropdown-end">
                        @livewire('notification-indicator')
                        <ul tabindex="0"
                            class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-96 text-sm hidden lg:flex">
                            <li>
                                <a>
                                    <div class="avatar mr-2">
                                        <div class="rounded-full w-7 h-7">
                                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                                        </div>
                                    </div>
                                    <p>Eko Prasetyo mulai mengikuti Anda.</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="avatar mr-2">
                                        <div class="rounded-full w-7 h-7">
                                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                                        </div>
                                    </div>
                                    <p>Vrizas Izza mulai mengikuti Anda.</p>
                                </a>
                            </li>
                            <li>
                                <a>
                                    <div class="avatar mr-2">
                                        <div class="rounded-full w-7 h-7">
                                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                                        </div>
                                    </div>
                                    <p>Ivanna mulai mengikuti Anda.</p>
                                </a>
                            </li>
                            <a href="" class="text-right mt-2 mb-4 mr-4">Lihat Selengkapnya</a>
                        </ul>
                    </div>
                    <button id="hamburger" aria-label="buka navigasi"><i class="bi bi-list text-2xl"></i></button>
                    <div class="hamburger-list-wrapper fixed top-0 left-0 z-50 w-screen h-full flex justify-end">
                        <ul
                            class="hamburger-list relative flex flex-col items-center gap-4 bg-base-100 shadow w-1/2 h-full p-5 w-3/4 h-screen transform translate-x-80 transition duration-300 ease-in-out">
                            <li class="profile w-full">
                                <a href="/profile/{{ Auth::user()->username }}"
                                    class="avatar text-sm flex items-center py-3 rounded-lg font-md">
                                    <div class="rounded-full w-7 h-7 mr-3">
                                        <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                                    </div>
                                    <p class="font-bold font-xl">{{ Auth::user()->name }}</p>
                                </a>
                                <div class="divider mt-0"></div>
                            </li>
                            <li class="w-full">
                                <a href="#"
                                    class="text-sm flex justify-center bg-gray-100 py-3 rounded-lg font-md">Lihat Resep
                                </a>
                            </li>
                            <li class="w-full">
                                <a href="#" class="text-sm flex justify-center bg-gray-100 py-3 rounded-lg font-md">Buat
                                    Resep
                                </a>
                            </li>
                            <li
                                class="w-3/4 flex flex-row items-center absolute bottom-10 left-1/2 transform -translate-x-1/2 auth">
                                <a href="#login"
                                    class="text-sm flex flex-1 justify-center font-md btn btn-primary btn-rh capitalize py-1.5 lg:w-20 lg:py-2.5">Login</a>
                                <div class="divider divider-vertical"></div>
                                <a href="#signup"
                                    class="text-sm flex flex-1 justify-center font-md btn btn-primary btn-rh capitalize py-1.5 lg:w-20 lg:py-2.5">Signup</a>
                            </li>
                        </ul>
                    </div>
                    <div id="search" class="modal">
                        <div class="modal-box rounded-none h-full w-full top-0 left-0 py-0 overflow-auto">
                            <div class="flex items-center gap-4">
                                <a href="#" class="text-2xl flex-1/2"><i class="bi bi-chevron-left"></i></a>
                                <div class="flex-1">
                                    <livewire:search-dropdown :desktop="false" />
                                </div>
                            </div>
                        </div>
                    </div>




        @endif
        </nav>
    </header>
    @yield('main')
    <x-form-login />
    <x-form-signup />
    @if (session()->has('error'))
        <div
            class="pop-up flex items-center bg-red-500 border-l-4 border-red-700 py-2 px-3 shadow-md mb-2 fixed bottom-10 right-10 z-50">
            <!-- icons -->
            <div class="text-red-500 rounded-full bg-white mr-3">
                <svg width="1.8em" height="1.8em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                        d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z" />
                </svg>
            </div>
            <!-- message -->
            <div class="text-white max-w-xs ">
                {{ session('error') }}
            </div>
        </div>
    @endif
    @yield('footer')
    @yield('script')
    <script src="{{ asset('js/app.js') }}" type="module"></script>
    <script src="{{ asset('js/main.js') }}" type="module"></script>
</body>

</html>
