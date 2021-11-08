<div>
    <table class="table w-full table-zebra">
        <thead>
            <tr>
                <th class="w-1/5">Bahan</th>
                <th class="w-1/5">Kuantitas</th>
                <th class="w-1/5">Kalori</th>
                <th class="w-1/5"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listBahans as $index => $item)
                <tr>
                    <td>
                        <select wire:click="setIndex({{ $index }})"
                            wire:model="listBahans.{{ $index }}.bahan_id" name="listBahans[{{ $index }}][bahan_id]">
                            @foreach ($allBahans as $bahan)
                                <option value="{{ $bahan->id }}">
                                    {{ $bahan->nama . ' / ' . $bahan->baseQuantity . ' ' . $bahan->unit }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td wire:click="setIndex({{ $index }})">
                        <input wire:model="listBahans.{{ $index }}.quantity" type="number" min="0"
                            name="listBahans[{{ $index }}][quantity]">
                    </td>
                    <td>{{ $item['kalori'] }}</td>
                    <td>
                        <button wire:click.prevent="deleteItem({{ $index }})"><i
                                class='bx bxs-trash-alt text-xl'></i></button>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td colspan="6" class="btn-plus-wrapper">
                    <a href="#">
                        <button class="w-full btn btn-outline" wire:click.prevent="addItem">
                            <i class='bx bx-plus'></i> Tambah Bahan Makanan
                        </button>
                    </a>
                </td>
            </tr>
    </table>
</div>
