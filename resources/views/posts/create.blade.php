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
      <div class="title">新規作成</div>
      <div class="btn-link">
        <a class="btn" href="{{ url('/')}} ">戻る</a>      </div>
      <div class="form">
        <form method="post" action="{{ url('/posts') }}">
          {{ csrf_field() }}
          <p>
            <input class="text-form" type="text" name="title" placeholder="タスクを入力" value="{{ old('title') }}">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
          </p>
          <p>
            <textarea name="text" placeholder="一言入力">{{ old('text') }}</textarea>
          </p>
          <p>
            <input class="submit" type="submit" value="作成">
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>