@extends('applicant.layouts.app')

@section('content')
<!-- Start Hero Area -->
<section class="hero-area">
    <!-- Single Slider -->
    <div class="hero-inner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 co-12">
                    <div class="inner-content">
                        <div class="hero-text">
                            <h1 class="wow fadeInUp" data-wow-delay=".3s">Find Your Career <br>to Make a Better Life
                            </h1>
                            <p class="wow fadeInUp" data-wow-delay=".5s">Creating a beautiful job website is not
                                easy <br> always. To make your life easier, we are<br> introducing Jobcamp template.
                            </p>
                        </div>
                        <div class="job-search-wrap-two mt-50 wow fadeInUp" data-wow-delay=".7s">
                            <div class="job-search-form">
                                <form action="#">
                                    <!-- Single Field Item Start  -->
                                    <div class="single-field-item keyword">
                                        <label for="keyword">What</label>
                                        <input id="keyword" placeholder="What jobs you want?" name="keyword"
                                            type="text">
                                    </div>
                                    <!-- Single Field Item End  -->
                                    <!-- Single Field Item Start  -->
                                    <div class="single-field-item location">
                                        <label for="location">Where</label>
                                        <input id="location" class="input-field input-field-location"
                                            placeholder="Location" name="location" type="text">
                                    </div>
                                    <!-- Single Field Item End  -->
                                    <div class="submit-btn">
                                        <button class="btn" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="trending-keywords mt-30">
                                <div class="keywords style-two">
                                    <span class="title">Popular Keywords:</span>
                                    <ul>
                                        <li><a href="#">Administrative</a></li>
                                        <li><a href="#">Android</a></li>
                                        <li><a href="#">app</a></li>
                                        <li><a href="#">ASP.NET</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 co-12">
                    <div class="hero-video-head wow fadeInRight" data-wow-delay=".5s">
                        <div class="video-inner">
                            <img src="{{ asset('assets/images/hero/hero-image.png') }}" alt="#">
                            <a href="https://www.youtube.com/watch?v=cz4z8CyvDas" class="glightbox hero-video"><i
                                    class="lni lni-play"></i></a>
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Single Slider -->
</section>
<!--/ End Hero Area -->

<!-- Start Apply Process Area -->
<section class="apply-process section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-user"></i>
                    <h4>Register Your Account</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-book"></i>
                    <h4>Upload Your Resume</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <div class="process-item">
                    <i class="lni lni-briefcase"></i>
                    <h4>Apply for Dream Job</h4>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Apply Process Area -->

<!-- Start Job Category Area -->
<section class="job-category section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Job Category</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Choose Your Desire Category</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="cat-head">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="lni lni-cog"></i>
                        </div>
                        <h3>Technical<br> Support</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="lni lni-layers"></i>
                        </div>
                        <h3>Business<br> Development</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".6s">
                        <div alOHclass="icon">
                            <i class="lni lni-home"></i>
                        </div>
                        <h3>Real Estate<br> Business</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="lni lni-search"></i>
                        </div>
                        <h3>Share Maeket<br> Analysis</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="lni lni-investment"></i>
                        </div>
                        <h3>Finance & Banking <br> Service</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="lni lni-cloud-network"></i>
                        </div>
                        <h3>IT & Networing <br> Sevices</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="lni lni-restaurant"></i>
                        </div>
                        <h3>Restaurant <br> Services</h3>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <a href="job-details.html" class="single-cat wow fadeInUp" data-wow-delay=".8s">
                        <div class="icon">
                            <i class="lni lni-fireworks"></i>
                        </div>
                        <h3>Defence & Fire <br> Service</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Job Category Area -->

<!-- Start Call Action Area -->
<section class="call-action overlay section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="section-title">
                        <span class="wow fadeInDown" data-wow-delay=".2s">JobGrids Free Lite Version</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Currently You are using free
                            lite Version of JobGrids</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Please, purchase full version of the template to get all pages, <br> Features and commercial license.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="#" class="btn"><i class="lni lni-cart"></i> Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Call Action Area -->

<!-- Start Pricing Table Area -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <span class="wow fadeInDown" data-wow-delay=".2s">Pricing Table</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Pricing Plan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">BASIC PACK</h4>
                        <div class="price">
                            <p class="amount">$30<span class="duration">per month</span></p>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>5+ Listings</li>
                        <li>Contact With Agent</li>
                        <li>Contact With Agent</li>
                        <li>7×24 Fully Support</li>
                        <li>50GB Space</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Register Now</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".4s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">STANDARD PACK</h4>
                        <div class="price">
                            <p class="amount">$40<span class="duration">per month</span></p>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>5+ Listings</li>
                        <li>Contact With Agent</li>
                        <li>Contact With Agent</li>
                        <li>7×24 Fully Support</li>
                        <li>50GB Space</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Register Now</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".6s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <h4 class="title">PREMIUM PACK</h4>
                        <div class="price">
                            <p class="amount">$60<span class="duration">per month</span></p>
                        </div>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>5+ Listings</li>
                        <li>Contact With Agent</li>
                        <li>Contact With Agent</li>
                        <li>7×24 Fully Support</li>
                        <li>50GB Space</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Register Now</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </div>
</section>
<!--/ End Pricing Table Area -->

<!-- Start Clients Area -->
<div class="client-logo-section">
    <div class="container">
        <div class="client-logo-wrapper">
            <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client1.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client2.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client3.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client4.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client5.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client6.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client2.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client3.png') }}" alt="#">
                </div>
                <div class="client-logo">
                    <img src="{{ asset('assets/images/clients/client4.png') }}" alt="#">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients Area -->

<!-- Login Modal -->
<div class="modal fade form-modal" id="login" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog max-width-px-840 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading my-2">
                            <h3>Login</h3>
                            <p>Log in to continue your account and explore new jobs.</p>
                        </div>
                            <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="login-email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control" id="login-password"
                                        placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between">
                                <!-- Default checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" />
                                    <label class="form-check-label" for="flexCheckDefault">Remember password</label>
                                </div>
                                <a href="" class="font-size-3 text-dodger line-height-reset">Forget Password</a>
                            </div>
                            <div class="form-group mb-8 button">
                                <button class="btn" id="login-btn">Log in
                                </button>
                            </div>
                            <p class="text-center create-new-account">Don’t have an account? <a id="signup-link">Create an account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Modal -->

<!-- Signup Modal -->
<div class="modal fade form-modal" id="signup" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl max-width-px-840 position-relative">
        <button type="button"
            class="circle-32 btn-reset bg-white pos-abs-tr mt-md-n6 mr-lg-n6 focus-reset z-index-supper"
            data-dismiss="modal"><i class="lni lni-close"></i></button>
        <div class="login-modal-main">
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="row">
                        <div class="heading my-2">
                            <h3>Signup</h3>
                            <p>Create your account to explore and create jobs.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="label">FistName</label>
                                <input type="text" id="first_name" class="form-control" placeholder="Enter FirstName">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="label">MiddleName</label>
                                <input type="text" id="middle_name" class="form-control" placeholder="Enter MiddleName">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="label">LastName</label>
                                <input type="text" id="last_name" class="form-control" placeholder="Enter LastName">
                            </div>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-3 col-md-4 col-sm-12">
                             <div class="form-group">
                                <label for="email" class="label">E-mail</label>
                                <input type="email" class="form-control" placeholder="example@gmail.com" id="email">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="password" class="label">Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control"
                                        placeholder="Enter password" id="password">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="password" class="label">Confirm Password</label>
                                <div class="position-relative">
                                    <input type="password" class="form-control"
                                        placeholder="Enter password" id="password_confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="password" class="label">Account Type</label>
                                <div class="position-relative">
                                    <select class="form-control" id="account_type">
                                        <option selected disabled>Select Account Type</option>
                                        <option value="2">Employer</option>
                                        <option value="3">Applicant</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-8 mt-4 button">
                            <a class="btn signup-btn">Sign Up</a>
                            <p class="text-center create-new-account my-4">Already have an account? <a id="login-link">Login now</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Signup Modal -->
@endsection
