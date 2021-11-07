@extends('layouts.master')
@section('css')
    @livewireStyles
@endsection
@section('main')
    <main class="py-4">
        <article class="w-full">
            <h1 class="mb-6  text-xl font-bold">Tambah Resep</h1>
            <form method="POST" action="{{ route('login') }}">
                <div class="flex gap-10">
                    <section class="flex-1">
                        <div class="form-group row mb-3 flex">
                            <label for="judul-resep" class="col-md-4 col-form-label text-md-right w-1/5">Judul
                                Resep</label>

                            <div class="col-md-6 w-4/5">
                                <input id="judul-resep" type="text"
                                    class="input w-full bg-gray-50 form-control @error('judul-resep') is-invalid @enderror"
                                    name="judul-resep" value="{{ old('judul-resep') }}" required autofocus
                                    placeholder="Judul masakannmu">

                                @error('judul-resep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row flex">
                            <label for="deskripsi-resep"
                                class="col-md-4 col-form-label text-md-right w-1/5">Deskripsi</label>

                            <div class="col-md-6 w-4/5">
                                <textarea name="deskripsi-resep" id="deskripsi-resep"
                                    class="input w-full bg-gray-50 form-control resize-none h-24 @error('deskripsi-resep') is-invalid @enderror"
                                    value="{{ old('deskripsi-resep') }}" required
                                    placeholder="Tentang masakannmu"></textarea>

                                @error('deskripsi-resep')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <h2 class="text-lg font-bold mt-6 mb-4">Bahan Masakan</h2>
                        <table class="table w-full table-zebra">
                            <thead>
                                <tr>
                                    <th>Bahan</th>
                                    <th>Kuantitas</th>
                                    <th>Unit</th>
                                    <th>Kalori</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kucing</td>
                                    <td>100</td>
                                    <td>gram</td>
                                    <td>1000</td>
                                    <td>
                                        <button onclick="event.preventDefault()"><i
                                                class='bx bxs-trash-alt text-xl'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kucing</td>
                                    <td>100</td>
                                    <td>gram</td>
                                    <td>1000</td>
                                    <td>
                                        <button onclick="event.preventDefault()"><i
                                                class='bx bxs-trash-alt text-xl'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kucing</td>
                                    <td>100</td>
                                    <td>gram</td>
                                    <td>1000</td>
                                    <td>
                                        <button onclick="event.preventDefault()"><i
                                                class='bx bxs-trash-alt text-xl'></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="6" class="btn-plus-wrapper">
                                        <a href="#">
                                            <button class="w-full btn btn-outline" onclick="event.preventDefault()">
                                                <i class='bx bx-plus'></i> Tambah Bahan Makanan
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                        </table>
                    </section>
                    <section class="flex-1">
                        <h2 class="mb-4 text-lg font-bold">Langkah-langkah</h2>
                        <section>
                            <div class="form-control mb-4">
                                <textarea name="inputLangkah" class="textarea h-24 resize-none bg-gray-50"
                                    placeholder="Langkah-langkah untuk memasak"></textarea>
                            </div>
                            <a href="#">
                                <button class="w-full btn btn-outline" onclick="event.preventDefault()">
                                    <i class='bx bx-plus'></i> Tambah Langkah Memasak
                                </button>
                            </a>
                        </section>
                        <h2 class="mb-4 text-lg font-bold mt-6">Gambar atau Video</h2>
                        <section class="flex flex-wrap gap-4 ">
                            <div class="w-40 h-40 rounded-2xl bg-cover bg-no-repeat bg-center"
                                style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/a/ad/Sate_Ponorogo.jpg');">
                            </div>
                            <button class="w-40 h-40 border-dashed border-2 border-base-300 rounded-2xl text-sm p-2"
                                onclick="event.preventDefault()">Tambah
                                Gambar/Video</button>
                        </section>
                    </section>
                </div>

                <div class="action w-full text-center mt-6">
                    <button type="submit" class="btn btn-primary w-1/4">Simpan</button>
                </div>
            </form>
        </article>
    </main>
@endsection

@section('script')
    @livewireScripts
@endsection
