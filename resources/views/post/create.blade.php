@extends('layout')
@section('title', 'Create Post')
@section('content')


<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" name="content" id="content" placeholder="Content">
    </div>
    <div class="form-group">
        <label for="pic">Pic</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="Pic URL">
    </div>
    <div class="form-group">
        <label for="author_id">Author</label>
        <select class="form-control" name="author_id" id="author_id">
            @foreach ($authors as $author)
                <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="tags[]">Tags</label>
        <select class="custom-select" name="tags[]" id="tags" multiple>
            @foreach ($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
