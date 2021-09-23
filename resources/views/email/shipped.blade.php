@component('mail::message')
# Order Dispatched

Your order has been <strong>Dispatched</strong>!

Order Id: <strong>{{$order['id']}}</strong>

@component('mail::table')
| Item          | Quantity      | Price    |
| ------------- |:-------------:| --------:|
@for ($i = 0; $i <count($order['items']); $i++)
| {{$order['items'][$i]['name']['name']}}|{{$order['items'][$i]['qty']}} |{{$order['items'][$i]['price']}}|
@endfor
@endcomponent

Total:{{$order['total']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent