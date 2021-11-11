@extends('layouts.master')
@section('css')
    @livewireStyles()
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
                        @if (auth()->check() &&
        auth()->user()->is($user))
                            <button class="btn btn-outline btn-primary">Edit Profile</button>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="btn btn-error btn-rh py-2.5 w-20 capitalize w-full mt-2">Logout</button>
                            </form>
                        @else
                            @livewire('follow-button', ['user' => $user, 'authUser' => Auth::user()])
                        @endif
                    </div>
                </div>

                @livewire('following-follower-counter', ['user' => $user])
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
                            @if (!$resep->photos->isEmpty())
                                <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                                    class="rounded-2xl">
                            @else
                                <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie.jpg"
                                    alt="Image 1" class="rounded-2xl">
                            @endif
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
                @if (auth()->check() &&
        auth()->user()->is($user))
                    <a href="{{ route('resep.create') }}" class="h-auto card-masyuk">
                        <div
                            class="border-dotted border-2 border-black w-full h-full rounded-2xl flex items-center justify-center">
                            <h3>Tambah Resep</h3>
                        </div>
                    </a>
                @endif
            </div>

            <div id="Bookmark" class="container">
            </div>
        </section>
    </main>
@endsection
@section('script')
    @livewireScripts()
@endsection

</html>
