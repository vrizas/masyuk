@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #2b6cb0;
            /*Set to match the Tailwind colour you want the active one to be */
        }

    </style>
    @livewireStyles
@endsection
@section('main')

    <main class="py-4">
        <article>
            <section>
                @if (Auth::check())
                    <h2 class="font-bold text-2xl lg:text-4xl">Halo, @auth{{ Auth::user()->username }}@endauth!</h2>
                @else
                    <h2 class="font-bold text-2xl lg:text-4xl">Selamat Datang!</h2>
                @endif
                <p class="text-gray-700 text-sm lg:text-base">Mau masak apa kita hari ini?</p>
            </section>
        </article>
        <livewire:search-dropdown :desktop="true" />
        <x-home-carousel :reseps="$reseps" />
        <article>
            <section class="flex mt-4 items-center justify-between">
                <h2 class="font-bold text-xl lg:2xl">Aneka Resep</h2>
                <a class="text-sm" href="#">Lihat Semua</a>
            </section>
            <section class="resep-card mt-4 grid grid-cols-1 lg:grid-cols-4 gap-4">
                @foreach ($reseps as $resep)
                    <x-resep-card :resep="$resep" />
                @endforeach
            </section>
        </article>
    </main>
@endsection

@section('script')
    <script language="JavaScript" type="text/javascript">
        function keepLocation(oldOffset) {
            if (window.pageYOffset != null) {
                st = oldOffset;
            }
            if (document.body.scrollWidth != null) {
                st = oldOffset;
            }
            setTimeout('window.scrollTo(0,st)', 10);
        }
    </script>
    @livewireScripts
@endsection
