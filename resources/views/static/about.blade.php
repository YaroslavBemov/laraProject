@section('title')
    О нас
@endsection

@extends('app')

@section('content')

    @php
        $url = route('feedback');
    @endphp

    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <h2 class="text-center">О нас</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur consequuntur cupiditate
                    esse excepturi facilis libero molestias, nam nesciunt nobis officia officiis quaerat quibusdam
                    repellat reprehenderit sequi, tempora totam velit?
                </p>
            </div>

            <div class="col-lg-6">
                <h2 class="text-center">Обратная связь</h2>
                <form action="{{ $url }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ old('content') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                @if(session('success'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </div>

@endsection
