<x-layout title="User Profile">
  <div class="w-full h-20 bg-red-500 p-4 px-6 flex items-center justify-between">
    <a href="/home">
      <img src="/images/arrow.png" class='w-6' alt="back button">
    </a>
    <h1 class="text-xl text-white font-semibold">Profile</h1>
    <div class="flex items-center justify-center gap-1">
      <img src="/images/logout.png" class='w-6' alt="logout button">
      <a href='/logout' class="text-white text-xs">Sign Out</a>
    </div>
  </div>

  <form action="user" method="POST">
    @csrf
    @method('PUT')
    <div class='p-6 flex flex-col items-center justify-center gap-6'>
      <img src="/images/user-profile.png" class="w-48" alt="user profile">

      <div class='w-full h-full rounded-lg bg-zinc-200 p-4 space-y-2 font-semibold'>
        <div class="flex">
          <label for="name">Name :</label>
          <input id="name" name="name" type="text" class='bg-transparent pl-2' value="{{$user->name}}">
        </div>
        <div class="flex">
          <label for="email">Email :</label>
          <input id="email" name="email" type="text" class='bg-transparent pl-2' value="{{$user->email}}">
        </div>
        <div class="flex">
          <label for="telp">No Telp :</label>
          <input id="telp" name="phone_number" type="text" class='bg-transparent pl-2' value="{{$user->phone_number}}">
        </div>
        <div class="flex">
          <label for="address">Address :</label>
          <input id="address" type="text" class='bg-transparent pl-2' value="Sisfor ITS">
        </div>
      </div>
      <div class="mt-1 w-fit mx-auto rounded-lg">
        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg">Edit
          Profile</button>
      </div>
    </div>
  </form>
</x-layout>