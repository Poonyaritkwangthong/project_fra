<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <title>@yield('title')</title>
</head>

<body class="bg-[#f5f5f9]">
    @include('layouts.navbar') <!-- แก้ไขการ include -->
    <div class="p-4 sm:ml-64">
        <div class="w-[100rem] h-full mx-auto">
            @yield('table')

        </div>
    </div>
</body>

</html>