@extends('layouts.master')

@section('Ai Title')
Motorbike Alliance&copy; - Official Motorbike Alliance
@endsection

@section('Ai Keywords')
Motorbike Alliance, Motorcycle, Motorbike Apparel, Motorcycle Accessories
@endsection

@section('Ai Description')
Discover The Products, Experiences, & People That Are Shaping The Future Of The Moto Sports World.
@endsection

@section('Ai Content')
<div class="row">
        <div class="col-xs-12 text-center">
        <h1>Welcome to The Alliance - Market Platform.</h1>
        <h2>Shop Clearance Items, Sale Items & Promotional Products</h2>
        <h3>From The Worlds Moto Sport </h3>
        </div>
</div>

@if(Session::has('success'))
<div class="row">
        <div class="col-xs-12 text-center">
          <div id="ai-paymentmessage" class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        </div>
</div>
@endif

@foreach($allproducts->chunk(3) as $aiproductchunk)
<div class="row">
@foreach($aiproductchunk as $ainewproduct)
<div class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <img src="{{ $ainewproduct->imageone }}" alt="..."
    style="max-height: 260px" class="img-responsive">
    <div class="caption">
      <h3>{{ $ainewproduct->title }}</h3>
      <p>{{ $ainewproduct->description }}</p>
      <div class="clearfix">
        <div class="pull-left" style="margin-right: 5px; font-size: 18px;"><s>${{ $ainewproduct->priceone }}</s></div>
        <div class="pull-left" style="font-size: 18px;"><strong>${{ $ainewproduct->pricetwo }}</strong></div>
      <a href="{{ route('aicartadd', ['id' => $ainewproduct->id]) }}" class="btn btn-primary pull-right" role="button">Add to Cart</a>
      <a href="product?item={{ $ainewproduct->id }}" class="btn btn-default pull-right" role="button" style="margin-right: 5px;">View</a>
      </div>
      <p>
      <ul class="list-inline">
        <li><img src="http://example.com/image.jpg"
          alt="Retailer Icon" style="height: 28px;width: 28px;"></li>
        <li class="pull-right">
          <ul class="pull-right list-unstyled">
            <li class="text-right"><small>{{ $ainewproduct->retailername }}</small></li>
            <li class="text-right"><small><strong>{{ $ainewproduct->salecategory }}</strong></small></li>
          </ul>
        </li>
      </ul>
    </p>
    </div>
  </div>
</div>
@endforeach
</div>
@endforeach
@endsection
