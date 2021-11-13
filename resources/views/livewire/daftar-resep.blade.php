<div>
    <div class="relative mb-4">
        <input wire:model="keyword" wire:keydown.enter="search" class="input w-full bg-gray-50 pl-11" type="search"
            placeholder="Masukkan nama resep">
        <div class="absolute top-1/2 transform -translate-y-1/2 left-4">
            <div>
                <i class="bi bi-search text-lg"></i>
            </div>
        </div>
    </div>
    <div class="content flex gap-6">
        <main class="py-4 lg:w-3/4 lg:order-2">
            <article class="-mt-4">
                <section class="bg-base-200 rounded-2xl flex flex-col gap-3 px-5 py-3 text-sm">
                    <div class="flex justify-between">
                        <select wire:model="isDesc" name="sortBy" id="sortBy" class="rounded-lg border-none text-sm">
                            <option disabled selected>Urutkan Berdasarkan</option>
                            <option value="0">Like tinggi ke rendah</option>
                            <option value="1">Like rendah ke tinggi</option>
                        </select>
                        @if ((new \Jenssegers\Agent\Agent())->isMobile() || (new \Jenssegers\Agent\Agent())->isTablet())
                            <a href="#filter"
                                class="inline-flex w-8 h-8 justify-center items-center rounded-full bg-white lg:hidden"><i
                                    class='bx bx-filter-alt text-2xl text-gray-700'></i></a>
                            <div id="filter" class="modal">
                                <div
                                    class="modal-box max-w-none rounded-none h-full w-full py-5 overflow-auto relative">
                                    <div class="flex items-center gap-4">
                                        <a href="#" class="text-2xl flex-1/2"><i class="bi bi-chevron-left"></i></a>
                                        <h2 class="flex-1 text-center font-bold text-lg">Filter</h2>
                                    </div>
                                    <div class="mt-3 flex flex-col gap-2">
                                        <label class="font-bold text-base">Kategori</label>
                                        <div class="kategori-wrapper flex gap-2 flex-wrap">
                                            @foreach ($categories as $category)
                                                <div class="h-full w-full flex place-items-center">
                                                    <input wire:model="category_id" type="radio" name="kategori"
                                                        id="category_{{ $category->id }}" class="peer hidden"
                                                        value="{{ $category->id }}" />
                                                    <label for="category_{{ $category->id }}"
                                                        class="max-w-max h-full bg-transparent border border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white cursor-pointer rounded-lg py-1 px-2 flex items-center text-sm"><i
                                                            class='bx bxs-purchase-tag text-lg mr-1'></i>{{ $category->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <livewire:filter-bahan />
                                    <button wire:click="refreshResult"
                                        class="btn btn-primary capitalize absolute bottom-8 left-1/2 transform -translate-x-1/2 w-4/5">Terapkan</button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex gap-2 items-center">
                        <p>Filters: </p>
                        @if ($selectedCategory)
                            <div class="flex gap-3 bg-primary px-2 py-1 rounded-lg">
                                <p class="flex items-center">{{ $selectedCategory->name }} <button wire:click="removeCategory" class="flex items-center"><i
                                            class='bx bx-x text-lg'></i></button></p>
                            </div>
                        @endif
                        @if ($selectedBahans)
                            @foreach ($selectedBahans as $bahan)
                                <div class="flex gap-3 bg-primary px-2 py-1 rounded-lg">
                                    <p class="flex items-center">{{ $bahan->nama }}
                                        <button wire:click="removeBahan({{ $loop->index }})" class="flex items-center">
                                            <i class='bx bx-x text-lg'></i>
                                        </button>
                                    </p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </article>
            <article class="mt-3 flex flex-col gap-3">
                <p><b>{{ $reseps->count() }}</b> Resep ditemukan</p>
                <section class="resep-card grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @if ($reseps)
                        @foreach ($reseps as $resep)
                            <x-resep-card :resep="$resep" />
                        @endforeach
                    @endif
                </section>
            </article>
        </main>
        @if ((new \Jenssegers\Agent\Agent())->isDesktop())
            <aside class="w-1/4 bg-base-200 rounded-2xl px-8 py-6 hidden lg:flex lg:flex-col lg:order-1">
                <h2 class="text-center font-bold text-lg">Filter</h2>
                <div class="mt-3 flex flex-col gap-2">
                    <label class="font-bold text-base">Kategori</label>
                    <div class="kategori-wrapper flex gap-2 flex-wrap">
                        @foreach ($categories as $category)
                            <div class="h-full w-full flex place-items-center">
                                <input wire:model="category_id" type="radio" name="kategori"
                                    id="category_{{ $category->id }}" class="peer hidden"
                                    value="{{ $category->id }}" />
                                <label for="category_{{ $category->id }}"
                                    class="max-w-max h-full bg-transparent border border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white cursor-pointer rounded-lg py-1 px-2 flex items-center text-sm"><i
                                        class='bx bxs-purchase-tag text-lg mr-1'></i>{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <livewire:filter-bahan />
                <button wire:click="refreshResult" class="btn btn-primary capitalize mt-6">Terapkan</button>
            </aside>
        @endif
    </div>
</div>
