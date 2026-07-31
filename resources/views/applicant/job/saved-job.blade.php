@extends('applicant.layouts.app')

@section('content')
    <div class="bookmarked section">
        <div class="container">
            <div class="alerts-inner">
                <div class="row">
                    <!-- Start Main Content -->
                    <div class="col-lg-4 col-12">
                        <div class="dashbord-sidebar">
                            <ul>
                                <li class="heading">Manage Account</li>
                                <li><a href="resume.html"><i class="lni lni-clipboard"></i> My Resume</a></li>
                                <li><a class="active" href="bookmarked.html"><i class="lni lni-bookmark"></i> Bookmarked Jobs</a></li>
                                <li><a href="notifications.html"><i class="lni lni-alarm"></i> Notifications <span class="notifi">5</span></a></li>
                                <li><a href="manage-applications.html"><i class="lni lni-envelope"></i> Manage Applications</a></li>
                                <li><a href="manage-jobs.html"><i class="lni lni-briefcase"></i> Manage Jobs</a></li>
                                <li><a href="change-password.html"><i class="lni lni-lock"></i> Change Password</a></li>
                                <li><a href="index.html"><i class="lni lni-upload"></i> Sign Out</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Main Content -->
                    <div class="col-lg-8 col-12">
                        <div class="job-items">
                            @forelse ($jobs as $key => $item)
                                <div class="manage-content">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-5 col-md-5 col-12">
                                            <div class="title-img">
                                                <div class="can-img">
                                                    <img src="https://placehold.co/400" alt="#">
                                                </div>
                                                <h3>{{ $item->title }} <span>{{ $item->company_name }}</span></h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12">
                                            <p><span class="time">{{ $item->arrangement }}</span></p>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-12">
                                            <p class="location"><i class="lni lni-map-marker"></i> {{ $item->location }}</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-12">
                                            <div class="button d-flex justidy-content-center align-items-center">
                                                <a href="{{ route("applicant.job.view",$item->uuid) }}" class="btn mr-1">View</a>
                                                <a data-uuid="{{ $item->uuid }}" class="btn removed-saved-job">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="row">
                                    <div class="col d-flex justify-content-center">
                                        <span>No Saved Job Found.</span>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        <!-- Pagination -->
                        <div class="pagination left pagination-md-center">
                            <ul class="pagination-list">
                                <li><a href="#"><i class="lni lni-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="lni lni-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Pagination -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection