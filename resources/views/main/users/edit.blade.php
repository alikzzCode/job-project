<!DOCTYPE html>
<html lang="en">
<head>
    <title>پروژه جاب</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../auth/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../auth/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../auth/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="{{route('file.update')}}" method="post" name="login">
                @csrf
                @method('put')

                <span class="login100-form-title p-b-48">
						<img src="../../auth/images/logo.png">
					</span>
                <div class="wrap-input100 validate-input" data-validate="نام فایل اجباری است.">
                    <input class="input100" type="text" name="name" id="name">
                    <span class="focus-input100" data-placeholder="نام فایل"></span>
                </div>


                <div class="wrap-input100 validate-input" data-validate=".ورود متن اجباری است">
						<span class="btn-show-pass">
						</span>
                    <input class="input100" type="text" name="text" id="text">
                    <span class="focus-input100" data-placeholder="متن"></span>
                </div>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            اپدیت کن
                        </button>
                    </div>
                </div>


                <div class="text-center p-t-115">
                    <a href="{{route('file.show')}}"><span class="txt1">
                            پاک کردن
						</span>
                    </a>
                </div>
                <div class="text-center">
                    <a href="{{route('file.index')}}">
						<span class="txt1">
                            ایجاد
						</span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../../auth/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../auth/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../auth/vendor/bootstrap/js/popper.js"></script>
<script src="../../auth/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../auth/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../auth/vendor/daterangepicker/moment.min.js"></script>
<script src="../../auth/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../auth/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../auth/js/main.js"></script>

</body>
</html>
