@extends('layout')
@section('title', 'Posts Index')
@section('content')
<div id="root">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pic</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Author</th>
            <th scope="col">n_Comments</th>
            <th scope="col">Tags</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>
                        <img src="{{$post->pic}}">
                    </td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>{{$post->author->name}} {{$post->author->surname}}</td>
                    <td>{{count($post->comments)}}</td>
                    <td>
                        @foreach ($post->tags as $tag)
                            {{$tag->name}} <br>
                        @endforeach
                    </td>
                </tr>

            @endforeach

        </tbody>
      </table>
</div>
@endsection
