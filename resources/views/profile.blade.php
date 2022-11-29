<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:28:44 GMT -->
<head>
    <meta charset="UTF-8">
    <title>{{\Illuminate\Support\Facades\Auth::user()->first_name}} Dashboard</title>
    <link rel="shortcut icon" href="dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet"  href="dist/vendors/chartjs/Chart.min.css">
    <!-- END: Page CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="dist/vendors/morris/morris.css">
    <link rel="stylesheet" href="dist/vendors/weather-icons/css/pe-icon-set-weather.min.css">
    <link rel="stylesheet" href="dist/vendors/chartjs/Chart.min.css">
    <link rel="stylesheet" href="dist/vendors/starrr/starrr.css">
    <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="dist/vendors/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->
<body id="main-container" class="default">

<!-- START: Pre Loader-->
<div class="se-pre-con">
    <div class="loader"></div>
</div>
<!-- END: Pre Loader-->

<!-- START: Header-->
<div id="header-fix" class="header fixed-top">
    <div class="site-width">
        <nav class="navbar navbar-expand-lg  p-0">
            <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                <a href="index.html" class="horizontal-logo text-left">
                    <svg height="20pt" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" width="20pt" xmlns="http://www.w3.org/2000/svg">
                        <g transform="matrix(.1 0 0 -.1 0 512)" fill="#1e3d73">
                            <path d="m1450 4481-1105-638v-1283-1283l1106-638c1033-597 1139-654 1139-619 0 4-385 674-855 1489-470 814-855 1484-855 1488 0 8 1303 763 1418 822 175 89 413 166 585 190 114 16 299 13 408-5 100-17 231-60 314-102 310-156 569-509 651-887 23-105 23-331 0-432-53-240-177-460-366-651-174-175-277-247-738-512-177-102-322-189-322-193s104-188 231-407l231-400 46 28c26 15 360 207 742 428l695 402v1282 1282l-1105 639c-608 351-1107 638-1110 638s-502-287-1110-638z"/><path d="m2833 3300c-82-12-190-48-282-95-73-36-637-358-648-369-3-3 580-1022 592-1034 5-5 596 338 673 391 100 69 220 197 260 280 82 167 76 324-19 507-95 184-233 291-411 320-70 11-89 11-165 0z"/>
                        </g>
                    </svg> <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">PICK</span>
                </a>
            </div>
            <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
            </div>

            <form class="float-left d-none d-lg-block search-form">
                <div class="form-group mb-0 position-relative">
                    <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                    <div class="btn-search position-absolute top-0">
                        <a href="#"><i class="h6 icon-magnifier"></i></a>
                    </div>
                    <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>
                    </a>

                </div>
            </form>
            <div class="navbar-right ml-auto h-100">
                <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                    <li class="d-inline-block align-self-center  d-block d-lg-none">
                        <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>
                        </a>
                    </li>

                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <form id="myForm" action="{{route('logout')}}" method="post">
                                @csrf
                            <a href="#" onclick="document.getElementById('myForm').submit();" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            </form>
                        </div>

                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- END: Header-->

<!-- START: Main Menu-->
<div class="sidebar">
    <div class="site-width">
        <!-- START: Menu-->
        <ul id="side-menu" class="sidebar-menu">
            <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Hello {{\Illuminate\Support\Facades\Auth::user()->first_name}}</a>
                <ul>
                    <li class="active"><a href="{{url('admin')}}"><i class="icon-rocket"></i> Dashboard</a></li>
                    <li><a href="{{url('invoice')}}"><i class="icon-docs"></i>Payments</a></li>
                </ul>
            </li>
        </ul>
        <!-- END: Menu-->
        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>
</div>
<!-- END: Main Menu-->

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <button class="btn btn-primary" data-toggle="modal" data-target="#wantToPay">PAY</button> <button class="btn btn-warning" data-toggle="modal" data-target="#editprofile">Update Profile</button>
                    </div>
                    <div class="modal fade" id="editprofile">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        <i class="icon-pencil"></i> Edit <b>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</b> Profile
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-close"></i>
                                    </button>
                                </div>
                                <form class="edit-invoice-form" action="{{url('editUser')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::id()}}" name="userId">
                                    <input type="hidden" id="userStatus" value="{{\Illuminate\Support\Facades\Auth::user()->status}}">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">First Name</label>
                                            <input type="text" id="first_name" name="first_name" value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}" class="form-control" required="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}" class="form-control" required="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Phone Number</label>
                                            <input type="text" id="phone" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" class="form-control" required="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Email</label>
                                            <input type="email" id="email" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" class="form-control" required="" >
                                        </div>
                                        @if(\Illuminate\Support\Facades\Auth::user()->subscription=='Standard')
                                            <select class="form-select" name="subscription" id="subscription" aria-label="Default select example">
                                            <option value="Standard">Standard Plan 1/=</option>
                                            <option value="Premium">Premium Plan 20/=</option>
                                            <option value="Business">Business Plan 50/=</option>
                                        </select>
                                        @elseif(\Illuminate\Support\Facades\Auth::user()->subscription=='Premium')
                                            <select class="form-select" name="subscription" id="subscription" aria-label="Default select example">
                                                <option value="Premium">Premium Plan 20/=</option>
                                                <option value="Standard">Standard Plan 1/=</option>
                                                <option value="Business">Business Plan 50/=</option>
                                            </select>
                                        @else
                                            <select class="form-select" name="subscription" id="subscription" aria-label="Default select example">
                                                <option value="Business">Business Plan 50/=</option>
                                                <option value="Premium">Premium Plan 20/=</option>
                                                <option value="Standard">Standard Plan 1/=</option>
                                            </select>
                                        @endif
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Amount</label>
                                            <input type="text" id="amount" name="amount" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Duration (Hours)</label>
                                            <input type="text" id="time" name="time" value="{{\Illuminate\Support\Facades\Auth::user()->time}}" class="form-control">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden"  id="userAmount" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}">
                                        <button type="submit" class="btn btn-primary add-todo">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="pay">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">
                                        {{\Illuminate\Support\Facades\Auth::user()->subscription}} Subscription
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i class="icon-close"></i>
                                    </button>
                                </div>
                                <form class="edit-invoice-form">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Phone Number</label>
                                            <input type="text" id="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" class="form-control" required="" >
                                        </div>
                                        <div class="form-group">
                                            <label for="due-date" class="col-form-label">Amount</label>
                                            <input type="text" id="phone" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}" class="form-control" required="" >
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden"  id="edit-date">
                                        <button type="submit" class="btn btn-primary add-todo">PAY</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12 col-lg-12  mt-3">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-sm-6 mt-3">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                            <i class="icon-basket icons card-liner-icon mt-2 text-white"></i>
                                            <div class='card-liner-content'>
                                                <h2 class="card-liner-title text-white">Ksh {{\Illuminate\Support\Facades\Auth::user()->amount}}
                                                    @if(\Illuminate\Support\Facades\Auth::user()->status==0)
                                                    <span class="badge badge-danger text-white">Expired</span>
                                                    @else
                                                        <span class="badge badge-info text-white">Active</span>

                                                    @endif

                                                </h2>
                                                <h6 class="card-liner-subtitle text-white">{{\Illuminate\Support\Facades\Auth::user()->subscription}} Plan</h6>
                                                <h5 style="color:white;">{{\Illuminate\Support\Facades\Auth::user()->time}} Hour</h5>

                                            </div>
                                        </div>
                                        <div id="apex_primary_chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-5 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">
                                <h6 class="card-title">Recent Transactions  </h6>
                                <a href="{{url('invoice')}}" class="btn btn-warning">View All</a>
                            </div>
                            <div class="card-body table-responsive p-0">

                                <table class="table font-w-600 mb-0">
                                    <thead>
                                    <tr>
                                        <th>Code</th>
                                        <th>Name</th>
                                        <th>Amount</th>
                                        <th>Service</th>
                                        <th>Date</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($mpesas as $mpesa)
                                    <tr class="zoom">
                                        <td>{{$mpesa->reference}}</td>
                                        <td>{{$mpesa->senderFirstName}} {{$mpesa->senderMiddleName}} {{$mpesa->senderLastName}}</td>
                                        <td>Ksh {{$mpesa->reference}}</td>
                                        <td>{{$mpesa->subscription}}</td>
                                        <td>{{$mpesa->date}}</td>

                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Modal HTML -->
        <div class="modal fade" id="wantToPay">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            Want to Pay?
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>
                        <div class="modal-body">
                            <p>{{\Illuminate\Support\Facades\Auth::user()->subscription}} Plan {{\Illuminate\Support\Facades\Auth::user()->amount}}/=</p>
                            <div class="form-group">
                                <label for="due-date" class="col-form-label">Phone Number</label>
                                <input type="text" id="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="due-date" class="col-form-label">Amount</label>
                                <input type="text" id="phone" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}" class="form-control" disabled>
                            </div>
                            <p>Update Profile for Changes</p>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden"  id="edit-date">
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" id="userPhone">
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->amount}}" id="userA">
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" id="userEmail">
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->first_name}}" id="first_name">
                            <input type="hidden" value="{{\Illuminate\Support\Facades\Auth::user()->last_name}}" id="last_name">
                            <button id="paySubscription" class="btn btn-primary add-todo">PAY</button>
                        </div>
                </div>
            </div>
        </div>
        <!-- Modal HTML -->
        <div class="modal" id="processing" data-backdrop="static">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="loading-spinner mb-2"></div>
                        <div id="pleaseOne">Please Wait</div>
                        <div id="pleaseTwo">PLEASE INPUT PIN</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->
<!-- START: Footer-->
<footer class="site-footer">
    2022 © Peter Irungu
</footer>
<!-- END: Footer-->


<!-- START: Back to top-->
<a href="#" class="scrollup text-center">
    <i class="icon-arrow-up"></i>
</a>
<!-- END: Back to top-->
<style>
    .loading-spinner{
        width:30px;
        height:30px;
        border:2px solid indigo;
        border-radius:50%;
        border-top-color:#0001;
        display:inline-block;
        animation:loadingspinner .7s linear infinite;
    }
    @keyframes loadingspinner{
        0%{
            transform:rotate(0deg)
        }
        100%{
            transform:rotate(360deg)
        }
    }
    .dottet-loader{
        height: 100px;
        width: 100px;
        border-color: #5e35b1;
        border-style: solid solid dotted dotted;
        border-width: 5px;
        border-radius: 50%;
        animation: turn-left 2s infinite linear;
        -webkit-animation: turn-left 2s infinite linear;
    }
    /* second circle */
    .dottet-loader::before{
        content: "";
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        margin: auto;
        border: 2px wheat;
        border-style: solid dotted;
        height: 50px;
        width: 50px;
        border-radius: 50%;
        position: absolute;
        animation: turn-right 1s infinite linear;
        -webkit-animation: turn-right 1s infinite linear;
    }
    @keyframes turn-left {
        from{
            transform:rotate(0) ;
            -webkit-transform:rotate(0) ;
            -moz-transform:rotate(0) ;
            -ms-transform:rotate(0) ;
            -o-transform:rotate(0) ;
        }
        to{
            transform: rotate(1turn);
            -webkit-transform: rotate(1turn);
            -moz-transform: rotate(1turn);
            -ms-transform: rotate(1turn);
            -o-transform: rotate(1turn);
        }

    }
    @keyframes turn-right {
        from{
            transform:rotate(0) ;
            -webkit-transform:rotate(0) ;
            -moz-transform:rotate(0) ;
            -ms-transform:rotate(0) ;
            -o-transform:rotate(0) ;
        }
        to{
            transform: rotate(-1turn);
            -webkit-transform: rotate(-1turn);
            -moz-transform: rotate(-1turn);
            -ms-transform: rotate(-1turn);
            -o-transform: rotate(-1turn);
        }

    }

    .modal-confirm {
        color: #434e65;
        width: 525px;
    }
    .modal-confirm .modal-content {
        padding: 20px;
        font-size: 16px;
        border-radius: 5px;
        border: none;
    }
    .modal-confirm .modal-header {
        background: #47c9a2;
        border-bottom: none;
        position: relative;
        text-align: center;
        margin: -20px -20px 0;
        border-radius: 5px 5px 0 0;
        padding: 35px;
    }
    .modal-confirm h4 {
        text-align: center;
        font-size: 36px;
        margin: 10px 0;
    }
    .modal-confirm .form-control, .modal-confirm .btn {
        min-height: 40px;
        border-radius: 3px;
    }
    .modal-confirm .close {
        position: absolute;
        top: 15px;
        right: 15px;
        color: #fff;
        text-shadow: none;
        opacity: 0.5;
    }
    .modal-confirm .close:hover {
        opacity: 0.8;
    }
    .modal-confirm .icon-box {
        color: #fff;
        width: 95px;
        height: 95px;
        display: inline-block;
        border-radius: 50%;
        z-index: 9;
        border: 5px solid #fff;
        padding: 15px;
        text-align: center;
    }
    .modal-confirm .icon-box i {
        font-size: 64px;
        margin: -4px 0 0 -4px;
    }
    .modal-confirm.modal-dialog {
        margin-top: 80px;
    }
    .modal-confirm .btn, .modal-confirm .btn:active {
        color: #fff;
        border-radius: 4px;
        background: #eeb711 !important;
        text-decoration: none;
        transition: all 0.4s;
        line-height: normal;
        border-radius: 30px;
        margin-top: 10px;
        padding: 6px 20px;
        border: none;
    }
    .modal-confirm .btn:hover, .modal-confirm .btn:focus {
        background: #eda645 !important;
        outline: none;
    }
    .modal-confirm .btn span {
        margin: 1px 3px 0;
        float: left;
    }
    .modal-confirm .btn i {
        margin-left: 1px;
        font-size: 20px;
        float: right;
    }
    .trigger-btn {
        display: inline-block;
        margin: 100px auto;
    }
</style>

<!-- START: Template JS-->
<script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="dist/vendors/moment/moment.js"></script>
<script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<!-- END: Template JS-->

<!-- START: APP JS-->
<script src="dist/js/app.js"></script>
<!-- END: APP JS-->

<!-- START: Page Vendor JS-->
<script src="dist/vendors/raphael/raphael.min.js"></script>
<script src="dist/vendors/morris/morris.min.js"></script>
<script src="dist/vendors/chartjs/Chart.min.js"></script>
<script src="dist/vendors/starrr/starrr.js"></script>
<script src="dist/vendors/jquery-flot/jquery.canvaswrapper.js"></script>
<script src="dist/vendors/jquery-flot/jquery.colorhelpers.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.saturated.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.browser.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.drawSeries.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.uiConstants.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.legend.js"></script>
<script src="dist/vendors/jquery-flot/jquery.flot.pie.js"></script>
<script src="dist/vendors/chartjs/Chart.min.js"></script>
<script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js"></script>
<script src="dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="dist/vendors/apexcharts/apexcharts.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- START: Page JS-->
<script src="dist/js/home.script.js"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->
<script>
    $(window).on('load', function() {
        var is_already_show = sessionStorage.getItem('alreadyShow');
        if(is_already_show != 'alredy shown'){
            sessionStorage.setItem('alreadyShow','alredy shown')
            $('#pay').modal('show');
        }
        else{
            console.log(is_already_show);
        }
    });
    $('#pleaseTwo').hide()

    $('#paySubscription').on('click',function () {
        $value = $('#userAmount').val();
        $userPhone = $('#userPhone').val();
        $userAmount = $('#userA').val();
        $userEmail = $('#userEmail').val();
        $first_name = $('#first_name').val();
        $last_name = $('#last_name').val();
        $('#wantToPay').modal('hide');
        $('#processing').modal('show');
        $.ajax({
            type:"get",
            url:"{{url('payOne')}}",
            data:{'id':$value,'userPhone':$userPhone,'userAmount':$userAmount,'userEmail':$userEmail,'last_name':$last_name,'first_name':$first_name},
            success:function (data) {
                $('#pleaseOne').hide()
                $('#pleaseTwo').show()
            },
            error:function (error) {
                console.log(error)
                alert('error')

            }

        });
        window.setInterval(event, 5000);
        function event() {
            $value = $('#mpesaTest').val();
            $.ajax({
                type:"get",
                url:"{{url('confirm')}}",
                data:{'id':$value},
                success:function (data) {
                    if (data['status']==1){
                        location.reload();
                    }
                },
                error:function (error) {
                    console.log(error)
                    alert('error')

                }

            });
        }
    });

$('#mpesaTest').click(function () {
    $value = $(this).val();
    $.ajax({
        type:"get",
        url:"{{url('mpesaTest')}}",
        data:{'id':$value},
        success:function (data) {
            alert('ok')
        },
        error:function (error) {
            console.log(error)
            alert('error')

        }

    });
});
$('#subscription').on('change',function () {
    var sub = $(this).val();
    if (sub=='Standard'){
        $('#amount').val('1');
        $('#time').val('1');

    }
    if (sub=='Premium'){
        $('#amount').val('20');
        $('#time').val('2');

    }
    if (sub=='Business'){
        $('#amount').val('50');
        $('#time').val('3');


    }

});
</script>
<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:31:48 GMT -->
</html>
