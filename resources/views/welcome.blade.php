<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tailwind colors</title>
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    </head>
    <body class="font-sans antialiased text-gray-800 bg-gray-100">
        <div class="flex items-center p-6 text-3xl text-gray-900">
            <x-tailwind-mark/>
            <h1>Tailwind colors</h1>
        </div>

        <ul class="text-sm font-medium text-white">
            @foreach($palette->colors() as $color)
                <x-color :color="$color"/>
            @endforeach
        </ul>

        <!-- Fathom - beautiful, simple website analytics -->
        <script src="https://warbler.tailwind-colors.com/script.js" site="CQTVRGIZ" defer></script>
        <!-- / Fathom -->
    </body>
</html>
