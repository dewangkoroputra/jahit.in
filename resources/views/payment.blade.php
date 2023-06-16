<x-layout title="Payment">
  <div class="w-full h-20 bg-red-500 p-4 px-6 flex items-center justify-between">
    <a href="{{route('cart')}}">
      <img src="/images/arrow.png" class='w-6' alt="back button">
    </a>
    <h1 class="text-xl text-white font-semibold">Payment Methods</h1>
    <img src="/images/logout.png" class='w-6 opacity-0' alt="logout button">
  </div>
  <form action={{route('payment.store', $id)}} method="POST">
    @csrf
    <div class="mt-16 w-full h-full flex flex-col gap-4 items-center justify-between">

      <div class="w-80 h-20 p-2 rounded-lg shadow-md flex gap-2 items-center justify-between">
        <img src="{{asset('/images/gopay.png')}}" alt="gopay" class="w-32" />
        <label for='gopay'>Gopay</label>
        <input class="translate-y-[2px]" type='radio' name='bank' value='gopay' id='gopay' checked>
      </div>
      <div class="w-80 h-20 p-2 rounded-lg shadow-md flex gap-2 items-center justify-between">
        <img src="{{asset('/images/dana.png')}}" alt="dana" class="w-32" />
        <label for='dana'>DANA</label>
        <input class="translate-y-[2px]" type='radio' name='bank' value='dana' id='dana'>
      </div>
      <div class="w-80 h-20 p-2 rounded-lg shadow-md flex gap-2 items-center justify-between">
        <img src="{{asset('/images/cod.png')}}" alt="cod" class="w-32" />
        <label for='cod'>Cash On Delivery (COD)</label>
        <input class="translate-y-[2px]" type='radio' name='bank' value='cod' id='cod' checked>
      </div>
      <div class="w-80 h-20 p-2 rounded-lg shadow-md flex gap-2 items-center justify-between">
        <img src="{{asset('/images/visas.png')}}" alt="visa" class="w-32" />
        <label for='visa'>Credit Card</label>
        <input class="translate-y-[2px]" type='radio' name='bank' value='visa' id='visa' checked>
      </div>
      <div class="w-80 h-20 p-2 rounded-lg shadow-md flex gap-2 items-center justify-between">
        <img src="{{asset('/images/paypal.png')}}" alt="paypal" class="w-32" />
        <label for='paypal'>Paypal</label>
        <input class="translate-y-[2px]" type='radio' name='bank' value='paypal' id='paypal' checked>
      </div>
    </div>
    <a href="/done">
      <button type="submit" class="absolute bottom-4 right-4 bg-red-500 text-white rounded-xl px-6 py-2">Pay</button>
    </a>
  </form>
</x-layout>