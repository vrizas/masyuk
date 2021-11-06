<article class="py-8 px-12">
    <h2 class="font-bold text-4xl">Admin Panel</h2>
    <p class="font-medium text-gray-500 mt-2">Member</p>
    <div class="btn-group mt-6">
        <button class="btn btn-xs">«</button>
        <button class="btn btn-xs btn-active">1</button>
        <button class="btn btn-xs">2</button>
        <button class="btn btn-xs">3</button>
        <button class="btn btn-xs">4</button>
        <button class="btn btn-xs">»</button>
    </div>
    <div class="overflow-x-auto mt-4">
        @if (session()->has('message'))
            <div class="alert alert-success my-2">
                <div class="flex-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path
                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                    </svg>
                    <label>{{ session('message') }}</label>
                </div>
            </div>
        @endif
        <table class="table w-full">
            <thead>
                <tr>
                    <th>
                        <label>
                            <input type="checkbox" class="checkbox">
                        </label>
                    </th>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $member)
                    <tr>
                        <th>
                            <label>
                                <input type="checkbox" class="checkbox">
                            </label>
                        </th>
                        <td>{{ $member->id }}</td>
                        <td>
                            <div class="flex items-center space-x-3">
                                <div class="avatar">
                                    <div class="w-12 h-12 mask mask-squircle">
                                        <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp"
                                            alt="Avatar Tailwind CSS Component">
                                    </div>
                                </div>
                                <div>
                                    <div class="font-bold">
                                        {{ $member->name }}
                                    </div>
                                    <div class="text-sm opacity-50">
                                        {{ $member->username }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>{{ $member->email }}</td>
                        <td>
                            <a href="#delete">
                                <button wire:click="showDeleteModal({{ $member->id }})"><i
                                        class='bx bxs-trash-alt text-xl'></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="delete" class="modal">
        <div class="modal-box">
            <h2>Hapus Member</h2>
            <p>Apakah anda yakin akan menghapus member ini?</p>
            <div class="modal-action">
                <a wire:click="deleteMember()" href="#" class="btn btn-primary">Yakin</a>
                <a href="#" class="btn">Batal</a>
            </div>
        </div>
    </div>
</article>
