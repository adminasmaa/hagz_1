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
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)"> {{$aqar->category->name ??  ''}} </a>
                        </li>
                        <li class="breadcrumb-item text-light-main" aria-current="page">
                            @lang('site.details')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- farm images section -->
        <section class="farm-details-images">
            <div class="container">
                <div class="row farm-details" id="slideshow">
                    <div class="col-lg-7">
                        <div id="slides">

                            @if($aqar->images)
                                @foreach ((explode(',',$aqar->images)) as $key=>$img)
                                    <div class="slide show" data-slide="{{$key}}">
                                        <img src="{{asset('images/aqars/'.$img)}}"
                                             alt=""
                                             onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                        />
                                    </div>
                                @endforeach

                            @else
                                <div class="slide show" data-slide="1">
                                    <img src="{{FRONTASSETS}}/assets/images/farm-img-1.svg" alt="farm image"/>
                                </div>
                            @endif


                            <div class="d-flex align-items-center h-100">
                                <div class="slide-btn next-slide">
                    <span>
                      <i class="fas fa-chevron-right"></i>
                    </span>
                                </div>

                                <div class="slide-btn prev-slide">
                                    <span> <i class="fas fa-chevron-left"></i></span>
                                </div>
                            </div>
                        </div>
                        <div id="gallery" class="d-flex flex-wrap">

                            @if($aqar->images)
                                @foreach ((explode(',',$aqar->images)) as $k=>$img)
                                    <div class="thumbnail active" data-slide="{{$k}}">
                                        <img id="frame" src="{{asset('images/aqars/'.$img)}}"
                                             alt=""
                                             onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                        />
                                    </div>
                                @endforeach

                            @else

                                <div class="thumbnail" data-slide="1">
                                    <img src="{{FRONTASSETS}}/assets/images/farm-img-1.svg" alt="farm image"


                                    />
                                </div>

                            @endif


                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card-frm-details py-4 px-3 mt-lg-0 mt-3">
                            <div
                                class="d-sm-flex align-items-center justify-content-between"
                            >
                                <div class="text-main number-ads-frm">     @lang('site.id number')({{$aqar->id}})</div>
                                <div
                                    class="d-flex justify-content-lg-end align-items-center mt-sm-0 mt-3"
                                >
                                    <div class="farm-badge bg-main text-white">
                                        <div class="pt-1">{{$aqar->aqarReview->avg('rate') ?? 0}}</div>
                                        <div>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="reviews-txt">   @lang('site.comments')

                                        {{$aqar->aqarComment->count()}}  </div>
                                </div>
                            </div>
                            <h2 class="pt-2"> {{$aqar->name ?? ''}}</h2>
                            <div
                                class="weekly-system-prices bg-main d-flex align-items-center justify-content-center"
                            >
                                اسعار نظام الاسبوع
                            </div>
                            <div class="mt-3 custom-table">
                                <table class="table table-bordered table-sm">
                                    <thead>
                                    <tr>
                                        <th class="th-txt">المدة</th>

                                        <th class="th-txt">الايام</th>
                                        <th class="th-txt">الاسعار</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="table-txt">4 ايام</td>
                                        <td class="table-txt">
                                            الأحد - الأثنين - الثلاثاء - الاربعاء
                                        </td>
                                        <td class="table-txt">350 دينار</td>
                                    </tr>
                                    <tr>
                                        <td class="table-txt">4 ايام</td>
                                        <td class="table-txt">
                                            الأحد - الأثنين - الثلاثاء - الاربعاء
                                        </td>
                                        <td class="table-txt">350 دينار</td>
                                    </tr>
                                    <tr>
                                        <td class="table-txt">4 ايام</td>
                                        <td class="table-txt">
                                            الأحد - الأثنين - الثلاثاء - الاربعاء
                                        </td>
                                        <td class="table-txt">350 دينار</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- farm description section -->
        <section class="farm-description py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div
                            class="d-md-flex align-items-center justify-content-md-between"
                        >
                            <div>
                                <div class="text-main number-ads-frm">@lang('site.id number')({{$aqar->id}})</div>
                                <h2>{{$aqar->name ?? ''}}</h2>
                            </div>
                            <div class="d-sm-flex align-items-center mt-md-0 mt-3">
                                <div
                                    class="farm-share d-flex justify-content-lg-end align-items-center"
                                >
                                    <div class="farm-share-ic">
                                        <img


                                            src="{{asset('images/aqars/'.$aqar->main_image)}}"

                                            onerror="this.src='{{FRONTASSETS}}/assets/images/share-ic.svg'"
                                            alt="share icon"
                                        />
                                    </div>
                                    <div class="fw-bold farm-share-txt"> @lang('site.Share the ad')</div>
                                </div>
                                <div
                                    class="main-btn d-flex align-items-center justify-content-center"
                                >
                                    <a href="#">
                                        <span><i class="fas fa-phone-plus"></i></span>
                                        @lang('site.Contact the farm owner')
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <h4 class="pt-3">@lang('site.description')</h4>
                        <p class="mb-0 farm-description-txt">
                            {!! html_entity_decode(substr($aqar->description, 0, 125)) !!}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center farm-data">
                            <div class="farm-data-img">
                                <i class="fas fa-map-marker-alt text-main"></i>
                            </div>
                            <div class="text-second">      {{$aquar->country->name ?? ''}}
                                , {{$aquar->city->name ?? ''}}</div>
                        </div>
                        <div class="d-flex align-items-center farm-data">
                            <div class="farm-data-img">
                                <img
                                    src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                    alt="families icon"
                                />
                            </div>
                            <div class="text-second"> {{trans('site.'.$aqar->individual)}}</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center farm-data">
                            <div class="farm-data-img">
                                <i class="fas fa-user text-main"></i>
                            </div>
                            <div class="text-second"> @lang('site.allownumber'): {{$aqar->personnumber ?? 0}}</div>
                        </div>
                        <div class="d-flex align-items-center farm-data">
                            <div class="farm-data-img">
                                <img src="{{FRONTASSETS}}/assets/images/area-ic.svg" alt="families icon"/>
                            </div>
                            <div class="text-second">     @lang('site.total_area'): {{$aqar->total_area?? 0}}</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tabs-details mt-lg-5 mt-4">
                            <ul class="tabs-nav-details list-unstyled mb-0">
                                <li>
                                    <a
                                        href="#tab-1"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.details')
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#tab-2"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.comments')
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#tab-3"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        {{trans('site.map')}}


                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#tab-4"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.conditions')
                                    </a>
                                </li>
                            </ul>
                            <ul class="tabs-content tabs-details-content list-unstyled">
                                <li id="tab-1">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="farm-details-card p-3 mt-lg-5 mt-3">
                                                <div class="my-lg-3">
                                                    <div class="accordion" id="accordion_details">

                                                        @foreach($aqar->aqarSection as $key=>$section)
                                                            <div class="accordion-item details-item mb-2">
                                                                <h3 class="accordion-header">
                                                                    <button
                                                                        class="accordion-button fw-bold"
                                                                        data-bs-toggle="collapse"
                                                                        data-bs-target="#accordion-details-{{$key}}"
                                                                        aria-expanded="true"
                                                                        aria-controls="accordion-details-{{$key}}"
                                                                    >
                                                                        <div>
                                    <span class="details-item-ic"
                                    >

{{--                                        --}}
                                        {{--                                        --}}
                                        {{--                                        <i class="fas fa-car"></i--}}
                                        {{--                                        >--}}
                                        {{--                                    --}}



                                                                  <img
                                                                      src="{{asset('images/services_aqars/'.$section->icon)}}"

                                                                      width="50px" height="50px"
                                                                      onerror="this.src='{{FRONTASSETS}}/assets/images/area-ic.svg'"
                                                                      alt="car"/>


                                    </span>

                                                                            {{$section->name ?? ''}}
                                                                        </div>

                                                                        <div class="arrow-down">
                                                                            <i class="far fa-chevron-down"></i>

                                                                        </div>
                                                                    </button>


                                                                </h3>
                                                                <div
                                                                    id="accordion-details-{{$key}}"
                                                                    class="accordion-collapse collapse show"
                                                                >
                                                                    <div class="accordion-body">

                                                                        <div class="custom-ul-list">
                                                                            @foreach($section->subsection->unique('name') as $subsection)

                                                                                <div class="custom-ul-list-item">
                                                                                    {{$subsection->name  ?? ''}}
                                                                                </div>
                                                                            @endforeach

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex align-items-center justify-content-center mt-lg-5 mt-3"
                                        >
                                            <div
                                                class="main-btn d-flex align-items-center justify-content-center"
                                            >
                                                <a href="#">
                                                    <span><i class="fas fa-phone-plus"></i></span>
                                                    @lang('site.Contact the farm owner')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="tab-2">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="farm-details-card p-3 mt-lg-5 mt-3">

                                                <div
                                                    class="full-reviews round-border my-lg-5 my-3 py-lg-4 px-lg-5 p-3"
                                                >
                                                    <div class="d-md-flex align-items-center">
                                                        <div
                                                            class="d-flex align-items-center justify-content-center"
                                                        >
                                                            <div
                                                                class="round-box d-flex justify-content-center align-items-center"
                                                            >
                                                                <div>
                                                                    <div>
                                                                        <span> <i class="fas fa-star"></i></span>
                                                                        <span class="text-second"> ({{$aqar->aqarReview->avg('rate') ?? 0}})</span>
                                                                    </div>
                                                                    <div class="text-second text-center">
                                                                        {{$aqar->aqarReview->count() ?? 0}} @lang('site.reviews')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-content">
                                                            <h3 class="review-title">@lang('site.excellent')</h3>
                                                            <p class="review-txt">
                                                                @lang('site.Based on reviews from all kinds of travelers')
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex align-items-center justify-content-center mt-lg-5 mt-3"
                                        >
                                            <div
                                                class="main-btn d-flex align-items-center justify-content-center"
                                            >
                                                <a href="#">
                                                    <span><i class="fas fa-phone-plus"></i></span>
                                                    @lang('site.Contact the farm owner')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="tab-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="farm-details-card p-3 mt-lg-5 mt-3">
                                                <h4 class="details-head pt-4">@lang('site.locations')</h4>
                                                <div class="d-flex">
                                                    <div class="details-item-ic">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                    <p class="details-sm-txt">
                                                        {{$aqar->details ?? ''}}
                                                    </p>
                                                </div>
                                                <div class="map my-lg-5 my-3">
                                                    <iframe
                                                        src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2965.0824050173574!2d-93.63905729999999!3d41.998507000000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sWebFilings%2C+University+Boulevard%2C+Ames%2C+IA!5e0!3m2!1sen!2sus!4v1390839289319"
                                                        width="100%"
                                                        frameborder="0"
                                                        class="round-border iframe-map"
                                                    >
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            class="col-12 d-flex align-items-center justify-content-center mt-lg-5 mt-3"
                                        >
                                            <div
                                                class="main-btn d-flex align-items-center justify-content-center"
                                            >
                                                <a href="#">
                                                    <span><i class="fas fa-phone-plus"></i></span>
                                                    @lang('site.Contact the farm owner')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="tab-4">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="farm-details-card p-3 mt-lg-5 mt-3">
                                                <h4>
                                                    @lang('site.locations')
                                                </h4>
                                                <div class="condition-content">
                                                    <h3 class="condition-title mb-0">@lang('site.cancle_reason') </h3>
                                                    <p class="details-sm-txt padding-right mb-4">


                                                        @lang('site.The customer cancels')


                                                    </p>
                                                    <hr class="hr-7agz"/>
                                                </div>
                                                <div class="condition-content">
                                                    <h3 class="condition-title mb-0"> @lang('site.allownumber')</h3>
                                                    <p class="details-sm-txt padding-right"> {{$aqar->personnumber ?? 0}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="col-12 d-flex align-items-center justify-content-center mt-lg-5 mt-3"
                                        >
                                            <div
                                                class="main-btn d-flex align-items-center justify-content-center"
                                            >
                                                <a href="#">
                                                    <span><i class="fas fa-phone-plus"></i></span>
                                                    @lang('site.Contact the farm owner')
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-lg-flex">
            <div class="right-container d-flex align-items-center py-lg-0 py-4">
                <div class="right-container-content">
                    <h2>  @lang('site.Download the application now')</h2>
                    <p>@lang('site.You can download the application now from us on')</p>
                    <div class="d-flex justify-content-between py-3">
                        <div
                            class="footer-img d-flex align-items-center justify-content-center"
                        >
                            <a href="#">
                                <img
                                    src="{{FRONTASSETS}}/assets/images/google-play.svg"
                                    alt="google play"
                                />
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#">
                                <img src="{{FRONTASSETS}}/assets/images/app-store.svg" alt=" app store"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="left-container"
                style="background-image: url('{{FRONTASSETS}}/assets/images/footer-image.png')"
            ></div>
        </section>
    </main>

@endsection



