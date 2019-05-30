@extends('layout.default')

@section('title', 'Регистрация')

@section('content')
    {{session('success')}}
    @if (count($errors) > 0)
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>  
    @endif

    <form method="POST" action="./register">
        {{ csrf_field() }}
    Име: <input type="text" name="username" value="{{old('username')}}"><br />
        Поща: <input type="text" name="email" value="{{old('email')}}"><br />
        Парола: <input type="password" name="pass"><br />
        Повтори паролата <input type="password" name="pass2"><br />
        <input type="submit" value="Регистрация"><br />
    </form>
@endsection