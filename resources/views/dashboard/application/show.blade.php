@extends('dashboard.layouts.master')

@section('title')
    {{trans('dashboard.main.applications')}}
@endsection

@push('page-css')
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('assets/dashboard/css/plugins/forms/pickers/form-flat-pickr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/pages/app-invoice.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/dashboard/css/pages/app-invoice-print.css')}}">--}}

@endpush

@section("breadcrumb")

@endsection

@section('main-content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            {{--                            <h2 class="content-header-title float-start mb-0">DataTables</h2>--}}
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item "><a
                                                href="{{route('dashboard.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.dashboard')}}</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a
                                                href="{{route('applications.index',['lang' => app()->getLocale()])}}">{{trans('dashboard.main.applications')}}</a>
                                    </li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">
                <section class="invoice-preview-wrapper">
                    <div class="row invoice-preview">
                        <!-- Invoice -->
                        <div class=" col-12">
                            <div class="card invoice-preview-card invoice-print" id="print">
                                <div class="card-body invoice-padding pb-0">
                                    <!-- Header starts -->
                                    <div class="d-flex justify-content-between flex-md-row flex-column invoice-spacing mt-0">

                                        <div class="mt-md-0 mt-2">
                                            <h4 class="invoice-title">
                                                {{__('dashboard.application.Application')}}
                                                <span class="invoice-number">#{{$application->id}}</span>
                                            </h4>
                                            <div class="invoice-date-wrapper">
                                                <p class="invoice-date-title">{{__('dashboard.application.application date')}}
                                                    :</p>
                                                <p class="invoice-date">{{$application->created_at}}</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="logo-wrapper"><img  src="{{ asset(config("settings.site_logo_dark")) }}"></div>

                                            <h3 class="text-primary invoice-logo">{{config('settings.site_'.app()->getLocale().'_title')}}</h3>


                                            {{--                                            <p class="card-text mb-25">Office 149, 450 South Brand Brooklyn</p>--}}

                                        </div>
                                    </div>
                                    <!-- Header ends -->
                                </div>

                                <hr class="invoice-spacing"/>

                                <!-- Address and Contact starts -->
                                <div class="card-body invoice-padding pt-0">
                                    <div class="row invoice-spacing">
                                        <div class="col-12 p-0">
                                            <h6 class="mb-2">{{__('dashboard.application.details')}}:</h6>
                                            <div>
                                                @include('dashboard.application.partials.common')

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /Invoice -->
                    </div>
                </section>

                <!-- Send Invoice Sidebar -->
                <div class="modal modal-slide-in fade" id="send-invoice-sidebar" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×
                            </button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Send Invoice</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form>
                                    <div class="mb-1">
                                        <label for="invoice-from" class="form-label">From</label>
                                        <input type="text" class="form-control" id="invoice-from"
                                               value="shelbyComapny@email.com" placeholder="company@email.com"/>
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-to" class="form-label">To</label>
                                        <input type="text" class="form-control" id="invoice-to"
                                               value="qConsolidated@email.com" placeholder="company@email.com"/>
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-subject" class="form-label">Subject</label>
                                        <input type="text" class="form-control" id="invoice-subject"
                                               value="Invoice of purchased Admin Templates"
                                               placeholder="Invoice regarding goods"/>
                                    </div>
                                    <div class="mb-1">
                                        <label for="invoice-message" class="form-label">Message</label>
                                        <textarea class="form-control" name="invoice-message" id="invoice-message"
                                                  cols="3" rows="11" placeholder="Message...">
Dear Queen Consolidated,

Thank you for your business, always a pleasure to work with you!

We have generated a new invoice in the amount of $95.59

We would appreciate payment of this invoice by 05/11/2019</textarea>
                                    </div>
                                    <div class="mb-1">
                                        <span class="badge badge-light-primary">
                                            <i data-feather="link" class="me-25"></i>
                                            <span class="align-middle">Invoice Attached</span>
                                        </span>
                                    </div>
                                    <div class="mb-1 d-flex flex-wrap mt-2">
                                        <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">
                                            Send
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Send Invoice Sidebar -->

                <!-- Add Payment Sidebar -->
                <div class="modal modal-slide-in fade" id="add-payment-sidebar" aria-hidden="true">
                    <div class="modal-dialog sidebar-lg">
                        <div class="modal-content p-0">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×
                            </button>
                            <div class="modal-header mb-1">
                                <h5 class="modal-title">
                                    <span class="align-middle">Add Payment</span>
                                </h5>
                            </div>
                            <div class="modal-body flex-grow-1">
                                <form>
                                    <div class="mb-1">
                                        <input id="balance" class="form-control" type="text"
                                               value="Invoice Balance: 5000.00" disabled/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="amount">Payment Amount</label>
                                        <input id="amount" class="form-control" type="number" placeholder="$1000"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-date">Payment Date</label>
                                        <input id="payment-date" class="form-control date-picker" type="text"/>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-method">Payment Method</label>
                                        <select class="form-select" id="payment-method">
                                            <option value="" selected disabled>Select payment method</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Bank Transfer">Bank Transfer</option>
                                            <option value="Debit">Debit</option>
                                            <option value="Credit">Credit</option>
                                            <option value="Paypal">Paypal</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="payment-note">Internal Payment Note</label>
                                        <textarea class="form-control" id="payment-note" rows="5"
                                                  placeholder="Internal Payment Note"></textarea>
                                    </div>
                                    <div class="d-flex flex-wrap mb-0">
                                        <button type="button" class="btn btn-primary me-1" data-bs-dismiss="modal">
                                            Send
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Cancel
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Add Payment Sidebar -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection

@push("page-js")
    <script src="{{asset('assets/dashboard/vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
    {{--    <script src="{{asset('assets/dashboard/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>--}}
    <script src="{{asset('assets/dashboard/js/scripts/pages/app-invoice.js')}}"></script>
    <script src="{{asset('assets/dashboard/js/scripts/pages/app-invoice-print.js')}}"></script>

@endpush
