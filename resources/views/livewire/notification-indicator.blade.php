<div>
    @if ((new \Jenssegers\Agent\Agent())->isDesktop())
        <a tabindex="0" class="flex cursor-pointer">
    @endif
    @if ((new \Jenssegers\Agent\Agent())->isMobile() || (new \Jenssegers\Agent\Agent())->isTablet())
        <a href="#" tabindex="0" class="flex cursor-pointer">
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
