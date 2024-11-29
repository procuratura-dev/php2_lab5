@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Добро пожаловать, {{ $user->name }}!</h1>

    <p>Email: {{ $user->email }}</p>
    <p>Роль: {{ ucfirst($user->role) }}</p>

    @if($user->role === 'admin')
        <h2>Все пользователи</h2>
        <ul>
            @foreach(\App\Models\User::all() as $userItem)
                <li>
                    <a href="{{ route('dashboard.show', $userItem->id) }}">{{ $userItem->name }}</a> ({{ $userItem->role }})
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection