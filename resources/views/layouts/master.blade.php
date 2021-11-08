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

<body class="container mx-auto">
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="/" class="flex items-center gap-2">
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        @if (!Auth::check())
            <nav class="flex items-center gap-4">
                <a href="#login" class="btn btn-primary btn-rh py-2.5 w-20 capitalize">Login</a>
                <a href="#signup" class="btn btn-outline btn-primary btn-rh py-2.5 w-20 capitalize">Signup</a>
            @else
                <nav class="flex items-center gap-8">
                    <div class="dropdown dropdown-end">
                        <button tabindex="0">
                            <i class='bx bxs-bell text-2xl indicator'>
                                <div class="indicator-item badge text-xs px-2 bg-primary-focus border-none rounded-full">
                                    3
                                </div>
                            </i>
                        </button>
                        <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-96 text-sm">
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
                    <div class="dropdown dropdown-hover">
                        <div tabindex="0">
                            <div class="avatar">
                                <div class="rounded-full w-9 h-9">
                                    <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                                </div>
                            </div>
                        </div>
                        <ul tabindex="0"
                            class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52 right-0 text-sm">
                            <li>
                                <a href="/profile/{{ Auth::user()->username }}">Profile</a>
                            </li>
                            <li>
                                <a>Item 2</a>
                            </li>
                            <li>
                                <a>Item 3</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="btn btn-error btn-rh py-2.5 w-20 capitalize w-full mt-2">Logout</button>
                                </form>
                            </li>
                        </ul>

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
</body>

</html>
