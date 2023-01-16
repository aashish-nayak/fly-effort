@extends('layouts.user.master')
@push('css')
    <style>
      @media print {
        .noPrint{
          display:none;
        }
      }
    </style>
@endpush
@section('title','Orders')

@section('main')
<div class="row justify-content-center">
  <div class="col-12 col-lg-10">
    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between mb-4 noPrint">
      <a href="{{route('orders')}}" class="mb-3 mb-lg-0 noPrint">
        <span class="icon icon-xs"><span class="fas fa-chevron-left mr-2"></span></span>
        Back to all billing
      </a>
      <div>
        <button class="btn btn-primary mr-2 noPrint" onclick="window.print()"><span class="far fa-file-pdf mr-2"></span> Download PDF</button>
        {{-- <button class="btn btn-outline-gray"><span class="fas fa-print mr-2"></span> Print Invoice</button> --}}
      </div>
    </div>
    <div class="card border-light p-4 p-md-5 position-relative" id="print-area">
      <div class="row justify-content-between mb-4 mb-md-5">
        <div class="col-sm">
          <h5>Client Information:</h5>
          <div>
            <ul class="list-group simple-list">
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">{{$order->user->name}}</li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">{{$order->user->email}}</li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">{{$order->user->shipping_address}}, {{$order->user->city}}, {{$order->user->state}}, ({{$order->user->zip}})</li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">
                <a class="font-weight-bold text-primary" href="mailto:{{config('info.email')}}">{{config('info.email')}}</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm col-lg-5">
          <dl class="row text-sm-right">
            <dt class="col-6"><strong>Order No.</strong></dt>
            <dd class="col-6">{{$order->order_id}}</dd>
            <dt class="col-6"><strong>Date Issued:</strong></dt>
            <dd class="col-6">{{date('d/m/Y',strtotime($order->created_at))}}</dd>
            <dt class="col-6"><strong>Payment Status:</strong></dt>
            <dd class="col-6">
              @if ($order->payment_status == 'pending')
              <a href="{{route('razorpay',[$order->course_id,$order->order_id])}}" class="btn btn-xs btn-outline-dark">Pay now</a>
              @else
              <span class="badge bg-secondary badge-sm">Paid</span>
              @endif
            </dd>
          </dl>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table mb-0">
              <thead class="bg-light border-top">
                <tr>
                  <th scope="row" class="border-0 text-left">Item</th>
                  <th scope="row" class="border-0">Price</th>
                  <th scope="row" class="border-0">Qty</th>
                  <th scope="row" class="border-0">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-left font-weight-bold h6">{{$order->course_name}}</th>
                  <td>{{$order->price}}</td>
                  <td>1</td>
                  <td>{{$order->price}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="d-flex justify-content-end text-right mb-4 py-4 border-bottom">
            <div class="mt-4">
              <table class="table table-clear">
                <tbody>
                  <tr>
                    <td class="left"><strong>Subtotal</strong></td>
                    <td class="right">₹{{$order->price}}</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>Total</strong></td>
                    <td class="right"><strong>₹{{$order->price}}</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <h4>Payments to:</h4><span>{{(config('info.email2') == '') ? config('info.email') : config('info.email2') }}</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection