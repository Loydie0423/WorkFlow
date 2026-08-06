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
                                    <label>Category<span class="text-danger">*</span></label>
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
                                    <label>Job title<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="title" placeholder="Enter Job Title">
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Location<span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" name="location" placeholder="Enter Location">
                                    <span class="message text-sm text-danger"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row my-1">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Arrangement<span class="text-danger">*</span></label>
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
                                    <label>Salary<span class="text-danger">*</span></label>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <input type="number" name="min_salary" placeholder="min" class="form form-control">
                                        <span class="form-weight-bold mx-2">-</span>
                                        <input type="number" name="max_salary" placeholder="max" class="form form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row my-1">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Employment Type<span class="text-danger">*</span></label>
                                        <select name="employment_type" class="form-control">
                                            <option value="Full-time">Full-time</option>
                                            <option value="Part-time">Part-time</option>
                                        </select>
                                        <span class="message text-sm text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Slot<span class="text-danger">*</span></label>
                                        <input type="number" name="slot" class="form-control" placeholder="Enter Slot">
                                        <span class="message text-sm text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Application Deadline<span class="text-danger">*</span></label>
                                        <input type="date" name="application_deadline" class="form-control">
                                        <span class="message text-sm text-danger"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="row my-1">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Job Description<span class="text-danger">*</span></label>
                                        <textarea name="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                                        <span class="message text-sm text-danger"></span>
                                    </div>
                                </div>
                            </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title">Job Details</h3>
                            <button class="btn btn-sm btn-primary float-right" type="button" id="job-detail-button"><i class="fas fa-plus"></i></button>
                        </div>
                        <div class="col-12">
                            <table id="job-details-table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Details</th>
                                    </tr>
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

    <div class="modal fade" id="job-detail-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Job Detail</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Type:</label>
                            <select name="job-detail-type" class="form-control form-control-sm">
                                <option selected disabled>--Select Type--</option>
                                <option value="Responsibilities">Responsibilities</option>
                                <option value="Education">Education</option>
                                <option value="Experience">Experience</option>
                                <option value="Benefits">Benefits</option>
                            </select>
                            <span class="error-message text-danger text-sm"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Description:</label>
                            <textarea name="job-detail-details" class="form-control form-control-sm" cols="3" rows="3"></textarea>
                            <span class="error-message text-danger text-sm"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-sm btn-primary" id="add-job-detail-button">Add</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal" id="validate-jobpost-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Info</h5>
            </div>
            <div class="modal-body">
                <p id="validate-jobpost-title-message"></p>
                <ul id="validate-jobpost-list"></ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{ route('employer.profile.index') }}" class="btn btn-sm btn-primary">Go to Profile</a>
            </div>
            </div>
        </div>
    </div>
    {{-- Modals --}}
@endsection