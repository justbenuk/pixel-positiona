<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/js/app.js'])
    <title>Pixel Positions</title>
</head>
<body class="bg-black text-white font-hanken-grotesk">
<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div>
            <a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a>
        </div>
        <div class="space-x-6 font-bold">
            <a href="/jobs">Jobs</a>
            <a href="/jobs">Careers</a>
            <a href="/jobs">Salaries</a>
            <a href="/jobs">Companies</a>
        </div>
        <div>
            <a href="">Post a Job</a>
        </div>
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">{{$slot}}</main>
</div>
</body>
</html>
