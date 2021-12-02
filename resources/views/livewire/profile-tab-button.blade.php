<section class="mb-4">
    <div class="flex mt-4 items-center gap-2">
        <button wire:click="$set('selectedIndex', 0)" class="btn flex-1 @if ($selectedIndex == 0) btn-primary @endif btn-outline capitalize btn-rh py-2 lg:py-3">Buku Resep</button>
        <button wire:click="$set('selectedIndex', 1)"class="btn flex-1 @if ($selectedIndex == 1)  btn-primary @endif btn-outline capitalize btn-rh py-2 lg:py-3">Bookmark</button>
    </div>
</section>