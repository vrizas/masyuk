<div class="flex-grow">
    <button wire:click="toggleFollow"
        class="btn @if ($isFollowing) btn-outline @endif btn-primary">{{ $isFollowing ? 'Berhenti Mengikuti' : 'Ikuti' }}</button>
</div>
