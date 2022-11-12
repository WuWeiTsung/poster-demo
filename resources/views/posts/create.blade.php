@extends('layouts.app')

@section('content')
<div class="container">
  <h1>CREATE POST</h1>
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $key => $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <form method="post" action="/posts">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Content</label>
      <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="8" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="/posts" class="btn btn-danger">Cancel</a>
  </form>

</div>

@endsection