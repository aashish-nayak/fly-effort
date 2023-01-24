@extends('layouts.frontend.master')
@section('title','Airport Retail')

@section('content')
<section class="same-section-spacing bg-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-box">
                    <h2>Airport Retail</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Airport Retail</li>
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
                <h3>Airport Retail (6 Months)</h3>
                <p>Airport retailing is basically the presence of many retail services of many products inside the
                    airport for providing enhanced convenience to the people travelling. Airport retailing also delivers
                    a broader variety of merchandiser and is a comparatively easy choice for travellers. As many
                    retailers tend to think that airport retailing is just strategy diversification and market expansion
                    . However, this kind of thinking is expected to lead to negative results related to the perception
                    of airport business as the brands that are found in the airport are of high quality and are
                    considerably the high end ones.</p>
                <h3>Opportunities</h3>
                <p>The global airport retailing market is projected to expand at a significant rate over the next couple
                    of years owing to the growth in the tourism sector, rising income of the middle class across the
                    globe, and easy accessibility of the brands. By type, the global airport retailing market can be
                    segmented into supermarkets, specially retailers, department stores, and direct retailers.</p>
                <h3>Recruiter Companies</h3>
                <p>Some of the chief players in the airport retailing market are World Duty Free Group, Dubai Duty Free,
                    Duty Free America, Gebr. Heineman , Dufry and Autogrill.</p>
                <h3>Age</h3>
                <p>17-27 years as admitted.</p>
                <h3>Min. Qualification</h3>
                <p>Passed 12th or its equivalent</p>
                <h3>Syllabus</h3>
                <ul>
                    <li>English and Communication</li>
                    <li>Introduction to Retail</li>
                    <li>Understanding the Retailer</li>
                    <li>Setting up a Retail Store</li>
                    <li>Inside a retail store</li>
                    <li>Building a Retail Brand</li>
                    <li>Retail Store Success</li>
                    <li>Foreign Exchange</li>
                    <li>Customer Orientation in the Retail Industry</li>
                </ul>
                <p>Contact for more Information: <a href="tel:<?= $phone ?>">8800424149</a></p>
                <p>Apply Now</p>
            </div>
            <div class="col-sm-6 page-form-apply-now">
                <h3 class="title-left animate__fadeInDown">General Enquiry</h3>
                @include('layouts.frontend.includes.query-form')
            </div>
        </div>
    </div>
</section>
@endsection