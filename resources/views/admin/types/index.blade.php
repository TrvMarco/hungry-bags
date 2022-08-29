@extends('layouts.app')

@section('content')
    <h1>vista tutte tipologie</h1>
    @if ($types->isEmpty())
        <H1>NON CI SONO ELEMENTI </H1>
        <a href="{{route('admin.types.create')}}">Scegli la tipologia del tuo ristorante</a>
        <br>
        <a href="{{route('admin.home')}}">Torna alla pagina Home</a>
    @endif
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