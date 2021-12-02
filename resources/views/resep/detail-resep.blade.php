@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <style>
        .likeButton svg {
            transition: transform .1s ease-in;
        }

        .likeButton svg path {
            fill: #E4565E;
            fill-opacity: 0;
            stroke: #1f2937;
            stroke-width: 12px;
            transition: fill-opacity .1s ease-in;
            transition: stroke-opacity .1s ease-in;
        }

        .likeButton:hover svg path {
            fill-opacity: 1;
            stroke-opacity: 0;
        }

        .likeButton:hover svg {
            transform: scale(1.5);
        }

        .collapse-arrow .collapse-title:after {
            content: none;
        }

        #menu-toggle+div svg {
            transition: transform .2s ease-in;
        }

        #menu-toggle:checked+div svg {
            transform: rotate(180deg);
        }

        .carousel-indicators {
            width: fit-content;
            left: 50%;
            transform: translateX(-50%);
        }

        button.likeButton .liked path {
            fill-opacity: 1;
            stroke: none;
            stroke-width: 0;
        }

    </style>
    @livewireStyles
@endsection

@section('main')
    <main class="lg:grid lg:gap-4 lg:grid-cols-4 lg:py-4">
        <div class="content w-full mb-4 lg:mb-0 lg:col-span-3">
            <article class="rounded-2xl py-1 px-0 lg:py-8 lg:px-10 lg:bg-base-200">
                <section class="carousel relative shadow bg-white mt-2 rounded-2xl lg:h-auto">
                    <div class="carousel-inner relative overflow-hidden w-full relative">
                        <!--Slide 1-->
                        <input class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true"
                            hidden checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full">
                                <iframe class="block h-full w-full"
                                    src="https://www.youtube.com/embed/{{ $resep->youtube_id }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <label for="carousel-3"
                            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2"
                            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 2-->
                        <input class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true"
                            hidden>
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full">
                                <img src="http://blog.sayurbox.com/wp-content/uploads/2021/03/edisibelajarmasak-595x375.jpg"
                                    class="rounded-2xl w-full h-full object-cover">
                                <div
                                    class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                                </div>
                            </div>
                        </div>
                        <label for="carousel-1"
                            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3"
                            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--Slide 3-->
                        <input class="carousel-open hidden" type="radio" id="carousel-3" name="carousel" aria-hidden="true"
                            hidden>
                        <div class="carousel-item absolute opacity-0" style="height:50vh;">
                            <div class="block h-full w-full">
                                <img src="http://blog.sayurbox.com/wp-content/uploads/2021/03/edisibelajarmasak-595x375.jpg"
                                    class="rounded-2xl w-full h-full object-cover">
                                <div
                                    class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                                </div>
                            </div>
                        </div>
                        <label for="carousel-2"
                            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1"
                            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!-- Add additional indicators for each slide-->
                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3"
                                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>

                    </div>
                </section>
                <section class="mt-6">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold w-3/4 text-xl lg:text-2xl">{{ $resep->title }}</h2>
                        {{-- LIVEWIRE BOOKMARK BUTTON --}}
                        @auth
                            @if (!auth()->user()->is($resep->user))
                                @livewire('bookmark-button', ['resep' => $resep, 'authUser' => Auth::user()])
                            @endif
                        @endauth
                    </div>
                    <div class="flex gap-1 flex-wrap">
                        @foreach ($resep->categories as $category)
                            <span
                                class="bg-transparent border border-gray-900 peer-checked:bg-gray-900 rounded-lg py-1 px-2 flex items-center font-medium text-sm max-w-max">{{ $category->name }}</span>
                        @endforeach
                    </div>
                    <div class="flex items-center mt-2 gap-4 lg:gap-6">
                        <button class="flex justify-center items-center cursor-default gap-1 lg:gap-2">
                            <i class='bx bxs-timer text-2xl lg:text-3xl'></i>
                            <span>{{ $resep->duration }}</span>
                        </button>
                        {{-- LIVEWIRE LIKE BUTTON --}}
                        @livewire('like-button', ['resep' => $resep, 'authUser' => Auth::user()])
                        <a href="#comment" class="flex justify-center items-center gap-1 lg:gap-2">
                            <i class="bi bi-chat-dots-fill text-lg lg:text-xl"></i>
                            <span class="text-sm">{{ $resep->komentars_count }} <span
                                    class="hidden md:inline lg:inline">Komentar</span></span></a>
                        <button class="flex justify-center items-center cursor-default gap-1 lg:gap-2">
                            <i class='bx bxs-bookmark text-xl lg:text-2xl'></i>
                            <span class="text-sm">{{ $bookmarkCount }} <span
                                    class="hidden md:inline lg:inline">Simpan</span></span>
                        </button>
                    </div>
                    <div class="w-full mt-2">
                        <p class="text-sm lg:text-base">{{ $resep->description }}</p>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between items-center mt-0 lg:mt-2">
                        <a href="{{ $resep->user->path() }}" class="avatar flex gap-3 items-center w-3/4">
                            <div class="rounded-full w-8 h-8 lg:w-10 lg:h-10">
                                <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                            </div>
                            <p class="font-bold text-base lg:text-lg">{{ $resep->user->name }}</p>
                        </a>
                        @auth
                            @if (!auth()->user()->is($resep->user))
                                @livewire('follow-button', ['user' => $resep->user, 'authUser' => Auth::user(), 'isProfile' =>
                                false])
                            @endif
                        @endauth
                    </div>
                </section>
            </article>
            <article class="bg-base-200 rounded-2xl mt-4 py-4 px-6 lg:py-8 lg:px-10">
                <h3 class="font-bold mb-4 text-lg lg:text-xl">Bahan Masakan</h3>
                <ul class="list-disc px-6">
                    @foreach ($resep->bahans as $bahan)
                        <li class="text-sm lg:text-base">{{ $bahan->baseQuantity * $bahan->pivot->quantity . ' ' . $bahan->unit }}<b>
                                {{ $bahan->nama }}</b></li>
                    @endforeach
                </ul>
            </article>
            <article class="collapse w-full collapse-arrow bg-base-200 rounded-2xl mt-4">
                <input type="checkbox" id="menu-toggle">
                <div
                    class="collapse-title text-xl font-medium flex justify-between items-center py-4 px-6 lg:py-8 lg:px-10">
                    <h3 class="font-bold text-lg lg:text-xl">Total Kalori</h3>
                    <div class="flex gap-2">
                        <p class="font-bold text-lg lg:text-xl">{{ $totalCalory }} Kkal</p>
                        <svg xmlns="http://www.w3.org/2000/svg" class="chevron w-6 h-6 lg:w-8 lg:h-8" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="collapse-content px-8 lg:px-10">
                    <table class="w-full">
                        @foreach ($resep->bahans as $bahan)
                            <tr class="h-8 align-top">
                                <td>{{ $bahan->nama }}</td>
                                <td class="text-right">{{ $bahan->kalori * $bahan->pivot->quantity }} Kkal / {{ $bahan->baseQuantity * $bahan->pivot->quantity }}
                                    {{ $bahan->unit }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </article>
            <article class="bg-base-200 rounded-2xl mt-4 py-4 px-6 lg:py-8 lg:px-10">
                <h3 class="font-bold mb-4 text-lg lg:text-xl">Langkah-langkah</h3>
                @foreach ($resep->steps as $step)
                    <p class="mb-4"><b>Step {{ $step->nomor_step }}: </b>{{ $step->description }}</p>
                @endforeach
            </article>
            {{-- LIVEWIRE DAFTAR KOMENTAR --}}
            @livewire('daftar-komentar', ['resep' => $resep])
        </div>
        {{-- TODO: Implement --}}
        <aside class="lg:col-span-1">
            <h3 class="font-bold mb-2 text-lg lg:text-xl">Disarankan untuk kamu</h3>
            <div class="flex flex-col gap-5">
                @for ($i = 0; $i <= 3; $i++)
                    <a href="#" class="relative">
                        <img src="data:image/jpeg;base64,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"
                            alt="Image 1" class="rounded-2xl w-full object-cover">
                        <div
                            class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                        </div>
                        <div
                            class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-lg lg:text-xl">Ayam Goreng Jawa</h3>
                            <p class="font-medium text-sm lg:text-base">Eko Prasetyo</p>
                        </div>
                    </a>
                @endfor
            </div>
        </aside>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/detail-resep.js') }}"></script>
    @livewireScripts
@endsection

</html>
