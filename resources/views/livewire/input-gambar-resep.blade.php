<div class="flex flex-wrap gap-4">
    @if ($images)
        @foreach ($images as $index => $image)
            @if (!empty($image))
                <div class="w-40 h-40 rounded-2xl relative">
                    <button wire:click.prevent="deleteItem({{ $index }})" class="absolute top-2 right-2 bg-base-100 w-5 h-5 rounded-full shadow-md"><i
                            class='bx bx-x text-xl'></i></button>
                    <img class="object-cover h-full w-full rounded-2xl" src="{{ asset('/storage/' . $image) }}"
                        alt="gambar-resep">
                    <input hidden value="{{ $image }}" type="text" name="images[{{ $loop->index }}][path]">
                </div>
            @endif
        @endforeach
    @endif
    <div class="w-40 h-40 bg-white">
        <div class="rounded-2xl overflow-hidden">
            <div
                class="relative border-dotted h-40 rounded-2xl border-dashed border-2 border-base-300 bg-base-100 hover:bg-base-200 hover:border-gray-400 flex justify-center items-center">
                <div class="absolute">
                    <div class="flex flex-col items-center">
                        <span class=" block text-center font-normal">Tambah Gambar
                            atau Foto</span>
                    </div>
                </div>
                <input wire:model="tempImage" type="file" class="h-full w-full cursor-pointer opacity-0" name="gambar">
            </div>
        </div>
    </div>
</div>
