<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-2">
                    <div class="content d-flex justify-content-between align-items-center">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" class="img-fluid">
                        <div class="h-100">
                            <ul class="d-flex align-items-center list-unstyled h-100">
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">CHARACTERS</a>
                                </li>
                                <li>
                                    <a href="{{ route('comics')}}" class="text-decoration-none text-black me-3 {{ Route::currentRouteName() === 'comics' ? 'active' : ''}}">COMICS</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">TV</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">GAMES</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">COLLECTIBLES</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">VIDEOS</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">FANS</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">NEWS</a>
                                </li>
                                <li>
                                    <a href="" class="text-decoration-none text-black me-3">SHOP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>