<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/fontawesome/css/fontawesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body style="background-color: #999999;">

<div class="limiter">
    <div class="container-login100">
        <div class="login100-more"></div>

        <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">

            <form class="login100-form validate-form" action="{{url('/reset/password/input')}}" method="POST">
					<span class="login100-form-title p-b-1">
						Reset Password

					</span>

                @csrf
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <br>
                    <span class="label-input100">Email</span>
                    <input class="input100" type="text" name="email"  style="height: 30px">
                    <span class="focus-input100"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <span class="label-input100">Password</span>
                    <input class="input100" type="password" name="pass"  style="height: 30px">
                    <span class="focus-input100"></span>
                </div>
                <br>
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <br>
                        <center>
                            <button class="login100-form-btn" type="submit" style="height:40px; top:20px ;" >
                                Reset
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="/assets/js/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/assets/daterangepicker/moment.min.js"></script>
<script src="/assets/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/assets/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/assets/js/main.js"></script>

</body>
</html>
