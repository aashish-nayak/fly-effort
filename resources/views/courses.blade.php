@extends('layouts.user.master')

@section('title','My Courses')

@section('main')
<div class="row justify-content-center">
  @if(Session::has('success'))
  <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{ Session::get('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="col-12 col-md-6 col-lg-12">
    @forelse ($courses as $course)
    <div class="card border-light mb-4">
      <div class="row g-0 align-items-center">
        <div class="col-12 col-lg-6 col-xl-4">
          <a href="{{route('single',$course['slug'])}}">
            <img src="{{$course['image']}}" alt="macbook pro" class="card-img p-2 rounded-xl">
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-8">
          <div class="card-body py-lg-0">
            <a href="{{route('single',$course['slug'])}}">
              <h2 class="h5">{{$course['course_name']}}</h2>
            </a>
            <div class="col d-flex pl-0">
              <span class="text-success font-small mr-3">
                <span class="fas fa-check-circle mr-2"></span>Active
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    @empty
    <div class="card border-light mb-4">
      <div class="row g-0 align-items-center">
        <div class="col-12 col-lg-6 col-xl-4">
          <a href="javascript:void(0)">
            <img src="https://media.istockphoto.com/id/1357365823/vector/default-image-icon-vector-missing-picture-page-for-website-design-or-mobile-app-no-photo.jpg?s=612x612&w=0&k=20&c=PM_optEhHBTZkuJQLlCjLz-v3zzxp-1mpNQZsdjrbns=" alt="macbook pro" class="card-img p-2 rounded-xl">
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-8">
          <div class="card-body py-lg-0">
            <a href="javascript:void(0)">
              <h2 class="h5">No Course Purchased</h2>
            </a>
          </div>
        </div>
      </div>
    </div>
    @endforelse
  </div>
</div>
@endsection