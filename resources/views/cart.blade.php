@extends('layouts.app')
@section('content')
<section class="cart-center container">
    <h1 class="section-heading">Cart</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Item</th>
          <th>Qty</th>
          <th>Price</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i <$total; $i++)
            
            <tr>
            <td>{{$items[$i]['name']}}</td>
            <td><button class="plus">➕</button> 
            <span>{{$items[$i]['qty']}}</span>
                <button class="minus">➖</button></td>
            <td><span>{{$items[$i]['price']}}</span></td>
                <td><button class="remove">❌</button></td>
            </tr>
        @endfor
      </tbody>
    </table>
    <br><br>
    @if ($total>0)
    <div class="flex justify-center">
    <button class="btn btn-primary container" href="/checkout" onclick="event.preventDefault();document.getElementById('checkout-form').submit();">Checkout(Rs.<span id="checkout-price">{{$price}}</span>)</button>
    </div>
    <form id="checkout-form" action="/checkout" method="POST"class="d-none">
        @csrf
    </form>
    @endif
  </section>
@endsection