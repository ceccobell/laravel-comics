@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 h-300 position-relative">
                <img src="{{ Vite::asset('resources/images/jumbotron.jpg')}}" alt="" class="jumbotron">
                <div class="content">
                    <span class="text-white py-2 px-3 bg-blue p-abs fw-semibold">CURRENT SERIES</span>
                </div>
            </div>
            <div class="row bg-black">
                <div class="content d-flex flex-wrap py-3"> 
                    @foreach ($comics as $comic)
                        <div class="col-2 p-3">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-card">
                            <h6 class="text-white text-uppercase mt-2">{{ $comic['series'] }}</h6>
                        </div>
                    @endforeach
                    <div class="col-12 text-center mb-2">
                        <span class="text-white py-2 px-5 bg-blue">LOAD MORE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection