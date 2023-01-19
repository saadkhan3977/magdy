<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{asset('/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/admin/dist/css/adminlte.min.css')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet"
        media="screen">
    
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <!-- <a href="/admin/index2.html" class="h1"><b>Admin</b>LTE</a> -->
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Verify Your Email Address & Phone Number') }}</div>
                            <div class="card-body">
                                @if(Auth::user()->phone_verified == 0)
                                    @if(!Session::has('send_otp_success'))
                                        <form action="{{ route("send_otp") }}" method="POST">
                                        <div class="row">
                                        @if(Session::has('success'))
                                            <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        <div class="col-md-8">
                                            @csrf
                                            <input id="phone" name="phone" class="form-control" type="tel">
                                        </div>
                                        <div class="col````-md-4">
                                            <button class="btn btn-md btn-primary">Send</button>
                                        </div>
                                        </div>
                                        </form>
                                    @else
                                        <form action="{{ route("verify_otp") }}" method="POST">
                                            <div class="row">
                                                @if(Session::has('otp_verify_error'))
                                                <p class="text-danger">
                                                    {{ Session::get('otp_verify_error') }}
                                                </p>
                                                @endif
                                                <div class="col-md-8">
                                                    @csrf
                                                    <input  name="otp" class="form-control" type="number">
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-md btn-primary">Verify</button>
                                                </div>
                                            </div>
                                            </form>
                                    @endif
                                    @else
                                    <p class="text-success">Phone Number Verified</p>
                                @endif
                                @if(Auth::user()->email_verified == 0)
                                    @if(!Session::has('send_mail_success'))
                                        {{ __('Before proceeding, please check your email for a verification link.') }}
                                        {{ __('If you did not receive the email') }}, 
                                        <form class="d-inline" method="POST" action="{{ route('send_mail') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here
                                                to request another') }}</button>.
                                        </form>
                                @else
                                <form action="{{ route("verify_email") }}" method="POST">
                                    <div class="row">
                                        @if(Session::has('otp_verify_error'))
                                        <p class="text-danger">
                                            {{ Session::get('otp_verify_error') }}
                                        </p>
                                        @endif
                                        <div class="col-md-8">
                                            @csrf
                                            <input  name="otp" class="form-control" type="number">
                                        </div>
                                        <div class="col-md-4">
                                            <button class="btn btn-md btn-primary">Verify</button>
                                        </div>
                                    </div>
                                 </form>
                              @endif
                              @else
                              <p class="text-success">Email is verified...</p>
                            @endif

                            @if(Auth::user()->phone_verified == 1 && Auth::user()->email_verified == 1)
                                 <a href="{{ route("setup_profile") }}" class="btn btn-default btn-primary">Profile Setup</a>
                            @endif
                          </div>
                               
                             

                               
                           
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{asset('/admin/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('/admin/dist/js/adminlte.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
    <script>
        $(function () {

            var telInput = $("#phone"),
                errorMsg = $("#error-msg"),
                validMsg = $("#valid-msg");

            // initialise plugin
            telInput.intlTelInput({

                allowExtensions: true,
                formatOnDisplay: true,
                autoFormat: true,
                autoHideDialCode: true,
                autoPlaceholder: true,
                defaultCountry: "auto",
                ipinfoToken: "yolo",

                nationalMode: false,
                numberType: "MOBILE",
                onlyCountries: ['us'],
                preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
                preventInvalidNumbers: true,
                separateDialCode: true,
                initialCountry: "auto",
                geoIpLookup: function (callback) {
                    $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                        var countryCode = (resp && resp.country) ? resp.country : "us";
                        callback(countryCode);
                    });
                },
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
            });

            var reset = function () {
                telInput.removeClass("error");
                errorMsg.addClass("hide");
                validMsg.addClass("hide");
            };

            // on blur: validate
            telInput.blur(function () {
                reset();
                if ($.trim(telInput.val())) {
                    if (telInput.intlTelInput("isValidNumber")) {
                        validMsg.removeClass("hide");
                    } else {
                        telInput.addClass("error");
                        errorMsg.removeClass("hide");
                    }
                }
            });

            // on keyup / change flag: reset
            telInput.on("keyup change", reset);
        })
    </script>
</body>

</html>