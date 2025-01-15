<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистрация</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Регистрация</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="login">Логин</label>
            <input id="login" type="text" class="form-control" name="login" required autofocus>
        </div>

        <div class="form-group">
            <label for="name">Имя</label>
            <input id="name" type="text" class="form-control" name="name" required>
        </div>

        <div class="form-group">
            <label for="fio">ФИО</label>
            <input id="fio" type="text" class="form-control" name="fio" required>
        </div>

        <div class="form-group">
            <label for="phone">Телефон</label>
            <input id="phone" type="text" class="form-control" name="phone">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form-control" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Пароль</label>
            <input id="password" type="password" class="form-control" name="password" required>
        </div>

        <div class="form-group">
            <label for="password-confirm">Подтверждение пароля</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
</body>
</html>