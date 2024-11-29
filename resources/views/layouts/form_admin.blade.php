<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="p-4 sm:ml-64">
        <div class="w-[100rem] h-full mx-auto">
            <div class="mb-[2rem]">
                @yield('title_content')
            </div>

            @yield('form_admin')
        </div>
    </div>
</body>
</html>
