@extends('layouts.user.master')

@section('title','Payment')

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        {{-- @if($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Error!</strong> {{ $message }}
        </div>
        @endif
        {!! Session::forget('error') !!}
        @if($message = Session::get('success'))
        <div class="alert alert-info alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <strong>Success!</strong> {{ $message }}
        </div>
        @endif
        {!! Session::forget('success') !!}
        <div class="panel panel-default" style="margin-top: 30px;">
            <h3>How To Integrate Razorpay Payment Gateway In Laravel - Techsolutionstuff</h3><br>
            <div class="panel-heading">
                <h2>Pay With Razorpay</h2>
                <form action="{!!route('payment')!!}" method="POST">
                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZOR_KEY') }}"
                        data-amount="10000" data-buttontext="Pay Amount" data-name="Techsolutionstuff"
                        data-description="Payment" data-prefill.name="name" data-prefill.email="email"
                        data-theme.color="#528FF0">
                    </script>
                    <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                </form>
            </div>
        </div> --}}
        <div class="card border-light mb-4">
            <div class="card-body p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{$course['image']}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="px-4 py-2">
                        <h5 class="card-title">{{$course['course_name']}}</h5>
                        <p class="card-text">{{$course['description']}}</p>
                        <h6 class="fw-bold">Price : ₹{{$course['price']}}</h6>
                        <form action="{!!route('payment')!!}" method="POST">
                            <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZOR_KEY') }}"
                                data-amount="{{$course['price']}}00" data-buttontext="Pay Amount" data-name="Techsolutionstuff"
                                data-description="Payment" data-prefill.name="{{auth()->user()->name}}" data-prefill.email="{{auth()->user()->email}}"
                                data-theme.color="#528FF0">
                            </script>
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection