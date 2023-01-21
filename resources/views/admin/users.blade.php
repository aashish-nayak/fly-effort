@extends('layouts.admin.master')
@section('title', 'Users')
@push('css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
@endpush
@section('section')
<div class="row">
    <div class="col-12 mt-5">
        <div class="card ">
            <div class="card-body">
                <table id="queries" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Gender</th>
                            <th>RegisterDate</th>
                            <th data-orderable="false">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $item)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td class="text-center"><img src="{{ $item->getImage('dp') }}" style="width: 50px;height:50px;object-fit:cover;" alt=""></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ ucwords($item->gender) }}</td>
                            <td>{{ date('h:iA',strtotime($item->created_at)) }} <br> {{ date('d-m-Y',strtotime($item->created_at)) }}</td>
                            <td>
                                <ul class="d-flex justify-content-around align-items-center">
                                    <li>
                                        <a href="{{route('admin.user.info',$item->id)}}" class="text-info"><i class="ti-eye"></i></a>
                                    </li>
                                </ul>
                            </td>
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