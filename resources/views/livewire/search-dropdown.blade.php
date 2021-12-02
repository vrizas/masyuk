@if ($desktop == true)
    <div class="relative mt-4 mb-4 z-40 hidden lg:block">
    @else
        <div class="relative mt-4 mb-4 z-40">
@endif
<div class="relative">
    <input wire:keydown.enter="redirectToSearch" wire:model.debounce.500ms="keyword" class="input w-full bg-gray-50 pl-11" type="search"
        placeholder="Masukkan nama resep">
    <div class="absolute top-1/2 transform -translate-y-1/2 left-4">
        <div wire:loading.remove>
            <i class="bi bi-search text-lg"></i>
        </div>
        <div wire:loading>
            <div class="loader ease-linear rounded-full border-2 border-t-2 border-gray-200 h-5 w-5"></div>
        </div>
    </div>
</div>
@if (strlen($this->keyword > 2))
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
                                        @if (count($resep->photos) != 0)
                                            <img src="{{ asset('/storage/photos/' . $resep->photos[0]->filename) }}">
                                        @else
                                            <img
                                                src="http://blog.sayurbox.com/wp-content/uploads/2021/03/edisibelajarmasak-595x375.jpg">
                                        @endif
                                    </div>
                                </div>
                                <div>
                                    <h2 class="text-lg font-bold">{{ $resep->title }}</h2>
                                    <h3>{{ $resep->user->name }}</h2>
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
