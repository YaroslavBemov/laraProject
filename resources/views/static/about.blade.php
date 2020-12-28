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
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                               placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" name="text-content" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>

@endsection
