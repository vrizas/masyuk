@extends('layouts.master')

@section('header')
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="/" class="flex items-center gap-2">
            <h1 class="text-xl font-bold">Masyuk</h1>
        </a>
        <nav class="flex gap-4">
            @if (!Auth::check())
                <a href="#login" class="btn btn-primary btn-rh py-2.5 w-20">Login</a>
                <a href="#signup" class="btn btn-outline btn-primary btn-rh py-2.5 w-20">Signup</a>
            @else
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-warning btn-rh py-2.5 w-20">Logout</button>
                </form>
            @endif
        </nav>
    </header>
@endsection

@section('main')
    <main class="py-8">
        {{-- Atas --}}
        <section>
            <div class="flex top-0 items-center justify-between">
                <div class="flex">
                    <div class="content-center avatar">
                        <div class="mb-8 rounded-full w-24 h-24">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </div>
                    <div class="px-16">
                        <h2 class="text-5xl pb-4 font-bold">{{ $user->name }}</h2>
                        <button class="btn btn-outline btn-primary">Edit Profile</button>
                        <button class="btn btn-outline btn-primary">Log Out</button>
                    </div>
                </div>
                <div class="flex">
                    <div class="px-4">
                        <h3 class="text-3xl text-center pb-2 font-bold">10</h2>
                            <h3 class="text-xl text-center font-bold">Pengikut</h2>
                    </div>
                    <div class="px-4">
                        <h3 class="text-3xl text-center pb-2 font-bold">12</h2>
                            <h3 class="text-xl text-center font-bold">Mengikuti</h2>
                    </div>
                    <div class="px-4">
                        <h3 class="text-3xl text-center pb-2 font-bold">{{ $user->reseps->count() }}</h2>
                            <h3 class="text-xl text-center font-bold">Resep</h2>
                    </div>
                </div>
            </div>
        </section>

        {{-- Bawah --}}
        <section class="py-4">
            <div class="flex mt-4 items-center gap-2">
                <button class="btn flex-1 btn-primary btn-wide">Buku Resep</button>
                <button class="btn flex-1 btn-outline btn-primary btn-wide">Bookmark</button>
            </div>
        </section>

        <section class="bg-gray-200 rounded-2xl px-4 py-4">
            <div id="BukuResep" class="grid grid-cols-3 gap-4">
                @foreach ($user->reseps as $resep)
                    <a href="/reseps/{{ $resep->id }}">
                        <div class="relative">
                            <img src="{{ $resep->imageUrl }}" alt="Image 1" class="rounded-2xl">
                            <div
                                class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                            </div>
                            <div
                                class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                                <h3 class="font-bold text-xl">{{ $resep->title }}</h3>
                                <p class="font-medium">{{ $resep->user->name }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
                @if (Auth::check())
                    @if (Auth::user()->id === $user->id)
                        <a href="#create-resep" class="h-auto card-masyuk">
                            <div
                                class="border-dotted border-2 border-black w-full h-full rounded-2xl flex items-center justify-center">
                                <h3>Tambah Resep</h3>
                            </div>
                        </a>
                    @endif
                @endif
            </div>

            <div id="Bookmark" class="container">
            </div>
        </section>
        <x-form-resep/>
    </main>
@endsection


</html>
