<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Task Management</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="wrapper">
    <a class="home" href="{{ url('/')}} "><div class="header">タスク管理アプリ</div></a>
    <div class="content">
      <div class="title">タスク管理</div>
      <div class="btn-link">
        <a class="btn" href="{{ url('/')}} ">戻る</a>
      </div>
      <div class="btn-box">
        <a href="{{ action('PostsController@edit', $post) }}" class="edit-link">編集</a>
        <a href="#" class="delete-link" data-id="{{ $post->id }}">削除</a>
        <form method="post" action="{{ url('/posts', $post->id) }}" id="form_{{ $post->id }}">
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </div>
      <div class="s-task-box">
        <div class="left">
          <div class="left-title">課題</div>
          <div class="t-title">{{ $post->title }}</div>
          <div class="left-title">一言</div>
          <div class="t-text">{!! nl2br(e($post->text)) !!}</div>
          <div class="s-task-date">{{ $post->created_at }}</div>
        </div>
        <div class="comment-box">
          <div class="comment-title">コメント</div>
          @foreach ($post->comments as $comment)
          <div class="c-box">
            <div class="comment">
              <p>{{ $comment->body }}</p>
            </div>
            <a href="#" class="delete" data-id="{{ $comment->id }}">×</a>
            <form method="post" action="{{ action('CommentsController@destroy', [$post, $comment]) }}" id="form_{{ $comment->id }}">
              {{ csrf_field() }}
              {{ method_field('delete') }}
            </form>
          </div>
          @endforeach
          </div>
      </div>
      <form method="post" action="{{ action('CommentsController@store', $post) }}">
        {{ csrf_field() }}
        <p class="c-new-form">
          <input class="comment-new" type="text" name="body" placeholder="コメントを入力" value="{{ old('body') }}">
          @if ($errors->has('body'))
          <span class="error">{{ $errors->first('body') }}</span>
          @endif
        </p>
        <p>
          <input class="c-submit" type="submit" value="コメント">
        </p>
      </form>
    </div>
  </div>
<script src="/js/main.js"></script>
</body>
</html>