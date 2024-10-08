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
                    <h1>Questa è la sezione characters</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 bg-blue">
                    <div class="content justify-content-center py-4">
                        <ul class="d-flex align-items-center list-unstyled m-0 p-0">
                            @foreach ($exploreDC as $item)
                            <li class="mx-3 d-flex align-items-center">
                                <img src="{{ Vite::asset($item['img'])}}" alt="" class="img-fluid icon me-2">
                                <a href="#" class="text-decoration-none text-white">{{ $item['name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection