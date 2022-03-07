@extends('layouts.master')
@section('meta')
    <title>Transfer - SMT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <button class="kt-subheader__mobile-toggle kt-subheader__mobile-toggle--left"
                    id="kt_subheader_mobile_toggle"><span></span></button>
            <h3 class="kt-subheader__title">
                SMT </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="/" class="kt-subheader__breadcrumbs-link">
                    Transactions </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>

            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">


            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        body{
            background: #f2f3f8;
        }
        #check-receiver-id,
        #check-sender-id{
            cursor: pointer;
        }
        .form-group input:disabled{
            background: #eee;
        }
    </style>
@endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <form action="{{ route('transactions.transfer') }}" method="post" id="transaction-form" onkeydown="return event.key != 'Enter';">
        {{ csrf_field() }}
            <!--begin: Sender Details -->
            <div class="kt-portlet" data-ktportlet="true" id="kt_portlet_tools_5">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Receiver Details
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-default btn-pill btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="form-group row">
                        <label class="col-lg-2 offset-lg-1 col-form-label" for="sender-id">Receiver Names</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                                <select name="receiver" id="receiver" class="form-control">
                                    <option value="">--select--</option>
                                @foreach($users ?? [] as $user)
                                    <option value="{{$user->id}}">
                                        {{$user->name}}
                                         </option>
                                @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end: Sender Details -->
            <div class="kt-portlet" data-ktportlet="true" id="kt_portlet_tools_5">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Amount Details
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <div class="kt-portlet__head-group">
                            <a href="#" data-ktportlet-tool="toggle" class="btn btn-sm btn-icon btn-default btn-pill btn-icon-md"><i class="la la-angle-down"></i></a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="row">
                        <div class="form-group col-4">
                            <label>Current Currency</label>
                            <div class="radio-inline">
                                @foreach($currencies as $currency)
                                    <label class="radio">
                                        <input type="radio" name="current_currency" value="{{$currency->abbr}}" id="current_currency" class="mx-2"
                                        @if($loop->first) checked @endif>
                                        <span></span>{{$currency->abbr}}</label>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-4"></div>
                        <div class="form-group col-4">
                            <label>Target Currency</label>
                            <div class="radio-inline">
                                @foreach($currencies as $currency)
                                    <label class="radio">
                                        <input type="radio" name="target_currency" id="target_currency" class="mx-2" value="{{$currency->abbr}}"
                                               @if($loop->last) checked @endif>
                                        <span></span>{{$currency->abbr}}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-4">
                            <label class="">You Send:</label>
                            <div class="kt-input-icon kt-input-icon--right">
                                <input type="number" class="form-control" step="any" name="sent_amount" id="sent-amount" placeholder="Enter Amount To be Sent">
{{--                                <div class="invalid-feedback">something went wrong</div>--}}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="">Rate:</label>
                            <div class="kt-input-icon kt-input-icon--right">
                                <input type="text" class="form-control" id="rate" name="rate" readonly>
                                <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                            <span ><i class="flaticon2-line-chart" id="rate-icon"></i></span></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <label class="d-block">Amount To be Received :</label>
                            <div class="kt-input-icon kt-input-icon--right d-inline-block">
                                <input type="number" step="any" name="received_amount" id="received-money-foreign" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <label for="">Comment</label>
                            <textarea name="comment" id="comment" class="form-control" placeholder="reason"></textarea>
                        </div>
                    </div>
                </div>
            </div>


            {{-- begin: approve button --}}
            <div class="row alert alert-light alert-elevate fade show">
                <div class="col text-center">
                    <button class="btn btn-brand" id="send-btn" type="submit">Send Money</button>
                </div>
            </div>
            {{-- end: approve button --}}
        </form>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\TransferFormRequest', '#transaction-form') !!}


    <script>



        const updateFees  = function (){
            let current_currency = $('input[name="current_currency"]:checked').val();
            let target_currency = $('input[name="target_currency"]:checked').val();
            let amount = $('#sent-amount').val();
                amount = Number(amount);
            if ((current_currency !== target_currency) && amount > 0){
                getExchangeRate(current_currency,target_currency, amount);
            }else{
                $("#received-money-foreign").val(amount);
                $('#rate').val(1);
            }
        }
        let getExchangeRate = function (from,to,amount){
            $.get('https://api.exchangerate.host/convert?from='+from+'&to='+to+'&amount='+amount, function(data) {
                $('#rate').val(data.info.rate);
                $('#received-money-foreign').val(data.result);
            });
        }
        $('#sent-amount').keyup(function(){
            updateFees();
        });
        $('input[name=current_currency]').change(function(){
            updateFees();
        });
        $('input[name=target_currency]').change(function(){
            updateFees();
        });
    </script>
@endsection
