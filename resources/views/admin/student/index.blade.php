
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>:: e-Learn:: Education Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- plugin css file  -->
    <link rel="stylesheet" href="../node_modules/owl.carousel2/dist/assets/owl.carousel.min.css" />
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/e-learn.style.min.css') }}">
</head>
<body>

<div id="elearn-layout" class="theme-purple">
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-4  me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.html" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                        <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z"/>
                        <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    </svg>
                </span>
                <span class="logo-text">e-Learn</span>
            </a>
            <!-- Menu: main ul -->
            <ul class="menu-list flex-grow-1 mt-3">
                <li><a class="m-link active" href="index.html"><i class="icofont-ui-home"></i><span>Dashboard</span></a></li>
                <li><a class="m-link" href="classes.html"><i class="icofont-read-book-alt"></i> <span>Classes</span></a></li>
                <li><a class="m-link" href="students.html"><i class="icofont-group-students"></i> <span>Students</span></a></li>
                <li class="collapsed"><a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Teachers" href="#"><i class="icofont-teacher"></i><span>Teachers</span><span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <ul class="sub-menu collapse" id="menu-Teachers">
                        <li><a class="ms-link" href="all-teachers.html"><span>Teachers</span></a></li>
                        <li><a class="ms-link" href="teachers-info.html"><span>Teachers Profile</span></a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="video-class.html"><i class="icofont-black-board"></i> <span>Video Classes</span></a></li>
                <li class="collapsed"><a class="m-link" data-bs-toggle="collapse" data-bs-target="#corses-Components" href="#"><i class="icofont-certificate"></i> <span>Courses</span><span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <ul class="sub-menu collapse" id="corses-Components">
                        <li><a class="ms-link" href="courses.html"><span>Courses</span></a></li>
                        <li><a class="ms-link" href="purchase.html"><span>Course Purchase</span></a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="chat.html"><i class="icofont-ui-text-chat"></i> <span>Massages</span></a></li>
                <li><a class="m-link" href="reviews.html"><i class="icofont-match-review"></i> <span>Reviews</span></a></li>
                <li><a class="m-link" href="file-storage/index.html"><i class="icofont-cloud-upload"></i> <span>File Cloud</span></a></li>
                <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint"></i> <span>UI Components</span></a></li>
            </ul>
            <!-- Theme: Switch Theme -->
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-rtl">
                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                    </div>
                </li>
            </ul>
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">
    
                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            <div class="avatar-list avatar-list-stacked px-3">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                            </div>
                        </div>
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">14</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Molly Cornish</span> <small>2MIN</small></p>
                                                            <span class="">Added  2021-02-19 e-Learn links_no_expiration_report.csv <span class="badge bg-success">Review</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Server added Get Started with e-Learn.pdf</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Server added Document.docx</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
                                                            <span class="">Add folder on Server</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
                                                            <span class="">Delete folder on Server</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
                                                            <span class="">The generated Lorem Ipsum</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Molly Cornish</span></p>
                                <small>Student Profile</small>
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="../dist/assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="../dist/assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
                                                <p class="mb-0"><span class="font-weight-bold">Molly Cornish</span></p>
                                                <small class="">molly.cornish@gamil.com</small>
                                            </div>
                                        </div>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="students.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-graduate-alt fs-6 me-3"></i>Student Profile</a>
                                        <a href="video-class.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-black-board fs-6 me-3"></i>Video Class</a>
                                        <a href="../dist/ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="../dist/ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- menu toggler -->
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
                        <span class="fa fa-bars"></span>
                    </button>
    
                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
    
                </div>
            </nav>
        </div>

        <!-- Body: Body -->
        <div class="body d-flex py-lg-3 py-md-2">
            <div class="container-xxl">
                <div class="row clearfix g-3">
                    <div class="col-lg-8 col-md-12 flex-column">
                        <div class="row row-deck g-3">
                            <div class="col-12 col-xl-6 col-lg-12">
                                <div class="card mb-3 color-bg-200">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-lg-5 order-lg-2">
                                                <div class="text-center p-4">
                                                    <img src="assets/images/study.svg" alt="..." class="img-fluid set-md-img">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-7 order-lg-1">
                                                <h3 class=" mb-3">Welcome back, <span class="fw-bold">Molly</span></h3>
                                                <p class="line-height-custom mb-0">Your Study Completed <span class="secondary-color">72%</span> of the tasks.</p>
                                                <p class="line-height-custom">Progress is  <span class="secondary-color">Very good!</span></p>
                                                <a class="btn bg-secondary text-light btn-lg lift" href="http://pixelwibes.com/" target="_blank">Free Inquire</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-6 col-lg-12">
                                <div class="card mb-3 bg-secondary">
                                    <div class="card-body text-white d-flex flex-column">
                                        <div class="d-flex align-items-center mb-auto mt-3">
                                            <div><i class="icofont-license fs-1"></i></div>
                                            <div class="flex-fill ms-3 text-truncate">
                                                <h5 class="mb-0">Advanced Learner</h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h4>Level 3</h4>
                                            <span class="small"> 2 Course, 25 Point to reach Level 4</span>
                                        </div>
                                        <div class="progress" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning ms-1" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning ms-1" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 color-bg-200">
                            <div class="card-header py-3">
                                <h6 class="mb-0 fw-bold ">Time Spending on Learning</h6>
                            </div>
                            <div class="card-body">
                                <div id="apex-basic-column"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="card-header py-3 px-0 no-bg border-0 bg-transparent">
                                <h6 class="mb-0 fw-bold ">Other Courses </h6>
                                <span class="text-muted">some other courses to join now </span>
                            </div>
                            <div class="row row-deck">
                                <div class="col-md-12">
                                    <div class="owl-carousel owl-theme owl-carouseltwo">
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="lesson_name">
                                                            <h6 class="mb-0 fw-bold  fs-6  mb-2">Environmental Engineering</h6>
                                                        </div>
                                                        <div class="btn-group dropup">
                                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar12.jpg" alt=""></div>
                                                        <div class="flex-fill ms-2 text-truncate">
                                                            <div class="">Diane Fisher</div>
                                                        </div>
                                                        <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-files-stack "></i>
                                                                <span class="ms-2">15 Lessons</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-timer "></i>
                                                                <span class="ms-2">3 Month</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-group-students "></i>
                                                                <span class="ms-2">320 Students</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-rating "></i>
                                                                <span class="ms-2">4.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h4 class="small fw-bold mb-0">Students Join</h4>
                                                        <span class="small">Student Bench 400</span>
                                                    </div>
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="lesson_name">
                                                            <h6 class="mb-0 fw-bold  fs-6  mb-2">Farm Management</h6>
                                                        </div>
                                                        <div class="btn-group dropup">
                                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar10.jpg" alt=""></div>
                                                        <div class="flex-fill ms-2 text-truncate">
                                                            <div class="">Andrea Gill</div>
                                                        </div>
                                                        <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-files-stack "></i>
                                                                <span class="ms-2">52 Lessons</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-timer "></i>
                                                                <span class="ms-2">4 Month</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-group-students "></i>
                                                                <span class="ms-2">120 Students</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-rating "></i>
                                                                <span class="ms-2">4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h4 class="small fw-bold mb-0">Students Join</h4>
                                                        <span class="small">Student Bench 150</span>
                                                    </div>
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="lesson_name">
                                                            <h6 class="mb-0 fw-bold  fs-6  mb-2">Oil & Gas Operations</h6>
                                                        </div>
                                                        <div class="btn-group dropup">
                                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt=""></div>
                                                        <div class="flex-fill ms-2 text-truncate">
                                                            <div class="">Andrea Gill</div>
                                                        </div>
                                                        <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-files-stack "></i>
                                                                <span class="ms-2">52 Lessons</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-timer "></i>
                                                                <span class="ms-2">2 Month</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-group-students "></i>
                                                                <span class="ms-2">220 Students</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-rating "></i>
                                                                <span class="ms-2">4.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h4 class="small fw-bold mb-0">Students Join</h4>
                                                        <span class="small">Student Bench 350</span>
                                                    </div>
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="lesson_name">
                                                            <h6 class="mb-0 fw-bold  fs-6  mb-2">Telecommunications</h6>
                                                        </div>
                                                        <div class="btn-group dropup">
                                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt=""></div>
                                                        <div class="flex-fill ms-2 text-truncate">
                                                            <div class="">Karen Clark</div>
                                                        </div>
                                                        <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-files-stack "></i>
                                                                <span class="ms-2">12 Lessons</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-timer "></i>
                                                                <span class="ms-2">28 Days</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-group-students "></i>
                                                                <span class="ms-2">78 Students</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-rating "></i>
                                                                <span class="ms-2">4.5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h4 class="small fw-bold mb-0">Students Join</h4>
                                                        <span class="small">Student Bench 100</span>
                                                    </div>
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="lesson_name">
                                                            <h6 class="mb-0 fw-bold  fs-6  mb-2">Power and Energy Engineering</h6>
                                                        </div>
                                                        <div class="btn-group dropup">
                                                            <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                            <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                                <li><a class="dropdown-item" href="#">Share</a></li>
                                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar"><img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt=""></div>
                                                        <div class="flex-fill ms-2 text-truncate">
                                                            <div class="">Karen Clark</div>
                                                        </div>
                                                        <a href="courses.html" class="btn btn-primary btn-sm" alt="join">Join Now</a>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="row g-2">
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-files-stack "></i>
                                                                <span class="ms-2">52 Lessons</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-timer "></i>
                                                                <span class="ms-2">2 Month</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-group-students "></i>
                                                                <span class="ms-2">88 Students</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-flex align-items-center">
                                                                <i class="icofont-ui-rating "></i>
                                                                <span class="ms-2">4</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dividers-block"></div>
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <h4 class="small fw-bold mb-0">Students Join</h4>
                                                        <span class="small">Student Bench 100</span>
                                                    </div>
                                                    <div class="progress" style="height: 8px;">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 25%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 25%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                        <div class="progress-bar bg-secondary ms-1" role="progressbar" style="width: 32%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card mb-3 color-bg-200">
                            <div class="card-body">
                                <div class="daily_practice">
                                    <h6 class="mb-3 fw-bold ">Daily Practice</h6>
                                    <div class="row g-2">
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                            <div class="card bg-lightblue ">
                                                <div class="card-body">
                                                    <h6 class="fw-bold mb-0 color-defult color-defult">Online Talking</h6>
                                                    <small class="color-defult">#Listening</small>
                                                    <div class="duration d-flex align-items-center justify-content-between pt-5">
                                                        <span class="fw-bold color-defult">20Min</span>
                                                        <span class="fw-bold color-careys-pink"><i class="icofont-listening fs-2"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-12 col-xl-6">
                                            <div class="card bg-lightgreen ">
                                                <div class="card-body">
                                                    <h6 class="fw-bold mb-0 color-defult"> Lesson 3</h6>
                                                    <small class="color-defult">#Video Call</small>
                                                    <div class="duration d-flex align-items-center justify-content-between pt-5">
                                                        <span class="fw-bold color-defult">15Min</span>
                                                        <span class="fw-bold color-careys-pink"><i class="icofont-video-cam fs-2"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dividers-block"></div>
                                <div class="team_members">
                                    <h6 class="mb-3 fw-bold ">Your College Mates</h6>
                                    <div class="owl-carousel owl-theme owl-carouselone">
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar3.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Peter Bower</h6>
                                        </div>
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar5.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Joshu Turn</h6>
                                        </div>
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar8.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Ryan Bell</h6>
                                        </div>
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar9.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Sean	Jones</h6>
                                        </div>
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar11.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Max Morg</h6>
                                        </div>
                                        <div class="item text-center">
                                            <img src="assets/images/sm/avatar10.jpg" alt="" class="rounded-3 img-thumbnail shadow-sm">
                                            <h6 class="mb-0 rounded-3">Colin Rees</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="dividers-block"></div>
                                <div class="upcoming-lessons">
                                    <h6 class="mb-3 fw-bold ">Upcoming-Lessons</h6>
                                    <div class="card line-lightblue mb-3">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lesson_name">
                                                    <h6 class="mb-0 fw-bold ">Civil Law</h6>
                                                    <small class="text-muted">Thu 15, 4 PM to 6 PM</small>
                                                </div>
                                                <div class="btn-group dropup">
                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-5">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                                </div>
                                                <div class="add_lession_person avatar-list">
                                                    <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card line-lightgreen">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="lesson_name">
                                                    <h6 class="mb-0 fw-bold ">Arts and Design</h6>
                                                    <small class="text-muted">Thu 15, 2 PM to 4 PM</small>
                                                </div>
                                                <div class="btn-group dropup">
                                                    <a href="#" class="nav-link py-2 px-3 text-muted" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <ul class="dropdown-menu border-0 shadow dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                                        <li><a class="dropdown-item" href="#">Share</a></li>
                                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-5">
                                                <div class="avatar-list avatar-list-stacked">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar9.jpg" alt="">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar10.jpg" alt="">
                                                </div>
                                                <div class="add_lession_person avatar-list">
                                                    <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-dark mb-3">
                            <div class="card-body">
                                <div class="card-header py-3">
                                    <h6 class="mb-0 fw-bold text-white">Are you ready next lessons </h6>
                                </div>
                                <div class="digital-clock d-flex justify-content-center align-items-center min-height-220">
                                    <figure>
                                        <div class="face top"><p id="s"></p></div>
                                        <div class="face front"><p id="m"></p></div>
                                        <div class="face left"><p id="h"></p></div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>
        </div>

        <!-- Modal Members-->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Invite Friend's</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Members Invite" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-dark" type="button" id="button-addon2">Members Invite</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Members of e-Learn</h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#" class="link-secondary ms-2">(Resend invitation)</a></h6>
                                        <span class="text-muted">lucas.baker@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                        Member
                                                    <span>Can view, edit, delete, comment on and save files</span>
                                                   </a>
                                                   
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                            Admin
                                                        <span>Member, but can invite and manage team members</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div class="d-flex align-items-center flex-column flex-sm-column flex-md-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                        <span class="text-muted">una.coleman@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                              <li>
                                                  <a class="dropdown-item" href="#">
                                                    <i class="icofont-check-circled"></i>
                                                        Member
                                                    <span>Can view, edit, delete, comment on and save files</span>
                                                   </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                            Admin
                                                        <span>Member, but can invite and manage team members</span>
                                                       </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-transparent dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a></li>
                                                  <li><a class="dropdown-item" href="#"><i class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="../node_modules/owl.carousel2/dist/owl.carousel.min.js"></script>
<script src="assets/bundles/apexcharts.bundle.js"></script> 

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script src="../js/page/elearn-index.js"></script>
</body>
</html>