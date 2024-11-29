<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>

<body>
    <div class="flex justify-center">
        <div>
            <h1 class="mb-[4rem] text-center mt-4 text-3xl text-black mt-[4rem]">เครื่องมือประเมินความพร้อมของครอบครัว (Family Readiness Assessment)/F.R.A</h1>
            <div class="bg-pink-100 p-[2rem] rounded-xl shadow-2xl">
                @yield('content')
            </div>
        </div>


    </div>
</body>

</html>

