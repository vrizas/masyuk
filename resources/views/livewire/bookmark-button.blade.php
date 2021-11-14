<div class="w-1/4">
    @if ($isBookmarked)
        <button @auth wire:click="toggleBookmark" @endauth  class="btn btn-primary w-full capitalize btn-sm lg:btn-md">
            Tersimpan
        </button>
    @else
        <button @auth wire:click="toggleBookmark" @endauth " class="btn btn-outline hover:btn-primary w-full capitalize btn-sm lg:btn-md">
            Simpan
        </button>
    @endif

</div>
