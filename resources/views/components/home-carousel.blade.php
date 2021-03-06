<article class="carousel relative shadow bg-white mt-2 rounded-2xl">
    <div class="carousel-inner relative overflow-hidden w-full">
        <!--Slide 1-->
        <input class="carousel-open hidden" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden
            checked="checked">
        <a href="/reseps/{{ $reseps[0]->id }}" class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full">
                @if (count($reseps[0]->photos) == 0)
                    <img src="https://mahadumar.id/wp-content/uploads/2019/04/placeholder-image-1.jpg"
                        class="rounded-2xl w-full h-full object-cover">
                @else
                    <img src="{{ asset('/storage/photos/' . $reseps[0]->photos[0]->filename) }}"
                        class="rounded-2xl w-full h-full object-cover">
                @endif
                <div
                    class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-left text-base-200 w-7/12">
                    <p class="font-md text-lg mb-1 md:text-xl lg:text-2xl">Resep of the day</p>
                    <h4 class="font-bold text-xl md:text-2xl lg:text-3xl">{{ $reseps[0]->title }}</h4>
                    <p class="text-base lg:text-lg">Dari {{ $reseps[0]->user->name }}</p>
                </div>

            </div>
        </a>
        <label for="carousel-3"
            class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2"
            class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 2-->
        <input class="carousel-open hidden" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden>
        <a href="/reseps/{{ $reseps[1]->id }}" class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full">
                @if (count($reseps[1]->photos) == 0)
                    <img src="https://mahadumar.id/wp-content/uploads/2019/04/placeholder-image-1.jpg"
                        class="rounded-2xl w-full h-full object-cover">
                @else
                    <img src="{{ asset('/storage/photos/' . $reseps[1]->photos[0]->filename) }}"
                        class="rounded-2xl w-full h-full object-cover">
                @endif
                <div
                    class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-left text-base-200 w-7/12">
                    <p class="font-md text-lg mb-1 md:text-xl lg:text-2xl">Resep of the day</p>
                    <h4 class="font-bold text-xl md:text-2xl lg:text-3xl">{{ $reseps[1]->title }}</h4>
                    <p class="text-base lg:text-lg">Dari {{ $reseps[1]->user->name }}</p>
                </div>

            </div>
        </a>
        <label for="carousel-1"
            class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3"
            class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!--Slide 3-->
        <input class="carousel-open hidden" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden>
        <a href="/reseps/{{ $reseps[2]->id }}" class="carousel-item absolute opacity-0" style="height:50vh;">
            <div class="block h-full w-full">
                @if (count($reseps[2]->photos) == 0)
                    <img src="https://mahadumar.id/wp-content/uploads/2019/04/placeholder-image-1.jpg"
                        class="rounded-2xl w-full h-full object-cover">
                @else
                    <img src="{{ asset('/storage/photos/' . $reseps[2]->photos[0]->filename) }}"
                        class="rounded-2xl w-full h-full object-cover">
                @endif
                <div
                    class="from-black bg-gradient-to-t w-full h-full rounded-2xl absolute top-0 left-0 image-filter opacity-50">
                </div>
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-left text-base-200 w-7/12">
                    <p class="font-md text-lg mb-1 md:text-xl lg:text-2xl">Resep of the day</p>
                    <h4 class="font-bold text-xl md:text-2xl lg:text-3xl">{{ $reseps[2]->title }}</h4>
                    <p class="text-base lg:text-lg">Dari {{ $reseps[2]->user->name }}</p>
                </div>

            </div>
        </a>
        <label for="carousel-2"
            class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1"
            class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3"
                    class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
            </li>
        </ol>

    </div>
</article>
