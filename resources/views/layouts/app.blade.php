<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Maré Dourada | {{ $title ?? '' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="f-raleway">

    @include('layouts.navigation')


    @if (isset($header))
        {{ $header }}
    @endif

    <main class="w-full mx-auto container">
        <div id="#top"></div>
        {{ $slot }}
    </main>

    <section class="fixed bottom-10 right-10" x-data="{ scroll: 0 }" x-on:scroll.window="scroll = window.scrollY">
        <a href="#top" x-show="scroll > 400" @click.prevent="window.scrollTo({ top: 0, behavior: 'smooth' })"
            @include('components.transition')
            class="z-50 bg-[#024873] p-2 text-white rounded-full flex items-center justify-center">
            <x-ionicon-caret-up-outline class="w-8 h-8" />
        </a>
    </section>

    @if (isset($footer))
        {{ $footer }}
    @endif

</body>

</html>
