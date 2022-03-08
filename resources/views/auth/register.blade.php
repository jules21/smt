<!DOCTYPE html>
<html lang="en">

<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../../">

    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>Login - SMT</title>
    <meta name="description" content="Login page example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    <link href="{{asset('assets/css/demo1/pages/general/login/login-5.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->

    <link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/css/demo1/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    <!--end::Global Theme Styles -->



    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('img/logo-small.png')}}"/>
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root">
    <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v5 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile" style="background-image: url(./assets/media//bg/bg-3.jpg);">
            <div class="kt-login__left">
                <div class="kt-login__wrapper">
                    <div class="kt-login__content">
                        <a class="kt-login__logo" href="#">
                            <img src="{{asset("logoipsum.svg")}}" alt="logo">
                        </a>
                        <h3 class="kt-login__title">SIMBA MONEY TRANSFER</h3>
                        <span class="kt-login__desc">
								Sending so much more than money. Uniting People with Possibilities. The fastest way to send money
								</span>

                    </div>
                </div>
            </div>
            <div class="kt-login__divider">
                <div></div>
            </div>
            <div class="kt-login__right">
                <div class="kt-login__wrapper">
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Create new Account</h3>
                            <div class="kt-login__desc">Enter your details to create your account:</div>
                        </div>

                        <div class="kt-login__form">
                            @if ($errors->any())
                                <div class="col-12">
                                    <div class="alert alert-danger fade show" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <div class="alert-close">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true"><i class="la la-close"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                                <div class="kt-login__form">
                                    <form class="kt-form" action="{{route('register')}}" method="post" autocomplete="off">
                                        @csrf
                                        <div class="form-group">
                                            <input class="form-control" type="name" placeholder="Name" name="name" value="{{old("name")}}" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="{{ __('Email Address') }}" name="email" value="{{old("email")}}" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="Password" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="Password" placeholder="{{ __('Confirm Password') }}" name="password_confirmation">
                                        </div>
                                        <div class="kt-login__actions">
                                            <button type="submit" class="btn btn-brand btn-pill btn-elevate">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="mt-10">
                                        <span class="opacity-70 mr-4">Already have an account?</span>
                                        <a href="{{route('login')}}" class="kt-link font-weight-bold">Log In Here</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->

<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#5d78ff",
                "dark": "#282a3c",
                "light": "#ffffff",
                "primary": "#5867dd",
                "success": "#34bfa3",
                "info": "#36a3f7",
                "warning": "#ffb822",
                "danger": "#fd3995"
            },
            "base": {
                "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
            }
        }
    };
</script>

<!-- end::Global Config -->

<!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
@include('sweetalert::alert')

<!--end:: Global Mandatory Vendors -->




<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/js/demo1/scripts.bundle.js')}}" type="text/javascript"></script>

<!--end::Global Theme Bundle -->

<!--begin::Page Scripts(used by this page) -->
<script src="{{asset('assets/js/demo1/pages/login/login-general.js')}}" type="text/javascript"></script>

<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>
