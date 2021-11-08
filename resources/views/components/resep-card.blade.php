<a class="h-auto card-masyuk" href="/reseps/{{ $resep->id }}">
  <div class="relative">
    <img src="{{ $resep->imageUrl }}" alt="Image 1" class="rounded-2xl">
    <div class="from-black bg-gradient-to-t w-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
      <div class="text-white rounded-2xl absolute w-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
        <h3 class="font-bold text-xl">{{ $resep->title }}</h3>
        <p class="font-medium">{{ $resep->user->name ?? 'No User Owned This Recipe' }}</p>
    </div>
  </div> 
</a>