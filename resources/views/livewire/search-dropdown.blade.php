<div class="relative mt-4 mb-4 z-50">
    <input wire:model.debounce.500ms="keyword" class="input w-full bg-gray-50" type="search"
        placeholder="Mau cari siapa kita hari ini?">
    @if (!count($results) == 0)
    <div class="absolute rounded-xl mt-2 px-4 py-6 bg-gray-50 w-full">
        <ul>
            @if (count($results) == 0)
                <li class="my-2 py-2 px-4 rounded-xl hover:bg-gray-100">
                    <p>Resep yang kamu cari tidak ditemukan.</p>
                </li>
            @else
                @foreach ($results as $resep)
                    <li class="my-2 py-2 px-4 rounded-xl hover:bg-gray-100">
                        <a href="/reseps/{{ $resep->id }}" class="block">
                            <div class="flex gap-4 h-20">
                                <div class="avatar">
                                    <div class="mb-8 rounded-btn w-30 h-20">
                                      <img src="{{ $resep->imageUrl }}">
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">{{ $resep->title }}</h2> 
                                    <h3 class="text-base font-medium">{{ $resep->user->name }}</h2> 
                                </div> 
                            </div>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
        
    @endif
</div>
