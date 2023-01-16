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
      <li class="list-group-item border-bottom rounded-0 py-3">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="h6 mb-1">
              <a href="{{route('order-details')}}">Invoice #120345</a>
            </h3>
            <small class="text-gray-700">Billed August 21, 2019</small>
          </div>
          <div class="col-auto"><button class="btn btn-xs btn-outline-dark">Pay now</button></div>
        </div>
      </li>
      <li class="list-group-item border-bottom rounded-0 py-3">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="h6 mb-1">
              <a href="{{route('order-details')}}">Invoice #120344</a>
            </h3>
            <small class="text-gray-700">Billed July 21, 2019</small>
          </div>
          <div class="col-auto">
            <span class="badge badge-pill badge-success">
              <span class="text-uppercase font-weight-bold">Paid</span>
            </span>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
@endsection