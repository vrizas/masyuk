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
                        <td>3</td>
                        <td>{{ $bahan->unit . $bahan->baseQuantitiy }}</td>
                        <td>{{ $bahan->kalori }} Kalori</td>
                        <td class="flex gap-4">
                            <button><i class='bx bxs-message-square-edit text-xl'></i></button>
                            <button><i class='bx bxs-trash-alt text-xl'></i></button>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="6" class="btn-plus-wrapper"><button class="w-full btn btn-outline"><i
                                class='bx bx-plus'></i>Tambah Bahan Makanan</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</article>
