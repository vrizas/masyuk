{{-- <article class="carousel bg-gray-200 px-10 py-8 mt-4 flex gap-6">
    <button class="btn-carousel previous"><i class='bx bx-chevron-left-circle text-2xl'></i></button>
    <section class="item flex items-center gap-6">
        <img src="https://via.placeholder.com/700x364" alt="Item">
        <div class="text">
            <p class="text-md">resep of the day</p>
            <h2 class="text-2xl font-bold">1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quaerat ullam incidunt id blanditiis, vero commodi accusamus repellendus autem repellat?</p>
            <a href="#">Lihat selengkapnya</a>
        </div>
    </section>
    <section class="item flex items-center gap-6">
        <img src="https://via.placeholder.com/700x364" alt="Item">
        <div class="text">
            <p class="text-md">resep of the day</p>
            <h2 class="text-2xl font-bold">2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quaerat ullam incidunt id blanditiis, vero commodi accusamus repellendus autem repellat?</p>
            <a href="#">Lihat selengkapnya</a>
        </div>
    </section>
    <section class="item flex items-center gap-6">
        <img src="https://via.placeholder.com/700x364" alt="Item">
        <div class="text">
            <p class="text-md">resep of the day</p>
            <h2 class="text-2xl font-bold">3</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa quaerat ullam incidunt id blanditiis, vero commodi accusamus repellendus autem repellat?</p>
            <a href="#">Lihat selengkapnya</a>
        </div>
    </section>
    <button class="btn-carousel next"><i class='bx bx-chevron-right-circle text-2xl'></i></button>
</article> --}}

<div class="w-full carousel">
  <div id="slide1" class="relative w-full pt-20 carousel-item">
    <img src="https://picsum.photos/id/500/800/300" class="w-full"> 
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide4" class="btn btn-circle">❮</a> 
      <a href="#slide2" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide2" class="relative w-full pt-20 carousel-item">
    <img src="https://picsum.photos/id/501/800/300" class="w-full"> 
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide1" class="btn btn-circle">❮</a> 
      <a href="#slide3" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide3" class="relative w-full pt-20 carousel-item">
    <img src="https://picsum.photos/id/502/800/300" class="w-full"> 
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide2" class="btn btn-circle">❮</a> 
      <a href="#slide4" class="btn btn-circle">❯</a>
    </div>
  </div> 
  <div id="slide4" class="relative w-full pt-20 carousel-item">
    <img src="https://picsum.photos/id/503/800/300" class="w-full"> 
    <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
      <a href="#slide3" class="btn btn-circle">❮</a> 
      <a href="#slide1" class="btn btn-circle">❯</a>
    </div>
  </div>
</div>