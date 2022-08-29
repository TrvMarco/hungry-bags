@extends('layouts.base')

@section('content')
    <div class="container">
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
            <a href="{{route('admin.users.edit', $user)}}">Modifica</a>
        @endforeach
    </div>
@endsection