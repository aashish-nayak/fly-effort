@extends('layouts.frontend.master')
@section('title','Airhostess Cabin Crew')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>Airhostess Cabin Crew</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Airhostess Cabin Crew</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ws-section-spacing about-three">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h3>Airhostess Cabin Crew</h3>
                <p>Air Hostess/cabin crew is a person connected to the airlines and with the passenger as well.
                    Their main duties are to take care of the passenger from the moment they board the plane to the
                    time of departing. They tell them safety instruction, provide meals and try to make the trip as
                    comfortable as possible. In long and turbulent flights, they help passengers stay calm. The
                    duration of this course is 12 months and it covers all the topics related to the field. After
                    passing the course, they have various job option in aviation sector.</p>

                <h3>Required (Specially for Girls)</h3>
                <ul>
                    <li>Fair looking</li>
                    <li>Min. 155 cm and above height</li>
                    <li>Northern state girls height min. 152 cm and above</li>
                    <li>Age : 17-25 years as on admitted</li>
                    <li>Marital status : unmarried</li>
                    <li>Minimum Qualification: 12th or its equivalent</li>
                </ul>
                <h3>Employment Area</h3>
                <ul>
                    <li>Aviation industry</li>
                    <li>Domestic airlines</li>
                    <li>International airlines</li>
                    <li>Airport ground staff</li>
                    <li>Educational institutes</li>
                </ul>

                <h3>Job / Post Type</h3>
                <ul>
                    <li>Airhostess</li>
                    <li>Cabin crew</li>
                    <li>flight attendant</li>
                    <li>flight steward</li>
                    <li>Ground staff</li>
                    <li>Customer care executive</li>
                </ul>
                <p>Contact for more Information: <a href="tel:{{config('info.phone')}}">8800424149</a></p>
            </div>
            <div class="col-sm-6 page-form-apply-now">
                <h3 class="title-left animate__fadeInDown">General Enquiry</h3>
                @include('layouts.frontend.includes.query-form')
            </div>
        </div>
    </div>
</section>
@endsection