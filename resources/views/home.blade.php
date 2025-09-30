
<!DOCTYPE html>
<html lang="en" data-theme="lofi">
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
            <div class="flex-none">
                 <button class="btn btn-square btn-ghost">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path> </svg>
                </button>
            </div>
        </div>
    </nav>

    <main class="flex-1 container mx-auto px-4 py-8">
            <div class="conatiner flex items-centre flex mx-auto ">
                  <div class="card bg-base-100 w-96 shadow-sm">
                        <figure class="px-10 pt-10">
                            <img
                            src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                            alt="Shoes"
                            class="rounded-xl" />
                        </figure>
                        <div class="card-body items-center text-center">
                            <h2 class="card-title">Customer</h2>
                            <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                            <div class="card-actions">
                            <button class="btn btn-primary">Select Customer</button>
                            </div>
                        </div>
                  </div>
                <div class="card">
                     <div class="card-body">
                         <p>hello</p>
                    </div>
                </div>
                <div class="card">
                     <div class="card-body">
                        <p>hello</p>
                    </div>
                </div>
            </div>
        
    </main>

    <footer class="footer footer-center p-5 bg-base-300 text-base-content text-xs">
        <div>
            <p>© {{ date('Y') }} Thought</p>
        </div>
    </footer>
</body>
</html>