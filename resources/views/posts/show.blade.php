@extends('layouts.app')

@section('page-title')
<div class="page-title">
  <div class="container">
    <h1>POST</h1>
    <a href="/posts/create" class="btn btn-primary text-end">Add Post</a>
  </div>
</div>
@endsection


@section('content')

<div class="container">

  <div class="row">



    <div class="card mt-5 border-dark">
      <h5 class="card-header">{{$post->user->name}}
        @if ($post->user_id == Auth::id())
        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
        <!-- <button class="btn btn-danger btn-sm" onclick="deletePost({{ $post->id }})">Delete</button> -->
        @endif
      </h5>
      <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->content }}</p>
      </div>
      <div class="card-footer">
        <p>
          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$post->id}}" aria-expanded="false" aria-controls="collapseExample{{$post->id}}">
            Leave A Comment
          </button>
        </p>
        <div class="collapse" id="collapseExample{{$post->id}}">
          <div class="card card-body">
            <form method="post" action="/comments">
              @csrf
              <input type="hidden" name="post_id" value="{{ $post->id }}">
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Comment</label>
                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- COMMENT -->
    <div class="container">
      @foreach ( $post->comments as $key => $comment )
      <div class="comment-body ms-5">
        <div class="card border-primary ">
          <h5 class="card-header">{{$comment->user->name}}
            @if ($comment->user_id == Auth::id())
            <a class="btn btn-danger btn-sm" onclick="deleteCommenet({{ $comment->id }})">Delete</a>
            @endif
          </h5>
          <div class="card-body">
            <p class="card-text">{{$comment->comment}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>



  </div>
</div>
@endsection

<script>
  deletePost = function(id) {
    let result = confirm('Do you want to delete the post?')
    if (result) {
      let actUrl = '/posts/' + id
      $.post(actUrl, {
        _method: 'delete'
      }).done(function() {
        location.href = '/posts'
      })
    }
  }

  deleteCommenet = function(id) {
    let result = confirm('Do you want to delete the comment?')
    if (result) {
      let actionUrl = '/comments/' + id
      $.post(actionUrl, {
        _method: 'delete'
      }).done(function() {
        location.reload()
      })
    }
  }
</script>