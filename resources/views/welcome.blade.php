<x-layout title="Welcome Page">
    <body>
        <div class="flex h-screen justify-center items-center">

            <img src="{{ asset('/images/brand.png') }}" alt="logo brand">
        </div>

        <!-- go to home.blade.php when click screen -->
        <a href="{{ route('register') }}" class="fixed top-0 left-0 w-full h-full z-10">
        </a>

    </body>
    
</x-layout>