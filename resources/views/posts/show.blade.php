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
        <a href="{{ action('PostsController@show', $post) }}" class="delete-link">削除</a>
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
          <div class="c-box">
            <div class="comment">
              <p>コメント</p>
            </div>
            <div class="delete">×</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>