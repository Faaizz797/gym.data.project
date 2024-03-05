<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- DaisyUi --}}
     <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.2/dist/full.min.css" rel="stylesheet" type="text/css" />
     <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    {{-- Navbar start --}}
    <nav class="mb-10">
        <div class="navbar bg-warning font-bold text-black">
            <div class="flex-1">
                <a class="btn btn-ghost text-xl">GYM DATA</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a>Link</a></li>
                    <li><a>Link</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}
    @yield('navbar')
</body>
</html>