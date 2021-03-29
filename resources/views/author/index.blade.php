@extends('layout')
@section('title', 'Authors Index')
@section('content')
<div id="author-root">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col"></th>
            <th scope="col">Author</th>
            <th scope="col">Email</th>
            <th scope="col">Bio</th>
            <th scope="col">Website</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)

                <tr>
                    <th scope="row">{{$author->id}}</th>
                    <td>
                        <img src="{{$author->detail->avatar}}">
                    </td>
                    <td>{{$author->name}} {{$author->surname}}</td>
                    <td>{{$author->email}}</td>
                    <td>{{$author->detail->bio}}</td>
                    <td>
                        <a href="{{$author->detail->website}}">
                            {{$author->name}}_{{$author->surname}}_website
                        </a>
                    </td>
                </tr>

            @endforeach

        </tbody>
      </table>
</div>
@endsection
