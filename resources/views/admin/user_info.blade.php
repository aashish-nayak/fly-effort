@extends('layouts.admin.master')
@section('title', 'User Info')
@push('css')
@endpush
@section('section')
<div class="row mt-3">
    <div class="col-lg-4 mb-2 mb-md-0">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">
                <img class="profile_img mb-2" src="{{$user->getImage('dp')}}" alt="">
                <h5>{{$user->name}}</h5>
            </div>
            <div class="card-body">
                <p class="mb-0"><strong class="pr-1">Email:</strong>{{$user->email}}</p>
                <p class="mb-0"><strong class="pr-1">Phone:</strong>{{$user->phone}}</p>
                <p class="mb-0"><strong class="pr-1">Gender:</strong>{{ucwords($user->gender)}}</p>
                <p class="mb-0"><strong class="pr-1">Date of Birth:</strong>{{ucwords($user->dob)}}</p>
            </div>
        </div>
    </div>
    <div class="col-lg-8 mb-2 mb-md-0">
        <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
                <h5 class="mb-0">General Information</h5>
            </div>
            <div class="card-body pt-0">
                <table class="table table-bordered">
                    <tr>
                        <th width="30%">Aadhar Front</th>
                        <td width="2%">:</td>
                        <td><a href="{{$user->getImage('aadhar_front')}}" target="_blank" rel="noopener noreferrer">Open</a></td>
                    </tr>
                    <tr>
                        <th width="30%">Aadhar Back</th>
                        <td width="2%">:</td>
                        <td><a href="{{$user->getImage('aadhar_back')}}" target="_blank" rel="noopener noreferrer">Open</a></td>
                    </tr>
                    <tr>
                        <th width="30%">Last Qualification</th>
                        <td width="2%">:</td>
                        <td><a href="{{$user->getImage('last_qualification')}}" target="_blank" rel="noopener noreferrer">Open</a></td>
                    </tr>
                    <tr>
                        <th width="30%">Shipping Address</th>
                        <td width="2%">:</td>
                        <td>{{$user->shipping_address}}</td>
                    </tr>
                    <tr>
                        <th width="30%">City</th>
                        <td width="2%">:</td>
                        <td>{{$user->city}}</td>
                    </tr>
                    <tr>
                        <th width="30%">State</th>
                        <td width="2%">:</td>
                        <td>{{$user->state}}</td>
                    </tr>
                    <tr>
                        <th width="30%">PinCode</th>
                        <td width="2%">:</td>
                        <td>{{$user->zip}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="col-12 mt-2">
        <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ Session::get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>
    @endif
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active show" id="nav-home-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-controls="nav-" aria-selected="true">Courses</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-assignments" role="tab" aria-controls="nav-assignments" aria-selected="false">Assignments</a>
                        <a class="nav-item nav-link" id="nav-orders-tab" data-toggle="tab" href="#nav-orders" role="tab" aria-controls="nav-orders" aria-selected="false">Orders</a>
                    </div>
                </nav>
                <div class="tab-content mt-3" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="nav-courses" role="tabpanel" aria-labelledby="nav-courses-tab">
                        <div class="col-12 col-md-6 mb-3">
                            <form action="{{route('admin.upload-result')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <h6>Result Upload</h6>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label for="select-course">Select Course</label>
                                        <select name="order_id" class="form-control form-control-sm" required id="select-course">
                                            <option value="">Select Course</option>
                                            @foreach($user->orders->where('payment_status','paid')->where('payment_type','course') as $key => $order)
                                                @php
                                                    $course = config('courses')->where('id',$order->course_id)->first();
                                                @endphp
                                                <option value="{{$order['id']}}">{{$course['course_name']}}</option>
                                                @push('option_orders')
                                                <option value="{{$order['id']}}">{{$course['course_name']}}</option>
                                                @endpush
                                                @push('option_courses')
                                                <option value="{{$course['id']}}">{{$course['course_name']}}</option>
                                                @endpush
                                                @push('table')
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td><img src="{{$course['image']}}" style="width:40px;height:40px;object-fit:cover" class="card-img rounded-xl"></td>
                                                    <td>{{$course['course_name']}}</td>
                                                    <td>{{$course['price']}}</td>
                                                    <td>
                                                        @if ($order->result != '')
                                                            <a href="{{asset('storage/user_data/'.$user->id.'/'.$order->result)}}" target="_blank" rel="noopener noreferrer">Open Result</a>
                                                        @else
                                                            No Result
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endpush
                                            @endforeach
                                        </select>
                                    </div>
                                    @csrf
                                    <div class="col-md-6 mb-2">
                                        <label for="upload-result">Upload Result</label>
                                        <input type="file" class="form-control form-control-sm" required name="result" accept="application/pdf" id="upload-result">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <th>SNo.</th>
                                <th>Course Image</th>
                                <th>Course Name</th>
                                <th>Price</th>
                                <th>Result</th>
                            </thead>
                            <tbody>
                                @stack('table')
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-assignments" role="tabpanel" aria-labelledby="nav-assignments-tab">
                        <div class="col-12 mb-2">
                            <h6>Assignment Upload</h6>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <form action="{{route('admin.upload-assignment')}}" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="col-md-6 mb-2">
                                        <label for="select-assignments">Select Course</label>
                                        <select name="course_id" class="form-control form-control-sm" required id="select-assignments">
                                            <option value="">Select Course</option>
                                            @stack('option_courses')
                                        </select>
                                    </div>
                                    @csrf
                                    <div class="col-md-6 mb-2">
                                        <label for="upload-assignment">Upload Assignment</label>
                                        <input type="file" class="form-control form-control-sm" required name="assignment" accept="application/pdf" id="upload-assignment">
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="table table-bordered">
                            <thead>
                                <th>SNo.</th>
                                <th>Course Name</th>
                                <th>Assignment</th>
                                <th>Upload by</th>
                                <th>Actions</th>
                            </thead>
                            <tbody>
                                @foreach($assignments as $key => $assign)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{config('courses')->where('id',$assign->course_id)->first()['course_name']}}</td>
                                    <td><a target="_blank" href="{{asset('storage/user_data/'.$user->id.'/'.$assign->assignment)}}">Open</a></td>
                                    <td>{{($assign->upload_by == 'admin') ? 'You' : 'User'}}</td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li>
                                                <a href="{{route('admin.assignment.delete',$assign->id)}}" class="text-danger" onclick="return confirm('Are You Sure want to delete this Assignment')? true : false"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-orders" role="tabpanel" aria-labelledby="nav-orders-tab">
                        <div class="col-12 mb-2">
                            <h6>Parcel Tracking Link</h6>
                        </div>
                        <div class="col-12 col-md-6 mb-3">
                            <form action="{{route('admin.tracking-link')}}" method="post" >
                                <div class="row">
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <div class="col-12 mb-2">
                                        <label for="select-assignments">Select Course</label>
                                        <select name="order_id" class="form-control form-control-sm" required id="select-assignments">
                                            <option value="">Select Course</option>
                                            @stack('option_orders')
                                        </select>
                                    </div>
                                    @csrf
                                    <div class="col-12 mb-2">
                                        <label for="tracking">Tracking Link</label>
                                        <input type="url" name="tracking" required class="form-control form-control-sm" id="tracking"/>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" value="Submit" class="btn btn-sm btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-responsive table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SNo.</th>
                                    <th>OrderID</th>
                                    <th>Payment Type</th>
                                    <th>Course</th>
                                    <th>Discount</th>
                                    <th>Price</th>
                                    <th>Method</th>
                                    <th>TrackingLink</th>
                                    <th>Payment Status</th>
                                    <th>OrderDate</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user->orders as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->order_id }}</td>
                                    <td>{{ ($item->payment_type == 'course') ? 'Course Purchased' : 'Registeration Fee' }}</td>
                                    <td>{{ ($item->payment_type == 'course') ? $item->course_name : 'Fee' }}</td>
                                    <td>{{ $item->discount }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->method }}</td>
                                    <td>
                                        @if ($item->tracking_link != '')
                                            <a href="{{ $item->tracking_link }}" target="_blank" rel="noopener noreferrer">Track</a>
                                            @else
                                            No Link
                                        @endif
                                    </td>
                                    <td><span class="badge badge-sm {{ ($item->payment_status == 'paid') ? 'badge-success' : 'badge-danger' }}">{{ $item->payment_status }}</span></td>
                                    <td>{{ date('h:iA d-m-Y',strtotime($item->created_at)) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')

@endpush