<!DOCTYPE html>
<html lang="en">
    <!-- Mirrored from demos.creative-tim.com/marketplace/soft-ui-dashboard-pro/pages/dashboards/crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 17:21:05 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
        <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
        <title>
            Soft UI Dashboard PRO by Creative Tim
        </title>
        <!--  Social tags      -->
        <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css%2bowl.carousel.min.css%2bmagnific-popup.css%2bfont-awesome.min.css%2bthemify-icons.css%2bnice-select.css%2bflaticon.css%2bgijgo.css%2banimat')}}" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/admin/css/nucleo-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/admin/css/nucleo-svg.css') }}" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="../../../../../kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- CSS Files -->
        <link href="{{ asset('assets/admin/css/soft-ui-dashboard.mine166.css?v=1.0.4') }}" rel="stylesheet" />
    </head>

    <body class="g-sidenav-show bg-gray-100">


        @include('admin.includes.sidebar')

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                    </nav>
                    <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none">
                        <a href="javascript:;" class="nav-link text-body p-0">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                                <i class="sidenav-toggler-line"></i>
                            </div>
                        </a>
                    </div>
                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Type here..." />
                            </div>
                        </div>
                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item d-flex align-items-center">
                                <a href="https://demos.creative-tim.com/marketplace/soft-ui-dashboard-pro/pages/authentication/signin/illustration.html" class="nav-link text-body font-weight-bold px-0" target="_blank">
                                    <i class="fa fa-user me-sm-1"></i>
                                    <span class="d-sm-inline d-none">Sign In</span>
                                </a>
                            </li>
                            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                        <i class="sidenav-toggler-line"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item px-3 d-flex align-items-center">
                                <a href="javascript:;" class="nav-link text-body p-0">
                                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </main>

        

        <script src="{{ asset('assets/admin/js/core/popper.min.js') }}"></script>
        
        <script src="{{ asset('assets/admin/js/multistep.js') }}"></script>

        <script src="{{ asset('assets/admin/js/core/bootstrap.min.js') }}"></script>

        <script src="{{ asset('assets/admin/js/plugins/perfect-scrollbar.min.js') }}"></script>

        <script src="{{ asset('assets/admin/js/plugins/smooth-scrollbar.min.js') }}"></script>

        <script src="{{ asset('assets/admin/js/plugins/fullcalendar.min.js') }}"></script>

        <!-- Kanban scripts -->
    
        <script src="{{ asset('assets/admin/js/plugins/dragula/dragula.min.js') }}"></script>

        <script src="{{ asset('assets/admin/js/plugins/jkanban/jkanban.js') }}"></script>

        <script src="{{ asset('assets/admin/js/plugins/chartjs.min.js') }}"></script>
        
        <script>
            var ctx1 = document.getElementById("chart-line-1").getContext("2d");

            var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

            gradientStroke1.addColorStop(1, "rgba(203,12,159,0.02)");
            gradientStroke1.addColorStop(0.2, "rgba(72,72,176,0.0)");
            gradientStroke1.addColorStop(0, "rgba(203,12,159,0)"); //purple colors

            var ctx2 = document.getElementById("chart-line-2").getContext("2d");

            new Chart(ctx1, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [
                        {
                            label: "Visitors",
                            tension: 0.5,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#cb0c9f",
                            borderWidth: 2,
                            backgroundColor: gradientStroke1,
                            data: [50, 45, 60, 60, 80, 65, 90, 80, 100],
                            maxBarThickness: 6,
                            fill: true,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                    },
                },
            });

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [
                        {
                            label: "Income",
                            tension: 0.5,
                            borderWidth: 0,
                            pointRadius: 0,
                            borderColor: "#cb0c9f",
                            borderWidth: 2,
                            backgroundColor: gradientStroke1,
                            data: [60, 80, 75, 90, 67, 100, 90, 110, 120],
                            maxBarThickness: 6,
                            fill: true,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                callback: function (value, index, values) {
                                    return "$" + value;
                                },
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#9ca2b7",
                            },
                        },
                    },
                },
            });
        </script>
        <script>
            var win = navigator.platform.indexOf("Win") > -1;
            if (win && document.querySelector("#sidenav-scrollbar")) {
                var options = {
                    damping: "0.5",
                };
                Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="../../../../../buttons.github.io/buttons.js"></script>
        <script src="{{ asset('assets/admin/js/soft-ui-dashboard.mine166.js?v=1.0.4') }}"></script>
    </body>
</html>