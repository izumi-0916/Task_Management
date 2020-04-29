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
      <div class="title">新規作成</div>
      <div class="btn-link">
        <a class="btn" href="{{ url('/')}} ">戻る</a>      </div>
      <div class="form">
        <form method="post" action="{{ url('/posts') }}">
          {{ csrf_field() }}
          <p>
            <input type="text" name="title" placeholder="タスクを入力">
          </p>
          <p>
            <textarea name="text" placeholder="一言入力"></textarea>
          </p>
          <p>
            <input type="submit" value="作成">
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>