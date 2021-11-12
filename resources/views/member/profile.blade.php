@extends('layouts.master')
@section('css')
    <style>
        .menu li:nth-last-child(1)>a:focus,
        .menu li:nth-last-child(1)>a:hover {
            background-color: #E4565E;
        }

    </style>
    @livewireStyles()
@endsection

@section('main')
    <main class="py-4">
        <section class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
            <div class="flex gap-5 items-center">
                <div class="content-center avatar">
                    <div class="mb-8 rounded-full w-10 h-10 lg:w-12 lg:h-12">
                        <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                    </div>
                </div>
                <div>
                    <p class="font-bold mb-3 lg:text-xl">{{ $user->name }}</p>
                    <div class="flex gap-2 mb-2">
                        @if (auth()->check() &&
        auth()->user()->is($user))
                            <button class="btn btn-outline btn-primary capitalize btn-rh flex-1 py-1.5 lg:py-2.5">Edit
                                Profile</button>
                            <form method="POST" action="{{ route('logout') }}" class="flex-1">
                                @csrf
                                <button type="submit"
                                    class="btn btn-error capitalize btn-rh py-1.5 lg:py-2.5">Logout</button>
                            </form>
                        @else
                            @livewire('follow-button', ['user' => $user, 'authUser' => Auth::user()])
                        @endif
                    </div>
                </div>
            </div>

            @livewire('following-follower-counter', ['user' => $user])
        </section>
        <section class="mb-4">
            <div class="flex mt-4 items-center gap-2">
                <button class="btn flex-1 btn-primary capitalize btn-rh py-2 lg:py-3">Buku Resep</button>
                <button class="btn flex-1 btn-outline btn-primary capitalize btn-rh py-2 lg:py-3">Bookmark</button>
            </div>
        </section>
        <section class="bg-gray-200 rounded-2xl px-5 py-4">

            <div id="BukuResep" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($user->reseps as $resep)
                    <div class="relative card-masyuk">
                        <div class="relative">
                            <div class="dropdown dropdown-left absolute top-2 right-2 z-40">
                                <button tabindex="0" class="bg-white w-6 h-6 rounded-full"><i
                                        class='bx bx-dots-vertical-rounded text-lg'></i></button>
                                <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                                    <li>
                                        <a href="/reseps/{{ $resep->id }}" class="text-sm inline-flex gap-2"><i
                                                class="bi bi-eye-fill"></i> Lihat Resep</a>
                                    </li>
                                    <li>
                                        <a class="text-sm inline-flex gap-2"><i class='bx bxs-edit text-lg'></i> Edit
                                            Resep</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('resep.delete', ['id' => $resep->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" class="text-sm inline-flex gap-2"><i
                                                    class='bx bxs-trash-alt text-lg'></i> Hapus
                                                Resep</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            @if (!$resep->photos->isEmpty())
                                <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                                    class="rounded-2xl w-full h-full object-cover">
                            @else
                                <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie.jpg"
                                    alt="Image 1" class="rounded-2xl h-full object-cover">
                            @endif
                            <div
                                class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                            </div>
                            <div
                                class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                                <h3 class="font-bold text-lg lg:text-xl">{{ $resep->title }}</h3>
                                <p class="font-medium text-sm lg:text-base">{{ $resep->user->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if (auth()->check() &&
        auth()->user()->is($user))
                    <a href="{{ route('resep.create') }}" class="card-masyuk">
                        <div
                            class="border-dotted border-2 border-base-content w-full h-full rounded-2xl flex items-center justify-center">
                            <h3><i class="bi bi-plus-circle font-bold text-3xl"></i></h3>
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
