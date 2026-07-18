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

<section class="job-post section">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-12">
                <div class="job-information">
                    <h3 class="title my-1">Job Information</h3>
                    <form id="create-job-form">
                        <div class="row my-1">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Category*</label>
                                    <select name="category" class="form form-control">
                                       @foreach ($categories as $key => $item)
                                           <option value="{{ $key }}">{{ $item }}</option>
                                       @endforeach
                                    </select>
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Job title*</label>
                                    <input class="form-control" type="text" name="title" placeholder="Enter Job Title">
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Location*</label>
                                    <input class="form-control" type="text" name="location" placeholder="Enter Location">
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Arrangement*</label>
                                    <select name="arrangement" class="form form-control">
                                       <option value="Onsite">Onsite</option>
                                       <option value="Work From Home">Work From Home</option>
                                       <option value="Hybrid">Hybrid</option>
                                    </select>
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Salary</label>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <input type="number" name="min_salary" placeholder="MIN" class="form form-control">
                                        <span class="form-weight-bold mx-2">-</span>
                                        <input type="number" name="max_salary" placeholder="MAX" class="form form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="row my-1">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Job Description*</label>
                                    <textarea name="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3 class="title my-1">Company Information</h3>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-success btn-sm mr-1" data-toggle="modal" data-target="#search-company-modal"><i class="fas fa-search"></i></button>
                                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                        <div class="col-12">
                            <table class="table table-bordered" id="profile-company-table">
                                <thead>
                                    <th>Logo</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>URL</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col d-flex justify-content-start button">
                            <a class="btn mr-1" href="{{ route('employer.job.index') }}">Cancel</a>
                            <button type="button" class="btn post-job-btn">Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    {{-- Modals --}}
    <div class="modal fade" id="search-company-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Select Company</h5>
            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered" id="selection-company-table">
                <thead>
                    <th>Logo</th>
                    <th>Company Name</th>
                    <th>URL</th>
                    <th>Address</th>
                    <th>Action</th>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
    {{-- Modals --}}
@endsection