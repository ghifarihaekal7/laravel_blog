@extends('main')

@section('title','| Posts')

@section('content')

  <div class="row">
    <div class="col-md-10">
      <h1>Posts</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary">Create</a>
    </div>
    <hr>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead>
          <th>#</th>
          <th>Title</th>
          <th>Body</th>
          <th>Created at</th>
          <th></th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
              <tr>
                  <th>{{ $post->id }}</th>
                  <td>{{ $post->title }}</td>
                  <td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "...":"" }}</td>
                  <td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
                  <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default">View</a><a href="#" class="btn btn-default">Edit</a></td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
