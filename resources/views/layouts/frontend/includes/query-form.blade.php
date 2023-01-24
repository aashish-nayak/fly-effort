<form class="contact-form" action="{{route('internship')}}" method="POST">
    <div class="row">
        <div class="col-12">
            @if(Session::has('success'))
            {{ Session::get('success') }}
            @endif
        </div>
        @csrf
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" class="form-control" name="name" required placeholder="Name">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" maxlength="12" required name="phone" class="form-control" id="Phone"
                    placeholder="Phone">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="email" name="email" required class="form-control" id="Email" placeholder="Email">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <input type="text" name="last_qualification" required class="form-control" id="lq"
                    placeholder="Last Qualification">
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <!-- <label for="exampleFormControlSelect1">Select Course</label> -->
                <select class="form-control" name="course" required id="exampleFormControlSelect1">
                    <option value="Online Airhostess Cabin Crew">Online Airhostess Cabin Crew</option>
                    <option value="Online Airport Management">Online Airport Management</option>
                    <option value="Online Airport Retail">Online Airport Retail</option>
                    <option value="Intership Airhostess Cabin Crew">Intership Airhostess Cabin Crew</option>
                    <option value="Intership Airport Management">Intership Airport Management</option>
                    <option value="Intership Airport Retail">Intership Airport Retail</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn-1">Submit</button>
</form>