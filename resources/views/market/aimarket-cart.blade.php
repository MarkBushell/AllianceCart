@extends('layouts.master')

@section('Ai Title')
Motorbike Alliance&copy; - Cart
@endsection

@section('Ai Keywords')
Motorbike Alliance, Motorcycle, Motorbike Apparel, Motorcycle Accessories, Motorbike Market
@endsection

@section('Ai Description')
The Alliance Shopping Cart System
@endsection

@section('Ai Content')
<div class="row">
        <div class="col-xs-12 text-center">
        <h1>Welcome to Your Alliance - Cart.</h1>
        <h2>Manage Your Products Here</h2>
        <h3>Complete and Checkout</h3>
        </div>
</div>

@if(Session::has('cart'))
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <ul class="list-group">
      @foreach($cartitems as $item)
      <li class="list-group-item">

        <img src="{{ $item['item'] ['imageone'] }}" class="img-thumbnail" style="width: 65px;height: 65px; margin-right: 15px;">
        <span class="badge"> {{ $item['qty'] }} </span>
        <strong> {{ $item['item'] ['title'] }} </strong>
        <span class="label label-success" style="margin-right: 15px;"> ${{ $item['price'] }} </span>
        <div class="btn-group">
          <div class="dropdown">
           <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-primary btn-xs">
            Action
            <span class="caret"></span>
           </button>
             <ul class="dropdown-menu" aria-labelledby="dLabel">
               <li> <a href="{{ route('aicartreduce', ['id'=> $item['item']['id']]) }}"> Delete 1 </a> </li>
               <li> <a href="{{ route('deletecartitem', ['id'=> $item['item']['id']]) }}"> Delete All </a> </li>
              </ul>
          </div>
        </div>
        <p><small> {{ $item['item'] ['salecategory'] }} </small></p>

      </li>
      @endforeach
    </ul>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <strong> TOTAL: ${{ $totalPrice}} </strong>
  </div>
</div>

<hr>

<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <a href="{{ route('aicheckout') }}" type="button" class="btn btn-success"> Ai<sup><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></sup> Checkout </a>
  </div>
</div>

@else
<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <h2> No Items in your Alliance Cart! Start Your Experience Here....LINK </h2>
  </div>
</div>
@endif
@endsection
