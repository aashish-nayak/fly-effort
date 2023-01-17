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
        background-color: #00000038;
        border-radius: 5px 5px 0px 0px;
        text-align: end;
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
    <div class="col-12 col-md-6 col-lg-4">
      <form action="" method="post">
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload Assignment PDF</label>
          <input class="form-control form-control-sm" type="file" accept="pdf" name="assignment" id="formFile">
        </div>
      </form>
    </div>
    <div class="col-12 mt-4">
      <div class="row row-cols-md-6 row-cols-2">
        <div class="col">
          <div class="assignment">
            <span class="fa fa-file-pdf"></span>
            <div class="actions">
              <a href=""><i class="fa fa-download"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <h5>Result</h5>
    <div class="col-12">
      <div class="col-md-3 col-8">
        <div class="assignment">
          <span class="fa fa-file-pdf"></span>
          <div class="actions">
            <a href=""><i class="fa fa-download"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection