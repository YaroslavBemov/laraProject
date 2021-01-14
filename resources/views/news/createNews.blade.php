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
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            {!! Form::text('title', $news->title ?? old('title'), [
                'class' => 'form-control',
                'id' => 'exampleFormControlInput1',
                'placeholder' => 'Title'
            ]) !!}
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Description</label>
            {!! Form::text('description', $news->description ?? old('description'), [
                'class' => 'form-control',
                'id' => 'exampleFormControlInput2',
                'placeholder' => 'Description'
            ]) !!}
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Time to read</label>
            {!! Form::text('time_to_read', $news->time_to_read ?? old('time_to_read'), [
                'class' => 'form-control',
                'id' => 'exampleFormControlInput3',
                'placeholder' => 'Time to read'
            ]) !!}
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Content</label>

            {!! Form::textarea('content', $news->content ?? old('content'), [
                'class' => 'form-control',
                'id' => 'exampleFormControlTextarea1',
                'rows' => '3',
            ]) !!}
        </div>

        <div class="mb-3">
            <span>Category</span>
            {!! Form::select('category_id', $category->pluck('title', 'id'), $news->category_id, ['class' => 'form-select mt-2']) !!}
        </div>

        <div class="form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">Is active</label>
            <input type="hidden" name="is_active" value="0">
            {!! Form::checkbox('is_active', 1, $news->is_active, [
                'class' => 'form-check-input',
                'id' => 'flexSwitchCheckDefault'
            ]) !!}
        </div>

        <button type="submit" class="btn btn-primary mb-5 mt-3">Create</button>

    {!! Form::close() !!}

@endsection
