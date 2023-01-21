@extends('layouts.admin.master')
@section('title', 'Orders')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@endpush
@section('section')
<div class="row">
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-header">
                <h6>Orders</h6>
            </div>
            <div class="card-body">
                <table id="queries" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>OrderID</th>
                            <th>StudentName</th>
                            <th>Course</th>
                            <th>Price</th>
                            <th>Method</th>
                            <th>Payment Status</th>
                            <th>Parcel</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as$key=>$item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $item->order_id }}</td>
                            <td><a href="{{route('admin.user.info',$item->user->id)}}">{{ $item->user->name }}</a></td>
                            <td>{{ $item->course_name }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->method }}</td>
                            <td><span class="badge badge-sm {{ ($item->payment_status == 'paid') ? 'badge-success' : 'badge-danger' }}">{{ $item->payment_status }}</span></td>
                            <td>
                                @if ($item->payment_status == 'paid')
                                <a href="{{ $item->tracking_link }}">Track</a>
                                @else
                                Failed
                                @endif
                            </td>
                            <td>{{ date('h:iA',strtotime($item->created_at)) }} <br> {{ date('d-m-Y',strtotime($item->created_at)) }}</td>
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