@extends('layouts.user.master')

@section('title','Registeration Payment')

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
    </div>
    <div class="col-12">
        <div class="card border-light mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">Registeration Fees</h5>
            </div>
            <div class="card-body p-3">
                <div id="paymentForm"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@if(config('app.env') == 'local')
<script type="text/javascript" src="https://sdk.cashfree.com/js/ui/2.0.0/cashfree.sandbox.js"></script>
@else
<script type="text/javascript" src="https://sdk.cashfree.com/js/ui/2.0.0/cashfree.prod.js"></script>
@endif

<script>
    const paymentSessionId = "{{session()->get(strtolower(Str::replace(' ','_',auth('web')->user()->name)).'__'.auth('web')->id())}}";
    const cashfree = new Cashfree(paymentSessionId);
    
    const dropinConfig = {
        components: [
            "upi",
            "card",
            "netbanking",
            "order-details"
        ],
        onSuccess: function(data){
            console.log(data);
            $.ajax({
                url: "{!!route('payment_save')!!}",
                type: 'POST',
                data : {
                    "response_data" : JSON.stringify(data),
                    "_token" : "{{csrf_token()}}",
                },
                success: function(response) {
                    window.location.href = "{{route('dashboard')}}";
                }
            });
        },
        onFailure: function(data){
            console.log(data);
    
            $.ajax({
                url: "{!!route('payment_save')!!}",
                type: 'POST',
                data : {
                    "response_data" : JSON.stringify(data),
                    "_token" : "{{csrf_token()}}",
                },
                success: function(response) {
                    console.log(response);
                }
            });
        },
        style: {
            backgroundColor:"#ffffff",
            color:"#11385b",
            fontSize:"14px",
            fontFamily:"Lato",
            errorColor:"#ff0000",
            theme:"light",
        }
    }
    cashfree.drop(document.getElementById("paymentForm"),dropinConfig);
</script>
@endpush