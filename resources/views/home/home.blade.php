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
    <div class="carousel relative rounded relative overflow-hidden shadow-xl">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                checked="checked" />
            <div class="carousel-item absolute opacity-0 bg-center" style="
                height: 500px;
                background-image: url(https://mdbootstrap.com/img/new/slides/052.jpg);
              "></div>
            <label for="carousel-3"
                class="
        control-1
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
        flex
        justify-center
        content-center
      "><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-2"
                class="
        next
        control-1
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" />
            <div class="carousel-item absolute opacity-0 bg-center" style="
                height: 500px;
                background-image: url(https://mdbootstrap.com/img/new/slides/043.jpg);
              "></div>
            <label for="carousel-1"
                class="
        control-2
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
      "><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-3"
                class="
        next
        control-2
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!--Slide 3-->
            <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" />
            <div class="carousel-item absolute opacity-0" style="
                height: 500px;
                background-image: url(https://mdbootstrap.com/img/new/slides/054.jpg);
              "></div>
            <label for="carousel-2"
                class="
        control-3
        w-10
        h-10
        ml-2
        md:ml-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        left-0
        my-auto
      "><i
                    class="fas fa-angle-left mt-3"></i></label>
            <label for="carousel-1"
                class="
        next
        control-3
        w-10
        h-10
        mr-2
        md:mr-10
        absolute
        cursor-pointer
        hidden
        font-bold
        text-black
        hover:text-white
        rounded-full
        bg-white
        hover:bg-blue-700
        leading-tight
        text-center
        z-10
        inset-y-0
        right-0
        my-auto
      "><i
                    class="fas fa-angle-right mt-3"></i></label>

            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1"
                        class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-white
            hover:text-blue-700
          ">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2"
                        class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-white
            hover:text-blue-700
          ">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3"
                        class="
            carousel-bullet
            cursor-pointer
            block
            text-4xl text-white
            hover:text-blue-700
          ">•</label>
                </li>
            </ol>
        </div>
    </div>
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
        {{-- <x-home-carousel :reseps="$reseps" /> --}}
        <article>
            <section class="flex mt-4 items-center justify-between">
                <h2 class="font-bold text-2xl">Aneka Resep</h2>
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
