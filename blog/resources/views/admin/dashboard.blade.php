<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Войти в личный кабинет</title>
	<link rel="stylesheet" href="/css/login_admin.css">
	<link rel="icon" href="" type="image/x-icon">
	<link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Публикация статьи</h1>
        @if(session('status'))
            <div style = "color: #f6f4f4">{{ session('status') }}</div>
        @endif
      <form method="post" action="{{ route('dashboard') }}">
          @csrf
{{--          <p><input type="text" name="category" value="" placeholder="Раздел (php, laravel)"></p>--}}
          <select name="category_id">
              @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->category }}</option>
              @endforeach
          </select>
          <p><input type="text" name="title" value="" placeholder="Название статьи"></p>
              @error('title')
                <div style = "color: #b9b0b0">{{ $message }}</div>
              @enderror
          <p><input type="text" name="excerpt" value="" placeholder="Отрывок"></p>
              @error('excerpt')
                <div style = "color: #b9b0b0">{{ $message }}</div>
              @enderror
          <p><textarea name="body" rows="10" cols="30" placeholder="Содержание"></textarea></p>
              @error('body')
                <div style = "color: #b9b0b0">{{ $message }}</div>
              @enderror
          <p class="submit"><input type="submit" name="commit" value="Опубликовать"></p>
      </form>
    </div>
  </section>
</body>
</html>
