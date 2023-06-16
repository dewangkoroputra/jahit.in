<x-layout title="Shopping Cart">
  <div class="w-full h-20 bg-red-500 p-4 px-6 flex items-center justify-between">
  <a href="{{route('home')}}">  
  <img src="/images/arrow.png" class='w-6' alt="back button">
  </a>
    <h1 class="text-xl text-white font-semibold">Shopping Cart</h1>
    <img src="/images/logout.png" class='w-6 opacity-0' alt="logout button">
  </div>
  <div class="p-4 relative">
    <h1 class="font-semibold opacity-90">Purchased Items</h1>
    @foreach ($products as $product)
    <div class="mt-2">
      <div class="rounded-lg relative p-4 flex items-center gap-2 shadow-[0_3px_9px_rgb(0,0,0,0.2)]">
        <img src="{{asset($product->product->image)}}" alt="" width="80">
        <div class="flex flex-col">
          <div class="flex items-center gap-2">
            <h1 class="font-semibold">{{$product->product->name}}</h1>
            <img class="inline w-4 translate-y-[1px]" src="/images/abu.png" alt="">
          </div>
          <p>Rp{{round($product->product->price)}}</p>
          <a href="{{'/pre_order/delete/'. $product->id}}" class="font-bold absolute top-2 right-6">X</a>
        </div>
      </div>
    </div>
    @endforeach
    <div class="fixed bottom-6 flex flex-col items-end">
      <div class="bg-white bottom-16 w-[26rem] h-12 flex items-center p-4 rounded-md border border-black">
        <p class="text-xl font-semibold -translate-y-[3px]">Total Price : Rp.{{round($harga_total)}}</p>
      </div>
      <a class="mt-4 bg-red-500 w-fit text-white right-0 px-4 py-2 rounded-lg" href="/order">Checkout</a>
    </div>
  </div>
</x-layout>