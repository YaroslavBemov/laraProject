@extends('app')

@section('content')

    <div class="album py-3">
        <div class="container">

            <h1>{{ $data['title'] }}</h1>

            <p>{{ $data['description'] }}</p>

        </div>
    </div>

@endsection
