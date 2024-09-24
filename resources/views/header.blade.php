<header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-2">
                    <div class="content d-flex justify-content-between align-items-center">
                        <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo" class="img-fluid">
                        <div class="h-100">
                            <ul class="d-flex align-items-center list-unstyled h-100">
                                @foreach ($dc_comics as $item)
                                <li>
                                    <a href="{{ route($item['url'])}}" class="text-decoration-none text-black me-3 {{ Route::currentRouteName() === $item['url'] ? 'active' : ''}}">{{ $item['name'] }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>