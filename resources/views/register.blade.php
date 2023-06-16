<x-layout title="Register Page">
  <div class="h-screen relative overflow-hidden">
    <img src="{{ asset('/images/brand.png') }}" alt="logo brand"
      class="absolute z-10 top-12 right-1/2 translate-x-1/2 w-64">

    <svg class="pt-32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffb4b4" fill-opacity="1"
        d="M0,64L60,58.7C120,53,240,43,360,69.3C480,96,600,160,720,197.3C840,235,960,245,1080,224C1200,203,1320,149,1380,122.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
      </path>
    </svg>
    <div class="bg-[#ffb4b4] w-full h-full"></div>
    <div
      class="absolute bottom-10  right-1/2 translate-x-1/2 z-10 rounded-lg w-[95%] h-fit pb-4 bg-white shadow-lg mx-auto">
      <!-- create 2 tab, sign in and sign up -->
      <div class="flex justify-center items-center h-12">
        <div class="flex justify-center items-center w-1/2 h-full border-b-2 border-gray-100">
          <a href="{{ route('login') }}" class="text-red-300 opacity-70 font-semibold">Sign In</a>
        </div>

        <div class="flex justify-center items-center w-1/2 h-full">
          <a href="" class="text-red-300 font-semibold">Sign Up</a>
        </div>
      </div>
      <!-- create input with name, email, phone number and password (include logo) -->
      <form method="POST" action="{{route('register.store')}}">
        @csrf
        <div class="flex flex-col justify-center items-center h-full">
          @error('error')
          <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
          @enderror
          <div class="flex flex-col justify-center items-center mt-4">
            <input type="text" name="name" placeholder="Name"
              class="w-80 h-10 border border-gray-300 rounded-lg px-4 outline-none focus:border-blue-500"
              value="{{ old('name') }}" required />
            <input type="email" name="email" placeholder="Email"
              class="w-80 h-10 border border-gray-300 rounded-lg px-4 outline-none focus:border-blue-500 mt-4"
              value="{{ old('email') }}" required />
            <input type="text" name="phone_number" placeholder="Phone Number"
              class="w-80 h-10 border border-gray-300 rounded-lg px-4 outline-none focus:border-blue-500 mt-4"
              value="{{ old('phone_number') }}" required />
            <input type="password" name="password" placeholder="Password"
              class="w-80 h-10 border border-gray-300 rounded-lg px-4 outline-none focus:border-blue-500 mt-4"
              value="{{ old('password') }}" required />
          </div>
          <button type="submit" class="bg-red-500 text-white w-80 h-10 rounded-lg mt-4">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</x-layout>