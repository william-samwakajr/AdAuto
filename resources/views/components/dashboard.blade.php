<!DOCTYPE html>
<html lang="en" data-theme="autumn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . '' : 'Taskmately' }}</title>
    <link rel="preconnect" href="<https://fonts.bunny.net>">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen flex flex-col bg-base-200 font-sans">
    <nav class="navbar bg-base-100">
        <div class="navbar-start">
            
            <a href="/" class="btn btn-ghost text-xl">AdAuto</a>
        </div>
        <div class="navbar-end gap-2">
             <span class="text-sm">{{ auth()->user()->name }}</span>
        <form method="POST" action="/logout" class="inline">
            @csrf
            <button type="submit" class="btn btn-ghost btn-sm">Logout</button>
        </form>
        </div>
    </nav>

    <main class="flex-1 container mx-0 max-w-screen">
    <div class="drawer lg:drawer-open bg-base-300 ">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col m">
            <!-- Page content here -->


            <label for="my-drawer-2" class="btn btn-primary drawer-button lg:hidden">
            Open drawer
            </label>
        </div>
        <div class="drawer-side">
            <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu bg-base-100 text-base-content min-h-full w-80 p-4">
                <h1 class="text-primary bg-base-100 text-3xl py-4 px-4">Dashboard</h1>
            <!-- Sidebar content here -->
            <li><a herf="/managesales" class="text-lg px-2 ">Manage Sales</a></li>
            <li><a herf="/managesales" class="text-lg px-2 ">manage orders</a></li>

            </ul>
        </div>
    </div>
  </main>

    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© {{ date('Y') }} Ad Auto</p>
        </div>
    </footer>
</body>
</html>