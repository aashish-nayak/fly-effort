@extends('layouts.user.master')

@section('title','My Courses')

@section('main')
<div class="row justify-content-center">
  <div class="col-12 col-md-6 col-lg-12">
    @foreach (config('courses') as $course)
    <div class="card border-light mb-4">
      <div class="row g-0 align-items-center">
        <div class="col-12 col-lg-6 col-xl-4">
          <a href="{{route('single',$course['id'])}}">
            <img src="{{$course['image']}}" alt="macbook pro" class="card-img p-2 rounded-xl">
          </a>
        </div>
        <div class="col-12 col-lg-6 col-xl-8">
          <div class="card-body py-lg-0">
            <div class="d-flex g-0 align-items-center mb-2">
              <div class="col text-left">
                <ul class="list-group mb-0">
                  <li class="list-group-item border-0 small p-0">
                    <span class="fas fa-medal text-tertiary mr-2"></span>Promoted until: 12 June
                  </li>
                </ul>
              </div>
            </div>
            <a href="{{route('single',$course['id'])}}">
              <h2 class="h5">Apple MacBook Pro 15in Core i7 2.8GHz Retina, 16GB RAM, 512GB SSD</h2>
            </a>
            <div class="col d-flex pl-0">
              <span class="text-success font-small mr-3">
                <span class="fas fa-check-circle mr-2"></span>Active
              </span>
              <span class="text-muted font-small mr-3"><span class="fas fa-eye mr-2"></span>680</span>
              <span class="text-muted font-small mr-3"><span class="far fa-heart mr-2"></span>10</span>
              <a class="font-small text-dark" href="messages.html"><span class="fas fa-envelope mr-2"></span>8</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection