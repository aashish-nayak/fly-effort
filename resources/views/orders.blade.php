@extends('layouts.user.master')

@section('title','Orders')

@section('main')
<div class="card card-body bg-white border-light p-0 p-md-4">
  <div class="card-header bg-white border-0 p-3">
    <h3 class="h5">Order History</h3>
    <p class="small pr-lg-10">This is a list of devices that have logged into your account. Revoke any sessions that you
      do not recognize.</p>
  </div>
  <div class="card-body px-0 pt-0">
    <ul class="list-group list-group-flush">
      @foreach ($orders as $order)
      <li class="list-group-item border-bottom rounded-0 py-3">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="h6 mb-1">
              <a href="{{route('order-details',$order->order_id)}}">Order Id #{{$order->order_id}}</a>
            </h3>
            <small class="text-gray-700">Billed {{\Carbon\Carbon::create($order->created_at)->format('d M Y')}}</small>
          </div>
          <div class="col-auto">
            @if ($order->payment_status == 'pending')
            <a href="{{route('razorpay',[$order->course_id,$order->order_id])}}" class="btn btn-xs btn-outline-dark">Pay now</a>
            @else
            <span class="badge badge-pill bg-secondary">
              <span class="text-uppercase font-weight-bold">Paid</span>
            </span>
            @endif
          </div>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</div>
@endsection