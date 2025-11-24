@props([
    'title' => null,
    'subtitle' => null,
    'header' => 'Sign in to your account',
    'subheader' => 'Start your demo version',
])

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title . ' – ' : '' }}{{ config('app.name') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @filamentStyles
    @livewireStyles

</head>

<body>

    <section class="relative pt-16 pb-0 md:py-32 bg-white"
        style="background-image: url('flex-ui-assets/elements/pattern-white.svg'); background-position: center;">
        <div class="container px-4 mx-auto mb-16">
            <div class="w-full md:w-3/5 lg:w-1/2">
                <div class="max-w-sm mx-auto">
                    <div class="mb-6 text-center">
                        <a class="inline-block mb-6" href="#">
                            <img class="h-16" src="https://placehold.co/65" alt="">
                        </a>
                        <h3 class="mb-4 text-2xl md:text-3xl font-bold">{{ $header }}</h3>
                        <p class="text-lg text-coolGray-500 font-medium">{{ $subheader }}</p>
                    </div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    @filamentScripts
    @livewireScripts
</body>

</html>
