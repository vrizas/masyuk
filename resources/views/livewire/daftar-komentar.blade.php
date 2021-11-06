<article class="bg-base-200 py-8 px-10 rounded-2xl mt-4" id="comment">
    <h3 class="font-bold text-2xl mb-4">Komentar</h3>
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
                <p>{{ $komentar->text }}</p>
            </div>
        </section>
        <div class="divider"></div>
    @endforeach
    <section>
        <div class="form-control">
            <textarea wire:model="inputKomentar" name="inputKomentar" class="textarea h-24 resize-none" placeholder="Tulis komentar disini..."></textarea>
        </div>
        <div class="flex justify-end w-full mt-4">
            <button wire:click="createKomentar" class="btn btn-primary w-1/4">Kirim</button>
        </div>
    </section>
</article>
