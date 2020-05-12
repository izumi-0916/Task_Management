<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Task Management</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <a class="home" href="{{ url('/')}} ">タスク管理アプリ</a>
    </div>
    <div class="content">
      <div class="title">タスク管理</div>
      <div class="btn-link">
        <a class="btn" href="{{ url('/posts/create')}} ">新規作成</a>      </div>
      <div class="task-box">
        <div class="box-title">タスク一覧</div>
        <div class="task-header">
          <div class="task-name-t">課題名</div>
          <div class="task-date">作成日時</div>
        </div>
        @forelse ($posts as $post)
        <a class="show" href="{{ action('PostsController@show', $post) }}"><div class="task">
          <div class="task-name">{{ $post->title }}</div>
          <div class="task-date">{{ $post->created_at }}</div>
        </div></a>
        @empty
        <div class="no-task">まだタスクがありません</div>
        @endforelse
      </div>
    </div>
  </div>
</body>
</html>