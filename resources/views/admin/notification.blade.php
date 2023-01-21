@extends('layouts.admin.master')
@section('title', 'Notification')
@push('css')

@endpush
@section('section')
<div class="row">
    @if(Session::has('success'))
    <div class="col-12 mt-4">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div class="col-md-8 col-12 mt-3">
        <div class="card ">
            <div class="card-body">
                <form action="{{route('admin.notification.save')}}" method="post">
                    @csrf
                    <div class="mb-2">
                        <label for="">Notification Box</label>
                        <textarea name="notification" id="" class="form-control text-editor" cols="30" rows="6"></textarea>
                    </div>
                    <input type="submit" value="Save" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-12 mt-3">
        <div class="card ">
            <div class="card-header">
                <h6>Notification</h6>
            </div>
            <div class="card-body" style="min-height:200px;max-height:350px;overflow-y: auto;">
                <div>
                  {!!$notification->notification!!}
                </div>
              </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush