<div class="dropdown dropdown-end">
    <div>
        @if ((new \Jenssegers\Agent\Agent())->isDesktop())
            <a tabindex="0" class="flex cursor-pointer">
        @endif
        @if ((new \Jenssegers\Agent\Agent())->isMobile() || (new \Jenssegers\Agent\Agent())->isTablet())
            <a href="{{ url('/notifications') }}" tabindex="0" class="flex cursor-pointer">
        @endif
        <i class='bx bxs-bell text-xl indicator lg:text-2xl'>
            @if (!$count == 0)
                <div class="indicator-item badge text-xs p-2 bg-primary-focus border-none rounded-full">
                    {{ $count }}
                </div>
            @endif
        </i>
        </a>
    </div>
    <ul tabindex="0" class="p-2 shadow menu dropdown-content bg-base-100 rounded-box w-96 text-sm hidden lg:flex">
        <button wire:click="markAsRead" class="text-left px-4 py-2"><i class="bi bi-envelope-open text-base mr-0.5"></i>
            Tandai
            sudah terbaca</button>
        <div class="divider px-4 mt-0 mb-2"></div>
        @if ($unreadNotifications->count() == 0)
            <li class="text-left px-4 py-2">Kamu belum memiliki notifikasi.</li>
        @else
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
        @endif
        <a href="{{ url('/notifications') }}" class="text-right py-4 mr-4">Lihat Selengkapnya</a>
    </ul>
</div>
