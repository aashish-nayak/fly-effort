@extends('layouts.user.master')

@section('title','My Courses')

@section('main')
<div class="row justify-content-center">
  <div class="col-12 col-md-6 col-lg-12">
    <div class="card border-light text-center py-4 mb-4">
      <div class="card-body">
        <h2 class="display-3 mb-3">Pixel<span
            class="pixel-pro-badge subscription-badge bg-tertiary font-weight-bolder text-white">PRO</span></h2>
        <p class="my-4">Next payment of <span class="font-weight-bold">$36 (yearly)</span> occurs on August 13, 2020.
        </p><a class="btn btn-sm btn-dark" href="#">Cancel subscription</a>
      </div>
    </div>
  </div>
</div>
@endsection