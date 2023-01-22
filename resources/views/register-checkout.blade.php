@extends('layouts.user.master')

@section('title','Registeration Checkout')

@section('main')
<h5 class="mb-0">Registeration Checkout</h5>
<hr>
<div class="col-md-10">
    <div class="card border-light mb-4">
        <div class="card-body p-5">
            <div class="row">
                <div class="col-md-6 border-right">
                    <h4>{{auth('web')->user()->name}}</h4>
                    <p>Email : {{auth('web')->user()->email}}</p>
                    <p>Phone : {{auth('web')->user()->phone}}</p>
                    <p>Date Of Birth : {{auth('web')->user()->dob}}</p>
                    <p>Gender : {{auth('web')->user()->gender}}</p>
                </div>
                <div class="col-md-6 px-md-4">
                    <div class="mb-2">
                        <label for="" class="form-label">Apply PromoCode</label>
                        <input type="text" class="form-control form-control-sm" id="promo" @if(session()->exists('promo_code')) value="{{session()->get('promo_code')}}" @endif placeholder="Enter Your Code">
                        <span class="mt-1 text-info" id="promo-success"></span>
                        <span class="mt-1 text-danger" id="promo-error"></span>
                    </div>
                    <button type="button" class="btn btn-sm btn-primary" id="apply-promo">Apply</button>
                    <button type="button" class="btn btn-sm btn-danger d-none" id="remove-promo">Remove</button>
                    <table class="table mt-2">
                        <tbody>
                            <tr>
                                <th>Price :</th>
                                <td>:</td>
                                <td>₹{{number_format((float)config('app.register_fees'), 2, '.', '')}}</td>
                            </tr>
                            <tr id="discount-area"></tr>
                            <tr>
                                <th>SubTotal :</th>
                                <td>:</td>
                                <td id="sub">₹{{number_format((float)config('app.register_fees'), 2, '.', '')}}</td>
                            </tr>
                            <tr class="bg-light">
                                <th>GrandTotal :</th>
                                <td>:</td>
                                <td><b id="grand">₹{{number_format((float)config('app.register_fees'), 2, '.', '')}}</b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="{{route('user_payment')}}" class="btn btn-primary btn-sm">Payment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    function applyPromo(){
        let code = $("#promo").val();
        $.ajax({
            url: "{!!route('check_promo')!!}",
            type: 'POST',
            data : {
                "code" : code,
                "_token" : "{{csrf_token()}}",
            },
            success: function(response) {
                if(response.status == 'success'){
                    $('#discount-area').html(`
                        <th>Discount :</th>
                        <td>:</td>
                        <td>₹-${response.discount}</td>
                    `);
                    $("#promo-success").html(response.message);
                    $("#promo-error").html('');
                    $("#sub").html('₹' + response.price);
                    $("#grand").html('₹' + response.price);
                    $("#remove-promo").removeClass('d-none');
                }else{
                    $('#discount-area').html(``);
                    $("#promo-success").html('');
                    if(code != ''){
                        $("#promo-error").html(response.message);
                    }else{
                        $("#promo-error").html('');
                    }
                    $("#sub").html('₹'+response.price);
                    $("#grand").html('₹'+response.price);
                    $("#remove-promo").addClass('d-none');
                }
            }
        });
    }
    applyPromo();
    $(document).ready(function () {
        $(document).on('click','#apply-promo',function(){
            if($("#promo").val() != ''){
                applyPromo();
            }
        });
        $(document).on('click','#remove-promo',function(){
            $("#promo").val('');
            applyPromo();
        });
    });
</script>
@endpush