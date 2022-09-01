@extends('layouts.app')

@section('content')
    <div class="container backoffice_menu_container">
        @if ($items->isEmpty())
          <div class="row mb-4 pt-4 justify-content-around">
              <div class="col-12 text-center p-5">
                <h2>Il tuo Menù è vuoto!</h2>
              </div>
              <div class="item_menu_box">
                <a href="{{route('admin.items.create')}}"><i class="fa-solid fa-plus"></i></a>
                <span>Inserisci un piatto</span>
              </div>
              <div class="item_menu_box"><a href="{{route('admin.home')}}">Torna alla pagina Home</a></div>
          </div>
          @else
          <h1>Il tuo Menù</h1>
          <div class="row">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Foto del piatto</th>
                  <th scope="col">Nome del piatto</th>
                  <th scope="col" class="text-center">Visibile nel Menù</th>
                  <th scope="col" class="text-center">Azioni</th>
              </tr>
            </thead>
            <tbody>
              @foreach($items as $item)
              <tr>
                <th scope="row">
                  @if ($item->image)
                  <img class="img-fluid menu_item_img" src="{{ asset('storage/' . $item->image)}}" alt="{{$item->name}}">
                  @else
                  <p>null</p>
                  @endif
                  
                </th>
                <td>{{$item->name}}</td>
                <td class="text-center">
                  @if ($item->is_visible)
                  <div class="menu_eye_green"><i class="fa-solid fa-eye"></i></div>
                  @else
                  <div class="menu_eye_red"><i class="fa-solid fa-eye-slash"></i></div>
                  @endif
                </td>
                <td>
                  <div class="d-flex justify-content-center">
                    <a href="{{route('admin.items.show', $item->id)}}" class="btn btn-primary mx-2 btn-sm">Visualizza</a>
                    <a href="{{route('admin.items.edit', $item->id)}}" class="btn btn-warning mx-2 btn-sm">Modifica</a>
                    {{-- bottone elimina --}}
                    <form action="{{route('admin.items.destroy', $item->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Cancella</button>
                    </form>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        @endif
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