@extends('layouts.app')

@section('content')
<div class="container">
  <h1>EDIT POST</h1>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $key => $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form method="post" action="/posts/{{$post->id}}">
    @csrf
    <input type="hidden" name="_method" value="put">
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" class="form-control" name="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Content</label>
      <textarea class="form-control" name="content" rows="8">{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/posts" class="btn btn-danger">Cancel</a>
  </form>
</div>
@endsection