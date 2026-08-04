@extends('employer.layouts.app')

@section('content')
    <!-- Start Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Manage Jobs</h1>
                        <p>Business plan draws on a wide range of knowledge from different business<br> disciplines. Business draws on a wide range of different business .</p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Manage Jobs</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Main Content Start -->
    <div class="manage-jobs section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-lg">
                        <div class="card-header">
                            <span class="font-weight-bold">Manage Jobs</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-primary btn-sm" href="{{ route('employer.job.create') }}"><i class="fa fa-sm fa-plus"></i> Post</a>
                                    </div>
                                </div>
                                <div class="col">
                                    <table id="job-table" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>Company</th>
                                                <th>Arrangement</th>
                                                <th>Location</th>
                                                <th>Details</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content end -->
@endsection