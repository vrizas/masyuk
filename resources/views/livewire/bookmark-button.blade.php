<div class="w-1/4">
    <button wire:click="toggleBookmark" class="btn btn-outline btn-primary w-full capitalize">
        @if ($isBookmarked)
            Tersimpan
        @else
            Simpan
        @endif
    </button>
</div>
