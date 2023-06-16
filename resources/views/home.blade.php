<x-layout title="Home Page">

  <nav class="fixed top-0 w-[28rem] h-fit bg-red-500">
    <div class="flex items-center justify-between py-4 px-6 gap-4">

      <div class="flex items-center bg-white border-black border rounded-lg">
        <img src="{{asset('search.png')}}" alt="search icon" class="w-4 h-4 ml-4" />
        <input type="text"
          class="border-none w-full h-10 p-0 rounded-lg border border-gray-300 px-4 outline-none focus:border-blue-500"
          placeholder="Search Product">
      </div>
      <div class="flex gap-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-bell-fill"
          viewBox="0 0 16 16">
          <path
            d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-chat-left-dots-fill"
          viewBox="0 0 16 16">
          <path
            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
        </svg>
      </div>
    </div>
  </nav>
  <main>
    <section>
      <div class="pt-28">
        <div class="fixed bg-white top-[73.5px] flex text-center w-[28rem]">
          <button class="w-full hover:bg-slate-200 p-1 border border-r-0 border-black"
            onclick="changeUrl('/home?category=WOMAN')">Woman</button>
          <button class="w-full hover:bg-slate-200 p-1 border border-r-0 border-black"
            onclick="changeUrl('/home?category=MAN')">Man</button>
          <button class="w-full hover:bg-slate-200 p-1 border border-black"
            onclick="changeUrl('/home?category=CHILDREN')">Kids</button>
          <select class="w-full h-10 border-none rounded-lg border border-gray-300 outline-none focus:border-blue-500"
            id="location">
            <option value="reset">Reset</option>
            <option value="jakarta">Jakarta</option>
            <option value="surabaya">Surabaya</option>
            <option value="malang">Malang</option>
          </select>
        </div>
        <!-- create tab with 3 options : Women, Men, and Kids -->

        <div class="p-5 pb-20 grid grid-cols-2 gap-4">
          @foreach ($products as $product)
          <x-product-card id="{{$product->id}}" image="{{$product->image}}" location="{{$product->location}}"
            price="{{$product->price}}" rating="{{$product->rating}}" />
          @endforeach
        </div>

      </div>

    </section>
  </main>
  <div
    class="text-xs w-[28rem] fixed flex p-2 px-16 items-center justify-between bottom-0 bg-white border-t border-slate-300 h-16">
    <a href="/home" class="flex flex-col items-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"
        viewBox="0 0 16 16">
        <path
          d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
      </svg>
      <p>Home</p>
    </a>
    <div class="flex flex-col items-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
        viewBox="0 0 16 16">
        <path
          d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
      </svg>
      <p>Wishlist</p>
    </div>
    <a href='/cart' class="flex flex-col items-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt"
        viewBox="0 0 16 16">
        <path
          d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
        <path
          d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
      </svg>
      <p>Orders</p>
    </a>
    <a class="flex flex-col items-center" href="/user">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle"
        viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
          d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
      </svg>
      <p>Profile</p>
    </a>
  </div>
  <script>
    function changeUrl(url) {
      window.history.pushState("", "", url);
      // Reload
      location.reload();
    }

    // Add listener on id location
    document.getElementById("location").addEventListener("change", function () {
      // Get selected value
      var selectedValue = this.options[this.selectedIndex].value;
      // Call function
      urlNow = window.location.href;
      if (selectedValue != "reset") {
        changeUrl("?location=" + selectedValue);
      } else {
        changeUrl("/home");
      }
    });


  </script>
</x-layout>