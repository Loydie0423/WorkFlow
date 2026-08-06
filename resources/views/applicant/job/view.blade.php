@extends('applicant.layouts.app')

@section('content')

    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Job Details</h1>
                        <p>Business plan draws on a wide range of knowledge from different business<br> disciplines.
                            Business draws on a wide range of different business .</p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="news-standard.html">Blog</a></li>
                        <li>Job Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="job-details section">
        <div class="container">
            <div class="row mb-n5">
                <!-- Job List Details Start -->
                <div class="col-lg-8 col-12">
                    <div class="job-details-inner">
                        <div class="job-details-head row mx-0">
                            <div class="company-logo col-auto">
                                <a href="#" style="border-radius: 4px; overflow: hidden;"><img src="https://placehold.net/600x600.png" alt="Company Logo"></a>
                            </div>
                            <div class="salary-type col-auto order-sm-3">
                                <span class="salary-range">$ {{number_format($data["info"]["min_salary"],0,".",",")}}-{{number_format($data["info"]["max_salary"],0,".",",") }}</span>
                                <span class="job-arrangement badge badge-success">{{ $data["info"]["arrangement"] }}</span>
                            </div>
                            <div class="content col">
                                <h5 class="title">{{ $data["info"]["title"] }}</h5>
                                <ul class="meta">
                                    <li>
                                        <strong><i class="lni lni-website mr-2"></i><span>{{ $data["info"]["company_name"] }}</span></strong>
                                    </li>
                                    <li>
                                        <strong><i class="lni lni-user mr-1"></i><span>{{ $data["info"]["employer_fname"] }} {{ $data["info"]["employer_mname"] }} {{ $data["info"]["employer_lname"] }}</span></strong>
                                    </li>
                                    <li> 
                                        <strong><i class="lni lni-map-marker mr-1"></i><span>{{ $data["info"]["location"] }}</span></strong>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="job-details-body">
                            <h6 class="mb-3">Job Description</h6>
                            <p>
                                {{ $data["info"]["description"] }}
                            </p>  
                                         
                            @foreach ($data["details"] as $title => $item)
                                <h6 class="mb-3 mt-4">{{ $title }}</h6>
                                @foreach ($item as $itemx)
                                    <ul>
                                        <li>{{ $itemx->details }}</li>
                                    </ul>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- Job List Details End -->
                <!-- Job Sidebar Wrap Start -->
                <div class="col-lg-4 col-12">
                    <div class="job-details-sidebar">
                        <!-- Sidebar (Apply Buttons) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <div class="row m-n2 button">
                                    <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                        <button class="d-block btn" id="save-job-btn" data-slug="{{ $data["meta"]["slug"] }}"><i class="fa fa-heart-o mr-1"></i> Save Job</button>
                                    </div>
                                    <div class="col-xl-auto col-lg-12 col-sm-auto col-12 p-2">
                                        <button class="d-block btn btn-alt" id="apply-job-btn" data-slug="{{ $data["meta"]["slug"] }}">Apply Now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar (Apply Buttons) End -->
                        <!-- Sidebar (Job Overview) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Job Overview</h6>
                                <ul class="job-overview list-unstyled">
                                    <li><strong>Published on:</strong> {{ date_format(date_create($data["info"]["published_date"]),"M d, Y") }}</li>
                                    <li><strong>Vacancy:</strong> {{ $data["info"]["vacancy"] }}</li>
                                    <li><strong>Employment Type:</strong> {{ $data["info"]["employment_type"] }}</li>
                                    <li><strong>Job Location:</strong> {{ $data["info"]["location"] }}</li>
                                    <li><strong>Salary:</strong> {{ number_format($data["info"]["min_salary"],2,".",",") }} - {{ number_format($data["info"]["max_salary"],2,".",",") }}</li>
                                    <li><strong>Application Deadline:</strong> {{ date_format(date_create($data["info"]["application_deadline"]),"M d, Y") }}</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar (Job Overview) End -->

                        <!-- Sidebar (Job Location) Start -->
                        <div class="sidebar-widget">
                            <div class="inner">
                                <h6 class="title">Job Location</h6>
                                <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.com">123movies old site</a><style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style><a href="https://maps-google.github.io/embed-google-map/">embed google map</a></div></div>
                            </div>
                        </div>
                        <!-- Sidebar (Job Location) End -->
                    </div>
                </div>
                <!-- Job Sidebar Wrap End -->

            </div>
        </div>
    </div>

    <div class="modal" id="validate-application-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Info</h5>
                </button>
            </div>
            <div class="modal-body">
                <p id="validate-application-title-message">.</p>
                <ul id="validate-application-list"></ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route("applicant.profile.index") }}" class="btn btn-primary">Go to Profile</a>
            </div>
            </div>
        </div>
    </div>
@endsection