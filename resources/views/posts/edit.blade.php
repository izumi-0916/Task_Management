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
      <div class="title">編集</div>
      <div class="btn-link">
        <a class="btn" href="{{ url('/')}} ">戻る</a>      </div>
      <div class="form">
        <form method="post" action="{{ url('/posts', $post->id) }}">
          {{ csrf_field() }}
          {{ method_field('patch') }}
          <p>
            <input class="text-form" type="text" name="title" placeholder="タスクを入力" value="{{ old('title', $post->title) }}">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
          </p>
          <p>
            <textarea name="text" placeholder="一言入力">{{ old('text', $post->text) }}</textarea>
          </p>
          <p>
            <input class="submit" type="submit" value="編集">
          </p>
        </form>
      </div>
    </div>
  </div>
</body>
</html>