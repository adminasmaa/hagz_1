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

        <!-- section -->
        <section class="investor-hagz-booking">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2>@lang('site.bookings')</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="tabs-details mt-3">
                        <ul
                            class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile flex-wrap"
                        >
                            {{--                                //type=all (1)--}}


                            <li>
                                <a
                                    href="?type=1"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                     @lang('site.All reservations')
                                </a>
                            </li>
                            <li>

{{--                                //type=application (2)--}}
                                <a

                                    href="?type=2"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.Application reservations')
                                </a>
                            </li>
                            <li>

{{--                                //type=website (3)--}}
                                <a
                                    href="?type=3"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.External reservations')
                                </a>
                            </li>
                            <li>
                                {{--                                //type=canceled (4)--}}
                                <a
                                    href="?type=4"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.Reservations canceled')
                                </a>
                            </li>
                            <li>
                                {{--                                //type=all (5)--}}
                                <a
                                    href="?type=5"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.archives')
                                </a>
                            </li>
                        </ul>
                        <ul class="tabs-content pt-4 list-unstyled tabs-aqars-booking">
                            <li >
                                <div class="row">
                                    <div class="col-12">


                                        <div class="booking_investor_card mt-2 mb-5">
                                            <form action="{{route('invest.mybooking')}}" method="get">
                                                @csrf
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <input
                                                        type="search"
                                                        class="form-control hagz-input"
                                                        placeholder="{{trans('site.Search by customer')}}  "
                                                        name="search"
                                                    />
                                                </div>
                                                <div class="col-lg-4 mt-lg-0 mt-3">
                                                    <select class="select2">
                                                        <option value="1">@lang('site.select')</option>
                                                        <option value="2">@lang('site.All reservations')</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div
                                                        class="search-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3 w-100"
                                                    >
                                                        <button type="submit">
                                                            @lang('site.Show results')
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- booking cards -->

                                    @foreach($bookings as $book)
                                    <div class="col-12">
                                        <div class="booking_investor_card mb-md-5 mb-4 p-0">
                                            <div class="booking_investor_card_header">
                                                @lang('site.id number')({{$book->aqar->id}})
                                            </div>
                                            <div class="row p-3">
                                                <div class="col-lg-4">
                                                    <div class="ads-card-img">
                                                        <img


                                                            src="{{asset('images/aqars/'.$book->aqar->main_image)}}"

                                                            onerror="this.src='{{FRONTASSETS}}/assets/images/investor/card_ads_img.png'"
                                                            alt="ads image"
                                                        />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div
                                                        class="card-body position-relative px-lg-3 px-0"
                                                    >
                                                        <div class="d-lg-flex">
                                                            <div class="ads-lborder">
                                                                <div>
                                                                    <div
                                                                        class="mb-3 ads-investor-item d-flex align-items-center"
                                                                    >
                                                                        <div class="ads-investor-i">
                                                                            <i class="fas fa-user"></i>
                                                                        </div>

                                                                        <div>
                                                                            @lang('site.name'):

                                                                            <span class="text-main ps-1"
                                                                            > {{$book->name ?? ''}}</span
                                                                            >
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 ads-investor-item d-flex align-items-center"
                                                                    >
                                                                        <div class="ads-investor-i">
                                                                            <i class="far fa-list-ul"></i>
                                                                        </div>
                                                                        <div>
                                                                            @lang('site.Booking destination:')

                                                                            <span class="text-main ps-1"
                                                                            >@lang('site.external')
                                        </span>
                                                                        </div>
                                                                    </div>

                                                                    <div
                                                                        class="mb-3 ads-investor-item d-flex align-items-center"
                                                                    >
                                                                        <div class="ads-investor-i">
                                                                            <i class="fas fa-calendar"></i>
                                                                        </div>
                                                                        <div>
                                                                            @lang('site.daynumber'):

                                                                            <span class="text-main ps-1">
                                           {{$book->day_count ?? 0}}</span
                                                                            >
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="mb-3 ads-investor-item d-flex align-items-center"
                                                                    >
                                                                        <div class="ads-investor-i">
                                                                            <i class="fas fa-phone"></i>
                                                                        </div>
                                                                        <div>
                                                                             @lang('site.phone'):

                                                                            <span class="text-main ps-1">
                                          {{$book->phone ?? ''}}</span
                                                                            >
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-md-40">
                                                                <div
                                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                                >
                                                                    <div class="ads-investor-i">
                                                                        <i class="fas fa-clock"></i>
                                                                    </div>
                                                                    <div>
                                                                         @lang('site.time_from') :

                                                                        <span class="text-main ps-1"
                                                                        >  {{$book->aqar->time_from ?? 0}}</span
                                                                        >
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                                >
                                                                    <div class="ads-investor-i">
                                                                        <i class="fas fa-clock"></i>
                                                                    </div>
                                                                    <div>
                                                                         @lang('site.time_to') :

                                                                        <span class="text-main ps-1">
                                        {{$book->aqar->time_to ?? 0}} </span
                                                                        >
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                                >
                                                                    <div class="ads-investor-i">
                                                                        <i class="fas fa-calendar"></i>
                                                                    </div>
                                                                    <div>
                                                                         @lang('site.date of arrival'):

                                                                        <span class="text-main ps-1"
                                                                        >{{$book->reciept_date ?? ''}}
                                      </span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                                >
                                                                    <div class="ads-investor-i">
                                                                        <i class="fas fa-calendar"></i>
                                                                    </div>
                                                                    <div>
                                                                         @lang('site.Departure Date'):

                                                                        <span class="text-main ps-1">
                                        {{$book->delivery_date ?? ''}}</span
                                                                        >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="investor-card-footer d-md-flex align-items-center"
                                                        >
                                                            <div>
                                                                <div>
                                    <span class="first-ic text-main">
                                      <i class="fas fa-wallet"></i
                                      ></span>
                                                                    <span class="text-second px-2"
                                                                    >@lang('site.deposits') :</span
                                                                    >
                                                                    <span class="text-main mt-md-0 mt-2">
                                      {{$book->aqar->amount_deposit ?? 0}}
                                    </span>
                                                                </div>

                                                                <div>
                                    <span class="first-ic text-main">
                                      <i class="fas fa-wallet"></i
                                      ></span>
                                                                    <span class="text-second px-2"
                                                                    > @lang('site.Total amount'):</span
                                                                    >
                                                                    <span class="text-main mt-md-0 mt-2">
                                   {{$book->total ?? 0}}
                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div>
                                                            <ul
                                                                class="list-menu flex-center list-unstyled p-0 list-menu-booking"
                                                            >
                                                                <li class="liItem-booking-out">
                                                                    <a href="{{route('invest.addbooking',$book->aqar_id)}}" class="liItem-link">
                                                                        <i class="fas fa-file-plus"></i>
                                                                          @lang('site.Add an external reservation')</a
                                                                    >
                                                                </li>
                                                                <li class="liItem-booking">
                                                                    <a href="{{route('invest.booking')}}" class="liItem-link">
                                                                        <i class="far fa-book-open"></i>
                                                                        @lang('site.bookings')
                                                                    </a>
                                                                </li>

                                                                <li class="liItem-booking-edit">
                                                                    <a href="{{route('invest.editads',$book->aqar_id)}}" class="liItem-link">
                                                                        <i class="fas fa-edit"></i>
                                                                        @lang('site.update')
                                                                    </a>
                                                                </li>
                                                                <li class="liItem-booking-prices">
                                                                    <a href="#" class="liItem-link">
                                                                        <i class="fas fa-tags"></i>
                                                                        @lang('site.prices')
                                                                    </a>
                                                                </li>
                                                                <li class="liItem-booking-see">
                                                                    <a href="{{route('detailAqar',$book->aqar_id)}}" class="liItem-link">
                                                                        <i class="far fa-eye"></i>
                                                                        @lang('site.view')
                                                                    </a>
                                                                </li>
                                                                <li class="liItem-booking-stop">
                                                                    <a href="{{route('invest.updatestatus',$book->aqar_id)}}" class="liItem-link">
                                                                        <i class="far fa-stopwatch"></i>
                                                                        @if($book->aqar->active==1)
                                                                            @lang('site.Pause')
                                                                        @else
                                                                            @lang('site.active')
                                                                        @endif
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                    @endforeach


                                    @unless (count($bookings))
                                        <!--empty booking-->
                                        <div class="col-12 mb-5">
                                            <div class="card-empty d-md-flex align-items-center">
                                                <div class="card-empty-txt">  @lang('site.No reservations') </div>
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


                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section -->
    </main>

@endsection
