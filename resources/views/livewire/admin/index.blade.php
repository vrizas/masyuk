<div>
    <nav class="w-60 h-screen bg-gray-200 py-5 fixed">
        <div class="w-full flex flex-col items-center gap-2">
            <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp"
                class="mask mask-circle w-36">
            <p class="font-bold text-2xl">John Donald</p>
        </div>
        <ul class="mt-10 flex flex-col gap-6 pl-6">
            @if ($selectorBahan == true)
                <li><button class="w-full px-5 h-12 flex items-center relative bg-white rounded-l-xl active"
                        wire:click="renderComponentBahan">Bahan Masakan</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative"
                        wire:click="renderComponentMember">Member</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative"
                        wire:click="renderComponentEditProfile">Edit Profile</button></li>
            @elseif($selectorMember == true)
                <li><button class="w-full px-5 h-12 flex items-center relative" wire:click="renderComponentBahan">Bahan
                        Masakan</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative bg-white rounded-l-xl active"
                        wire:click="renderComponentMember">Member</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative"
                        wire:click="renderComponentEditProfile">Edit Profile</button></li>
            @elseif($selectorEditProfile == true)
                <li><button class="w-full px-5 h-12 flex items-center relative" wire:click="renderComponentBahan">Bahan
                        Masakan</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative"
                        wire:click="renderComponentMember">Member</button></li>
                <li><button class="w-full px-5 h-12 flex items-center relative bg-white rounded-l-xl active"
                        wire:click="renderComponentEditProfile">Edit Profile</button></li>
            @endif

            <li class="absolute bottom-10 left-1/2 -ml-20">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary w-40">Logout</button>
                </form>
            </li>
        </ul>
    </nav>
    <main class="ml-60 relative">
        <div wire:loading class="loading-wrapper w-screen h-screen fixed top-0 left-0 z-50">
            <div class="w-full h-full flex justify-center items-center">
                <button class="btn btn-md btn-outline btn-primary loading">loading</button>
            </div>
        </div>
        @if ($selectorBahan == true)
            <livewire:admin.bahan-masakan />
        @elseif($selectorMember == true)
            <livewire:admin.daftar-member />
        @elseif($selectorEditProfile == true)
            <livewire:admin.edit-profile />
        @endif
    </main>
</div>
