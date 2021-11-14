@if ($isProfile == true)
    <div class="flex-grow">
        @if ($isFollowing)
            <button wire:click="toggleFollow" class="btn btn-rh py-1.5 lg:py-2.5 btn-primary capitalize">Berhenti
                Mengikuti
            </button>
        @else
            <button wire:click="toggleFollow"
                class="btn btn-rh py-1.5 lg:py-2.5 btn-outline hover:btn-primary capitalize"><i class='bx bx-plus'></i>
                Ikuti
            </button>
        @endif
    </div>
@else
    <div class="w-1/4">
        @if ($isFollowing)
            <button wire:click="toggleFollow" class="btn btn-primary capitalize w-full btn-sm lg:btn-md">Berhenti
                Mengikuti
            </button>
        @else
            <button wire:click="toggleFollow"
                class="btn btn-outline hover:btn-primary capitalize w-full btn-sm lg:btn-md"><i class='bx bx-plus'></i>
                Ikuti
            </button>
        @endif
    </div>
@endif
