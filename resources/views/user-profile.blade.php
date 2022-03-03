@extends('layouts.master')
@section('meta')
	<title>User Profile - SMT</title>
@endsection
@section('header')
	<div class="kt-subheader   kt-grid__item" id="kt_subheader">
		<div class="kt-subheader__main">
			<button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left" id="kt_subheader_mobile_toggle"><span></span></button>
			<h3 class="kt-subheader__title">
				SMT </h3>
			<span class="kt-subheader__separator kt-hidden"></span>
			<div class="kt-subheader__breadcrumbs">
				<a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
				<span class="kt-subheader__breadcrumbs-separator"></span>
				<a href="/" class="kt-subheader__breadcrumbs-link">
					User Profile </a>
				<span class="kt-subheader__breadcrumbs-separator"></span>

			</div>
		</div>
		<div class="kt-subheader__toolbar">
			<div class="kt-subheader__wrapper">


			</div>
		</div>
	</div>
@endsection
@section('content')
	<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
		<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

			<!--Begin::App-->
			<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">
									<div class="row">
										<div class="col-xl-8 mx-auto">
											<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Personal Information</h3>
													</div>
													<div class="kt-portlet__head-toolbar">
														<div class="kt-portlet__head-wrapper">
														</div>
													</div>
												</div>
												<form class="kt-form kt-form--label-right" method="POST" action="">
													@csrf
													<div class="kt-portlet__body">
														<div class="kt-section kt-section--first">
															<div class="kt-section__body">
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">User Info:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Full Name</label>
																	<div class="col-lg-9 col-xl-6">
																		<input class="form-control" name="name" id="first-name" disabled type="text" value="{{Auth::user()->name}}">
																	</div>
																</div>
																{{-- <div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
																	<div class="col-lg-9 col-xl-6">
																		<input class="form-control" name="last_name" id="last-name" disabled type="text" value="-">
																	</div>
																</div> --}}
																<div class="row">
																	<label class="col-xl-3"></label>
																	<div class="col-lg-9 col-xl-6">
																		<h3 class="kt-section__title kt-section__title-sm">Contact Info:</h3>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
																	<div class="col-lg-9 col-xl-6">
																		<div class="input-group">
																			<div class="input-group-prepend"><span class="input-group-text"><i class="la la-at"></i></span></div>
																			<input type="text" name="email" id="email" class="form-control" disabled value="{{Auth::user()->email}}" placeholder="Email">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!--End:: App Content-->
			</div>

			<!--End::App-->
		</div>
	</div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	<script>
		$('.btn-edit').click(function(){
			$('#first-name').prop('disabled', false);
			$('#last-name').prop('disabled', false);
			$('#email').prop('disabled', false);
			$('#telephone').prop('disabled', false);
			$(this).css('display','none');
			$('.btn-update').css('display','block');
			// $(this).removeClass('btn-success').addClass('btn-warning');
			// $(this).html('update');

		})
	</script>
@endsection
