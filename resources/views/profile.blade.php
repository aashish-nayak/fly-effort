@extends('layouts.user.master')

@section('title','Profile')

@section('main')
<div class="row">
  <div class="col-lg-12">
    <form action="{{route('profile_update')}}" method="POST" role="form" enctype="multipart/form-data">
      @csrf
      <div class="card card-body bg-white border-light mb-4">
        <h2 class="h5 mb-4">General information</h2>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="first_name">Name</label>
              <input class="form-control" required name="name"
                value="@if(old('name')){{old('name')}}@else{{auth()->user()->name}}@endif" id="first_name" type="text"
                placeholder="Enter your name">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="phone">Phone</label>
              <input class="form-control" required name="phone"
                value="@if(old('phone')){{old('phone')}}@else{{auth()->user()->phone}}@endif" id="phone" type="number"
                placeholder="9000000000">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 mb-3">
            <div class="mb-3">
              <label for="email">Email</label>
              <input class="form-control" required name="email"
                value="@if(old('email')){{old('email')}}@else{{auth()->user()->email}}@endif" id="email" type="email"
                placeholder="name@company.com">
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <div class="mb-3">
              <label for="birthday">Birthday</label>
              <input type="date" name="dob" value="@if(old('dob')){{old('dob')}}@else{{auth()->user()->dob}}@endif"
                class="form-control flatpickr-input" id="birthday" data-toggle="date"
                placeholder="Select your birth date">
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="gender">Gender</label>
            <select class="form-select" name="gender" id="gender" aria-label="Default select example">
              <option value="male" {{(old('gender')=='male' || auth()->user()->gender == 'male')?'selected' : ''}}>Male
              </option>
              <option value="female" {{(old('gender')=='female' || auth()->user()->gender == 'female')?'selected' :
                ''}}>Female</option>
              <option value="other" {{(old('gender')=='other' || auth()->user()->gender == 'other')?'selected' :
                ''}}>Other</option>
            </select>
          </div>
        </div>
        <h2 class="h5 my-4">Shipping Adress</h2>
        <div class="row">
          <div class="col-sm-9 mb-3">
            <div class="mb-3">
              <label for="address">Address</label>
              <input class="form-control" required name="shipping_address"
                value="@if(old('shipping_address')){{old('shipping_address')}}@else{{auth()->user()->shipping_address}}@endif"
                id="address" type="text" placeholder="Enter your home address">
            </div>
          </div>
          <div class="col-sm-3 mb-3">
            <div class="mb-3">
              <label for="number">Zip</label>
              <input class="form-control" required minlength="5" maxlength="6" name="zip"
                value="@if(old('zip')){{old('zip')}}@else{{auth()->user()->zip}}@endif" id="number" type="number"
                placeholder="Zip">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 mb-3">
            <div class="mb-3">
              <label for="city">City</label>
              <input class="form-control" required name="city" maxlength="30"
                value="@if(old('city')){{old('city')}}@else{{auth()->user()->city}}@endif" id="city" type="text"
                placeholder="City">
            </div>
          </div>
          <div class="col-sm-6 mb-3">
            <label for="country2">State</label>
            <select class="form-select" required name="state" id="country2" aria-label="Default select example">
              <option value="">Select a State</option>
              <option {{(old('state')=='Andhra Pradesh' || auth()->user()->state == 'Andhra Pradesh')?'selected' : ''}}
                value="Andhra Pradesh">Andhra Pradesh</option>
              <option {{(old('state')=='Arunachal Pradesh' || auth()->user()->state == 'Arunachal Pradesh')?'selected' :
                ''}} value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option {{(old('state')=='Assam' || auth()->user()->state == 'Assam')?'selected' : ''}}
                value="Assam">Assam</option>
              <option {{(old('state')=='Bihar' || auth()->user()->state == 'Bihar')?'selected' : ''}}
                value="Bihar">Bihar</option>
              <option {{(old('state')=='Chhattisgarh' || auth()->user()->state == 'Chhattisgarh')?'selected' : ''}}
                value="Chhattisgarh">Chhattisgarh</option>
              <option {{(old('state')=='Goa' || auth()->user()->state == 'Goa')?'selected' : ''}} value="Goa">Goa
              </option>
              <option {{(old('state')=='Gujarat' || auth()->user()->state == 'Gujarat')?'selected' : ''}}
                value="Gujarat">Gujarat</option>
              <option {{(old('state')=='Haryana' || auth()->user()->state == 'Haryana')?'selected' : ''}}
                value="Haryana">Haryana</option>
              <option {{(old('state')=='Himachal Pradesh' || auth()->user()->state == 'Himachal Pradesh')?'selected' :
                ''}} value="Himachal Pradesh">Himachal Pradesh</option>
              <option {{(old('state')=='Jammu and Kashmir' || auth()->user()->state == 'Jammu and Kashmir')?'selected' :
                ''}} value="Jammu and Kashmir">Jammu and Kashmir</option>
              <option {{(old('state')=='Jharkhand' || auth()->user()->state == 'Jharkhand')?'selected' : ''}}
                value="Jharkhand">Jharkhand</option>
              <option {{(old('state')=='Karnataka' || auth()->user()->state == 'Karnataka')?'selected' : ''}}
                value="Karnataka">Karnataka</option>
              <option {{(old('state')=='Kerala' || auth()->user()->state == 'Kerala')?'selected' : ''}}
                value="Kerala">Kerala</option>
              <option {{(old('state')=='Madhya Pradesh' || auth()->user()->state == 'Madhya Pradesh')?'selected' : ''}}
                value="Madhya Pradesh">Madhya Pradesh</option>
              <option {{(old('state')=='Maharashtra' || auth()->user()->state == 'Maharashtra')?'selected' : ''}}
                value="Maharashtra">Maharashtra</option>
              <option {{(old('state')=='Manipur' || auth()->user()->state == 'Manipur')?'selected' : ''}}
                value="Manipur">Manipur</option>
              <option {{(old('state')=='Meghalaya' || auth()->user()->state == 'Meghalaya')?'selected' : ''}}
                value="Meghalaya">Meghalaya</option>
              <option {{(old('state')=='Mizoram' || auth()->user()->state == 'Mizoram')?'selected' : ''}}
                value="Mizoram">Mizoram</option>
              <option {{(old('state')=='Nagaland' || auth()->user()->state == 'Nagaland')?'selected' : ''}}
                value="Nagaland">Nagaland</option>
              <option {{(old('state')=='Odisha' || auth()->user()->state == 'Odisha')?'selected' : ''}}
                value="Odisha">Odisha</option>
              <option {{(old('state')=='Punjab' || auth()->user()->state == 'Punjab')?'selected' : ''}}
                value="Punjab">Punjab</option>
              <option {{(old('state')=='Rajasthan' || auth()->user()->state == 'Rajasthan')?'selected' : ''}}
                value="Rajasthan">Rajasthan</option>
              <option {{(old('state')=='Sikkim' || auth()->user()->state == 'Sikkim')?'selected' : ''}}
                value="Sikkim">Sikkim</option>
              <option {{(old('state')=='Tamil Nadu' || auth()->user()->state == 'Tamil Nadu')?'selected' : ''}}
                value="Tamil Nadu">Tamil Nadu</option>
              <option {{(old('state')=='Telangana' || auth()->user()->state == 'Telangana')?'selected' : ''}}
                value="Telangana">Telangana</option>
              <option {{(old('state')=='Tripura' || auth()->user()->state == 'Tripura')?'selected' : ''}}
                value="Tripura">Tripura</option>
              <option {{(old('state')=='Uttarakhand' || auth()->user()->state == 'Uttarakhand')?'selected' : ''}}
                value="Uttarakhand">Uttarakhand</option>
              <option {{(old('state')=='Uttar Pradesh' || auth()->user()->state == 'Uttar Pradesh')?'selected' : ''}}
                value="Uttar Pradesh">Uttar Pradesh</option>
              <option {{(old('state')=='West Bengal' || auth()->user()->state == 'West Bengal')?'selected' : ''}}
                value="West Bengal">West Bengal</option>
              <option {{(old('state')=='Andaman and Nicobar Islands' || auth()->user()->state == 'Andaman and Nicobar
                Islands')?'selected' : ''}} value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <option {{(old('state')=='Chandigarh' || auth()->user()->state == 'Chandigarh')?'selected' : ''}}
                value="Chandigarh">Chandigarh</option>
              <option {{(old('state')=='Dadra and Nagar Haveli' || auth()->user()->state == 'Dadra and Nagar
                Haveli')?'selected' : ''}} value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
              <option {{(old('state')=='Daman and Diu' || auth()->user()->state == 'Daman and Diu')?'selected' : ''}}
                value="Daman and Diu">Daman and Diu</option>
              <option {{(old('state')=='Delhi' || auth()->user()->state == 'Delhi')?'selected' : ''}}
                value="Delhi">Delhi</option>
              <option {{(old('state')=='Lakshadweep' || auth()->user()->state == 'Lakshadweep')?'selected' : ''}}
                value="Lakshadweep">Lakshadweep</option>
              <option {{(old('state')=='Puducherry' || auth()->user()->state == 'Puducherry')?'selected' : ''}}
                value="Puducherry">Puducherry</option>
            </select>
          </div>
        </div>
      </div>
      <div class="card card-body bg-white border-light mb-4">
        <h2 class="h5 mb-4">Select profile photo</h2>
        <div class="card-body">
          <div class="row align-items-center">
            <div class="col-lg-1 mb-2 mb-lg-0">
              <div class="avatar-lg">
                <img class="rounded-circle" src="{{auth()->user()->getImage('dp')}}" alt="change avatar">
              </div>
            </div>
            <div class="col-lg-6 mb-3 mb-lg-0">
              <div class="h6 mb-0 ml-lg-3">Your avatar</div>
              <small class="text-gray ml-lg-3">JPG, GIF or PNG. Max size of 800K</small>
            </div>
            <div class="col-lg-5">
              <div class="mb-3"><label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="dp" id="formFile">
              </div>
            </div>
          </div>
          @if (auth('web')->user()->profile_complete == 0)
          <div class="row mt-3">
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Aadhar Front Image</label>
                <input class="form-control" type="file" required name="aadhar_front" id="formFile">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Aadhar Back Image</label>
                <input class="form-control" type="file" required name="aadhar_back" id="formFile">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-3">
                <label for="formFile" class="form-label">Last Qualification Image</label>
                <input class="form-control" type="file" required name="last_qualification" id="formFile">
              </div>
            </div>
          </div>
          @endif
        </div>
        <div class="mt-3"><button type="submit" class="btn btn-primary">Save All</button></div>
      </div>
    </form>
  </div>
</div>
@endsection