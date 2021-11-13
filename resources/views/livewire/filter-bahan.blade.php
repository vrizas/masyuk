<div class="mt-4 flex flex-col gap-2 relative">
    <label for="bahan" class="font-bold text-base">Bahan</label>
    <div>
        <input wire:model="keyword" id="bahan" type="search"
            class="input w-full bg-gray-50 form-control @error('bahan') is-invalid @enderror" name="bahan"
            value="{{ old('bahan') }}" required autofocus placeholder="cari bahan" autocomplete="off">

        @error('bahan')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    @if (count($bahans) > 0)
        <div class="absolute top-20 rounded-xl mt-2 px-4 py-6 bg-gray-50 w-full shadow-md">
            <ul>
                @foreach ($bahans as $bahan)
                    <li wire:click="addItem({{ $bahan }})" class="my-2 py-2 px-4 rounded-xl hover:bg-gray-100">
                        {{ $bahan->nama }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="flex gap-2 flex-wrap">
        @foreach ($selectedBahan as $selected)
            <div class="flex gap-3 border border-base-content px-2 py-1 rounded-lg">
                <p class="flex items-center"> {{ $selected['nama'] }}
                    <button wire:click="deleteItem({{ $loop->index }})" class="flex items-center">
                        <i class='bx bx-x text-lg'></i>
                    </button>
                </p>
            </div>
        @endforeach
    </div>
</div>
