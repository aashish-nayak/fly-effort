@extends('layouts.user.master')

@section('title','My Courses')
@push('css')
    <style>
      .assignment{
        position: relative;
        border: 1px solid #00000030;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 35px;
        border-radius: 5px;
      }
      .assignment .actions{
        position: absolute;
        top: 0%;
        right: 0%;
        left: 0%;
        font-size: 14px;
        display :flex;
        justify-content : space-between;
        align-items : center;
        background-color: #00000038;
        border-radius: 5px 5px 0px 0px;
        padding: 1px 10px;
      }
    </style>
@endpush
@section('main')
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
      </div>
    </div>
    <hr>
    <h5>Assignments</h5>
    @if(Session::has('success'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if($assignments->where('upload_by','user')->count() < 2)
    <div class="col-12 col-md-6 col-lg-4">
      <form action="{{route('assignment')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload Assignment PDF</label>
          <input type="hidden" name="course_id" value="{{$course['id']}}">
          <input class="form-control form-control-sm" required type="file" accept="application/pdf" name="assignment" id="formFile">
          <input type="submit" class="btn btn-xs btn-gray mt-2" value="Upload">
        </div>
      </form>
    </div>
    @endif
    <div class="col-12 mt-4">
      <div class="row row-cols-md-6 row-cols-2">
        @foreach($assignments as $assign)
        <div class="col">
          <div class="assignment">
            <span class="fa fa-file-pdf"></span>
            <div class="actions">
              <span class="badge bg-info" style="font-size:8px;">{{($assign->upload_by == 'user') ? 'You' : 'Admin'}}</span>
              <a href="{{asset('storage/user_data/'.auth()->id().'/'.$assign->assignment)}}" download="{{$assign->assignment}}"><i class="fa fa-download"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <hr>
    @if(auth('web')->user()->result != '')
    <h5>Result</h5>
    <div class="col-12">
      <div class="col-md-3 col-8">
        <div class="assignment">
          <span class="fa fa-file-pdf"></span>
          <div class="actions">
            <a href="{{asset('storage/user_data/'.auth()->id().'/'.auth()->user()->result)}}" download="{{auth('web')->user()->result}}"><i class="fa fa-download"></i></a>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection