<div class="overflow-x-auto">
    <table class="table w-full table-zebra">
        <thead>
            <tr>
                <th>Bahan</th>
                <th>Kuantitas</th>
                <th>Kalori</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listBahans as $index => $item)
                <tr>
                    <td>
                        <select wire:click="setIndex({{ $index }})"
                            wire:model="listBahans.{{ $index }}.bahan_id"
                            name="listBahans[{{ $index }}][bahan_id]" class="rounded-lg">
                            @foreach ($allBahans as $bahan)
                                <option value="{{ $bahan->id }}">
                                    {{ $bahan->nama . ' / ' . $bahan->baseQuantity . ' ' . $bahan->unit }}</option>
                            @endforeach
                        </select>
                    </td>
                    <td wire:click="setIndex({{ $index }})">
                        <input wire:model="listBahans.{{ $index }}.quantity" type="number" min="0"
                            name="listBahans[{{ $index }}][quantity]" class="rounded-lg">
                    </td>
                    <td>{{ $item['kalori'] }}</td>
                    <td>
                        <button wire:click.prevent="deleteItem({{ $index }})"><i
                                class='bx bxs-trash-alt text-xl'></i></button>
                    </td>
                </tr>
            @endforeach

            <tr>
                <td colspan="4" class="btn-plus-wrapper">
                    <a href="#">
                        <button class="w-full btn btn-outline" wire:click.prevent="addItem">
                            <i class='bx bx-plus'></i> Tambah Bahan Makanan
                        </button>
                    </a>
                </td>
            </tr>
    </table>
</div>
