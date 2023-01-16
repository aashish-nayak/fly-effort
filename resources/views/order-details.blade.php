@extends('layouts.user.master')

@section('title','Orders')

@section('main')
<div class="row justify-content-center">
  <div class="col-12 col-lg-10">
    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-between mb-4">
      <a href="{{route('orders')}}" class="mb-3 mb-lg-0">
        <span class="icon icon-xs"><span class="fas fa-chevron-left mr-2"></span></span>
        Back to all billing
      </a>
      <div>
        <button class="btn btn-primary mr-2"><span class="far fa-file-pdf mr-2"></span> Download PDF</button>
        {{-- <button class="btn btn-outline-gray"><span class="fas fa-print mr-2"></span> Print Invoice</button> --}}
      </div>
    </div>
    <div class="card border-light p-4 p-md-5 position-relative">
      <div class="d-flex justify-content-between pb-4 pb-md-5 mb-4 mb-md-5 border-bottom border-light"><img
          src="https://demo.themesberg.com/pixel-pro/assets/img/brand/themesberg-logo.svg" height="50"
          alt="Spaces Logo">
        <div>
          <h4>Pixel LLC.</h4>
          <ul class="list-group simple-list">
            <li class="list-group-item font-weight-normal border-0 pl-0 py-1">112 Washington Square</li>
            <li class="list-group-item font-weight-normal border-0 pl-0 py-1">New York, USA</li>
            <li class="list-group-item font-weight-normal border-0 pl-0 py-1"><a class="font-weight-bold text-primary"
                href="#">company@themesberg.com</a></li>
          </ul>
        </div>
      </div>
      <div class="mb-6 d-flex align-items-center justify-content-center">
        <h2 class="h1 mb-0">Invoice #120345</h2><span class="badge badge-xl badge-success ml-2">Paid</span>
      </div>
      <div class="row justify-content-between mb-4 mb-md-5">
        <div class="col-sm">
          <h5>Client Information:</h5>
          <div>
            <ul class="list-group simple-list">
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">Henry M. Pike</li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">Themesberg LLC</li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1">311 West Mechanic Lane Middletown, NY
                10940
              </li>
              <li class="list-group-item font-weight-norma border-0 pl-0 py-1"><a class="font-weight-bold text-primary"
                  href="#">name@company.com</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm col-lg-4">
          <dl class="row text-sm-right">
            <dt class="col-6"><strong>Invoice No.</strong></dt>
            <dd class="col-6">00123</dd>
            <dt class="col-6"><strong>Date Issued:</strong></dt>
            <dd class="col-6">31/03/2020</dd>
            <dt class="col-6"><strong>Date Due:</strong></dt>
            <dd class="col-6">30/04/2020</dd>
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
                  <th scope="row" class="border-0">Description</th>
                  <th scope="row" class="border-0">Price</th>
                  <th scope="row" class="border-0">Qty</th>
                  <th scope="row" class="border-0">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-left font-weight-bold h6">Origin License</th>
                  <td>Extended License</td>
                  <td>999,00</td>
                  <td>1</td>
                  <td>999,00</td>
                </tr>
                <tr>
                  <th scope="row" class="text-left font-weight-bold h6">Custom Services</th>
                  <td>Instalation and Customization</td>
                  <td>$150,00</td>
                  <td>20</td>
                  <td>3000,00</td>
                </tr>
                <tr>
                  <th scope="row" class="text-left font-weight-bold h6">Hosting</th>
                  <td>1 year subcription</td>
                  <td>$499,00</td>
                  <td>1</td>
                  <td>$499,00</td>
                </tr>
                <tr>
                  <th scope="row" class="text-left font-weight-bold h6">Gold Support</th>
                  <td>1 year subcription 24/7</td>
                  <td>$3.999,00</td>
                  <td>1</td>
                  <td>$3.999,00</td>
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
                    <td class="right">$8.497,00</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>Discount (20%)</strong></td>
                    <td class="right">$1,699,40</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>VAT (10%)</strong></td>
                    <td class="right">$679,76</td>
                  </tr>
                  <tr>
                    <td class="left"><strong>Total</strong></td>
                    <td class="right"><strong>$7.477,36</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <h4>Payments to:</h4><span>payment@company.com</span>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection