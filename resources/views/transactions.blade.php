@extends('layouts.master')
@section('meta')
    <title>Transactions - SMT</title>
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
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="kt-portlet kt-portlet--mobile">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand fa fa-cubes"></i>
										</span>
                    <h3 class="kt-portlet__head-title">
                         Transactions
                    </h3>
                </div>
                <div class="kt-portlet__head-toolbar">
                    <div class="kt-portlet__head-wrapper">
                        <div class="kt-portlet__head-actions">

                            &nbsp;
                            <a href="{{route('transactions.transfer')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                                <i class="la la-plus"></i>
                                New Transaction
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="kt-portlet__body">

                <!--begin: Datatable -->
                <div id="kt_table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline"
                                   id="kt_table_1" role="grid" aria-describedby="kt_table_1_info"
                                   style="width: 1536px;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="kt_table_1" rowspan="1"
                                        colspan="1">#
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Sender Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Receiver Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Amount</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Currency</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">Status</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1">reason</th>
                                    <th class="sorting" tabindex="0" aria-controls="kt_table_1" rowspan="1" colspan="1"

                                        aria-label="Ship City: activate to sort column ascending">Created At
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($transactions as $key => $transaction)
                                    <tr>
                                        <td class="sorting_1" tabindex="0">{{++$key}}</td>
                                        <td>{{optional($transaction->sender)->name ?? "-"}}</td>
                                        <td>{{optional($transaction->receiver)->name ?? "-"}}</td>
                                        <td>{{optional($transaction->sender)->name != auth()->user()->id ? $transaction->received_amount : $transaction->sent_amount}}</td>
                                        <td>{{optional($transaction->targetCurrency)->abbr ?? "-"}}</td>
                                        <td class="text-center"> <span class="badge badge-{{$transaction->status == 'Success' ? 'success' : 'warning'}}">{{$transaction->status}}</span></td>
                                        <td>{{$transaction->comment}}</td>
                                        <td>{{$transaction->created_at->isoFormat('MMMM Do YYYY, h:mm:ss')}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!--end: Datatable -->
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $('#kt_table_1').DataTable({
            responsive: true

        });
    </script>
@endsection
