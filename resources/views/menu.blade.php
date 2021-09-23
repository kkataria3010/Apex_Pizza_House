@extends('layouts.app')

{{-- {{json_encode($data) }} --}}
{{-- {{ dd(get_defined_vars()) }} --}}
{{-- @for ($i = 0; $i < count($categories); $i++)
{{$categories[$i]}}
<br>
@endfor --}}
@section('content')
    

{{-- {{print_r($data)}} --}}
<section id="menu" class="top-products">
  <div class="container">
    @for ($i = 0; $i < count($data); $i++)
      <h1 class="section-heading container">{{$categories[$i]}}</h1>
      <div class="food-slider grid container">  
      @for ($j = 0; $j < count($data[$i]); $j++)
          <div class="food-card magic-shadow-sm">
            <div class="product-image flex items-center justify-center">
              <img src="{{ asset("/menu/".$categories[$i]."/".$data[$i][$j]['image']) }}"style="object-fit:contain;" alt="">
            </div>
            <hr>
            <div>
              <h2 class="text-center">{{$data[$i][$j]['name']}}</h2>
              <div class="price text-center" id="p{{$data[$i][$j]['name']}}">
                {{$data[$i][$j]['price']}}
              </div>
              <div class="flex justify-center">
                <button id>
                  <img src="{{ asset('/icons/cart-2.svg') }}" alt="">
                <span id="{{$data[$i][$j]['name']}}"class="cart-span">
                  @if(Auth::user()!="" && count($items)>0 && in_array($data[$i][$j]['name'],$items))
                    Added
                  @else  
                    Add to cart
                  @endif
                </span>
                </button>
              </div>
            </div>
          </div>
        @endfor
        <br>
        </div>
      @endfor
  </div>
</section>
@endsection