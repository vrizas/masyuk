@extends('layouts.master')
@section('css')
    <style>
        .like svg path {
            fill: #1f2937;
            stroke-width: 0;
        }

        .content aside {
            height: fit-content;
        }

    </style>
    @livewireStyles
@endsection
@section('main')
    <livewire:search-dropdown :desktop="true" />
    <div class="content flex gap-6">
        <main class="py-4 lg:w-3/4 lg:order-2">
            <article class="-mt-4">
                <section class="bg-base-200 rounded-2xl flex flex-col gap-3 px-5 py-3 text-sm">
                    <div class="flex justify-between">
                        <select name="sortBy" id="sortBy" class="rounded-lg border-none text-sm">
                            <option disabled selected>Urutkan Berdasarkan</option>
                            <option value="">Like tinggi ke rendah</option>
                            <option value="">Like rendah ke tinggi</option>
                        </select>
                        @if ((new \Jenssegers\Agent\Agent())->isMobile() || (new \Jenssegers\Agent\Agent())->isTablet())
                            <a href="#filter"
                                class="inline-flex w-8 h-8 justify-center items-center rounded-full bg-white lg:hidden"><i
                                    class='bx bx-filter-alt text-2xl text-gray-700'></i></a>
                            <div id="filter" class="modal">
                                <div class="modal-box max-w-none rounded-none h-full w-full py-5 overflow-auto relative">
                                    <div class="flex items-center gap-4">
                                        <a href="#" class="text-2xl flex-1/2"><i class="bi bi-chevron-left"></i></a>
                                        <h2 class="flex-1 text-center font-bold text-lg">Filter</h2>
                                    </div>
                                    <div class="mt-3 flex flex-col gap-2">
                                        <label class="font-bold text-base">Kategori</label>
                                        <div class="flex gap-2 flex-wrap">
                                            <button class="btn btn-outline btn-sm capitalize"><i
                                                    class='bx bxs-purchase-tag text-lg'></i> Menu
                                                Sarapan</button>
                                            <button class="btn btn-outline btn-sm capitalize"><i
                                                    class='bx bxs-purchase-tag text-lg'></i> Menu Makan
                                                Siang</button>
                                            <button class="btn btn-outline btn-sm capitalize"><i
                                                    class='bx bxs-purchase-tag text-lg'></i> Menu Makan
                                                Malam</button>
                                        </div>
                                    </div>
                                    <div class="mt-4 flex flex-col gap-2">
                                        <label for="bahan" class="font-bold text-base">Bahan</label>
                                        <div>
                                            <input id="bahan" type="search"
                                                class="input w-full bg-gray-50 form-control @error('bahan') is-invalid @enderror"
                                                name="bahan" value="{{ old('bahan') }}" required autofocus
                                                placeholder="cari bahan">

                                            @error('bahan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="flex gap-2 flex-wrap">
                                            <div class="flex gap-3 border border-base-content px-2 py-1 rounded-lg">
                                                <p class="flex items-center">Bawang Merah <button
                                                        class="flex items-center"><i class='bx bx-x text-lg'></i></button>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <button
                                        class="btn btn-primary capitalize absolute bottom-8 left-1/2 transform -translate-x-1/2 w-4/5">Terapkan</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex gap-2 items-center">
                        <p>Filters: </p>
                        <div class="flex gap-3 bg-primary px-2 py-1 rounded-lg">
                            <p class="flex items-center">Menu Sarapan <button class="flex items-center"><i
                                        class='bx bx-x text-lg'></i></button></p>
                        </div>
                    </div>
                </section>
            </article>
            <article class="mt-3 flex flex-col gap-3">
                <p><b>10</b> Resep ditemukan</p>
                <section class="resep-card grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($reseps as $resep)
                        <x-resep-card :resep="$resep" />
                    @endforeach
                </section>
            </article>
        </main>
        @if ((new \Jenssegers\Agent\Agent())->isDesktop())
            <aside class="w-1/4 bg-base-200 rounded-2xl px-5 py-3 hidden lg:flex lg:flex-col lg:order-1">
                <h2 class="text-center font-bold text-lg">Filter</h2>
                <div class="mt-3 flex flex-col gap-2">
                    <label class="font-bold text-base">Kategori</label>
                    <div class="flex gap-2 flex-wrap">
                        <button class="btn btn-outline btn-sm capitalize"><i class='bx bxs-purchase-tag text-lg'></i> Menu
                            Sarapan</button>
                        <button class="btn btn-outline btn-sm capitalize"><i class='bx bxs-purchase-tag text-lg'></i> Menu
                            Makan
                            Siang</button>
                        <button class="btn btn-outline btn-sm capitalize"><i class='bx bxs-purchase-tag text-lg'></i> Menu
                            Makan
                            Malam</button>
                    </div>
                </div>
                <div class="mt-4 flex flex-col gap-2">
                    <label for="bahan" class="font-bold text-base">Bahan</label>
                    <div>
                        <input id="bahan" type="search"
                            class="input w-full bg-gray-50 form-control @error('bahan') is-invalid @enderror" name="bahan"
                            value="{{ old('bahan') }}" required autofocus placeholder="cari bahan">

                        @error('bahan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="flex gap-2 flex-wrap">
                        <div class="flex gap-3 border border-base-content px-2 py-1 rounded-lg">
                            <p class="flex items-center text-sm">Bawang Merah <button class="flex items-center"><i
                                        class='bx bx-x text-lg'></i></button></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary capitalize mt-6">Terapkan</button>
            </aside>
        @endif
    </div>

@endsection

@section('script')
    @livewireScripts
@endsection
