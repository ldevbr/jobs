@props([
    'title' => null,
    'subtitle' => null,
])

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ? $title . ' – ' : '' }}{{ config('app.name') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>

<body class="min-h-screen bg-slate-100 text-slate-900 antialiased flex flex-col">

    <div class="flex-1 flex items-center justify-center px-4">
        <div class="w-full max-w-md">
            {{-- Logo / heading --}}
            <div class="mb-6 text-center">
                <a href="{{ url('/') }}" class="inline-flex items-center justify-center gap-2 mb-2">
                    {{-- Logo aqui --}}
                    <span class="text-xl font-semibold tracking-tight">
                        {{ config('app.name') }}
                    </span>
                </a>

                @if ($title)
                    <h1 class="text-lg font-semibold">{{ $title }}</h1>
                @endif

                @if ($subtitle)
                    <p class="mt-1 text-xs text-slate-500">{{ $subtitle }}</p>
                @endif
            </div>

            {{-- Card --}}
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-6">
                {{ $slot }}
            </div>

            {{-- Links auxiliares --}}
            <div class="mt-4 text-center text-xs text-slate-500">
                @yield('auth-footer')
            </div>
        </div>
    </div>

    <footer class="py-3 text-center text-[11px] text-slate-400">
        &copy; {{ date('Y') }} {{ config('app.name') }}. Feito com ♥ para recrutadores e candidatos.
    </footer>

    @stack('scripts')
</body>

</html>
