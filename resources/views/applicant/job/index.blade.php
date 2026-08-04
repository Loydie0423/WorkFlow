@extends('applicant.layouts.app')

@section('content')
<section class="find-job section">
        <div class="search-job">
            <div class="container">
                <div class="search-nner">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" class="form-control" placeholder="Keyword: Name, Tag">
                        </div>
                        <div class="col-lg-5 col-md-5 col-xs-12">
                            <input type="text" class="form-control" placeholder="Location: City, State, Zip">
                        </div>
                        <div class="col-lg-2 col-md-2 col-xs-12 button">
                            <button type="submit" class="btn btn-common float-right">Filter</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="single-head">
                <div class="row d-flex justify-content-start align-items-start">
                    @foreach ($jobs as $key => $item)
                        <!-- Single Job -->
                        <div class="single-job col-xl-6 col-md-12 col-sm-12">
                            <div class="job-image">
                                <img src="https://placehold.net/600x600.png" alt="#">
                            </div>
                            <div class="job-content">
                                <h4><a href="job-details.html">{{ $item->title }}</a></h4>
                                <i class="lni lni-website mr-1"></i><a class="mr-2" href="#"> {{ $item->company_name }}</a>
                                <i class="lni lni-user mr-1"></i><a class="mr-2" href="#">{{ $item->employer_fname }} {{ $item->employer_mname }} {{ $item->employer_lname }}</a>
                                <p style="text-align:justify; text-justify:inter-word; margin-top: 10px; height: 40px; max-height: 40px !important; overflow: hidden; text-overflow: ellipsis">{{ $item->description }}</p>
                                <ul>
                                    <li><i class="lni lni-dollar mr-1"></i> P{{ number_format($item->min_salary,0,".",",") }}-{{ number_format($item->max_salary,0,".",",") }}</li>
                                    <li><i class="lni lni-map-marker mr-1"></i>{{ $item->location }}</li>
                                    <li><i class="lni lni-display mr-1"></i>{{ $item->arrangement }}</li>
                                    <li><i class="lni lni-briefcase mr-1"></i>{{ $item->employment_type }}</li>
                                </ul>
                            </div>
                            <div class="job-button">
                                <ul>
                                    <li><a href="{{ route('applicant.job.view', $item->uuid) }}"><i class="lni lni-ini-arrow-right"></i> More Details</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Job -->
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <div class="pagination center">
                            <ul class="pagination-list">
                                <li><a href="#"><i class="lni lni-arrow-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="lni lni-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ End Pagination -->
            </div>
        </div>
    </section>
@endsection
