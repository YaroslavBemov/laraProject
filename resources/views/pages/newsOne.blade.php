@extends('app')

@section('content')

    <main class="flex-shrink-0">
        <div class="album py-3">
            <div class="container">

                <h1>Страница для вывода одной новости</h1>

                <h2>{{ $title }}</h2>

                <p>{{ $description }}</p>

            </div>
        </div>
    </main>

@endsection
