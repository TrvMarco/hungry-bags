@extends('layouts.app')

@section('content')
<div class="container backoffice_menu_container">
    @if ($orders->isEmpty())
      <div class="row mb-4 pt-4 justify-content-around">
          <div class="col-12 text-center p-5">
            <h2>Non hai nessun ordine</h2>
      @else
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="{{route('admin.home')}}"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
        <h1 class="text-center p-3">Storico ordini</h1>
        <div></div>
      </div>
      
      <div class="row">
        <table class="table">
          <thead>
            <tr >
              <th scope="col">Ordine</th>
              <th scope="col">Cliente</th>
              <th scope="col">Totale ordine</th>
              <th scope="col" class="text-center">Azioni</th>
          </tr>
        </thead>
        <tbody>
          @foreach($orders as $order)
          <tr>
            <td >
              {{$order->id}}
            </td>
            <td>
              {{$order->client_name}} {{$order->client_surname}}
            </td>
            <td class="">
              {{$order->total_price}}€
            </td>
           
            <td>
              <div class="d-flex justify-content-center">
                <a href="{{route('admin.orders.show', $order->id)}}" class="btn btn-primary mx-2 btn-sm">Visualizza Ricevuta</a>
                {{-- <a href="{{route('admin.items.edit', $order->id)}}" class="btn btn-warning mx-2 btn-sm">Modifica</a> --}}
                {{-- bottone elimina --}}
                <!-- Button trigger modal -->
                {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop{{$order->id}}">
                  cancella
                </button> --}}

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop{{$order->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        Vuoi davvero cancellare <strong>{{$order->name}}</strong>  ? 
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">No</button>
                        <form action="{{route('admin.items.destroy', $order->id)}}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Si</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

             
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