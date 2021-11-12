@extends('layouts.master')
@section('css')
    <style>
        .table th:first-child {
            position: static;
        }

        .table-zebra tbody tr td.btn-plus-wrapper {
            background-color: transparent;
        }

    </style>
    @livewireStyles
@endsection
@section('main')
    <main class="py-4">
        <article class="w-full">
            <h1 class="mb-6 text-xl font-bold">Tambah Resep</h1>
            <form method="POST" action="{{ route('resep.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex gap-10 flex-col lg:flex-row">
                    <section class="flex-1">
                        <div class="form-group mb-3 flex flex-col lg:flex-row">
                            <label for="judul"
                                class="col-md-4 col-form-label text-md-right w-full mb-1 lg:mb-0 lg:w-1/5">Judul
                                Resep</label>

                            <div class="col-md-6 w-full lg:w-4/5">
                                <input id="judul" type="text"
                                    class="input w-full bg-gray-50 form-control @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ old('judul') }}" required autofocus
                                    placeholder="Judul masakannmu">

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group flex flex-col lg:flex-row">
                            <label for="deskripsi"
                                class="col-md-4 col-form-label text-md-right w-full mb-1 lg:mb-0 lg:w-1/5">Deskripsi</label>

                            <div class="col-md-6 w-full lg:w-4/5">
                                <textarea name="deskripsi" id="deskripsi"
                                    class="input w-full bg-gray-50 form-control resize-none h-24 @error('deskripsi') is-invalid @enderror"
                                    value="{{ old('deskripsi') }}" required placeholder="Tentang masakannmu"></textarea>

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <h2 class="text-lg font-bold mt-6 mb-4">Bahan Masakan</h2>
                        {{-- LIVEWIRE INPUT BAHAN MASAKAN --}}
                        <livewire:input-bahan-masakan />
                    </section>
                    <section class="flex-1">
                        <h2 class="mb-4 text-lg font-bold">Langkah-langkah</h2>
                        {{-- LIVEWIRE INPUT LANGKAH MEMASAK --}}
                        <livewire:input-langkah-memasak />
                        <h2 class="mb-4 text-lg font-bold mt-6">Gambar atau Video</h2>
                        {{-- LIVEWIRE INPUT GAMBAR RESEP --}}
                        <section>
                            {{-- LIVEWIRE INPUT YOUTUBE --}}
                            <div class="w-full mb-4">
                                <label for="youtube" class="text-sm">Link Youtube <span
                                        class="font-bold text-xs text-primary-sfocus">(Opsional)</span></label>
                                <div class="mt-1">
                                    <input id="youtube" type="text"
                                        class="input w-full bg-gray-50 form-control @error('youtube') is-invalid @enderror"
                                        name="youtube" value="{{ old('youtube') }}" required autofocus
                                        placeholder="masukkan link youtube">

                                    @error('youtube')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <livewire:input-gambar-resep />
                        </section>
                    </section>
                </div>

                <div class="action w-full mt-6 lg:text-right">
                    <button type="submit" class="btn btn-primary w-full lg:w-1/4">Simpan</button>
                </div>
            </form>
        </article>
    </main>
@endsection

@section('script')
    @livewireScripts
@endsection
