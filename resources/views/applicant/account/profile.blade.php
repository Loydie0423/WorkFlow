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
                                            <div class="card-header d-flex justify-content-between">
                                                <span class="card-title font-weight-bold">Skills</span>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm" id="manage-account-skills-btn"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="d-flex align-items-center justify-content-start" id="manage-account-skills-container"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-1">
                                        <div class="card shadow-lg">
                                            <div class="card-header d-flex justify-content-between">
                                                <span class="card-title font-weight-bold">Educational Attainment</span>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm" id="manage-account-educational-att-btn"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered" id="manage-account-education-att-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Level</th>
                                                            <th>Field of Study</th>
                                                            <th>Year</th>
                                                            <th>Institution</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-1">
                                        <div class="card shadow-lg">
                                            <div class="card-header d-flex justify-content-between">
                                                <span class="card-title font-weight-bold">Work Experience</span>
                                                <div>
                                                    <button class="btn btn-secondary btn-sm" id="manage-account-work-exp-btn"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered" id="manage-account-work-exp-table">
                                                    <thead>
                                                        <tr>
                                                            <th>Company Name</th>
                                                            <th>Job Title</th>
                                                            <th>Year</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 my-1">
                                       <div class="card shadow-lg">
                                            <div class="card-header">
                                                <span class="font-weight-bold">Utilities</span>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="btn btn-primary btn-sm"><i class="fas fa-file-pdf mr-1"></i> Generate CV</button>
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

    <div class="modal fade" id="manage-account-skills-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Skills</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my-2">
                    <div class="col">
                        <div class="form-group">
                            <label>Skill Name</label>
                            <input type="text" name="manage-account-skill_name" class="form-control form-control-sm" placeholder="Enter skill name...">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col">
                        <div class="form-group">
                            <label>Experince Level</label>
                            <select name="manage-account-experience_level" class="form-control form-control-sm">
                                <option selected disabled>Select Level</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="proficient ">Proficient </option>
                            </select>
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-skills-addbtn" class="btn btn-primary btn-sm">Add</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manage-account-educational-att-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Studies</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my-2">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Level</label>
                            <select name="level" class="form-control form-control-sm">
                                <option selected disabled>Select Level</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Tertiary">Tertiary</option>
                            </select>
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Field of Study</label>
                            <input type="text" name="field_of_study" class="form-control form-control-sm" placeholder="Enter field of study">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="number" name="educational-att-from" class="form-control form-control-sm" placeholder="From">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="number" name="educational-att-to" class="form-control form-control-sm" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Institution</label>
                            <input type="text" name="institution" class="form-control form-control-sm" placeholder="Enter institution">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-educational-att-addbtn" class="btn btn-primary btn-sm">Add</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manage-account-educational-att-edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Studies</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my-2">
                    <input type="hidden" name="educational-att-id">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Level</label>
                            <select name="edit-level" class="form-control form-control-sm">
                                <option selected disabled>Select Level</option>
                                <option value="Primary">Primary</option>
                                <option value="Secondary">Secondary</option>
                                <option value="Tertiary">Tertiary</option>
                            </select>
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Field of Study</label>
                            <input type="text" name="edit-field_of_study" class="form-control form-control-sm" placeholder="Enter field of study">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="col-xl-4 col-md-6 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="number" name="edit-educational-att-from" class="form-control form-control-sm" placeholder="From">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="number" name="edit-educational-att-to" class="form-control form-control-sm" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-8 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label>Institution</label>
                            <input type="text" name="edit-institution" class="form-control form-control-sm" placeholder="Enter institution">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-educational-att-updatetn" class="btn btn-primary btn-sm">Update</button>
            </div>
            </div>
        </div>
    </div>

     <div class="modal fade" id="manage-account-work-exp-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Work Experince</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my-2">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="work-exp-company_name" class="form-control form-control-sm" placeholder="Enter company name">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row my-2">
                    <div class="col-xl-8 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="work-exp-job_title" class="form-control form-control-sm" placeholder="Enter job title">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
            

                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="number" name="work-exp-from" class="form-control form-control-sm" placeholder="From">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="number" name="work-exp-to" class="form-control form-control-sm" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="work-exp-description" class="form-control form-control-sm" style="resize: none" rows="3" placeholder="Enter details"></textarea>
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-work-exp-addbtn" class="btn btn-primary btn-sm">Add</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manage-account-work-exp-view-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">View Work Experince</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row my-2">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="work-exp-view-company_name" class="form-control form-control-sm" placeholder="Enter company name" readonly>
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row my-2">
                    <div class="col-xl-8 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="work-exp-view-job_title" class="form-control form-control-sm" placeholder="Enter job title" readonly>
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
            

                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="number" name="work-exp-view-from" class="form-control form-control-sm" placeholder="From" readonly>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="number" name="work-exp-view-to" class="form-control form-control-sm" placeholder="To" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="work-exp-view-description" class="form-control form-control-sm" style="resize: none" rows="3" placeholder="Enter details" readonly></textarea>
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="manage-account-work-exp-edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Work Experince</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="work-exp-id">
                <div class="row my-2">
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="work-exp-edit-company_name" class="form-control form-control-sm" placeholder="Enter company name">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
                </div>
                
                <div class="row my-2">
                    <div class="col-xl-8 col-md-12 col-sm-12">
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" name="work-exp-edit-job_title" class="form-control form-control-sm" placeholder="Enter job title">
                            <span class="error-message text-danger"></span>
                        </div>
                    </div>
            

                    <div class="col-xl-4 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label>From</label>
                                    <input type="number" name="work-exp-edit-from" class="form-control form-control-sm" placeholder="From">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label>To</label>
                                    <input type="number" name="work-exp-edit-to" class="form-control form-control-sm" placeholder="To">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row my-2">
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="work-exp-edit-description" class="form-control form-control-sm" style="resize: none" rows="3" placeholder="Enter details"></textarea>
                        <span class="error-message text-danger"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="manage-account-work-exp-updatebtn" class="btn btn-primary btn-sm">Update</button>
            </div>
            </div>
        </div>
    </div>
    {{-- Modals --}}
@endsection