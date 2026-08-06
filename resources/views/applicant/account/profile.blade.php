@extends('applicant.layouts.app')

@section('content')
    <section class="job-post section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-12">
                    <div class="job-information">                            
                        {{--  --}}
                        <section>
                            <div class="container py-5">
                                <div class="row">
                                    <div class="col-12 my-1">
                                        <div class="card shadow-lg">
                                            <div class="card-header d-flex justify-content-between">
                                                <span class="card-title font-weight-bold">Profile Information</span>
                                                <div class="card-tools">
                                                    <div class="btn btn-sm btn-secondary" id="manage-account-det-btn"><i class="fa fa-cog fa-sm"></i></div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card mb-4">
                                                            <div class="card-body text-center">
                                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                                                class="rounded-circle img-fluid" style="width: 150px;">
                                                                <h5 class="mt-4">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</h5>
                                                                <p class="text-muted mb-1">{{ $user->role }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="card mb-4">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Full Name</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Email</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $user->email }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Birthdate</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $user->birthdate }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Mobile #</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $user->mobile_no }}</p>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                                <div class="row">
                                                                    <div class="col-sm-3">
                                                                        <p class="mb-0">Address</p>
                                                                    </div>
                                                                    <div class="col-sm-9">
                                                                        <p class="text-muted mb-0">{{ $user->address }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-1">
                                        <div class="card shadow-lg">
                                            <div class="card-header font-weight-bold">Skills</div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-center-justify-content-start">
                                                    <span class="badge badge-success">HTML</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        {{--  --}}
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

    <div class="modal fade" id="manage-account-det-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Manage Account</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="manage-account-det-form" class="mx-2">
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>FirstName</label>
                                <input type="text" name="account-profile-first_name" class="form-control form-control-sm" placeholder="Enter firstname">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>MiddleName</label>
                                <input type="text" name="account-profile-middle_name" class="form-control form-control-sm" placeholder="Enter middlename">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>LastName</label>
                                <input type="text" name="account-profile-last_name" class="form-control form-control-sm" placeholder="Enter lastname">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="account-profile-email" class="form-control form-control-sm" placeholder="Enter email">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>Birthdate</label>
                                <input type="date" name="account-profile-birthdate" class="form-control form-control-sm" placeholder="Enter birthdate">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>Mobile #</label>
                                <input type="number" name="account-profile-mobile_no" class="form-control form-control-sm" placeholder="Enter mobile no">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="account-profile-address" class="form-control form-control-sm" placeholder="Enter address">
                                <span class="error-message text-danger text-sm"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-det-updatebtn" class="btn btn-primary btn-sm">Update</button>
            </div>
            </div>
        </div>
    </div>
    {{-- Modals --}}
@endsection