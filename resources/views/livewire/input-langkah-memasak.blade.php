<section>
    @foreach ($listLangkah as $index => $langkah)
        <h3 class="text-lg font-bold">Langkah {{ $loop->iteration }}</h3>
        <div class="form-control mb-4">
            <textarea
                wire:model="listLangkah.{{ $index }}"
                name="listLangkah[{{ $loop->index }}][text]"
                class="textarea h-24 resize-none bg-gray-50"
                placeholder="Langkah-langkah untuk memasak"
            >
            </textarea>
        </div>
    @endforeach
    <a href="#">
        <button class="w-full btn btn-outline" wire:click.prevent="addItem">
            <i class='bx bx-plus'></i> Tambah Langkah Memasak
        </button>
    </a>
</section>
