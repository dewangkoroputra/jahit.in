<x-layout title="Halo">
  <div class="bg-[#FFAAAA] min-h-screen">
    <div class="p-5">
      <a href={{}}>
        <img src="/images/back-black.png" alt="">
      </a href="/">
    </div>

    <div class="w-full py-10">
      <img src="/images/ukuran.png" alt="" class="mx-auto">
    </div>

    <div class="flex flex-col gap-y-5">
      <div class="flex justify-around">
        <div class="bg-[#FA2A00] text-white rounded-full w-12 h-12 flex justify-center items-center">
          <p class="font-bold text-2xl">A</p>
        </div>
        <input type="text" class="rounded-lg px-3 py-1" placeholder="Masukkan Panjang">
      </div>
      <div class="flex justify-around">
        <div class="bg-[#FA2A00] text-white rounded-full w-12 h-12 flex justify-center items-center">
          <p class="font-bold text-2xl">B</p>
        </div>
        <input type="text" class="rounded-lg px-3 py-1" placeholder="Masukkan Lebar">
      </div>
      <div class="flex justify-around">
        <div class="bg-[#FA2A00] text-white rounded-full w-12 h-12 flex justify-center items-center">
          <p class="font-bold text-2xl">C</p>
        </div>
        <input type="text" class="rounded-lg px-3 py-1" placeholder="Masukkan Tinggi">
      </div>
    </div>

    <div class=" flex justify-end mx-12 mt-8">
      <button class="bg-[#FA2A00] px-4 rounded-lg text-white py-2 hover:bg-opacity-50">Confirm</button>
    </div>
  </div>
</x-layout>