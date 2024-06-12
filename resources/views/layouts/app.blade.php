<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PRMIS EPH') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/css/styles.css')
</head>
<body class="bg-gray-100">
    <div id="app" class="flex">
        @include('layouts.sidebar')
        <div class="flex-1">
            @include('layouts.navigation')
            <main class="container mx-auto py-4">
                <div id="phTime" class="text-sm font-medium">
                    <span id="phHours"></span>:<span id="phMinutes"></span>:<span id="phSeconds"></span> <span id="phAMPM"></span>
                </div>
                <div id="phDate" class="text-sm text-gray-400"></div>
                @yield('content')
            </main>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
