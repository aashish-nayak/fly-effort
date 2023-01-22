@extends('layouts.user.master')

@section('title','Dashboard')

@section('main')
<div class="row">
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
  <div class="col-12 col-md-6 mb-4">
    <div class="card border-light">
      <div class="card-header py-2">
        <p class="m-0 fw-bold">Notification</p>
      </div>
      <div class="card-body" style="min-height:200px;max-height:250px;overflow-y: auto;">
        <div>
          {!!$noti->notification!!}
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6 mb-3">
    <div class="card border-light mb-3">
      <div class="card-body d-block d-md-flex align-items-center">
        <div class="icon icon-shape icon-md icon-shape-primary rounded-circle mr-3 mb-4 mb-md-0">
          <span class="fas fa-book"></span>
        </div>
        <div>
          <span class="d-block font-weight-normal">Course Purchased</span>
          <h6 class="h5 font-weight-bold mb-1">
            {{$courseCount}}
            </h5>
        </div>
      </div>
    </div>
    <div class="card border-light">
      <div class="card-body d-block d-md-flex align-items-center">
        <div class="icon icon-shape icon-md icon-shape-primary rounded-circle mr-3 mb-4 mb-md-0">
          <span class="fas fa-file-invoice-dollar"></span>
        </div>
        <div>
          <span class="d-block font-weight-normal">Total Orders</span>
          <h5 class="h5 font-weight-bold mb-1">
            {{$orderCount}}
          </h5>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 mb-4">
    <div class="row row-cols-3">
      @foreach (config('courses') as $course)
      <div class="col">
        <div class="card h-100">
          <img src="{{$course['image']}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">{{$course['course_name']}}</h6>
            <p class="card-text">{{$course['description']}}</p>
            <p><b>₹{{$course['price']}}</b></p>
            <a href="{{route('razorpay',$course['slug'])}}" class="btn btn-xs btn-primary">Buy Course</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection