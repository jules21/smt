<!DOCTYPE html>

<html lang="en">

<!-- begin::Head -->
<head>

    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../">

    <!--end::Base Path -->
    <meta charset="utf-8"/>
    @yield('meta')
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Fonts -->

    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="{{asset('assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Page Vendors Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{asset('assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{asset('assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet"
          type="text/css"/>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="{{asset('assets/css/demo6/style.bundle.css')}}" rel="stylesheet" type="text/css"/>

    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <!--end::Layout Skins -->
    <link rel="shortcut icon" href="{{asset('logoipsum.svg')}}"/>

    <!-- custom css -->
    @yield('styles')
</head>

<!-- end::Head -->

<!-- begin::Body -->
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-aside--minimize kt-page--loading">

<!-- begin:: Page -->

<!-- begin:: Header Mobile -->
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{URL::to('/')}}">
            <img alt="Logo" src="{{asset('logoipsum.svg')}}"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <div class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
             id="kt_aside_mobile_toggler"><span></span></div>
        <div class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></div>
        <div class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
                    class="flaticon-more"></i></div>
    </div>
</div>

<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
             id="kt_aside">

            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1"
                     data-ktmenu-dropdown-timeout="500">
                    <ul class="kt-menu__nav ">
                        <li class="{{Request::is('/') ?'kt-menu__item  kt-menu__item--active':'kt-menu__item'}}"
                            aria-haspopup="true"><a href="/"
                                                    class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-protection"></i><span
                                        class="kt-menu__link-text">Dashboard</span></a>
                        </li>
                        <li class="{{Request::is('/transfer') ?'kt-menu__item  kt-menu__item--active':'kt-menu__item'}}"
                            aria-haspopup="true"><a href="{{route('transactions.transfer')}}"
                                                    class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon-paper-plane"></i><span
                                        class="kt-menu__link-text">Transfer</span></a>
                        </li>
                        <li class="{{Request::is('/transactions') ?'kt-menu__item  kt-menu__item--active':'kt-menu__item'}}"
                            aria-haspopup="true"><a href="{{route('transactions.all')}}"
                                                    class="kt-menu__link "><i
                                        class="kt-menu__link-icon flaticon2-refresh"></i><span
                                        class="kt-menu__link-text">Transactions</span></a>
                        </li>


                    </ul>
                </div>
            </div>

            <!-- end:: Aside Menu -->
        </div>

        <!-- end:: Aside -->
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

            <!-- begin:: Header -->
            <div id="kt_header" class="kt-header kt-grid kt-grid--ver  kt-header--fixed ">

                <!-- begin:: Aside -->
                <div class="kt-header__brand kt-grid__item  " id="kt_header_brand">
                    <div class="kt-header__brand-logo">
                        <a href="{{URL::to('/')}}">
                            <img alt="Logo" src="{{asset('logoipsum.svg')}}"/>
                        </a>
                    </div>
                </div>

                <!-- end:: Aside -->

                <!-- begin:: Title -->
                <h1 class="kt-header__title kt-grid__item">
                    Simba Money Transfer
                </h1>

                <!-- end:: Title -->

                <!-- begin: Header Menu -->
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i
                            class="la la-close"></i></button>
                <div class="kt-header-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_header_menu_wrapper">
                    <div id="kt_header_menu"
                         class="kt-header-menu kt-header-menu-mobile  kt-header-menu--layout-default ">

                    </div>
                </div>

                <!-- end: Header Menu -->

                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">

                    <!--begin: User bar -->
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
                            <span class="kt-hidden kt-header__topbar-welcome">Hi,</span>
                            <span class="kt-hidden kt-header__topbar-username">Nick</span>
                            <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_21.jpg"/>
                            <span class="kt-header__topbar-icon kt-hidden-"><i
                                        class="flaticon2-user-outline-symbol"></i></span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">

                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x"
                                 style="background-image: url(./assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="./assets/media/users/300_25.jpg"/>

                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">S</span>
                                </div>
                                <div class="kt-user-card__name">
                                    {{Auth::user()->name}}
                                </div>
                            </div>

                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                                <a href="{{ route('user.profile') }}"  class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-hourglass kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Profile
                                        </div>
                                        <div class="kt-notification__item-time">
                                            personal information
                                        </div>
                                    </div>
                                </a>

                                <div class="kt-notification__custom kt-space-between">
                                    <a href="#" onclick="event.preventDefault();document.getElementById('log-out').submit();"
                                       class="btn btn-label btn-label-brand btn-sm btn-bold">Log Out</a>
                                </div>
                                <form action="{{route('logout')}}" method="post" id="log-out" style="display: none">@csrf</form>
                            </div>

                            <!--end: Navigation -->
                        </div>
                    </div>

                    <!--end: User bar -->


                </div>

                <!-- end:: Header Topbar -->
            </div>

            <!-- end:: Header -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
                @yield('header')
                <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                    @yield('content')
                </div>


                <!-- begin:: Content -->

                <!-- begin:: Content -->


                <!-- end:: Content -->

                <!-- end:: Content -->
            </div>

            <!-- begin:: Footer -->
            <div class="kt-footer kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                <div class="kt-footer__copyright center d-flex justify-content-center">
					<?= date( 'Y' ) ?>&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">Simba
                        Money Transfer</a>
                </div>

            </div>

            <!-- end:: Footer -->
        </div>
    </div>
</div>

<!-- end:: Page -->


<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>

<!-- end::Scrolltop -->

<!-- begin::Sticky Toolbar -->

<!-- end::Sticky Toolbar -->


<!-- begin::Global Config(global config for global JS sciprts) -->
<script>
    var KTAppOptions = {
        "colors": {
            "state": {
                "brand": "#22b9ff",
                "light": "#ffffff",
                "dark": "#282a3c",
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
<script src="{{asset('assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>

<script src="{{asset('assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/moment/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}"
        type="text/javascript"></script>

<script src="{{asset('assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>

<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
<script src="{{asset('assets/js/demo6/scripts.bundle.js')}}" type="text/javascript"></script>


<!--begin::Page Scripts(used by this page) -->

<script src="{{asset('assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/sweetalert/sweetalert.all.js')}}"></script>
@yield('scripts')
@include('sweetalert::alert')


<!--end::Page Scripts -->
</body>

<!-- end::Body -->
</html>





