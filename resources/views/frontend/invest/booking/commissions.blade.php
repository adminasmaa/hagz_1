@extends('frontend.layouts.app')
@section('content')

    <div class="overlay-mobile"></div>






    <main>
        <!-- Desktop Breadcrumb -->
        <section class="py-md-4 py-2">
            <div class="container">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{route('Home')}}"> @lang('site.home') </a>
                        </li>

                        <li class="breadcrumb-item text-light-main" aria-current="page">
                            @lang('site.commissions')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- section -->
        <section class="commission-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-4">@lang('site.commissions')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mb-5">
                        <div class="tabs-details">
                            <ul
                                class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile commission flex-wrap"
                            >

                                <li>
                                    <a
                                        href="#tab-1"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.Paid commissions')({{$paidcount ?? 0}})
                                    </a>
                                </li>

                                <li>
                                    <a
                                        href="#tab-2"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.Unpaid commissions') ({{$unpaidscount ?? 0}})
                                    </a>
                                </li>
                            </ul>
                            <ul
                                class="tabs-content pt-4 list-unstyled tabs-aqars-booking tabs-content-commission"
                            >

                                <li id="tab-1">
                                    <div class="booking_investor_card mb-md-5 mb-4">
                                        <div class="row">
                                            <div class="col-12 mt-lg-3">
                                                @foreach($commisionpaids as $paid)
                                                    <div class="commissions-table">
                                                        <table class="table table-bordered table-sm">
                                                            <tbody>
                                                            <tr class="row-noborder">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-user"></i>
                                                                        </div>
                                                                        <div class="th-txt">@lang('site.name')</div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="table-txt">{{$paid->user->username ?? ''}}</div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                        <div class="th-txt">@lang('site.phone') </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="table-txt">{{$paid->booking->phone ?? ''}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="far fa-list-ul"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt">@lang('site.booking_id') </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div
                                                                        class="table-txt">{{$paid->booking->id ?? ''}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-wallet"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt"> @lang('site.Reservation amount') </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="table-txt">
                                                                        {{$paid->booking->total ?? 0}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-wallet"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt">@lang('site.commission')  </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="table-txt">
                                                                        <input
                                                                            type="checkbox"
                                                                            id="Commissions"
                                                                            checked=""
                                                                        />
                                                                        <label
                                                                            for="Commissions"
                                                                            class="custom-checkbox-item"
                                                                        >
                                                                            <span>({{$paid->value ?? 0}}%)</span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>

                                        @unless (count($commisionpaids))
                                            <!--empty booking-->
                                            <div class="col-12 mb-5">
                                                <div class="card-empty d-md-flex align-items-center">
                                                    <div class="card-empty-txt">  @lang('site.No commissions') </div>
                                                    <div>
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/empty-ic.svg"
                                                            alt="empty icon"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        @endunless
                                    </div>
                                </li>
                                <li id="tab-2">
                                    <div class="booking_investor_card mb-md-5 mb-4">
                                        <div class="row">
                                            <div class="col-12 mt-lg-3">

                                                @foreach($commisionunpaids as $unpaid)
                                                    <div class="commissions-table">
                                                        <table class="table table-bordered table-sm">
                                                            <tbody>
                                                            <tr class="row-noborder">
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-user"></i>
                                                                        </div>
                                                                        <div class="th-txt">@lang('site.name')</div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div
                                                                            class="table-txt"> {{$unpaid->user->username ?? ''}}</div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                        <div class="th-txt"> @lang('site.phone')</div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="table-txt">{{$unpaid->booking->phone ?? ''}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="far fa-list-ul"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt">@lang('site.booking_id') </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div
                                                                        class="table-txt">{{$unpaid->booking->id ?? ''}}</div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-wallet"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt">@lang('site.Reservation amount')</div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="table-txt">
                                                                        {{$unpaid->booking->total ?? 0}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="mt-2">
                                                                            <i class="fas fa-wallet"></i>
                                                                        </div>
                                                                        <div
                                                                            class="th-txt"> @lang('site.commission')</div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <div class="table-txt">
                                                                        <input type="checkbox" id="Commissions_{{$unpaid->id}}"/>
                                                                        <label
                                                                            for="Commissions_{{$unpaid->id}}"
                                                                            class="custom-checkbox-item"
                                                                        >

                                                                            <span>({{$unpaid->value ?? 0}}%)</span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>

                                                        <div
                                                            class="main-btn d-flex justify-content-center align-items-center mt-4 w-100"
                                                        >
                                                            <a
                                                                href="#"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#confirmPaymentModal"
                                                            >
                                                                @lang('site.Paids')
                                                            </a>
                                                        </div>
                                                    </div>


                                                    <!-- Modal confirm Payment booking -->

                                                    <form action="{{route('invest.confirmpayment')}}" method="post">
                                                        @csrf

                                                        <div
                                                            class="modal fade modal-custom modal-height-mobile modal-confirm-pay"
                                                            id="confirmPaymentModal"
                                                            tabindex="-1"
                                                            aria-labelledby="confirmPaymentModalLabel"
                                                            aria-hidden="true"
                                                        >
                                                            <div class="modal-dialog">
                                                                <div class="modal-content confirm-pay-content">
                                                                    <button
                                                                        type="button"
                                                                        class="close-modal d-flex justify-content-center align-items-center"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"
                                                                    >
                                                                        <i class="fal fa-times"></i>
                                                                    </button>

                                                                    <div class="modal-body cancel-booking-body">
                                                                        <div
                                                                            class="row d-flex justify-content-center align-items-center h-100 my-3"
                                                                        >
                                                                            <div class="col-md-9 col-11 my-3">
                                                                                <div class="text-center">
                                                                                    <img
                                                                                        src="{{FRONTASSETS}}/assets/images/investor/confirm-ic.png"
                                                                                        class="confirm-payment-icon"
                                                                                        alt="confirm payment "
                                                                                    />
                                                                                </div>

                                                                                <input type="hidden" name="id" value="{{$unpaid->id}}">

                                                                                <div class="commissions-table mt-4">
                                                                                    <table class="table table-bordered table-sm">
                                                                                        <thead>
                                                                                        <tr>
                                                                                            <th>
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <div class="mt-2">
                                                                                                        <i class="far fa-user text-main"></i>
                                                                                                    </div>
                                                                                                    <div class="th-txt">@lang('site.name')</div>
                                                                                                </div>
                                                                                            </th>

                                                                                            <th>
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <div class="th-txt">{{auth()->user()->username ?? ''}} </div>
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                        <tr>
                                                                                            <td>
                                                                                                <div class="d-flex align-items-center">
                                                                                                    <div class="mt-2">
                                                                                                        <i class="fas fa-wallet text-main"></i>
                                                                                                    </div>
                                                                                                    <div class="th-txt">@lang('site.commission') </div>
                                                                                                </div>
                                                                                            </td>

                                                                                            <td>
                                                                                                <div class="table-txt">
                                                                                                    <input type="checkbox" id="Commission" checked=""/>
                                                                                                    <label
                                                                                                        for="Commission"
                                                                                                        class="custom-checkbox-item"
                                                                                                    >
                                                                                                        {{--                                                    500 درهم مغربى--}}
                                                                                                        <span>({{$unpaid->value ?? ''}}%)</span>
                                                                                                    </label>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td colspan="100%">
                                                                                                <div
                                                                                                    class="d-flex align-items-center justify-content-center fw-bold txt-footer-table"
                                                                                                >
                                                                                                    @lang('site.You will pay a commission amount')
                                                                                                    <span class="text-main">({{$unpaid->value ?? ''}}%)</span>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>

                                                                                <div class="d-flex justify-content-center my-4">
                                                                                    <div
                                                                                        class="main-btn d-flex justify-content-center align-items-center w-100"
                                                                                    >
                                                                                        <button type="submit">@lang('site.Confirm payment')</button>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </form>

                                                @endforeach
                                            </div>


                                            @unless (count($commisionunpaids))
                                                <!--empty booking-->
                                                <div class="col-12 mb-5">
                                                    <div class="card-empty d-md-flex align-items-center">
                                                        <div
                                                            class="card-empty-txt">  @lang('site.No commissions') </div>
                                                        <div>
                                                            <img
                                                                src="{{FRONTASSETS}}/assets/images/investor/empty-ic.svg"
                                                                alt="empty icon"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endunless
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->
    </main>

@endsection

