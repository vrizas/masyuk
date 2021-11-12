<article class="bg-base-200 rounded-2xl mt-4 py-6 px-8 lg:py-8 lg:px-10" id="comment">
    <h3 class="font-bold mb-4 text-lg lg:text-xl">Komentar</h3>
    @foreach ($komentars as $komentar)
        <section class="flex gap-2 items-center">
            <a href="#" class="flex-1/2">
                <img src="https://i.insider.com/5ca389adc6cc503c5a53fd96?width=500&format=jpeg&auto=webp"
                    class="mask mask-circle w-16">
            </a>
            <div class="flex flex-col flex-1">
                <div class="flex justify-between">
                    <a href="">
                        <p class="font-bold text-lg">{{ $komentar->user->name }}</p>
                    </a>
                    <p class="text-sm">{{ $komentar->created_at->diffForHumans() }}</p>
                </div>
                <div class="flex justify-between">
                    <p>{{ $komentar->text }}</p>
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
                <button wire:click="createKomentar" class="btn btn-primary w-1/4 capitalize">Kirim</button>
            </div>
        </section>
    @endauth
</article>
