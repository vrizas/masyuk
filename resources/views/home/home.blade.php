@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('main')
    <main class="py-4">
        <article>
            <section>
                <h2 class="text-5xl font-bold">Selamat Datang!</h2>
                <p class="text-gray-700">Mau masak apa kita hari ini?</p>
            </section>
            <section class="signup-form-container fixed inset-0 flex items-center justify-center hidden">
                <div class="signup-form-wrapper bg-white rounded-lg py-6 px-8 w-1/2 relative">
                    <button class="btn-close"><i class='bx bx-x absolute top-3 right-3 text-2xl'></i></button>
                    <h3 class="text-2xl font-bold text-center mb-4">Signup</h3>
                </div>
            </section>
        </article>
        <article class="mt-4 mb-4">
            <input class="input w-full bg-gray-50" type="search" placeholder="Mau cari siapa kita hari ini?">
        </article>
        <x-home-carousel :reseps="$reseps" />
        <article>
            <section class="flex mt-4 items-center justify-between">
                <h2 class="font-bold text-2xl">Aneka Resep</h2>
                <a class="text-sm" href="#">Lihat Semua</a>
            </section>
            <section class="resep-card mt-4 grid grid-cols-4 gap-4">
                @foreach ($reseps as $resep)
                    <x-resep-card :resep="$resep" />
                @endforeach
            </section>
        </article>
    </main>
@endsection

@section('script')
    <script src="{{ asset('js/home.js') }}"></script>
    <script language="JavaScript" type="text/javascript">
        function keepLocation(oldOffset) {
          if (window.pageYOffset!= null){
            st=oldOffset;
          }
          if (document.body.scrollWidth!= null){
            st=oldOffset;
          }
          setTimeout('window.scrollTo(0,st)',10);
        }
    </script>
@endsection
</body>

</html>
