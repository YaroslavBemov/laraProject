@extends('app')

@section('title')
    Create news
@endsection

@php
    $url = route('admin::news::store');
@endphp

@section('content')

    <div class="container">
        <form action="{{ $url }}" method="post">
            @csrf

            @isset($news->id)
                <input type="hidden" name="id" value="{{$news->id}}">
            @endisset

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1"
                       placeholder="Title" value="{{ $news->title }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="exampleFormControlInput1"
                       placeholder="Description" value="{{ $news->description }}">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Time to read</label>
                <input type="text" name="time_to_read" class="form-control" id="exampleFormControlInput1"
                       placeholder="Time to read" value="{{ $news->time_to_read }}">
            </div>

            <div class="mb-3">
                <span>Category</span>
                <select class="form-select mt-2" aria-label="Default select example" name="category_id">
                    <option selected>Select category</option>

                    @foreach($category as $item)

                        @isset($news->category_id)
                            @if($news->category_id == $item->id)
                                <option selected value="{{ $item->id }}">{{ $item->title }}</option>
                            @else
                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                            @endif
                        @endisset




                    @endforeach

                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                <textarea class="form-control" name="content" id="exampleFormControlTextarea1"
                          rows="3">{{ $news->content }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-5">Create</button>
        </form>
    </div>

@endsection
