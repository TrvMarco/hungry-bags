@extends('layouts.base')

@section('content')
    <h1>vista tutte tipologie</h1>
    <ul>
        @foreach($types as $type)
            <li>{{$type->name}}</li>
        @endforeach
    </ul>
@endsection