<div>
    <button wire:click="toggleLike" class="flex gap-2 justify-center items-center likeButton">
        <svg width="22" height="22" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <path id="heart"
                    d="m 31,11.375 c -14.986319,0 -25,12.30467 -25,26 0,12.8493 7.296975,23.9547 16.21875,32.7188 8.921775,8.764 19.568704,15.2612 26.875,19.0312 a 2.0002,2.0002 0 0 0 1.8125,0 c 7.306296,-3.77 17.953225,-10.2672 26.875,-19.0312 C 86.703025,61.3297 94,50.2243 94,37.375 c 0,-13.69533 -10.013684,-26 -25,-26 -8.834204,0 -14.702885,4.50444 -19,10.59375 C 45.702885,15.87944 39.834204,11.375 31,11.375 z" />

                <clipPath id="insideHeartOnly">
                    <use xlink:href="#heart" />
                </clipPath>
            </defs>
            <use xlink:href="#heart" stroke-width="10" stroke="red" fill="none" clip-path="url(#insideHeartOnly)" />
        </svg>

        <span class="text-sm">{{ $count }}</span>
    </button>
</div>
