@extends('layouts.master')
@section('css')
    @livewireStyles
@endsection
@section('main')
    <main class="py-4">
        <article class="w-full">
            <h1 class="mb-6  text-xl font-bold">Tambah Resep</h1>
            <form method="POST" action="{{ route('resep.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex gap-10">
                    <section class="flex-1">
                        <div class="form-group row mb-3 flex">
                            <label for="judul" class="col-md-4 col-form-label text-md-right w-1/5">Judul
                                Resep</label>

                            <div class="col-md-6 w-4/5">
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
                        <div class="form-group row flex">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right w-1/5">Deskripsi</label>

                            <div class="col-md-6 w-4/5">
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
                        <livewire:input-bahan-masakan/>
                    </section>
                    <section class="flex-1">
                        <h2 class="mb-4 text-lg font-bold">Langkah-langkah</h2>
                        {{-- LIVEWIRE INPUT LANGKAH MEMASAK --}}
                        <livewire:input-langkah-memasak/>
                        <h2 class="mb-4 text-lg font-bold mt-6">Gambar atau Video</h2>
                        {{-- LIVEWIRE INPUT GAMBAR RESEP --}}
                        <livewire:input-gambar-resep/>
                    </section>
                </div>

                <div class="action w-full text-right mt-6">
                    <button type="submit" class="btn btn-primary w-1/4">Simpan</button>
                </div>
            </form>
        </article>
    </main>
@endsection

@section('script')
    @livewireScripts
@endsection
