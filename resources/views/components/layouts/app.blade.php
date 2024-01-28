<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')

        <title>{{ $title ?? 'Page Title' }}</title>
    </head>

    <body class="antialiased bg-just-black text-surface-white p-5">
        <nav class="h-16 flex justify-between align-middle items-center mb-10 sticky top-0 bg-just-black bg-opacity-75 backdrop-blur-xl ">
            <h1 class="text-2xl font-bold min-w-fit">Book Server</h1>

            <div class="w-full">
                <ul class="inline-flex justify-evenly w-full">
                    <li class="hover:underline transition-transform hover:cursor-pointer">
                        <a wire:navigate href="/">Home</a>
                    </li>
                    <li class="hover:underline transition-transform hover:cursor-pointer">
                        <a wire:navigate href="/library">Library</a>
                    </li>
                    <li class="hover:underline transition-transform hover:cursor-pointer">
                        <a wire:navigate href="/upload">Upload</a>
                    </li>

                </ul>
            </div>


            <button class="font-bold py-2 px-4 rounded-full border-surface-white border-2 hover:text-just-black hover:bg-surface-white transition-opacity duration-150 ease-in-out">Login</button>
        </nav>
        <main>
            {{ $slot }}
        </main>

    </body>
</html>
