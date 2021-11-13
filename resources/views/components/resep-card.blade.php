{{-- <a class="h-auto card-masyuk" href="/reseps/{{ $resep->id }}">
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
</a> --}}

<!-- Card -->
<a href="/reseps/{{ $resep->id }}" class="shadow-md rounded-2xl overflow-hidden w-full">
    <div class="w-full h-60">
        @if (!$resep->photos->isEmpty())
            <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}"
                alt="Gambar {{ $resep->title }}" class="w-full h-full object-cover">
        @else
            <img src="http://blog.sayurbox.com/wp-content/uploads/2021/03/edisibelajarmasak-595x375.jpg"
                alt="Gambar {{ $resep->title }}" class="w-full h-full object-cover">
        @endif
    </div>
    <div class="p-4">
        <div class="flex gap-4 mt-2">
            <div class="flex gap-1 justify-center items-center cursor-default">
                <i class='bx bxs-timer text-xl'></i>
                <span class="text-xs">{{ $resep->duration }}</span>
            </div>
            <div class="flex gap-1 justify-center items-center like">
                <svg width="18" height="18" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <path id="heart"
                            d="m 31,11.375 c -14.986319,0 -25,12.30467 -25,26 0,12.8493 7.296975,23.9547 16.21875,32.7188 8.921775,8.764 19.568704,15.2612 26.875,19.0312 a 2.0002,2.0002 0 0 0 1.8125,0 c 7.306296,-3.77 17.953225,-10.2672 26.875,-19.0312 C 86.703025,61.3297 94,50.2243 94,37.375 c 0,-13.69533 -10.013684,-26 -25,-26 -8.834204,0 -14.702885,4.50444 -19,10.59375 C 45.702885,15.87944 39.834204,11.375 31,11.375 z" />

                        <clipPath id="insideHeartOnly">
                            <use xlink:href="#heart" />
                        </clipPath>
                    </defs>

                    <use xlink:href="#heart" stroke-width="10" stroke="red" fill="none"
                        clip-path="url(#insideHeartOnly)" />
                </svg>

                <span class="text-xs">{{ $resep->likes->count() }}</span>
            </div>
            <div class="flex gap-1 justify-center items-center">
                <i class="bi bi-chat-dots-fill text-base"></i>
                <span class="text-xs">{{ $resep->komentars->count() }}</span>
            </div>
            <div class="flex gap-1 justify-center items-center">
                <i class='bx bxs-bookmark text-lg'></i>
                <span class="text-xs">20</span>
            </div>
        </div>
        <h5 class="text-lg font-semibold mb-2 mt-1">{{ $resep->title }}</h5>

        <p class="mb-4 text-sm">
            {{ $resep->description }}
        </p>
    </div>
</a>
