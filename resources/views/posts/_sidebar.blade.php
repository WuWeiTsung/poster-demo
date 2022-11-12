<?php

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

$latestPosts = Post::orderBy('created_at', 'desc')->take(5)->get();
$latestComments = Comment::orderBy('created_at', 'desc')->take(5)->get();

?>

<div class="container">

  <!-- POST -->
  <h5>Latest Post</h5>
  <ul>
    @foreach ($latestPosts as $key => $post)
    <li><a href="/posts/{{ $post->id }}">{{$post->title}}</a></li>
    @endforeach
  </ul>
  </br>
  </br>
  <!-- COMMENT -->
  <h5>Latest Comment</h5>
  <ul>
    @foreach ($latestComments as $key => $comment)

    <li>{{$comment->user->name}} on <a href="/posts/{{$comment->post->id}}">{{$comment->post->title}}</a></li>
    @endforeach


  </ul>

</div>