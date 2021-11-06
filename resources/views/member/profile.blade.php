<!DOCTYPE html>
<html lang="en" data-theme="bumblebee">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <title>Document</title>
</head>


<body class="container mx-auto">
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
                        <h2 class="text-5xl pb-4 font-bold">John Doe</h2>
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
                        <h3 class="text-3xl text-center pb-2 font-bold">10</h2>
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
                <a href="#">
                    <div class="relative">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                        <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                        <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-xl">Tanduk Crispy</h3>
                            <p class="font-medium">Ekooooo</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="relative">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                        <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                        <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-xl">Tanduk Crispy</h3>
                            <p class="font-medium">Ekooooo</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="relative">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                        <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                        <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-xl">Tanduk Crispy</h3>
                            <p class="font-medium">Ekooooo</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="relative">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                        <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                        <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-xl">Tanduk Crispy</h3>
                            <p class="font-medium">Ekooooo</p>
                        </div>
                    </div>
                </a><a href="#">
                    <div class="relative">
                        <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/resep-ayam-goreng-kuning-tabur-serundeng.jpg" alt="Image 1" class="rounded-2xl">
                        <div class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
                        <div class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-xl">Tanduk Crispy</h3>
                            <p class="font-medium">Ekooooo</p>
                        </div>
                    </div>
                </a>
            </div>

            <div id="Bookmark" class="container">
            </div>
        </section>

    </main>
</body>

</html>