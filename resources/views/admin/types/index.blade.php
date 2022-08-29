@extends('layouts.base')

@section('content')
    <h1>vista tutte tipologie</h1>
    <ul>
        @foreach($types as $type)
            <li>
                {{-- bottone modifica --}}
                {{$type->name}}
                <a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning">Modifica</a>
                {{-- bottone elimina --}}
                <form action="{{route('admin.types.destroy', $type->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Cancella</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection