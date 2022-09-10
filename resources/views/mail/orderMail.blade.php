@component('mail::message')
# Nuovo ordine

Lista ordine: 
<ul>
    @foreach ($order as $el)
        @foreach ($el->items as $item)
            <li>{{$item->name}}</li>
        @endforeach
    @endforeach 
</ul>


@component('mail::button', ['url' => route('admin.orders.index')])
visualizza gli ordini
@endcomponent

Grazie,<br>
{{ config('app.name') }}
@endcomponent
