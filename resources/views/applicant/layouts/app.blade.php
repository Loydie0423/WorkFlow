<html class="no-js" lang="zxx"><head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Manage Jobs - JobGrids Job Portal HTML Template.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.svg') }}">
    <!-- Place favicon.ico in the root directory -->

    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!-- ========================= CSS here ========================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/LineIcons.2.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div id="loading-area" style="opacity: 0; display: none;"></div>

    <!-- Start Header Area -->
    <header class="header other-page">
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
                                        <a href="{{ route('applicant.index') }}">Home</a>
                                    </li>
                                    <li class="nav-item"><a href="#">Jobs </a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('applicant.job.index') }}">Browse Jobs</a></li>
                                            <li><a href="{{ route('applicant.job.saved.index') }}">Saved Jobs</a></li>
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
                                    <li class="nav-item"><a href="#">Account</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('applicant.profile.index') }}">Profile</a></li>
                                            <li><a id="logout">Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- navbar collapse -->
                        </nav>
                        <!-- navbar -->
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
                                <a href="index.html"><img src="assets/images/logo/logo.svg" alt="Logo"></a>
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
                                        <li><a href="#">User Dashboard</a></li>
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
                                        <input name="EMAIL" placeholder="Your email address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email">
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
    <script src="{{ asset('assets/js/dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>

        $(document).ready(function() {
            function loadskills() {
                $("#manage-account-skills-container").empty();
                $.ajax({
                    url: "{{ route('applicant.profile.skills.get') }}",
                    method: "GET",
                    dataType: "JSON",
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        let skills = e.data.skills;

                        $.each(skills, function(key, item) {
                            let exp = "";
                            let badge = "";

                            switch(item.experience_level) {
                                case "beginner": exp = "secondary"; break;
                                case "intermediate": exp = "primary"; break;
                                case "proficient": exp = "success"; break;
                            }

                            badge = "<span class='badge badge-"+exp+" skill-badge'><p>"+item.skill_name+"</p> <p class='badge-remove-skill-btn' data-skill_id='"+item.id+"' data-skill_name='"+item.skill_name+"'>x<p></span>";
                            $("#manage-account-skills-container").append(badge);
                        });
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
            }

            loadskills();

            let jobtable = $("#job-table").DataTable({
                ajax: {
                    url: "{{ route('employer.job.list') }}",
                    method: "GET"
                },
                columns: [
                    {data: "title"},
                    {data: "category"},
                    {data: "company_name"},
                    {data: function(e) {
                        let badge = "";
                        let data = {"Onsite": "success","Work from Home": "primary","Hybrid": "secondary"};

                        $.each(data, function(key, item) {
                            if (e.arrangement == key) {
                                badge = "<span class='badge badge-" + item + " badge-sm'>" + key + "</span>";
                            }
                        });

                        return badge;
                    }},
                    {data: "location"},
                    {data: function(e) {
                        return "<div class='d-flex justify-content-start'><span class='badge badge-sm badge-primary mr-1'><i class='fas fa-dollar-sign mr-1'></i>" + e.min_salary + "-" + e.max_salary + "</span><span class='badge badge-sm badge-secondary mr-1'><i class='fas fa-user mr-1'></i>"+e.applications+"</span></div>";
                    }},
                    {data: function(e) {
                        return "<button class='btn btn-sm btn-secondary'><i class='fas fa-xs fa-caret-down'></i></button>";
                    }},
                ],
                columnDefs: [{
                    targets: [3],
                    className: "text-start"
                }],
                searching: true,
                paging: true
            });

            let profilecompanytable = $("#profile-company-table").DataTable({
                ajax: {
                    url: "{{ route('getcurrentcompany') }}",
                    method: "GET"
                },
                searching: false,
                paging: false,
                ordering: false,
                info: false,
                columns: [
                    {data: function(e) {
                        return "<div class='d-flex justify-content-center'><img class='img-fluid rounded-circle' src="+e.logo_path+" style='width: 50px; height: 50px;'></img><div>";
                    }},
                    {data: "name"},
                    {data: "address"},
                    {data: function(e) {
                        return "<a href="+e.url+">"+e.url+"<a>";
                    }}
                ]
            });

            let selectioncompanytable = $("#selection-company-table").DataTable({
                data: [],
                method: "GET",
                searching: true,
                paging: true,
                ordering: false,
                info: true,
                columns: [
                    {data: function(e) {
                        return "<div class='d-flex justify-content-center'><img class='img-fluid rounded-circle' src="+e.logo_path+" style='width: 50px; height: 50px;'></img><div>";
                    }},
                    {data: "name"},
                    {data: function(e) {
                        return "<a href="+e.url+">"+e.url+"<a>";
                    }},
                    {data: "address"},
                    {data: function(e) {
                        return "<div class='d-flex align-items-center justify-content-around'><button id='select-company' class='btn btn-primary btn-sm'>select</button></div>";
                    }}
                ]
            });

            $("#search-company-modal").on("shown.bs.modal", function() {

                if(profilecompanytable.rows().count() > 0) {
                    $(this).modal("hide");
                    Swal.fire({
                        toast: true,
                        icon: 'warning',
                        title: 'Already Exists!',
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    });
                    return;
                }

                $.ajax({
                    url: "{{ route('employer.getcompanies') }}",
                    method: "GET",
                    dataType: "JSON",
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        selectioncompanytable.clear().draw();
                        selectioncompanytable.rows.add(e.data).draw();
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
                })
                
            });

            $("#selection-company-table tbody").on("click", "#select-company", function() {
                let data = selectioncompanytable.row($(this).closest("tr")).data();

                $.ajax({
                    url: "{{ route('employer.selectcompany') }}",
                    method: "POST",
                    dataType: "JSON",
                    headers: {
                        'X-CSRF-TOKEN': $("meta[name=csrf-token]").attr("content")
                    },
                    data: {
                        id: data.id,
                        name: data.name 
                    },
                    success: function(e) {
                        profilecompanytable.clear().draw();
                        profilecompanytable.rows.add(e.data).draw();
                        $("#search-company-modal").modal("hide");
                         Swal.fire({
                            toast: true,
                            icon: 'success',
                            title: e.message,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
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
                
            })


            $("#save-job-btn").on("click", function() {
                let uuid = $(this).data("slug");
                    
                $.ajax({
                    url: "{{ route('applicant.job.store') }}",
                    method: "POST",
                    dataType: "JSON",
                    data: {
                        uuid: uuid
                    },
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                    },
                    success: function(e) {
                        let icon = e.code == 201 ? "success" : "info";

                        Swal.fire({
                            toast: true,
                            icon: icon,
                            title: e.message,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
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

            $(".removed-saved-job").on("click", function() {
                let uuid = $(this).data("uuid");
                let url = "/applicant/job/saved/:uuid/remove";
                url = url.replace(":uuid", uuid);

                $.ajax({
                    url: url,
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                    },
                    data: {
                        uuid: uuid
                    },
                    success: function() {
                        window.location.reload();
                        Swal.fire({
                            toast: true,
                            icon: icon,
                            title: e.message,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
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

            $("#apply-job-btn").on("click", function() {
                let uuid = $(this).data("slug");

                Swal.fire({
                    title: "Confirmation",
                    text: "Are you sure?",
                    icon: "warning",
                    showConfirmButton: true,
                    confirmButtonText: "Yes, im sure",
                    confirmButtonColor: "#007bff",
                    showCancelButton: true,
                    reverseButtons: true
                }).then((result) => {
                    $("#validate-application-title-message").empty();
                    $("#validate-application-list").empty();

                    if(result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('applicant.job.application.validate') }}",
                            method: "POST",
                            dataType: "JSON",
                            headers: {
                                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                            },
                            data: {
                                uuid: uuid
                            },
                            success: function(e) {
                                if(e.code == 200) {
                                    return;
                                } 

                                $("#validate-application-modal").modal("show");
                                $("#validate-application-title-message").text(e.message);

                                $.each(e.data, function(key, item) {
                                    let list = "<li class='validate-application-list-item'>"+item+"</li>";
                                    $("#validate-application-list").append(list);
                                });
                            },
                            error : function() {
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
                    }
                });
            });

            $("#manage-account-det-btn").on("click", function() {
                $("#manage-account-det-modal").modal("show");
            });

            $("#manage-account-det-updatebtn").on("click", function() {
                let data = {};
                let fields = ["first_name", "middle_name", "last_name", "email" ,"address", "mobile_no", "birthdate"];

                $.each(fields, function(key, item) {
                    data[item] = $("input[name=account-profile-"+item+"]").val();
                    $(".error-message").empty();
                    $("input[name=account-profile-"+item+"]").removeClass("is-invalid");
                });

                Swal.fire({
                    title: "Info!",
                    text: "Are you sure?",
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonText: "Yes, i'm sure",
                    confirmButtonColor: "#0275d8",
                    reverseButtons: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('applicant.profile.det.update') }}",
                            method: "POST",
                            dataType: "JSON",
                            headers: {
                                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                            },
                            data: data,
                            success: function(e) {
                                if(e.result) {
                                    $("#manage-account-det-modal").modal("hide");
                                    Swal.fire({
                                        toast: true,
                                        icon: "success",
                                        title: e.message,
                                        position: "top-end",
                                        showConfirmButton: false,
                                        timer: 3000
                                    });
                                    window.location.reload();
                                    return;
                                }

                                Swal.fire({
                                    toast: true,
                                    icon: "warning",
                                    title: e.message,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                $.each(e.data.errors, function(key, item) {
                                    $("input[name=account-profile-"+key+"]").addClass("is-invalid");
                                    $("input[name=account-profile-"+key+"]").closest(".form-group").find(".error-message").text(item);
                                });
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
                    }
                });
            });

            $("#manage-account-skills-btn").on("click", function() {
                $("#manage-account-skills-modal").modal("show");
            });

            $("#manage-account-skills-addbtn").on("click", function() {
                let fields = ["skill_name", "experience_level"];

                $.each(fields, function(key, item) {
                    $("input[name=manage-account-"+item+"]").removeClass("is-invalid");
                    $("select[name=manage-account-"+item+"]").removeClass("is-invalid");
                    $(".error-message").empty();
                });

                Swal.fire({
                    title: "Info!",
                    text: "Are you sure?",
                    icon: "info",
                    showCancelButton: true,
                    confirmButtonText: "Yes, i'm sure",
                    confirmButtonColor: "#0275d8",
                    reverseButtons: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('applicant.profile.skills.add') }}",
                            method: "POST",
                            dataType: "JSON",
                            headers: {
                                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                            },
                            data: {
                                skill_name: $("input[name=manage-account-skill_name]").val(),
                                experience_level: $("select[name=manage-account-experience_level]").val()
                            },
                            success: function(e) {
                                if(e.result) {
                                    loadskills();
                                    $("#manage-account-skills-modal").modal("hide");
                                    $.each(fields, function(key, item) {
                                        $("input[name=manage-account-"+item+"]").val("");
                                        $("select[name=manage-account-"+item+"] option:first").prop("selected", true);
                                    });

                                    Swal.fire({
                                        toast: true,
                                        icon: "success",
                                        title: e.message,
                                        position: "top-end",
                                        showConfirmButton: false,
                                        timer: 3000
                                    });

                                    return;
                                }

                                 Swal.fire({
                                    toast: true,
                                    icon: "warning",
                                    title: e.message,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 3000
                                });

                                $.each(e.data.errors, function(key, item) {
                                    $("input[name=manage-account-"+key+"]").addClass("is-invalid");
                                    $("select[name=manage-account-"+key+"]").addClass("is-invalid");
                                    $("input[name=manage-account-"+key+"]").closest(".form-group").find(".error-message").text(item);
                                    $("select[name=manage-account-"+key+"]").closest(".form-group").find(".error-message").text(item);
                                });
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
                    }
                });
            });

            $("#manage-account-skills-container").on("click", ".badge-remove-skill-btn", function() {
                let skillid = $(this).data("skill_id"); 
                let skillname = $(this).data("skill_name");

                Swal.fire({
                    title: "Warning!",
                    text: "Are you sure you want to remove "+ skillname +"?",
                    icon: "warning",
                    confirmButtonText: "Yes, i'm sure",
                    showCancelButton: true,
                    confirmButtonColor: "#0275d8",
                    reverseButtons: true
                }).then((result) => {
                    if(result.isConfirmed) {
                        $.ajax({
                            url: "{{ route('applicant.profile.skills.remove') }}",
                            method: "POST",
                            dataType: "JSON",
                            headers: {
                                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                            },
                            data: {
                                skillid: skillid,
                                skillname: skillname
                            },
                            success: function(e) {
                                if(e.result) {
                                    loadskills();
                                     Swal.fire({
                                        toast: true,
                                        icon: "success",
                                        title: e.message,
                                        position: "top-end",
                                        showConfirmButton: false,
                                        timer: 3000
                                    });
                                    return;
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


</body></html>