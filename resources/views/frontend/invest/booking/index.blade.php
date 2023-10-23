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
                            @lang('site.bookings')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="booking_investor mb-6">
            <div class="container">
                <div class="booking_investor_card">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{route('invest.showAds')}}">
                                <div class="booking_card mb-lg-5 mb-4 text-center py-sm-5 py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic1.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0">@lang('site.aquars')</h3>
                                        <p class="mb-0">10</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{route('invest.booking')}}">
                                <div class="booking_card mb-lg-5 mb-4 text-center py-sm-5 py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic2.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0">@lang('site.bookings')</h3>
                                        <p class="mb-0">10</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="#">
                                <div class="booking_card mb-lg-5 mb-4 text-center py-sm-5 py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic3.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0">@lang('site.commissions')</h3>
                                        <p class="mb-0">10</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{route('updateprofile',auth()->user()->id)}}">
                                <div class="booking_card mb-lg-5 mb-4 text-center py-sm-5  py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic4.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0">@lang('site.Profile')</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{route('invest.term')}}">
                                <div class="booking_card mb-md-0 mb-4 text-center py-sm-5  py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic5.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0">  @lang('site.Reservation and cancellation conditions')</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="{{route('logout')}}">
                                <div class="booking_card mb-md-0 mb-4 text-center py-sm-5  py-4">
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/booking_ic6.png"
                                        alt="booking investor icon"
                                    />
                                    <div class="pt-md-4 pt-2">
                                        <h3 class="mb-0"> @lang('site.logout')</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>




@endsection

