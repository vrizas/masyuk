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
