<div class="w-1/4">
    <button wire:click="toggleBookmark" class="btn btn-outline btn-primary w-full capitalize btn-sm lg:btn-md">
        @if ($isBookmarked)
            Tersimpan
        @else
            Simpan
        @endif
    </button>
</div>
