@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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
        @if ($reseps->count() > 3)
            <x-home-carousel :reseps="$reseps" />
        @endif
        <article>
            <section class="flex mt-4 items-center justify-between">
                <h3 class="font-bold text-xl lg:2xl">Rekomendasi Resep</h3>
                <a class="text-sm" href="{{ url('/reseps/list') }}">Lihat Semua</a>
            </section>
            <section class="resep-card mt-4 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
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
