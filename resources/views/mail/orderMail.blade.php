@component('mail::message')
# Nuovo commento

Post commentato: 
<ul>
    @foreach ($order->items as $item)
        <li>{{$item->name}}</li>
    @endforeach
</ul>

@component('mail::button', ['url' => route('admin.orders.index')])
Visualizza Commenti
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent

