@props([
    'title' => null,
])

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title . ' – ' : '' }}{{ config('app.name') }}</title>

    {{-- Favicon, meta, etc --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- Styles / Scripts --}}
    <link rel="stylesheet" href="{{ asset('resources/css/theme.min.css') }}">
</head>

<body class="dark:bg-slate-900">
    <x-header />

    <main class="mx-auto max-w-6xl px-4 py-6">
        @if ($title)
            <div class="mb-4 flex items-center justify-between gap-2">
                <h1 class="text-xl font-semibold tracking-tight">{{ $title }}</h1>
                @isset($actions)
                    <div class="flex items-center gap-2">
                        {{ $actions }}
                    </div>
                @endisset
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-slate-100">
            <div class="p-4 sm:p-6">
                {{ $slot }}
            </div>
        </div>
    </main>
    <x-footer />

    @vite(['resources/js/app.js'])
</body>

</html>
