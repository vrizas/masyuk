<div>
    <button wire:click="toggleBookmark" class="btn btn-outline btn-primary w-1/4">
        @if ($isBookmarked)
            Tersimpan
        @else
            Simpan
        @endif
    </button>
</div>
