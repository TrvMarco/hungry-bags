@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>vista singolo piatto</h1>
        <h2>{{$item->name}}</h2>
        <h3>{{$item->description}}</h3>
        <h4>{{$item->price}}</h4>
        <a href="{{route('admin.items.index')}}">torna al menu</a>
        <br>
        <a href="{{route('admin.home')}}">Home</a>
        
    </div>
@endsection