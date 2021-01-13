@section('title')
    My app
@endsection

@section('content')

    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">
                <h1>Album example</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the
                    creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="{{ route('news::all') }}" class="btn btn-primary my-2">Main call to action</a>
                </p>
            </div>
        </section>

        <div class="ml-12">

            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                Whether you are new to the framework or have previous experience with Laravel, we recommend
                reading all of the documentation from beginning to end.
            </div>

        </div>
    </div>

@endsection
