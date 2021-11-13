<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
        {{-- @powerGridStyles --}}
    </head>
    <body>
        <div class="flex justify-center items-center bg-gray-200 px-6">
            
                {{ $slot }}
        
            @livewireScripts
            {{-- @powerGridScripts --}}
        </div>
    </body>
    
</html>
