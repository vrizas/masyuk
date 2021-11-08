<article class="w-full carousel">
  @foreach ($reseps as $key => $resep)
  <div id="slide{{$key+1}}" class="relative w-full carousel-item">
    <div class="mx-20 flex gap-8">
      <img src="/img/{{$resep->imageUrl}}" class="rounded-2xl w-100 h-80 object-cover">
      <div class="text">
        <p>Resep of the day</p>
        <h2 class="font-bold text-4xl my-3">{{$resep->title}}</h2>
        <p>{{$resep->description}}</p>
        <button class="btn btn-primary mt-3">Lihat Selengkapnya</button>
      </div>
    </div>  
    <div class="absolute flex justify-between transform -translate-y-1/2 left-0 right-0 top-1/2">
      @if($key == 0)
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
      @elseif($key == 3)
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
      @else 
      <a href="#slide{{$key}}" class="btn btn-circle">❮</a> 
      <a href="#slide{{$key+2}}" class="btn btn-circle">❯</a>
      @endif
    </div>
  </div> 
  @endforeach
</article>