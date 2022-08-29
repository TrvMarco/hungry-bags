@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    
    <h1>vista tutte tipologie</h1>
    @if ($types->isEmpty())
        <H1>NON CI SONO ELEMENTI </H1>
        <a href="{{route('admin.types.create')}}">Scegli la tipologia del tuo ristorante</a>
        <br>
        <a href="{{route('admin.home')}}">Torna alla pagina Home</a>
    @endif
    <ul>
        @foreach($types as $type)
            <li class="d-flex">
                {{-- bottone modifica --}}
                {{$type->name}}
                
                <a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-warning mx-2">Modifica</a>
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


=======
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
>>>>>>> 3a924b868f8ac3789dc50f3c6ba101a6a533111d
@endsection