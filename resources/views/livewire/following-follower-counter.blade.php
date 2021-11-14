<div class="flex justify-around text-center font-medium lg:justify-start lg:gap-8 text-sm lg:text-base">
    <div>
        <p>{{ $followers }}</p>
        <p>Pengikut</p>
    </div>
    <div>
        <p>{{ $followings }}</p>
        <p>Mengikuti</p>
    </div>
    <div>
        <p>{{ $user->reseps->count() }}</p>
        <p>Resep</p>
    </div>
</div>
