<section>
    @foreach ($listLangkah as $index => $langkah)
        <h3 class="font-bold mb-1">Langkah {{ $loop->iteration }}</h3>
        <div class="form-control mb-4 relative">
            <button wire:click.prevent="deleteItem({{ $index }})" class="absolute top-2 right-2 bg-base-100 w-5 h-5 rounded-full shadow-md"><i
                    class='bx bx-x text-xl'></i></button>
            <textarea wire:model="listLangkah.{{ $index }}" name="listLangkah[{{ $loop->index }}][text]"
                class="textarea h-24 resize-none bg-gray-50" placeholder="Langkah-langkah untuk memasak">
            </textarea>
        </div>
    @endforeach
    <a href="#">
        <button class="w-full btn btn-outline" wire:click.prevent="addItem">
            <i class='bx bx-plus'></i> Tambah Langkah Memasak
        </button>
    </a>
</section>
