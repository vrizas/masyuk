@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <style>
        .divider::after, .divider::before {
            height: 0.01rem;
            background-color: #c1c1c1;
        }

        .likeButtonContainer:hover .likeButton.icon {
            color: #E4565E; 
        }
    </style>
@endsection
@section('header')
    <header class="py-2 flex top-0 items-center justify-between">
        <a href="#" class="flex items-center gap-2">
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
    <main class="py-4 grid grid-cols-4 gap-4">
        <div class="content w-full col-span-3">
            <article class="bg-base-200 py-8 px-10 rounded-2xl">
                <section class="flex gap-4 h-1/2">
                    {{-- Video --}}
                    <iframe class="h-full w-3/4 rounded-2xl" src="https://www.youtube.com/embed/QwG1Jj23Zts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    {{-- Foto --}}
                    <div class="h-full w-1/4 flex flex-col gap-4">
                        <div class="h-1/2 w-full bg-no-repeat bg-cover bg-center rounded-2xl" style='background-image: url("https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg")'></div>
                        <div class="h-1/2 w-full bg-no-repeat bg-cover bg-center rounded-2xl" style='background-image: url("https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg")'></div>
                    </div>
                </section>
                <section class="mt-6">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-3xl w-3/4">Ayam Goreng</h2>
                        <button class="btn btn-primary w-1/4">Tersimpan</button>
                    </div>
                    <div class="flex gap-6 mt-2">
                        <button class="flex gap-2 justify-center items-center cursor-default">
                            <i class='bx bxs-timer text-3xl' ></i>
                            <span class="text-sm">60 Menit</span>
                        </button>
                        <button class="flex gap-2 justify-center items-center likeButtonContainer">
                            <i class="bi bi-heart text-xl icon likeButton"></i> 
                            <span class="text-sm text likeButton">102 Suka</span>
                        </button>
                        <a href="#" class="flex gap-2 justify-center items-center">
                            <i class="bi bi-chat-dots-fill text-xl"></i>
                            <span class="text-sm">10 Komentar</span></a>
                        <button class="flex gap-2 justify-center items-center cursor-default">
                            <i class='bx bxs-bookmark text-2xl' ></i>
                            <span class="text-sm">20 Simpan</span>
                        </button>
                    </div>
                    <div class="w-full mt-2">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio similique recusandae eveniet ad explicabo natus, ipsum exercitationem magnam est provident omnis inventore numquam voluptates quaerat dolorem deserunt tempore consequuntur corrupti ut, nisi, velit atque iste ducimus aspernatur. Alias quia vero corporis iste rem ut sint! Repellat est iste qui repudiandae.</p>
                    </div>
                    <div class="divider"></div>
                    <div class="flex justify-between items-center mt-2">
                        <a href="#" class="flex gap-2 items-center w-3/4">
                            <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp" class="mask mask-circle w-16">
                            <p class="font-bold text-lg">John Donald</p>
                        </a>
                        <button class="btn btn-outline btn-primary w-1/4"><i class='bx bx-plus'></i> Ikuti</button>
                    </div> 
                </section>
            </article>
            <article class="bg-base-200 py-8 px-10 rounded-2xl mt-4">
                <h3 class="font-bold text-2xl mb-4">Bahan Masakan</h3>
                <ul class="list-disc px-6">
                    <li>1/2 ekor ayam</li>
                    <li>1 lembar daun salam</li>
                    <li>1 batang serai memarkan</li>
                    <li>2 sendok makan penyedap rasa</li>
                    <li>400 ml air</li>
                    <li>2 sendok makan garam</li>
                    <li>1/2 sendok teh gula pasir</li>
                    <li>350 ml Minyak Goreng</li>
                </ul>
            </article>
            <article class="collapse w-full collapse-arrow bg-base-200 rounded-2xl mt-4">
                <input type="checkbox"> 
                <div class="collapse-title text-xl font-medium pt-8 px-10 flex justify-between">
                    <h3 class="font-bold text-2xl mb-4">Total Kalori</h3>
                    <p class="font-bold text-2xl mb-4">408 Kkal</p>
                </div> 
                <div class="collapse-content px-10"> 
                    <table class="w-full">
                        <tr>
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                        <tr>
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                        <tr>
                            <td>Tomat</td>
                            <td class="text-right">120 Kkal / 50 gram</td>
                        </tr>
                    </table>
                </div>
            </article> 
            <article class="bg-base-200 py-8 px-10 rounded-2xl mt-4">
                <h3 class="font-bold text-2xl mb-4">Langkah-langkah</h3>
                <p class="mb-4"><b>Step 1: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 2: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 3: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 4: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
                <p class="mb-4"><b>Step 5: </b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos cupiditate nulla, cumque hic ratione aliquam? Blanditiis optio doloremque quibusdam nam.</p>
            </article>
        </div>
        <aside class="col-span-1 flex flex-col gap-4">
            @for($i = 0; $i <= 3; $i++)
            <a href="#" class="relative">
                <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                    <h3 class="font-bold text-xl">Ayam Goreng Jawa</h3>
                    <p class="font-medium">Eko Prasetyo</p>
                </div>
            </a>
            @endfor
        </aside>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/detail-resep.js') }}"></script>
@endsection
</body>
</html>
