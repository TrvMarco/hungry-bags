@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Il tuo Menù</h1>
            @if ($items->isEmpty())
            <h1>il tuo menu è vuoto </h1>
            <a href="{{route('admin.items.create')}}">Inserisci un nuovo piatto</a>
            <br>
            <a href="{{route('admin.home')}}">Torna alla pagina Home</a>
        @endif
        <ul>
            @foreach($items as $item)
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Foto del piatto</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
            @endforeach
        </ul>
        
    </div>
    @endsection
    {{-- <li class="d-flex my-3 justify-content-between"> --}}
        {{-- bottone modifica --}}
        {{-- {{$item->name}}
        <div class="d-flex">
            <a href="{{route('admin.items.show', $item->id)}}" class="btn btn-primary mx-2">Visualizza</a>
            <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-warning mx-2">Modifica</a> --}}
            {{-- bottone elimina --}}
            {{-- <form action="{{route('admin.items.destroy', $item->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    </li> --}}