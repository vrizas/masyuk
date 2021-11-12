@extends('layouts.master')
@section('css')
    <style>
        .like svg path {
            fill: #1f2937;
            stroke-width: 0;
        }

    </style>
    @livewireStyles
@endsection
@section('main')
    <main class="py-4">
        <livewire:search-dropdown :desktop="true" />
        <article>
            <section class="">
                <h3 class="font-bold text-xl lg:2xl">Rekomendasi Resep</h3>
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
