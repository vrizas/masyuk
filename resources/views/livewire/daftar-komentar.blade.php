<article class="bg-base-200 rounded-2xl mt-4 py-4 px-6 lg:py-8 lg:px-10" id="comment">
    <h3 class="font-bold mb-4 text-lg lg:text-xl">Komentar</h3>
    @foreach ($komentars as $komentar)
        <section class="flex gap-3 items-center">
            <a href="#" class="avatar flex-1/2">
                <div class="rounded-full w-7 h-7 lg:w-9 lg:h-9">
                    <img src="http://daisyui.com/tailwind-css-component-profile-1@94w.png">
                </div>
            </a>
            <div class="flex flex-col flex-1">
                <div class="flex justify-between">
                    <a href="">
                        <p class="font-bold text-sm lg:text-base">{{ $komentar->user->name }}</p>
                    </a>
                    <p class="text-sm">{{ $komentar->created_at->diffForHumans() }}</p>
                </div>
                <div class="flex justify-between">
                    <p class="text-sm">{{ $komentar->text }}</p>
                    @can('admin')
                        <a href="">Delete</a>
                    @endcan
                </div>
            </div>
        </section>
        <div class="divider"></div>
    @endforeach
    @auth
        <section>
            <div class="form-control">
                <textarea wire:model.debounce.500s="inputKomentar" name="inputKomentar" class="textarea h-24 resize-none"
                    placeholder="Tulis komentar disini..."></textarea>
            </div>
            <div class="flex justify-end w-full mt-4">
                <button wire:click="createKomentar" class="btn btn-primary w-1/4 capitalize btn-sm lg:btn-md">Kirim</button>
            </div>
        </section>
    @endauth
</article>
