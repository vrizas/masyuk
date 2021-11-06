<article class="py-8 px-12">
    <h2 class="font-bold text-4xl">Admin Panel</h2>
    <p class="font-medium text-gray-500 mt-2">Bahan Masakan</p>
    <div class="btn-group mt-6">
        <button class="btn btn-xs">«</button>
        <button class="btn btn-xs btn-active">1</button>
        <button class="btn btn-xs">2</button>
        <button class="btn btn-xs">3</button>
        <button class="btn btn-xs">4</button>
        <button class="btn btn-xs">»</button>
    </div>
    <div class="overflow-x-auto mt-4">
        @error('nama')
            <span>{{ $message }}</span>
        @enderror
        @error('kalori')
            <span>{{ $message }}</span>
        @enderror
        @error('baseQuantity')
            <span>{{ $message }}</span>
        @enderror
        @error('unit')
            <span>{{ $message }}</span>
        @enderror
        <table class="table w-full table-zebra">
            <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox">
                        </label>
                    </th>
                    <th>Bahan</th>
                    <th>Kuantitas</th>
                    <th>Unit</th>
                    <th>Kalori</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bahans as $bahan)
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox">
                            </label>
                        </th>
                        <td>{{ $bahan->nama }}</td>
                        <td>{{ $bahan->baseQuantity }}</td>
                        <td>{{ $bahan->unit }}</td>
                        <td>{{ $bahan->kalori }}</td>
                        <td class="flex gap-4">
                            <a href="#edit">
                                <button wire:click="showForm({{ $bahan->id }})"><i class='bx bxs-message-square-edit text-xl'></i></button>
                            </a>
                            <button wire:click="deleteBahan({{ $bahan->id }})"><i class='bx bxs-trash-alt text-xl'></i></button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="6" class="btn-plus-wrapper">
                        <a href="#tambah">
                            <button class="w-full btn btn-outline">
                                <iclass='bx bx-plus'></i> Tambah Bahan Makanan
                            </button>
                        </a>
                    </td>
                </tr>

                <div id="tambah" class="modal">
                    <div class="modal-box">
                        <form>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Nama Bahan</span>
                                </label>
                                <input wire:model="nama" name="nama" type="text" placeholder="Nama Bahan" class="input">
                                <label class="label">
                                    <span class="label-text">Kuantitas</span>
                                </label>
                                <input wire:model="baseQuantity" name="baseQuantity" type="number" placeholder="Kuantitas" class="input">
                                <label class="label">
                                    <span class="label-text">Unit</span>
                                </label>
                                <input wire:model="unit" name="unit" type="text" placeholder="Unit" class="input">
                                <label class="label">
                                    <span class="label-text">Kalori</span>
                                </label>
                                <input wire:model="kalori" name="kalori" type="number" placeholder="Kalori" class="input">
                            </div>
                        </form>
                        <div class="modal-action">
                            <a wire:click="createBahan()" href="#" class="btn btn-primary">Simpan</a>
                            <a href="#" class="btn">Batal</a>
                        </div>
                    </div>
                </div>

                <div id="edit" class="modal">
                    <div class="modal-box">
                        <form>
                            <div class="form-control">
                                <label class="label">
                                    <span class="label-text">Nama Bahan</span>
                                </label>
                                <input wire:model="namaEdit" name="namaEdit" type="text" placeholder="Nama Bahan" class="input">
                                <label class="label">
                                    <span class="label-text">Kuantitas</span>
                                </label>
                                <input wire:model="baseQuantityEdit" name="baseQuantityEdit" type="number" placeholder="Kuantitas" class="input">
                                <label class="label">
                                    <span class="label-text">Unit</span>
                                </label>
                                <input wire:model="unitEdit" name="unitEdit" type="text" placeholder="Unit" class="input">
                                <label class="label">
                                    <span class="label-text">Kalori</span>
                                </label>
                                <input wire:model="kaloriEdit" name="kaloriEdit" type="number" placeholder="Kalori" class="input">
                            </div>
                        </form>
                        <div class="modal-action">
                            <a wire:click="editBahan({{ $openModalEdit }})" href="#" class="btn btn-primary">Simpan</a>
                            <a href="#" class="btn">Batal</a>
                        </div>
                    </div>
                </div>
            </tbody>
        </table>
    </div>
</article>
