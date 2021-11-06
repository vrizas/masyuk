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
                <a href="#login" class="btn btn-primary btn-rh py-2.5 w-20 capitalize">Login</a>
                <a href="#signup" class="btn btn-outline btn-primary btn-rh py-2.5 w-20 capitalize">Signup</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-error btn-rh py-2.5 w-20 capitalize">Logout</button>
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
            <section class="resep-card mt-4 grid grid-cols-4 gap-4">
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
