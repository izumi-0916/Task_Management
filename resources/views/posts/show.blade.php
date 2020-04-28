<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Task Management</title>
  <link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <div class="wrapper">
    <div class="header">タスク管理アプリ</div>
    <div class="content">
      <div class="title">タスク管理</div>
      <div class="task-box">
        <div class="t-title">{{ $post->title }}</div>
        <div class="t-text">{!! nl2br(e($post->text)) !!}</div>
      </div>
    </div>
  </div>
</body>
</html>