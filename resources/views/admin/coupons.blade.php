@extends('layouts.admin.master')
@section('title', 'Coupons')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@endpush
@section('section')
<div class="row">
    <div class="col-12 mt-2">
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
            <strong>Error!</strong> {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
        </div>
        @endif
    </div>
    <div class="col-12 col-md-4 mt-2">
        <div class="card">
            <div class="card-header">
                <h6>Add Coupon</h6>
            </div>
            <div class="card-body">
                <form action="{{route('admin.coupon.create')}}" method="post">
                    @csrf
                    @if ($edit != '')
                        <input type="hidden" name="id" value="{{$edit->id}}">
                    @endif
                    <div class="mb-2">
                        <label for="name" class="form-label">Coupon Name</label>
                        <input type="text" required name="coupon" @if ($edit != '') value="{{$edit->coupon}}" @endif class="form-control form-control-sm" placeholder="Coupon">
                    </div>
                    <div class="mb-2">
                        <label for="name" class="form-label">Discount Type</label>
                        <select name="type" required class="form-control form-control-sm" id="">
                            <option value="">Select Type</option>
                            <option value="percentage" {{($edit != '' && $edit->type == 'percentage') ? 'selected' : ''}}>Percentage (%)</option>
                            <option value="price" {{($edit != '' && $edit->type == 'price') ? 'selected' : ''}}>Price (₹)</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="name" class="form-label">Discount Value</label>
                        <input type="text" required name="value" @if ($edit != '') value="{{$edit->value}}" @endif class="form-control form-control-sm" placeholder="10.5">
                    </div>
                    <div class="mb-2">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" @if (($edit != '' && $edit->status == '1') || $edit == '') checked @endif id="customRadio2" name="status" value="1" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Enable</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadio4" @if ($edit != '' && $edit->status == '0') checked @endif name="status" value="0" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio4">Disable</label>
                        </div>
                    </div>
                    <div class="d-flex mt-2">
                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                        @if ($edit != '')
                        <a href="{{route('admin.coupons')}}" class="btn btn-sm btn-secondary ml-2">Cancel</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-8 mt-2">
        <div class="card">
            <div class="card-header">
                <h6>Coupons</h6>
            </div>
            <div class="card-body">
                <table id="queries" class="table table-responsive table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Coupon</th>
                            <th>Type</th>
                            <th>Value</th>
                            <th>Status</th>
                            <th>Applied Users</th>
                            <th>Actions</th>
                            <th>CreatedAt</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promos as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><b>{{$item->coupon}}</b></td>
                            <td>{{$item->type}}</td>
                            <td>{{$item->value}}</td>
                            <td>
                                @if ($item->status == 1)
                                Enable
                                @else
                                Disable
                                @endif
                            </td>
                            <td>{{$item->users_count}}</td>
                            <td>
                                <ul class="d-flex justify-content-around align-items-center">
                                    <li>
                                        <a href="{{route('admin.coupon.edit',$item->id)}}" class="text-dark"><i class="fa fa-edit mr-2"></i></a>
                                        <a href="{{route('admin.coupon.delete',$item->id)}}" class="text-danger" onclick="return confirm('Are You Sure want to delete this PromoCode')? true : false"><i class="ti-trash"></i></a>
                                    </li>
                                </ul>
                            </td>
                            <td>{{\Carbon\Carbon::create($item->created_at)->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
<script>
    $('#queries').DataTable();
</script>
@endpush