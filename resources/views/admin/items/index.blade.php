@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>lista dei tuoi piatti</h1>
        @if ($items->isEmpty())
        <H1>il tuo menu è vuoto </H1>
        <a href="{{route('admin.items.create')}}">inserisci un nuovo piatto</a>
        <br>
        <a href="{{route('admin.home')}}">Torna alla pagina Home</a>
        @endif
        
        <ul>
            @foreach($items as $item)
                <li class="d-flex my-3 justify-content-between">
                    {{-- bottone modifica --}}
                    {{$item->name}}
                    <div class="d-flex">

                        <a href="{{route('admin.items.show', $item->id)}}" class="btn btn-primary mx-2">visualizza</a>
                        <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-warning mx-2">Modifica</a>
                        {{-- bottone elimina --}}
                        <form action="{{route('admin.items.destroy', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection