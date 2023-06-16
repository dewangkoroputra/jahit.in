@props(['id','image', 'location', 'price', 'rating'])
<a class="border border-black w-full h-72 p-2" href="{{'/product/'. $id}}">
  <img src="{{asset($image)}}" class="h-52 w-full object-cover object-top" alt="">
  <div>

    <div class="text-sm font-semibold text-red-500">Rp {{ $price}}</div>

    <div class="flex">
      @for ($i = 1; $i <= $rating; $i++) <img src="/images/star.png" class="w-4 h-4" alt="">
        @endfor
    </div>
    <div class='flex gap-1 mt-1'>
      <img src="/images/location.png" class="w-5" alt="">
      <p>{{ $location }}</p>
    </div>
  </div>
</a>