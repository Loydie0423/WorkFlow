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
                                            <div class="card-header">
                                                <span class="card-title font-weight-bold">Profile Information</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card mb-4">
                                                        <div class="card-body text-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                                                            class="rounded-circle img-fluid" style="width: 150px;">
                                                            <h5 class="my-2">{{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</h5>
                                                            <p class="text-muted mb-1">{{ $user->role }}</p>
                                                        </div>
                                                        </div>
                                                        <div class="card mb-4 mb-lg-0">
                                                        <div class="card-body p-0">
                                                            <ul class="list-group list-group-flush rounded-3">
                                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                                <i class="fas fa-globe fa-lg text-warning"></i>
                                                                <p class="mb-0">https://mdbootstrap.com</p>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                                <i class="fab fa-github fa-lg text-body"></i>
                                                                <p class="mb-0">mdbootstrap</p>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                                                <p class="mb-0">@mdbootstrap</p>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                                <p class="mb-0">mdbootstrap</p>
                                                            </li>
                                                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                                <p class="mb-0">mdbootstrap</p>
                                                            </li>
                                                            </ul>
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
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="card mb-4 mb-md-0">
                                                            <div class="card-body">
                                                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                                                </p>
                                                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                                                <div class="progress rounded mb-2" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card mb-4 mb-md-0">
                                                            <div class="card-body">
                                                                <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                                                                </p>
                                                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                                                <div class="progress rounded" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                                                <div class="progress rounded mb-2" style="height: 5px;">
                                                                <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
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
                                            <div class="card-header">
                                                <span class="card-title font-weight-bold">Company Details</span>
                                                
                                            </div>
                                            <div class="card-body">
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
    {{-- Modals --}}
@endsection