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

        @php

        $title = $news->title ? $news->title : old('title');
        $description = $news->description ? $news->description : old('description');
        $time_to_read = $news->time_to_read ? $news->time_to_read : old('time_to_read');
        $content = $news->content ? $news->content : old('content');
        $isActive = $news->is_active == 'on' ? 'checked' : '';
        @endphp

        <form action="{{ $url }}" method="post">
            @csrf

            @isset($news->id)
                <input type="hidden" name="id" value="{{$news->id}}">
            @endisset

            <div class="mb-3 mt-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                       placeholder="Title" value="{{ $title }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="exampleFormControlInput1"
                       placeholder="Description" value="{{ $description }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Time to read</label>
                <input type="text" name="time_to_read" class="form-control" id="exampleFormControlInput1"
                       placeholder="Time to read" value="{{ $time_to_read }}">
            </div>

            <div class="mb-3">
                <span>Category</span>
                <select class="form-select mt-2" aria-label="Default select example" name="category_id">
                    <option selected>Select category</option>

                    @foreach($category as $item)

                        @if(isset($news->category_id))
                            @if($news->category_id == $item->id)
                                <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endif
                        @else
                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                        @endif

                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1"
                          rows="3">{{ $content }}</textarea>
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input"
                       name="is_active"
                       type="checkbox"
                       id="flexSwitchCheckDefault"
                    checked="{{ $isActive }}"
                    >
                <label class="form-check-label" for="flexSwitchCheckDefault">Is active</label>
            </div>

            <button type="submit" class="btn btn-primary mb-5 mt-3">Create</button>
        </form>
    </div>

@endsection
