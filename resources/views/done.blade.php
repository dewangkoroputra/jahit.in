<x-layout title="Thank You">
<body>
        <div class="flex flex-col h-screen justify-center items-center bg-red-400">

            <img src="{{ asset('/images/brand.png') }}" alt="logo brand">
            <h1 class="text-center font-bold text-4xl text-red-600">THANK YOU FOR YOUR ORDER</h1>
        </div>

        <!-- go to home.blade.php when click screen -->
        <a href="{{ route('home') }}" class="fixed top-0 left-0 w-full h-full z-10">
          
        </a>

    </body>
</x-layout>