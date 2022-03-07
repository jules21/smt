@extends('layouts.master')
@section('meta')
    <title>Dashboard - WMT</title>
@endsection
@section('header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left"
                    id="kt_subheader_mobile_toggle"><span></span></button>
            <h3 class="kt-subheader__title">
                Dashboard </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="/" class="kt-subheader__breadcrumbs-link">
                    Home </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>


                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
                <a href="{{ route('transfer.send') }}" class="btn kt-subheader__btn-primary btn-label-primary"><i class="fa fa-donate"></i>  Send</a>
                <a href="{{ route('transfer.receive') }}" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10"><i class="fa fa-coins la-4x"></i>Receive</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-xl">
                <div class="col-md-12 col-lg-4 col-xl-4">

                    <!--begin::Total Profit-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Transactions
                                </h4>
                                <span class="kt-widget24__desc">
															Today total transaction
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-brand">
{{--                                                        {{$todayTransaction}}--}}
                                1000
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 100%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">

                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Sent
                                </h4>
                                <span class="kt-widget24__desc">
															Total Sent Money
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-warning">
{{--														{{$todayRemittance}} $--}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-warning" role="progressbar" style="width: 100%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">

                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Received
                                </h4>
                                <span class="kt-widget24__desc">
                                    Total Received Money
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-success">
{{--														{{$todayPayment}} $--}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 100%;"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            {{-- BEGIN  --}}
            <div class="row">
                <div class="col-xl-8">

                </div>
            </div>
        </div>

        <!--end:: Widgets/Latest Updates-->
    </div>
    </div>
    {{-- end --}}
    </div>
    </div>


@endsection
@section('scripts')
    <!--begin::Page Vendors(used by this page) -->
@endsection
