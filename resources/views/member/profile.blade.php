@extends('layouts.master')
@section('css')
    <style>
        .menu li:nth-last-child(1)>button:focus,
        .menu li:nth-last-child(1)>button:hover {
            background-color: #E4565E;
        }

        .menu li>form {
            padding: 0.75rem 1.25rem;
        }

    </style>
    @livewireStyles()
@endsection

@section('main')
    <main class="py-4">
        <section class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
            <div class="flex gap-5 items-center">
                <div class="content-center avatar relative">
                    <div class="mb-8 rounded-full w-10 h-10 lg:w-12 lg:h-12">
                        <label for="changePhoto"
                            class="w-6 h-6 rounded-full absolute -top-2 -right-2 bg-white cursor-pointer flex justify-center items-center">
                            <i class='bx bx-image-add text-lg'></i>
                            <input type="file" id="changePhoto" class="hidden">
                        </label>
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
                            @livewire('follow-button', ['user' => $user, 'authUser' => Auth::user(), 'isProfile' => true])
                        @endif
                    </div>
                </div>
            </div>

            @livewire('following-follower-counter', ['user' => $user])
        </section>
            @livewire('profile-tab', ['user' => $user])
    </main>
@endsection
@section('script')
@livewireScripts()
@endsection

</html>
