@extends('app')

@section('title')
    {{ $data->title }}
@endsection

@section('content')

    <div class="album py-3">
        <div class="container">

            <h1>{{ $data->title }}</h1>

            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                 xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                 focusable="false"
                 role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c"/>
                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
            </svg>

            <p class="fst-italic">{{ $data->description }}</p>

            <span>
                {{ $data->content }}
            </span>

        </div>
    </div>

@endsection
