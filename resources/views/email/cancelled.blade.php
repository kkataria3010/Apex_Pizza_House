@component('mail::message')
# Order Cancelled

Your order has been <strong>Cancelled</strong>!

Order Id: <strong>{{$order['id']}}</strong><br>

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