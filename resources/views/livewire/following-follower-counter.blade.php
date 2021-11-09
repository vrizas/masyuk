<div class="flex">
    <div class="px-4">
        <h3 class="text-3xl text-center pb-2 font-bold">{{ $followers }}</h2>
            <h3 class="text-xl text-center font-bold">Pengikut</h2>
    </div>
    <div class="px-4">
        <h3 class="text-3xl text-center pb-2 font-bold">{{ $followings }}</h2>
            <h3 class="text-xl text-center font-bold">Mengikuti</h2>
    </div>
    <div class="px-4">
        <h3 class="text-3xl text-center pb-2 font-bold">{{ $user->reseps->count() }}</h2>
            <h3 class="text-xl text-center font-bold">Resep</h2>
    </div>
</div>
