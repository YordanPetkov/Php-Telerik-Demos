
@include('public.header')

@if($name == "ivan")
    User is ivan
@elseif ($user == 'ivan1')
    User is ivan1
@else
    User is unknown
@endif

@foreach ($numbers as $v)
    {{$v}}
@endforeach


@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse