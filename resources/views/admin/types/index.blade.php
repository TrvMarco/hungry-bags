@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>vista tutte tipologie</h1>
        @if ($types->isEmpty())
            <h4>NON CI SONO ELEMENTI </h4>
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
    </div>
@endsection