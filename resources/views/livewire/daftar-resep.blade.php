<div class="content flex gap-6">
    <main class="py-4 lg:w-3/4 lg:order-2">
        <article class="-mt-4">
            <section class="bg-base-200 rounded-2xl flex flex-col gap-3 px-5 py-3 text-sm">
                <div class="flex justify-between">
                    <select name="sortBy" id="sortBy" class="rounded-lg border-none text-sm">
                        <option disabled selected>Urutkan Berdasarkan</option>
                        <option value="">Like tinggi ke rendah</option>
                        <option value="">Like rendah ke tinggi</option>
                    </select>
                    @if ((new \Jenssegers\Agent\Agent())->isMobile() || (new \Jenssegers\Agent\Agent())->isTablet())
                        <a href="#filter"
                            class="inline-flex w-8 h-8 justify-center items-center rounded-full bg-white lg:hidden"><i
                                class='bx bx-filter-alt text-2xl text-gray-700'></i></a>
                        <div id="filter" class="modal">
                            <div class="modal-box max-w-none rounded-none h-full w-full py-5 overflow-auto relative">
                                <div class="flex items-center gap-4">
                                    <a href="#" class="text-2xl flex-1/2"><i class="bi bi-chevron-left"></i></a>
                                    <h2 class="flex-1 text-center font-bold text-lg">Filter</h2>
                                </div>
                                <div class="mt-3 flex flex-col gap-2">
                                    <label class="font-bold text-base">Kategori</label>
                                    <div class="flex gap-2 flex-wrap">
                                        <button class="btn btn-outline btn-sm capitalize"><i
                                                class='bx bxs-purchase-tag text-lg'></i> Menu
                                            Sarapan</button>
                                        <button class="btn btn-outline btn-sm capitalize"><i
                                                class='bx bxs-purchase-tag text-lg'></i> Menu Makan
                                            Siang</button>
                                        <button class="btn btn-outline btn-sm capitalize"><i
                                                class='bx bxs-purchase-tag text-lg'></i> Menu Makan
                                            Malam</button>
                                    </div>
                                </div>
                                <livewire:filter-bahan />
                                <button
                                    class="btn btn-primary capitalize absolute bottom-8 left-1/2 transform -translate-x-1/2 w-4/5">Terapkan</button>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex gap-2 items-center">
                    <p>Filters: </p>
                    <div class="flex gap-3 bg-primary px-2 py-1 rounded-lg">
                        <p class="flex items-center">Menu Sarapan <button class="flex items-center"><i
                                    class='bx bx-x text-lg'></i></button></p>
                    </div>
                </div>
            </section>
        </article>
        <article class="mt-3 flex flex-col gap-3">
            <p><b>10</b> Resep ditemukan</p>
            <section class="resep-card grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($reseps as $resep)
                    <x-resep-card :resep="$resep" />
                @endforeach
            </section>
        </article>
    </main>
    @if ((new \Jenssegers\Agent\Agent())->isDesktop())
        <aside class="w-1/4 bg-base-200 rounded-2xl px-8 py-6 hidden lg:flex lg:flex-col lg:order-1">
            <h2 class="text-center font-bold text-lg">Filter</h2>
            <div class="mt-3 flex flex-col gap-2">
                <label class="font-bold text-base">Kategori</label>
                <div class="kategori-wrapper flex gap-2 flex-wrap">
                    <div class="h-full w-full flex place-items-center">
                        <input type="radio" name="kategori" id="menu_sarapan" class="peer hidden" />
                        <label for="menu_sarapan"
                            class="max-w-max h-full bg-transparent border border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white cursor-pointer rounded-lg py-1 px-2 flex items-center text-sm"><i
                                class='bx bxs-purchase-tag text-lg mr-1'></i> Menu
                            Sarapan</label>
                    </div>
                    <div class="h-full w-full flex place-items-center">
                        <input type="radio" name="kategori" id="menu_makan_siang" class="peer hidden" />
                        <label for="menu_makan_siang"
                            class="max-w-max h-full bg-transparent border border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white cursor-pointer rounded-lg py-1 px-2 flex items-center text-sm"><i
                                class='bx bxs-purchase-tag text-lg mr-1'></i> Menu
                            Makan Siang</label>
                    </div>
                    <div class="h-full w-full flex place-items-center">
                        <input type="radio" name="kategori" id="menu_makan_malam" class="peer hidden" />
                        <label for="menu_makan_malam"
                            class="max-w-max h-full bg-transparent border border-gray-900 peer-checked:bg-gray-900 peer-checked:text-white cursor-pointer rounded-lg py-1 px-2 flex items-center text-sm"><i
                                class='bx bxs-purchase-tag text-lg mr-1'></i> Menu
                            Makan Malam</label>
                    </div>
                </div>
            </div>
            <livewire:filter-bahan />
            <button class="btn btn-primary capitalize mt-6">Terapkan</button>
        </aside>
    @endif
</div>
