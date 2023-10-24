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


                            @lang('site.My ads')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="ads_investor">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>@lang('site.My ads')</h2>
                    </div>
                </div>
                <form action="{{route('invest.showAds')}}" method="get">

                    <div class="row my-md-5 my-4">
                        <div class="col-lg-8">
                            <div class="booking_investor_card">
                                <div
                                    class="form-group d-flex align-items-center justify-content-between"
                                >
                                    <input
                                        type="search"
                                        class="form-control"
                                        placeholder="{{trans('site.Enter the advertisement number')}}"
                                        name="search"
                                    />
                                    <div
                                        class="search-btn d-flex align-items-center justify-content-center"
                                    >
                                        <button type="submit">@lang('site.search')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                    </form>--}}
                        <div class="col-lg-4">
                            <div class="booking_investor_card mt-lg-0 mt-3">
                                <div
                                    class="add-ads-link d-flex align-items-center justify-content-center"
                                >
                                    <a href="{{route('invest.addAds')}}">
                                        <span><i class="fas fa-plus-circle"></i></span>
                                        @lang('site.Add an advertisement')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="ads__investor mb-5">
            <div class="container">

                @foreach($aqars as $aquar)
                    <div class="booking_investor_card mb-md-5 mb-4 p-0">
                        <div class="booking_investor_card_header">          @lang('site.id number')({{$aquar->id}})
                        </div>
                        <div class="row p-3">
                            <div class="col-lg-4">
                                <div class="ads-card-img">
                                    <img


                                        src="{{asset('images/aqars/'.$aquar->main_image)}}"

                                        onerror="this.src='{{FRONTASSETS}}/assets/images/investor/card_ads_img.png'"
                                        alt="ads image"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body position-relative px-lg-3 px-0">
                                    <div class="d-lg-flex">
                                        <div class="ads-lborder">
                                            <div>
                                                <div
                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                >
                                                    <div class="ads-investor-i">
                                                        <i class="far fa-list-ul"></i>
                                                    </div>

                                                    <div>
                                                        @lang('site.Advertisement category') :

                                                        <span
                                                            class="text-main ps-1"> {{$aquar->category->name ?? ''}}</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                >
                                                    <div class="ads-investor-i">
                                                        <i class="far fa-home"></i>
                                                    </div>
                                                    <div>
                                                        @lang('site.Farm name') :

                                                        <span class="text-main ps-1">  {{$aquar->name ?? ''}}</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mb-3 ads-investor-item d-flex align-items-center"
                                                >
                                                    <div class="ads-investor-i">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <div>
                                                        @lang('site.country') :

                                                        <span
                                                            class="text-main ps-1"> {{$aquar->country->name ?? ''}} </span>
                                                    </div>
                                                </div>
                                                <div
                                                    class=" mb-3 ads-investor-item d-flex align-items-center"
                                                >
                                                    <div class="ads-investor-i">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                    <div>
                                                        @lang('site.time_from') :

                                                        <span class="text-main ps-1"> {{$aquar->time_from ?? ''}}</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class=" mb-3 ads-investor-item d-flex align-items-center"
                                                >
                                                    <div class="ads-investor-i">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                    <div>
                                                        @lang('site.time_to') :

                                                        <span class="text-main ps-1">{{$aquar->time_to ?? ''}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-md-40">
                                            <ul class="list-menu flex-center list-unstyled p-0">
                                                <li class="liItem-booking-out">
                                                    <a href="#">
                                                        <i class="fas fa-file-plus"></i>
                                                        اضافة حجز خارجى</a>
                                                </li>
                                                <li class="liItem-booking">
                                                    <a href="#">
                                                        <i class="far fa-book-open"></i>
                                                        @lang('site.bookings')
                                                    </a>
                                                </li>


                                                <li class="liItem-booking-edit">
                                                    <a href="{{route('invest.editads',$aquar->id)}}">
                                                        <i class="fas fa-edit"></i>
                                                        @lang('site.update')
                                                    </a>
                                                </li>
                                                <li class="liItem-booking-prices">
                                                    <a href="#">
                                                        <i class="fas fa-tags"></i>
                                                        @lang('site.prices')
                                                    </a>
                                                </li>
                                                <li class="liItem-booking-see">
                                                    <a href="#">
                                                        <i class="far fa-eye"></i>
                                                        @lang('site.view')
                                                    </a>
                                                </li>
                                                <li class="liItem-booking-stop">
                                                    <a href="#">
                                                        <i class="far fa-stopwatch"></i>
                                                        @lang('site.Pause')
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div
                                        class="ads-card-footer d-md-flex align-items-center  ads-waiting"
                                    >
                                        <div>
                    <span class="first-ic text-main">
                      <i class="far fa-list-ul "></i></span>
                                            <span class="text-second">@lang('site.Ad status') :</span>

                                        </div>


                                        <div class="mt-md-0 mt-2"> <span class="second-ic">
                    <i class="fas fa-clock"></i>
                  </span>
                                            <span>  {{$aquar->bookingstatus->status ?? ''}} </span></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                    @unless (count($aqars))
{{--                @if($aqars = null)--}}
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="card-empty d-md-flex align-items-center">
                                <div class="card-empty-txt">  @lang('site.notaqars')</div>
                                <div>
                                    <img
                                        src="{{FRONTASSETS}}/assets/images/investor/empty-ic.svg"
                                        alt="empty icon"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    @endunless
{{--                @endif--}}
            </div>
        </section>
    </main>

@endsection


