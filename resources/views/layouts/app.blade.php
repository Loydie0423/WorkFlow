<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>JobGrids - Job Portal HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div id="loading-area"></div>

    <!-- Start Header Area -->
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                         <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand logo" href="index.html">
                            <img class="logo1" src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="index.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index2.html">Home 2</a></li>
                                        <li><a href="index3.html">Home 3</a></li>
                                        <li><a href="index4.html">Home 4</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="job-list.html">Job List</a></li>
                                        <li><a href="job-details.html">Job Details</a></li>
                                        <li><a href="resume.html">Resume Page</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="faq.html">Faq</a></li>
                                        <li><a href="pricing.html">Our Pricing</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                        <li><a href="mail-success.html">Mail Success</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#">Candidates</a>
                                    <ul class="sub-menu">
                                        <li><a href="browse-jobs.html">Browse Jobs</a></li>
                                        <li><a href="browse-categories.html">Browse Categories</a></li>
                                        <li><a href="add-resume.html">Add Resume</a></li>
                                        <li><a href="job-alerts.html">Job Alerts</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#" class="active">Employers </a>
                                    <ul class="sub-menu">
                                        <li><a href="post-job.html">Add Job</a></li>
                                        <li><a href="{{ route('employer.job.index') }}" class="active">Manage Jobs</a></li>
                                        <li><a href="manage-applications.html">Manage Applications</a></li>
                                        <li><a href="manage-resumes.html">Manage Resume</a></li>
                                        <li><a href="browse-resumes.html">Browse Resumes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                        <li><a href="blog-single-sidebar.html">Blog Single Sibebar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="contact.html">Contact </a> </li>
                                @auth
                                    <li class="nav-item"><a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="">Settings</a></li>
                                            <li><a id="logout">Logout</a></li>
                                        </ul>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                        @guest
                            <!-- navbar collapse -->
                            <div class="button">
                                <a href="javacript:" data-toggle="modal" data-target="#login" class="login"><i class="lni lni-lock-alt"></i> Login</a>
                                <a href="javacript:" data-toggle="modal" data-target="#signup" class="btn">Sign Up</a>
                            </div>
                            <!-- navbar -->
                        @endguest
                        </nav>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- navbar area -->
    </header>
    <!-- End Header Area -->

    @yield('content')

    <!-- Start Footer Area -->
    <footer class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="download-text">
                            <h3>Download Our Best Apps</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do<br> eiusmod tempor
                                incididunt ut labore et dolore</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="download-button">
                            <div class="button">
                                <a class="btn" href="#"><i class="lni lni-apple"></i> App Store</a>
                                <a class="btn" href="#"><i class="lni lni-play-store"></i> Google Play</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Middle Top -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('assets/images/logo/logo.svg') }}" alt="Logo"></a>
                            </div>
                            <p>Start building your creative website with our awesome template Massive.</p>
                            <ul class="contact-address">
                                <li><span>Address:</span> 555 Wall Street, USA, NY</li>
                                <li><span>Email:</span> example@apus.com</li>
                                <li><span>Call:</span> 555-555-1234</li>
                            </ul>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>For Candidates</h3>
                                    <ul>
                                        <li><a href="resume.html">User Dashboard</a></li>
                                        <li><a href="#">CV Packages</a></li>
                                        <li><a href="#">Jobs Featured</a></li>
                                        <li><a href="#">Jobs Urgent</a></li>
                                        <li><a href="#">Candidate List</a></li>
                                        <li><a href="#">Candidates Grid</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer f-link">
                                    <h3>For Employers</h3>
                                    <ul>
                                        <li><a href="#">Post New</a></li>
                                        <li><a href="#">Employer List</a></li>
                                        <li><a href="#">Employers Grid</a></li>
                                        <li><a href="#">Job Packages</a></li>
                                        <li><a href="#">Jobs Listing</a></li>
                                        <li><a href="#">Jobs Featured</a></li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Single Widget -->
                                <div class="single-footer newsletter">
                                    <h3>Join Our Newsletter</h3>
                                    <p>Subscribe to get the latest jobs posted, candidates...</p>
                                    <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                        <input name="EMAIL" placeholder="Your email address" class="common-input"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Your email address'" required="" type="email">
                                        <div class="button">
                                            <button class="btn">Subscribe Now! <span class="dir-part"></span></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Single Widget -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="left">
                                <p>Designed and Developed by<a href="https://graygrids.com/" rel="nofollow" target="_blank">GrayGrids</a></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="right">
                                <ul>
                                    <li><a href="#">Terms of use</a></li>
                                    <li><a href="#"> Privacy Policy</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS here ========================= -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        //====== Clients Logo Slider
        tns({
            container: '.client-logo-carousel',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 2,
                },
                768: {
                    items: 3,
                },
                992: {
                    items: 4,
                },
                1170: {
                    items: 6,
                }
            }
        });
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=cz4z8CyvDas',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>

    <script>
        $(document).ready(function() {

            $("#signup-link").on("click", function() {
                $("#login").modal("hide");
                $("#signup").modal("show");
            });

             $("#login-link").on("click", function() {
                $("#signup").modal("hide");
                $("#login").modal("show");
            });

            $(".signup-btn").on("click", function() {
                let signupfields = ['first_name', 'middle_name', 'last_name', 'email', 'password', 'signup_password', 'account_type'];

                $.each(signupfields, function(key, item) {
                    if($("#"+item).hasClass("is-invalid")) {
                        $("#"+item).removeClass("is-invalid");
                    }
                });

                $.ajax({
                    url: "{{ route('signup') }}",
                    method: "POST",
                    data: {
                        first_name: $("#first_name").val(),
                        middle_name: $("#middle_name").val(),
                        last_name: $("#last_name").val(),
                        email: $("#email").val(),
                        password: $("#password").val(),
                        password_confirmation: $("#password_confirmation").val(),
                        account_type: $("#account_type").val()
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        if(e.result) {
                            Swal.fire({
                                toast: true,
                                title: e.message,
                                position: 'top-end',
                                icon: 'success',
                                showConfirmButton: false,
                                timer: 3000,
                            });

                            $.each(signupfields, function(key, item) {
                                $("#"+item).empty();
                                if($("#"+item).hasClass("is-invalid")) {
                                    $("#"+item).removeClass("is-invalid")
                                }
                            });

                            $("#signup").modal("hide");
                            $("#login").modal("show");
                        } else {
                            let errors = e.data;
                            $.each(errors, function(key, value) {
                                $("#"+key).addClass("is-invalid");
                            });
                        }
                    }, 
                    error(e) {
                        Swal.fire({
                            toast: true,
                            title: 'Server Error!',
                            position: 'top-end',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    }
                });
            });

            $("#login-btn").on("click", function() {
                $("#login-email").removeClass('is-invalid');
                $("#login-password").removeClass('is-invalid');
                $.ajax({
                    url: "{{ route('login') }}",
                    method: "POST",
                    data: {
                        email: $("#login-email").val(),
                        password: $("#login-password").val(),
                    },
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        if(e.result) {
                            Swal.fire({
                                toast: true,
                                icon: 'success',
                                title: e.message,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 3000
                            });

                           let role = e.data.role_id;
                           console.log(role)
                           if(role == 2) {
                                window.location.href = "{{ route('employer.index') }}";
                           } else if(role == 3) {
                                window.location.href = "{{ route('applicant.index') }}";
                           }
                        } else {

                            if(e.status == 422) {
                                let errors = e.data;
                                $.each(errors, function(key, item) {
                                    $("#login-"+key).addClass('is-invalid');
                                });
                                return;
                            }
                            
                            if(e.status == 401) {
                                Swal.fire({
                                    toast: true,
                                    icon: 'error',
                                    title: e.message,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                                return;
                            }
                        }
                    },
                    error: function(e) {
                        Swal.fire({
                            toast: true,
                            icon: 'error',
                            title: 'Server Error!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                });
            });

            $("#logout").on("click", function() {
                $.ajax({
                    url: "{{ route('logout') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: e.message,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        })

                        window.location.href = "{{ route('home') }}";
                    },
                    error: function() {
                        Swal.fire({
                            toast: true,
                            icon: 'error',
                            title: 'Server Error!',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                    }
                });
            });
        });
    </script>
</body>

</html>