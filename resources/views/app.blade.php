@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-9">
      <div class="card mt-5 border-dark">
        <h5 class="card-header">使用說明</h5>
        <div class="card-body">
          <h5 class="card-title">
            <ul>
              <li>這是一個用Laravel寫的簡單留言板。</li>
              <li>程式碼可至Github(http://)觀看</li>
              <li>可以註冊帳號進入使用，或是使用測試帳號(Email:test2@test.com，Password:88888888)登入使用。</li>
              <li>登入後可新增留言，修改自己的留言，刪除自己的留言，回應別人的留言；未登入只能觀看留言。</li>
            </ul>
          </h5>
        </div>
      </div>

      @foreach ($posts as $key => $post)
      <div class="card mt-5 border-dark">
        <h5 class="card-header">{{ $post->user->name}}
        </h5>
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->content }}</p>
        </div>
      </div>

      @foreach ( $post->comments as $key => $comment )

      <div class="comment ms-5">
        <div class="card border-primary ">
          <h5 class="card-header">{{$comment->user->name}}
          </h5>
          <div class="card-body">
            <p class="card-text">{{$comment->comment}}</p>
          </div>
        </div>
      </div>
      @endforeach

      @endforeach



    </div>
    <div class="col-3">
      @include('posts._sidebar')
    </div>
  </div>

</div>


@endsection

<!-- <script>
  let deletePost = function(id) {
    let result = confirm('Do you want to delete the post?')
    if (result) {
      let actUrl = '/posts/' + id
      $.post(actUrl, {
        _method: 'delete'
      }).done(function() {
        location.reload()
      })
    }
  }
</script> -->