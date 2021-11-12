<div class="dropdown dropdown-end wire:click="getNotifications">
    <div>
        <button tabindex="0" class="flex">
            <i class='bx bxs-bell text-xl indicator lg:text-2xl'>
                @if (!$count == 0)
                    <div class="indicator-item badge text-xs p-2 bg-primary-focus border-none rounded-full">
                        {{ $count }}
                    </div>
                @endif
            </i>
        </button>
    </div>
    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-96 text-sm hidden lg:flex">
        <a wire:click="markAsRead">Tandai sudah terbaca</a>
        @foreach ($unreadNotifications as $notification)
            <li>
                <a>
                    <div class="avatar mr-2">
                        <div class="rounded-full w-7 h-7">
                            <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                        </div>
                    </div>
                    <p>{{ $notification->data['message'] }}</p>
                </a>
            </li>
        @endforeach
        <a href="" class="text-right mt-2 mb-4 mr-4">Lihat Selengkapnya</a>
    </ul>
</div>
