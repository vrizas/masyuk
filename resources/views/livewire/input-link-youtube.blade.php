<section class="w-full mb-4">
    <label for="youtube" class="text-sm">Link Youtube <span
            class="font-bold text-xs text-primary-sfocus">(Opsional)</span></label>
    <div class="mt-1 mb-4">
        <input wire:model="link" wire:keydown.enter="getYoutubeId" id="youtube" type="url"
            class="input w-full bg-gray-50 form-control @error('youtube') is-invalid @enderror" name="youtubeUrl"
            value="{{ old('youtube') }}" autofocus placeholder="Masukkan link youtube" autocomplete="off">

        @error('youtube')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    @if (isset($linkThumbnail))
        <div class="w-full h-40 rounded-2xl mb-4 relative lg:h-60">
            <div
                class="absolute top-2 right-2 bg-base-100 w-7 h-7 rounded-full shadow-md flex items-center justify-center">
                <i class="bi bi-play-btn text-xl"></i>
            </div>
            <img class="object-cover h-full w-full rounded-2xl" src="{{ $linkThumbnail }}"
                alt="{{ $linkThumbnail }}">
            <input hidden value="{{ $youtubeId }}" type="text" name="youtubeId">
        </div>
    @endif
    @livewire('input-gambar-resep', ['resep' => $tempResep])
</section>
