<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:45:54 GMT -->
<head>
    <meta charset="UTF-8">
    <title>Wifi Hotspot System</title>
    <link rel="shortcut icon" href="dist/images/favicon.ico" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css">

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
<!-- END: Header-->

<!-- START: Main Menu-->

<!-- END: Main Menu-->
@include('flash-message')
<!-- START: Main Content-->
<main>
    <div class="container-fluid site-width">
        <!-- START: Breadcrumbs-->
        <!-- END: Breadcrumbs-->

        <!-- START: Card Data-->
        <div class="row">
            <div class="col-12  mt-3">
                <div class="card">

                    <div class="card-body">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#basic">Login</button>
                        <div id="confirmPass"></div>
                        <div class="row justify-content-md-center">
                            <div class="col-12 col-md-4 col-xl-3 mb-4 mb-lg-0">
                                <div class="price-table border rounded  text-center  p-3">
                                    <h5 class="font-weight-bold mb-3">Standard  Plan </h5>
                                    <div class="price-block">1 /=</div>
                                    <div class="divider-default my-3"></div>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fa fa-check"></i><b style="font-size: 20px">10 Min</b> </li>
                                        <li class="mb-3"><i class="fa fa-check"></i>Whatsapp</li>
                                        <li class="mb-3"><i class="fa fa-check"></i>Youtube</li>
                                        <li class="mb-3"><i class="fa fa-check"></i>Instagram</li>
                                        <li class="mb-3"><i class="fa fa-check"></i>Ticktock</li>
                                        <li><a href="#" class="btn btn-primary btn-circle btn-default mt-3" data-toggle="modal" data-target="#basic">Purchase Now</a></li>
                                        <!-- Modal -->
                                        <div class="modal fade" id="basic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle1">Register / Login</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                                    <div class="card-content" id="registerModal">
                                                                        <div class="card-body">
                                                                                        <input type="hidden" value="1" id="amount">
                                                                                        <input type="hidden" value="Standard" id="subscription">
                                                                                        <input type="hidden" value="0" id="status">
                                                                                        <input type="hidden" value="1" id="time">
                                                                                        <div class="form-row">
                                                                                            <div class="form-group col-md-6">
                                                                                                <label for="inputEmail4">First Name</label>
                                                                                                <input type="text" class="form-control rounded" id="first_name" placeholder="Frst Name">
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <label for="inputPassword4">Last Name</label>
                                                                                                <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="inputAddress">Phone Number</label>
                                                                                            <input type="text" class="form-control" id="phone" placeholder="+254712345678">
                                                                                        </div>
                                                                                        <div class="form-group">
                                                                                            <label for="inputAddress">Email</label>
                                                                                            <input type="email" class="form-control" id="email" placeholder="xyz@gmail.com">
                                                                                        </div>
                                                                                        <div class="form-row">
                                                                                            <div class="form-group col-md-6">
                                                                                                <label for="inputEmail4">Password</label>
                                                                                                <input type="password" class="form-control rounded" id="password" placeholder="Password">
                                                                                            </div>
                                                                                            <div class="form-group col-md-6">
                                                                                                <label for="inputPassword4">Confirm Password</label>
                                                                                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password">
                                                                                            </div>
                                                                                            <h4>Standard Plan 1/=</h4>
                                                                                        </div>
                                                                                        <span id="confirm_password_msg"></span>

                                                                                        <button class="btn btn-primary" id="register">Register</button>
                                                                                        <a href="" id="signIn">Sign in</a>
                                                                            </div>
                                                                    </div>
                                                        <div class="card-content" id="Login">
                                                            <div class="card-body">
                                                                <form action="{{'Login'}}" method="post">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="inputAddress">Phone Number</label>
                                                                        <input type="text" class="form-control" id="inputAddress" name="phone" placeholder="+254712345678">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="inputAddress">Password</label>
                                                                        <input type="password" class="form-control" id="inputAddress" name="password">
                                                                    </div>

                                                                    <span id="confirm_password_msg_one"></span>
                                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                                    <a href="" id="signUp">Register</a>
                                                                </form>
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-xl-3 mb-4 mb-lg-0">
                                <div class="price-table bg-primary rounded text-white text-center  p-3">
                                    <h5 class="font-weight-bold mb-3">Premium Plan </h5>
                                    <div class="price-block active">20 /=</div>
                                    Per Month
                                    <div class="divider-default my-3"></div>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fa fa-check"></i> 500 GB Bandwidth</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 15 MB Max File Size</li>
                                        <li class="mb-3"><i class="fa fa-check"></i>  6 GHZ CPU</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 1024 MB Memory</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 10 MySQL Databases</li>
                                        <li><a href="#" class="btn btn-light btn-circle btn-outline-default mt-3">Purchase Now</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-xl-3">
                                <div class="price-table border rounded  text-center  p-3">
                                    <h5 class="font-weight-bold mb-3">Business  Plan </h5>
                                    <div class="price-block">50 /=</div>
                                    Per Month
                                    <div class="divider-default my-3"></div>
                                    <ul class="list-unstyled">
                                        <li class="mb-3"><i class="fa fa-check"></i> 500 GB Bandwidth</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 15 MB Max File Size</li>
                                        <li class="mb-3"><i class="fa fa-check"></i>  6 GHZ CPU</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 1024 MB Memory</li>
                                        <li class="mb-3"><i class="fa fa-check"></i> 10 MySQL Databases</li>
                                        <li><a href="#" class="btn btn-primary btn-circle btn-default mt-3">Purchase Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>



        </div>
        <!-- END: Card DATA-->
    </div>
</main>
<!-- END: Content-->

<div class="modal" id="processing" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="loading-spinner mb-2"></div>
                <div id="pleaseOne">REGISTERING PLEASE WAIT</div>
            </div>
        </div>
    </div>
</div>

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
</body>
<!-- END: Body-->
<script>
    $(document).ready(function(){
        $('#register').on('click',function () {
           $amount = $('#amount').val();
           $subscription = $('#subscription').val();
           $status = $('#status').val();
           $time = $('#time').val();
           $first_name = $('#first_name').val();
           $last_name = $('#last_name').val();
           $email = $('#email').val();
           $phone = $('#phone').val();
           $password = $('#password').val();
           $('#processing').modal('show');
           $('#basic').modal('hide');
            $.ajax({
                type:"get",
                url:"{{url('Register')}}",
                data:{'amount':$amount,'subscription':$subscription,'status':$status,'email':$email,'time':$time,'first_name':$first_name,'last_name':$last_name,'phone':$phone,'password':$password},
                success:function (data) {
                    if(data != 'ppp') {
                        $('#processing').modal('hide');
                        $('#confirmPass').html(data);
                    }
                    else{
                        window.location.href = "profile";

                    }
                },
                error:function (error) {
                    console.log(error)
                    alert('error')

                }

            });
        });
        $('#Login').hide();

        $("#confirm_password").bind('keyup change', function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )


        })

        $("#sign_in_btn").click(function(){

            check_Password( $("#password").val(), $("#confirm_password").val() )

        })
        $("#confirm_password_one").bind('keyup change', function(){

            check_Password_one( $("#passwordOne").val(), $("#confirm_password_one").val() )


        })

        $("#sign_in_btn").click(function(){

            check_Password_one( $("#passwordOne").val(), $("#confirm_password_one").val() )

        })
    })

    function check_Password( Pass, Con_Pass){

        if(Pass === ""){



        }else if( Pass === Con_Pass){

            $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-success">Password matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            }, 3000);

        }else{
            $("#confirm_password").focus()
            $('#confirm_password_msg').show()
            $("#confirm_password_msg").html('<div class="alert alert-danger">Password didnot matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg').fadeOut('slow');
            }, 3000);

        }

    }
    function check_Password_one( Pass, Con_Pass){

        if(Pass === ""){



        }else if( Pass === Con_Pass){

            $("#sign_in_btn").removeAttr("onclick")
            $('#confirm_password_msg_one').show()
            $("#confirm_password_msg_one").html('<div class="alert alert-success">Password matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg_one').fadeOut('slow');
            }, 3000);

        }else{
            $("#confirm_password_one").focus()
            $('#confirm_password_msg_one').show()
            $("#confirm_password_msg_one").html('<div class="alert alert-danger">Password didnot matched</div>')

            setTimeout(function() {
                $('#confirm_password_msg_one').fadeOut('slow');
            }, 3000);

        }

    }

        $('#signIn').click(function () {
            $('#registerModal').hide();
            $('#Login').show();
            return false;
        });
        $('#signUp').click(function () {
            $('#Login').hide();
            $('#registerModal').show();
            return false;
        });

</script>
<!-- Mirrored from html.designstream.co.in/pick/html/page-pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Nov 2022 07:45:54 GMT -->
</html>
