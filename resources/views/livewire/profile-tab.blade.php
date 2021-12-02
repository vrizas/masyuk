<section class="bg-gray-200 rounded-2xl px-5 py-4">
    @if ($selectedIndex == 0)
        <div id="BukuResep" class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($user->reseps as $resep)
                @if (Auth::user()->id == $user->id)
                    <div class="relative card-masyuk">
                        <div class="relative">
                            <div class="dropdown dropdown-left absolute top-2 right-2 z-40">
                                <button tabindex="0" class="bg-white w-6 h-6 rounded-full"><i
                                        class='bx bx-dots-vertical-rounded text-lg'></i></button>
                                <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
                                    <li>
                                        <a href="/reseps/{{ $resep->id }}" class="text-sm inline-flex gap-2"><i
                                                class="bi bi-eye-fill"></i> Lihat Resep</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('resep.edit', $resep) }}"
                                            class="text-sm inline-flex gap-2"><i class='bx bxs-edit text-lg'></i> Edit
                                            Resep</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('resep.delete', ['id' => $resep->id]) }}" method="post"
                                            class="mb-0">
                                            @csrf
                                            <button type="submit" class="text-sm inline-flex gap-2"><i
                                                    class='bx bxs-trash-alt text-lg'></i> Hapus
                                                Resep</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
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
                    </div>
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
        <div id="Bookmark" class="container">
            @foreach ($user->bookmark->reseps as $resep)
                @if (Auth::user()->id == $user->id)
                    <div class="relative card-masyuk">
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
                    </div>
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
</section>
