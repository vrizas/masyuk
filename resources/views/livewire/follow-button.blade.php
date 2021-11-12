<div class="flex-grow">
    <button wire:click="toggleFollow"
        class="btn btn-rh py-1.5 lg:py-2.5 @if ($isFollowing) btn-primary @endif btn-primary btn-outline">{{ $isFollowing ? 'Berhenti Mengikuti' : 'Ikuti' }}</button>
</div>
