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
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-4">
                        <img src="{{$course['image']}}" class="card-img-top rounded" alt="...">
                    </div>
                    <div class="col-12 col-md-8 px-4 py-2">
                        <h5 class="card-title">{{$course['course_name']}}</h5>
                        <p class="card-text">{{$course['description']}}</p>
                        <h6 class="fw-bold">Price : ₹{{$course['price']}}</h6>
                        {{-- <form action="{!!route('payment')!!}" method="POST"> --}}
                            {{-- <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="{{ env('RAZOR_KEY') }}"
                                data-amount="{{$course['price']}}00" data-buttontext="Pay Amount"
                                data-name="{{config('info.app')}}" data-description="Payment"
                                data-prefill.name="{{auth()->user()->name}}"
                                data-prefill.email="{{auth()->user()->email}}" data-theme.color="#528FF0">
                            </script> --}}
                            <button id="rzp-button1" class="btn btn-dark">Pay Amount</button>
                            {{-- <input type="hidden" name="_token" value="{!!csrf_token()!!}"> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
{{-- {!!route('payment')!!} --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "{{env('RAZOR_KEY')}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$razorpayOrder->amount}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "{{config('info.app')}}",
    "description": "Payment",
    "order_id": "{{$razorpayOrder->id}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        // alert(response.razorpay_payment_id);
        // alert(response.razorpay_order_id);
        // alert(response.razorpay_signature);
        $.ajax({
            url: "{!!route('payment')!!}",
            type: 'POST',
            data : {
                "razorpay_payment_id" : response.razorpay_payment_id,
                "_token" : "{{csrf_token()}}",
                "course_id" : "{{$course['id']}}"
            },
            beforeSend: function() {
                // ajaxMediaLoader();
            },
            success: function(data) {
                window.location.href = "{{route('courses')}}";
            }
        });
    },
    "prefill": {
        "name": "{{auth()->user()->name}}",
        "email": "{{auth()->user()->email}}",
    },
    "notes": {
        "course_id": "{{$course['id']}}"
    },
    "theme": {
        "color": "#528FF0"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
    // alert(response.error.code);
    // alert(response.error.description);
    // alert(response.error.source);
    // alert(response.error.step);
    // alert(response.error.reason);
    // alert(response.error.metadata.order_id);
    // alert(response.error.metadata.payment_id);
    $.ajax({
        url: "{!!route('payment')!!}",
        type: 'POST',
        data : {
            "razorpay_payment_id" : response.error.metadata.payment_id,
            "_token" : "{{csrf_token()}}",
            "course_id" : "{{$course['id']}}"
        },
        beforeSend: function() {
            // ajaxMediaLoader();
        },
        success: function(data) {
            console.log(data);
        }
    });
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
@endpush