<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-yellow-300">
    <div>
        <nav class="flex justify-between items-center px-10 bg-red-500 py-4 border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg')}}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Маркетинг</a>
                <a href="">Дизајн</a>
                <a href="">Програмирање</a>
                <a href=""></a>
            </div>

            <div>
                <a href="">Вработи наш студент</a>
            </div>
        </nav>

        <main class="px-10 mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>