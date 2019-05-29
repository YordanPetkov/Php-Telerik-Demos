@extends('layout.default')

@section('title', 'Регистрация')

@section('content')
    <form method="POST" action="/register">
        {{ csrf_field() }}
        Име: <input type="text" name="username"><br />
        Поща: <input type="text" name="email"><br />
        Парола: <input type="password" name="pass"><br />
        Повтори паролата <input type="password" name="pass2"><br />
        <input type="submit" value="Регистрация"><br />
    </form>
@endsection