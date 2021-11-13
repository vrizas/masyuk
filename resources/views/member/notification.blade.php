@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @livewireStyles
@endsection
@section('main')
    <main class="py-4">
        <article>
            <h2 class="font-bold text-lg mb-2">Notifikasi</h2>
            <section class="flex flex-col gap-1">
                <div class="px-3 py-2 shadow bg-base-100 rounded-lg text-sm flex gap-2 items-center relative">
                    <div class="badge badge-primary badge-xs self-start mt-1 mr-1"></div>
                    <a href="#" class="avatar mr-2">
                        <div class="rounded-full w-8 h-8">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </a>
                    <div class="flex flex-col gap-0.5">
                        <p><b>Vrizas Izza</b> menyukai resep Anda.</p>
                        <p class="text-xs font-md text-gray-700">10 menit yang lalu</p>
                    </div>
                    <button></button>
                    <div data-tip="Tandai sudah terbaca"
                        class="tooltip tooltip-left absolute top-1/2 right-3 transform -translate-y-1/2">
                        <button></i><i class="bi bi-envelope text-base"></i></button>
                    </div>
                </div>
                <div class="px-3 py-2 shadow bg-base-100 rounded-lg text-sm flex gap-2 items-center relative">
                    <div class="badge bg-gray-300 border-gray-300 badge-xs self-start mt-1 mr-1"></div>
                    <a href="#" class="avatar mr-2">
                        <div class="rounded-full w-8 h-8">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </a>
                    <div class="flex flex-col gap-0.5">
                        <p><b>Bambang</b> mengomentari resep Anda.</p>
                        <p class="text-xs font-md text-gray-700">Udah coba bikin, enak bangett</p>
                        <p class="text-xs font-md text-gray-700">17 November 2021</p>
                    </div>
                    <div class="absolute top-1/2 right-3 transform -translate-y-1/2">
                        <button></i><i class="bi bi-envelope-open text-base"></i></button>
                    </div>
                </div>
                <div class="px-3 py-2 shadow bg-base-100 rounded-lg text-sm flex gap-2 items-center relative">
                    <div class="badge bg-gray-300 border-gray-300 badge-xs self-start mt-1 mr-1"></div>
                    <a href="#" class="avatar mr-2">
                        <div class="rounded-full w-8 h-8">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </a>
                    <div class="flex flex-col gap-0.5">
                        <p><b>Basri</b> mengomentari resep Anda.</p>
                        <p class="text-xs font-md text-gray-700">enak bangett</p>
                        <p class="text-xs font-md text-gray-700">17 November 2021</p>
                    </div>
                    <div class="absolute top-1/2 right-3 transform -translate-y-1/2">
                        <button></i><i class="bi bi-envelope-open text-base"></i></button>
                    </div>
                </div>
            </section>
        </article>
    </main>
@endsection

@section('script')
    @livewireScripts
@endsection
