<section class="bg-gray-200 rounded-2xl px-5 py-4 mt-4">
    <section class="mb-4">
        <div class="flex items-center gap-2">
            <button wire:click="changeTabToResep()" class="btn flex-1 @if ($selectedIndex == 0) btn-primary @endif btn-outline capitalize btn-rh py-2 lg:py-3">Buku Resep</button>
            @if (auth()->check() && auth()->user()->is($user))     
            <button wire:click="changeTabToBookmark()"class="btn flex-1 @if ($selectedIndex == 1)  btn-primary @endif btn-outline capitalize btn-rh py-2 lg:py-3">Bookmark</button>
            @endif
        </div>
    </section>
    @if ($selectedIndex == 0)
        <div id="BukuResep" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($user->reseps as $resep)
                <a href="/reseps/{{ $resep->id }}" class="relative card-masyuk">
                    <div class="relative">
                        @if (!$resep->photos->isEmpty())
                            <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                                class="rounded-2xl w-full h-full object-cover">
                        @else
                            <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie.jpg"
                                alt="Image 1" class="rounded-2xl h-full object-cover">
                        @endif
                        <div
                            class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                        </div>
                        <div
                            class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                            <h3 class="font-bold text-lg lg:text-xl">{{ $resep->title }}</h3>
                            <p class="font-medium text-sm lg:text-base">{{ $resep->user->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
            @if (auth()->check() && auth()->user()->is($user))
                <a href="{{ route('resep.create') }}" class="card-masyuk">
                    <div
                        class="border-dotted border-2 border-base-content w-full h-full rounded-2xl flex items-center justify-center">
                        <h3><i class="bi bi-plus-circle font-bold text-3xl"></i></h3>
                    </div>
                </a>
            @endif
        </div>
@else
@if (auth()->check() && auth()->user()->is($user))        
<div id="Bookmark" class="container grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($bookmark_reseps as $resep)
                @if (Auth::user()->id == $user->id)
                    <a href="/reseps/{{ $resep->id }}" class="relative card-masyuk">
                        <div class="relative">
                            @if (!$resep->photos->isEmpty())
                                <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                                    class="rounded-2xl w-full h-full object-cover">
                            @else
                                <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie.jpg"
                                    alt="Image 1" class="rounded-2xl h-full object-cover">
                            @endif
                            <div
                                class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                            </div>
                            <div
                                class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                                <h3 class="font-bold text-lg lg:text-xl">{{ $resep->title }}</h3>
                                <p class="font-medium text-sm lg:text-base">{{ $resep->user->name }}</p>
                            </div>
                        </div>
                    </a>
                @else
                    <a href="/reseps/{{ $resep->id }}" class="relative card-masyuk">
                        <div class="relative">
                            @if (!$resep->photos->isEmpty())
                                <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}" alt="Image 1"
                                    class="rounded-2xl w-full h-full object-cover">
                            @else
                                <img src="https://www.helpguide.org/wp-content/uploads/calories-counting-diet-food-control-and-weight-loss-concept-calorie.jpg"
                                    alt="Image 1" class="rounded-2xl h-full object-cover">
                            @endif
                            <div
                                class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                            </div>
                            <div
                                class="text-white rounded-2xl absolute w-full h-full top-0 left-0 z-30 p-4 flex flex-col justify-end">
                                <h3 class="font-bold text-lg lg:text-xl">{{ $resep->title }}</h3>
                                <p class="font-medium text-sm lg:text-base">{{ $resep->user->name }}</p>
                            </div>
                        </div>
                    </a>
                @endauth
            @endforeach
        </div>
    @endif
@endif
</section>
