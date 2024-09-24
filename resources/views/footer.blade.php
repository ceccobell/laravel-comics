<footer>
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 bg-image">
                        <div class="content">
                            <div class="me-4">
                                <h4 class="text-white my-3">DC COMICS</h4>
                                <ul class="list-unstyled">
                                    @foreach (collect($dc_comics)->take(7) as $item)
                                        <li><a href="{{$item['url']}}" class="text-decoration-none text-secondary">{{ $item['name'] }}</a></li>
                                    @endforeach
                                </ul>
                                <h4 class="text-white my-3">SHOP</h4>
                                <ul class="list-unstyled">
                                    @foreach ($shop as $item)
                                        <li><a href="{{$item['url']}}" class="text-decoration-none text-secondary">{{ $item['name'] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            @foreach($links_footer as $section)
                            <div class="me-4">
                                <h4 class="text-white my-3">{{ $section['title'] }}</h4>
                                <ul class="list-unstyled">
                                    @foreach($section['items'] as $item)
                                        <li>
                                            <a href="#" class="text-decoration-none text-secondary">{{ $item }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-between align-items-center p-3">
                        <div class="text-white border-blue">SIGN-UP NOW!</div>
                        <div class="d-flex align-items-center">
                            <div class="text-blue mx-2">FOLLOW US</div>
                            <img src="{{ Vite::asset('resources/images/footer-facebook.png')}}" alt="" class="mx-2">
                            <img src="{{ Vite::asset('resources/images/footer-twitter.png')}}" alt="" class="mx-2">
                            <img src="{{ Vite::asset('resources/images/footer-youtube.png')}}" alt="" class="mx-2">
                            <img src="{{ Vite::asset('resources/images/footer-pinterest.png')}}" alt="" class="mx-2">
                            <img src="{{ Vite::asset('resources/images/footer-periscope.png')}}" alt="" class="mx-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>