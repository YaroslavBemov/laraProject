@extends('app')

@section('title')
    Create news
@endsection

@php
    $url = route('admin::news::store');
@endphp

@section('content')

    <div class="container">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    {{ $error }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif

        {!! Form::open(['route' => 'admin::news::store']) !!}

        @isset($news->id)
            <input type="hidden" name="id" value="{{$news->id}}">
        @endisset

        <div class="mb-3 mt-3">
            {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
            {!! Form::text('title', $news->title ?? old('title'), ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
            {!! Form::text('description', $news->description ?? old('description'), ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label('time_to_read', 'Time to read', ['class' => 'form-label']) !!}
            {!! Form::text('time_to_read', $news->time_to_read ?? old('time_to_read'), ['class' => 'form-control']) !!}
        </div>

        <div class="mb-3">
            {!! Form::label('content', 'Content', ['class' => 'form-label']) !!}
            {!! Form::textarea('content', $news->content ?? old('content'), ['class' => 'form-control', 'rows' => '3']) !!}
        </div>

        <div class="mb-3">
            <span>Category</span>
            {!! Form::select('category_id', $category->pluck('title', 'id'), $news->category_id, ['class' => 'form-select mt-2']) !!}
        </div>

        <div class="form-check form-switch">
            {!! Form::label('is_active', 'Is active', ['class' => 'form-check-label']) !!}
            <input type="hidden" name="is_active" value="0">
            {!! Form::checkbox('is_active', 1, $news->is_active, ['class' => 'form-check-input']) !!}
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-3">Create</button>

    {!! Form::close() !!}

@endsection
