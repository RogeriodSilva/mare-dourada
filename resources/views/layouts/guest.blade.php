<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Maré Dourada</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="f-raleway overflow-hidden">

    <main class="w-full h-screen">
        {{ $slot }}
    </main>

    @if (session()->has('alert'))
        <section class="absolute top-0 right-0 bottom-0">

            <x-alert :title="session('alert.title')" :message="session('alert.message')" />
        </section>
    @endif


</body>

</html>
