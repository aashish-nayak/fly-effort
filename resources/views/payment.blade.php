@extends('layouts.user.master')

@section('title','Payment')

@section('main')
<div class="row justify-content-center">
    <div class="col-12">
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{ Session::get('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
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
                                data-amount="{{$course['price']}}00" data-buttontext="Pay Amount" data-name="{{config('info.app')}}"
                                data-description="Payment" data-prefill.name="{{auth()->user()->name}}" data-prefill.email="{{auth()->user()->email}}"
                                data-theme.color="#528FF0">
                            </script>
                            <input type="hidden" name="course_id" value="{!!$course['id']!!}">
                            <input type="hidden" name="order_id" value="{!!$order->order_id!!}">
                            <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection