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
      <h1>Вход в личный кабинет</h1>
        @if(session('status'))
            <div style="color: darkred">{{ session('status') }}</div>
        @endif
      <form method="post" action="{{ route('login') }}">
          @csrf
        <p><input type="text" name="email" value="{{ old('email') }}" placeholder="Email"></p>
          @error('email')
            <div style = "color: darkred">{{ $message }}</div>
          @enderror
        <p><input type="password" name="password" value="" placeholder="Пароль"></p>
          @error('password')
            <div style = "color: darkred">{{ $message }}</div>
          @enderror
        <p class="submit"><input type="submit" name="commit" value="Войти"></p>
      </form>
    </div>

  </section>
</body>
</html>
