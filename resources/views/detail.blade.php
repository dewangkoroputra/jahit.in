<x-layout title="Home Page">
  <div>
    <img src="{{asset('/images/troli.png')}}" alt="troli" class="absolute w-6 top-6 right-6" />
    <a href="/home">
      <img src="{{asset('/images/back-black.png')}}" alt="back button" class="absolute w-6 top-6 left-6 " />
    </a>
    <img src="{{asset($product->image)}}" alt="" class="w-fit h-[400px] object-contain mx-auto" />
  </div>
  <div class="p-4">
    <form action={{route('product.store', $product->id)}} method="POST">
      @csrf

      <div class="flex justify-between">

        <p class="text-lg">{{$product->name}}</p>
        <div class="flex gap-2">
          <img src="{{asset('/images/heart.png')}}" alt="love" class="w-6 h-6" />
          <img src="{{asset('/images/share.png')}}" alt="share" class="w-6 h-6" />
        </div>
      </div>
      <p class="text-red-500 font-medium">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
      <div class="flex">
        @for ($i = 1; $i <= $product->rating; $i++) <img src="/images/star.png" class="w-4 h-4" alt="">
          @endfor
      </div>
      <div class="flex gap-2 mt-2">
        <p class="flex-none">Tailor Location :</p>

        <p>{{$product->location}}</p>
      </div>
      <div class="flex gap-2 mt-1">
        <p class="flex-none">Tailor Shop :</p>

        <p>Ami Tailor - Gubeng</p>
      </div>
      <div class="flex">
        <p>Fabric :</p>
        <div class="flex gap-3">
          <div>
            <img src="{{asset('/images/fleece.png')}}" alt="fabric" class="w-16 h-16" />
            <p class="text-xs text-center">Fleece</p>
          </div>
          <div>
            <img src="{{asset('/images/baby.png')}}" alt="fabric" class="w-16 h-16" />
            <p class="text-xs text-center">Baby Terry</p>
          </div>
        </div>
      </div>
      <div class="flex mt-1">
        <p>Color : </p>
        <div class="flex gap-2 ml-1">
          <div class="w-8 h-8 rounded-full bg-gray-800"></div>
          <div class="w-8 h-8 rounded-full bg-red-400"></div>
          <div class="w-8 h-8 rounded-full bg-green-400"></div>
          <div class="w-8 h-8 rounded-full bg-blue-400"></div>
        </div>
      </div>
      <input type="number" name="product_id" id="product_id" value="{{$product->id}}" hidden>
      <div class="flex gap-3
     bottom-0 w-full left-0 p-2">
        <div class="border-[1px] rounded-md p-2 px-3 flex items-center justify-center border-black">
          <img src="{{asset('/images/chat.png')}}" alt="chat" class="w-8" />
        </div>
        <button type="submit" class="bg-red-500 rounded-lg w-full text-white px-2 py-2">Add to Cart</button>
      </div>
    </form>
  </div>
</x-layout>