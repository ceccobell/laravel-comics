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
        </div>
    </div>
@endsection