@extends('layouts.master')

@section('Ai Content')
<div class="row">
<div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

  <h2>My Ai&copy; Control Center</h2>
  <hr>
  <h3>My Ai Orders</h3>

  @foreach($userorders as $userorder)
  <div class="panel panel-default">
  <div class="panel-body">
   <ul class="list-group">
  @foreach($userorder->aicart->items as $aiuseritem)
  <li class="list-group-item">
    <span class="badge"> {{ $aiuseritem['price'] }} $USD </span>
    {{ $aiuseritem['item'] ['title'] }} <span> QTY </span> {{ $aiuseritem['qty'] }} Units.
  </li>
  @endforeach
   </ul>
  </div>
  <div class="panel-footer">
    <strong> Alliance Total Price: {{ $userorder->aicart->totalPrice }} $USD </strong>
  </div>
</div>
@endforeach

</div>
</div>
@endsection
