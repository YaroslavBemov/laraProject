@extends('app')

@section('title')
    Admin
@endsection

@section('content')

    <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page"
                   href="{{ route('admin::news::index') }}">News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page"
                   href="{{ route('admin::users::index') }}">Users</a>
            </li>
        </ul>
    </div>

@endsection
