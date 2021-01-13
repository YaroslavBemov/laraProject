@extends('app')

@section('title')
    Новости
@endsection

@section('content')
    @include('parts.nav')

    <div class="album py-3">
        <div class="container">

            {{ $data->links() }}

            <div class="row">

                @forelse($data as $news => $item)

                    @php
                        $url = route('news::one', ['id' => $item->id]);
                        $urlEdit = route('admin::news::update', ['id' => $item->id]);
                        $urlDelete = route('admin::news::delete', ['id' => $item->id]);
                    @endphp

                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                                 focusable="false"
                                 role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"/>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
                            </svg>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">

                                        @empty($isAdmin)

                                            <a href="{{ $url }}" class="btn btn-sm btn-outline-secondary">View</a>

                                        @endempty

                                        @isset($isAdmin)

                                            <a href="{{ $urlEdit }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <a href="{{ $urlDelete }}"
                                               class="btn btn-sm btn-outline-secondary">Delete</a>

                                        @endisset

                                    </div>
                                    <small class="text-muted">{{ $item->time_to_read }} mins</small>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty Новостей нет

                @endforelse

            </div>

            {{ $data->links() }}

        </div>
    </div>

@endsection
