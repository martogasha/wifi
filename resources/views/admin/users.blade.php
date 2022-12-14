<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/app-invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:44:10 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Pick Admin</title>
    <link rel="shortcut icon" href="dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">
    <link rel="stylesheet" href="dist/vendors/fontawesome/css/all.min.css">
    <!-- END Template CSS-->

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

                    <li class="dropdown align-self-center">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border  py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">john</p>
                                            <span class="text-success">New user registered.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">Peter</p>
                                            <span class="text-success">Server #12 overloaded.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0">Bill</p>
                                            <span class="text-danger">Application error.</span>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>

                    </li>
                    <li class="dropdown align-self-center d-inline-block">
                        <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                            <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right border   py-0">
                            <li>
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                        <div class="media-body">
                                            <p class="mb-0 text-success">john send a message</p>
                                            12 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-danger">Peter send a message</p>
                                            15 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li >
                                <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                    <div class="media">
                                        <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                        <div class="media-body">
                                            <p class="mb-0 text-warning">Bill send a message</p>
                                            5 min ago
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-profile align-self-center d-inline-block">
                        <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                            <div class="media">
                                <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                            </div>
                        </a>

                        <div class="dropdown-menu border dropdown-menu-right p-0">
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                            <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
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
            <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Hello Admin</a>
                <ul>
                    <li><a href="{{url('admin')}}"><i class="icon-rocket"></i> Dashboard</a></li>
                    <li class="active"><a href="{{url('users')}}"><i class="icon-book-open"></i>Users</a></li>
                    <li><a href="{{url('invoice')}}"><i class="icon-docs"></i>Invoice</a></li>
                    <li><a href="{{url('expense')}}"><i class="icon-minus"></i> Expenses</a></li>
                </ul>
            </li>
        </ul>
        <!-- END: Menu-->
        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
            <li class="breadcrumb-item"><a href="#">Application</a></li>
            <li class="breadcrumb-item active">Users List</li>
        </ol>
    </div>
</div>
<!-- END: Main Menu-->

<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <div class="row ">
            <div class="col-12  align-self-center">
                <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                    <div class="w-sm-100 mr-auto"><h4 class="mb-0">Users List</h4></div>

                    <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                        <li class="breadcrumb-item">Home</li>
                        <li class="breadcrumb-item">App</li>
                        <li class="breadcrumb-item active"><a href="#">Users List</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- END: Breadcrumbs-->

        <!-- Edit Invoice -->
        <div class="modal fade" id="editinvoice">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                            <i class="icon-pencil"></i> Edit Invoice
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                    </div>
                    <form class="edit-invoice-form">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="due-date" class="col-form-label">Due Date</label>
                                <input type="text" id="due-date" class="form-control" required="" >
                            </div>

                            <div class="form-group">
                                <label for="status" class="col-form-label">Status</label>
                                <select class="form-control" id="status">
                                    <option value="generated-invoice">Generated</option>
                                    <option value="paid-invoice">Paid</option>
                                    <option value="pending-invoice">Pending</option>
                                    <option value="canceled-invoice">Canceled</option>
                                </select>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden"  id="edit-date">
                            <button type="submit" class="btn btn-primary add-todo">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- START: Card Data-->
        <div class="row row-eq-height">
            <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                <div class="card border h-100 invoice-menu-section">

                    <ul class="nav flex-column invoice-menu">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" data-invoicetype="invoice">
                                <i class="fas fa-list-alt"></i> All
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-invoicetype="paid-invoice" style="color:cadetblue">
                                <i class="fas fa-money-check-alt"></i> Paid
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-invoicetype="pending-invoice" style="color: darkblue">
                                <i class="far fa-money-bill-alt"></i> Pending
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="#" data-invoicetype="canceled-invoice" style="color:red">
                                <i class="far fa-window-close"></i> Expired
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                <div class="card border h-100 invoice-list-section">

                    <div class="view-invoice">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-header d-flex justify-content-between align-items-center">
                                        <a href="#" class="bg-primary float-left mr-3  py-1 px-2 rounded text-white back-to-invoice">
                                            Back
                                        </a><h4 class="card-title">Invoice# <span class="inv-no"></span></h4>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table class="table table-borderless">
                                            <tbody>
                                            <tr>
                                                <td><address>
                                                        <strong>Your Store</strong><br>
                                                        2940 Rainbow Road Alhambra, CA 91801 California </address>
                                                    <b>Telephone:</b> 123456789<br>
                                                    <b>E-Mail:</b> demo@demo.com<br>
                                                    <b>Web Site:</b> <a href="#">http://abc.com</a></td>
                                                <td><b>Date Added:</b> 26/09/2016<br>
                                                    <b>Order ID:</b> 3135<br>
                                                    <b>Payment Method:</b> Cash On Delivery<br>
                                                    <b>Shipping Method:</b> Flat Shipping Rate<br>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td style="width: 50%;"><b>To</b></td>
                                                <td style="width: 50%;"><b>Ship To (if different address)</b></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td><address>
                                                        2940  Rainbow Road<br>Alhambra, CA<br>91801 California </address></td>
                                                <td><address>
                                                        1424  Brown Avenue<br>Knoxville, TN<br>91801 Tennessee </address></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card border-0">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td><b>Product</b></td>
                                                <td><b>Model</b></td>
                                                <td class="text-right"><b>Quantity</b></td>
                                                <td class="text-right"><b>Unit Price</b></td>
                                                <td class="text-right"><b>Total</b></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>HP LP3065 <br>
                                                    &nbsp;<small> - Delivery Date: 2011-04-22</small>
                                                </td>
                                                <td>Product 21</td>
                                                <td class="text-right">1</td>
                                                <td class="text-right">$122.00</td>
                                                <td class="text-right">$122.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><b>Sub-Total</b></td>
                                                <td class="text-right">$100.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><b>Flat Shipping Rate</b></td>
                                                <td class="text-right">$5.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><b>Eco Tax (-2.00)</b></td>
                                                <td class="text-right">$4.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><b>VAT (20%)</b></td>
                                                <td class="text-right">$21.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right" colspan="4"><b>Total</b></td>
                                                <td class="text-right">$130.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card redial-border-light redial-shadow">
                                    <div class="card-body table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <td><b>Comment</b></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>This is comment section</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card-header border-bottom p-1 d-flex">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                        <input type="text" class="form-control border-0 p-2 w-100 h-100 invoice-search" placeholder="Search ...">
                    </div>
                    <div class="card-body p-0">
                        <div class="invoices list">

                            <!-- START: Card Data-->
                            <div class="row">
                                <div class="col-12 mt-3">
                                    <div class="card">
                                        <div class="card-header  justify-content-between align-items-center">
                                            <h4 class="card-title">Orders</h4>
                                        </div>
                                        <div class="card-body table-responsive">
                                            <table class="table table-bordered  table-hover mb-0">
                                                <thead>
                                                <tr>
                                                    <th>Purchase Date</th>
                                                    <th>Client Name</th>
                                                    <th>Amount</th>
                                                    <th>Expiry Date</th>
                                                    <th>Status</th>
                                                    <th>Invoice</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr class="ng-scope">
                                                    <td>30/09/2015</td>
                                                    <td>Nora Lambert</td>
                                                    <td>Ksh 147.15</td>
                                                    <td>23/11/2017</td>
                                                    <td><span class="badge badge-info text-white">Paid</span></td>
                                                    <td><button class="btn btn-dark">Invoice</button></td>
                                                </tr>
                                                <tr class="ng-scope">
                                                    <td>29/07/2015</td>
                                                    <td>Shelly Robertson</td>
                                                    <td>Ksh 15.016</td>
                                                    <td>23/11/2017</td>
                                                    <td><span class="badge badge-danger text-white">Expired</span></td>
                                                    <td><button class="btn btn-dark">Invoice</button></td>

                                                </tr>
                                                <tr class="ng-scope">
                                                    <td>22/07/2015</td>
                                                    <td>Everett Garcia</td>
                                                    <td>Ksh 188.19</td>
                                                    <td>029/11/2017</td>
                                                    <td><span class="badge badge-primary text-white">Pending</span></td>
                                                    <td><button class="btn btn-dark">Invoice</button></td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <!-- END: Card DATA-->

                        </div>
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
    2020 ?? PICK
</footer>
<!-- END: Footer-->


<!-- START: Back to top-->
<a href="#" class="scrollup text-center">
    <i class="icon-arrow-up"></i>
</a>
<!-- END: Back to top-->

<!-- START: Template JS-->
<script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
<script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="dist/vendors/moment/moment.js"></script>
<script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- END: Template JS-->

<!-- START: APP JS-->
<script src="dist/js/app.js"></script>
<!-- END: APP JS-->

<!-- START: Page JS-->
<script src="http://myaccount.telkom.co.ke/"></script>
<!-- END: Page JS-->
</body>
<!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/app-invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:44:11 GMT -->
</html>
