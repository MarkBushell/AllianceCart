@extends('layouts.master')
@section('Ai Content')
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
<form role="form" action="{{ route('ailogin') }}" method="POST">
  <h2>Motorbike Alliance&copy; Sign In</h2>
        <hr/>

        @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
          @endforeach
        </div>
        @endif

  <div class="form-group">
    <input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="3">
  </div>
  <div class="form-group">
    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="4">
  </div>
        <hr/>
  <div class="row">
    <div class="col-xs-6 col-md-6"><input type="submit" value="Ai Sign In" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
  </div>
  {{ csrf_field() }}
</form>

<p><small>Join The Alliance - Discover The Products, Experiences, & People That Are Shaping The Future Of The Moto Sports World.</small></p>
<p>Don't Have a Motorbike Alliance&trade; Account ? <a href="{{ route('aisignup') }}"> SIGNUP HERE </a> </p>

</div>
</div>
@endsection
