@props(['title'])

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Jahit.in | {{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen justify-center items-center bg-gray-200">

  <div class="relative max-w-md min-w-[28rem] bg-white h-screen rounded-xl overflow-y-auto overflow-x-hidden">
    {{$slot}}
  </div>

</body>
</html>