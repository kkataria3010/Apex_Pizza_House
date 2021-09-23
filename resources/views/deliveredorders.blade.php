@extends('layouts.app')

@section('content')

<h1 class="section-heading" style="margin-top:2rem;margin-bottom:1rem;">Delivered Orders</h1>
<section class="customer-order container">
  @foreach ($orders as $order)
  <hr>
    <div>  
      <div class="order-details">Order Id : {{$order['id']}}</div>
      <div class="order-details">User Id &nbsp;: {{$order['user_id']}}</div>
      <div class="order-details">Status&nbsp;&nbsp;&nbsp; : <span class="status">{{$order['status']}}</span></div>
      <div class="order-details">Time&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : {{$order['time']}}</div>
      <table class="order-table container">
        <thead>
          <tr>
            <th>#</th>
            <th>ITEM</th>
            <th>QTY</th>
            <th>PRICE</th>
          </tr>
        </thead>
        <tbody>
          @for ($i = 0; $i <count($order['items']); $i++)
          <tr>
            <td class="text-center">{{$i+1}}</td>
            <td>{{$order['items'][$i]['name']}}</td>
            <td class="text-center">{{$order['items'][$i]['qty']}}</td>
            <td class="text-center">{{$order['items'][$i]['price']}}</td>
          </tr>
          @endfor
          <tr>
            <td></td>
            <td><strong>TOTAL</strong></td>
            <td class="text-center"></td>
            <td class="text-center">{{$order['total']}}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <hr>
  @endforeach
  <div class="flex justify-center">{{$ord->links()}}</div>
</section>

@endsection