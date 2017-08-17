@extends('layouts.master')

@section('Ai Title')
Motorbike Alliance&copy; - Checkout
@endsection

@section('Ai Keywords')
Motorbike Alliance, Motorcycle, Motorbike Apparel, Motorcycle Accessories, Motorbike Market
@endsection

@section('Ai Description')
The Alliance Checkout
@endsection

@section('Ai Content')
<div class="row">
        <div class="col-xs-12 text-center">
        <h1>Welcome to Your Alliance - Checkout.</h1>
        <h2>Your New Experience Starts Here</h2>
        </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
    <h1> Checkout </h1>
    <h4> Your Total: ${{ $aitotal }} </h4>

    <div id="aicharge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
              {{ Session::get('error') }}
    </div>

    <form action="{{ route('submitcheckout') }}" method="POST" id="aicheckout-form">
               <div class="row">
                   <div class="col-xs-12">
                       <div class="form-group">
                           <label for="name">Name</label>
                           <input type="text" id="name" class="form-control" required name="name">
                       </div>
                   </div>
                   <div class="col-xs-12">
                       <div class="form-group">
                           <label for="address">Address</label>
                           <input type="text" id="address" class="form-control" required name="address">
                       </div>
                   </div>
                   <hr>
                   <div class="col-xs-12">
                       <div class="form-group">
                           <label for="card-name">Card Holder Name</label>
                           <input type="text" id="card-name" class="form-control" required>
                       </div>
                   </div>
                   <div class="col-xs-12">
                       <div class="form-group">
                           <label for="card-number">Credit Card Number</label>
                           <input type="text" id="card-number" class="form-control" required>
                       </div>
                   </div>
                   <div class="col-xs-12">
                       <div class="row">
                           <div class="col-xs-6">
                               <div class="form-group">
                                   <label for="card-expiry-month">Expiration Month</label>
                                   <input type="text" id="card-expiry-month" class="form-control" required>
                               </div>
                           </div>
                           <div class="col-xs-6">
                               <div class="form-group">
                                   <label for="card-expiry-year">Expiration Year</label>
                                   <input type="text" id="card-expiry-year" class="form-control" required>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xs-12">
                       <div class="form-group">
                           <label for="card-cvc">CVC</label>
                           <input type="text" id="card-cvc" class="form-control" required>
                       </div>
                   </div>
               </div>
               {{ csrf_field() }}
               <button type="submit" class="btn btn-success">Buy now</button>
           </form>

  </div>
</div>
@endsection

@section('Ai Scripts')
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript" src="{{ URL::to('js/aicheckout.js') }}"></script>
@endsection
