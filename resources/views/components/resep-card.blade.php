<a class="h-auto card-masyuk" href="/reseps/{{ $resep->id }}">
    <div class="relative h-full w-full">
        @if (!$resep->photos->isEmpty())
            <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                class="rounded-2xl object-cover w-full h-full">
        @else
            <img src="http://blog.sayurbox.com/wp-content/uploads/2021/03/edisibelajarmasak-595x375.jpg" alt="Image 1"
                class="rounded-2xl object-cover w-full h-full">
        @endif
        <div class="from-black bg-gradient-to-t w-full rounded-2xl absolute top-0 left-0 image-filter opacity-50"></div>
        <div class="text-white rounded-2xl absolute w-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
            <h3 class="font-bold text-xl">{{ $resep->title }}</h3>
            <p class="font-medium">{{ $resep->user->name ?? 'No User Owned This Recipe' }}</p>
        </div>
    </div>
</a>
