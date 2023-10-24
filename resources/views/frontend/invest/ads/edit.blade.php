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

                            @lang('site.update an advertisement')

                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- add-ads-page -->

        <form action="{{ route('invest.updateads', $aqar->id) }}" method="post"
              enctype="multipart/form-data" id="" class="form-main">

            {{ csrf_field() }}
            {{ method_field('put') }}
            <section class="py-4 add-ads-page">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="investor_7agz_card">
                                <div
                                        class="static-header-page round-border d-lg-flex justify-content-between align-items-center py-5 px-sm-5 px-4"
                                >
                                    <div class="d-flex">
                                        <div class="help-ic">
                                            <i class="fas fa-question-circle"></i>
                                        </div>
                                        <div>
                                            <div class="help-txt">


                                                @lang('site.If you have a problem update your ad, please call us')
                                            </div>
                                            <div
                                                    class="main-btn d-flex align-items-center justify-content-center"
                                            >
                                                <a href="#">
                                                    <span><i class="fas fa-phone"></i></span>
                                                    {{$setting->phone_one ?? ''}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="static-image">
                                        <img
                                                src="{{FRONTASSETS}}/assets/images/investor/add-ads.png"
                                                alt="Add Ads image"
                                        />
                                    </div>


                                </div>
                                <div class="my-5">
                                    <h2> @lang('site.update an advertisement')</h2>
                                    <div class="investor_7agz_card my-4">
                                        <div class="row">
                                            <div class="col-lg-5 mb-3">
                                                <label for="cat" class="pb-2 hagz-lbl">
                                                    @lang('site.category')
                                                    <span>( @lang('site.Mandatory') )</span>
                                                </label>
                                                <select name="category_id" class="select2" id="cat">
                                                    <option disabled selected> @lang('site.select')</option>

                                                    @foreach($categories as $category)
                                                        <option
                                                                value="{{$category->id}}"
                                                                @if($aqar->category_id==$category->id) selected @endif> {{$category->name ?? ''}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-5 mb-3">
                                                <label for="country" class="pb-2 hagz-lbl">
                                                    @lang('site.country')
                                                    <span>(  @lang('site.Mandatory')  )</span>
                                                </label>
                                                <select name="country_id" class="select2" id="country">
                                                    <option disabled selected> @lang('site.select')</option>
                                                    @foreach($countries as $country)
                                                        <option
                                                                value="{{$country->id}}"
                                                                @if($aqar->country_id==$country->id) selected @endif> {{$country->name ?? ''}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-5 mb-3">
                                                <label for="farmname" class="pb-2 hagz-lbl">
                                                    @lang('site.Farm name')
                                                    <span>(@lang('site.optional') )</span>
                                                </label>
                                                <input
                                                        type="text"
                                                        id="farmname"
                                                        class="form-control hagz-input"
                                                        name="name_ar"
                                                        placeholder="  {{trans('site.name')}}  "
                                                        value="{{$aqar->name_ar ?? ''}}"
                                                        required
                                                />
                                                <div class="text-danger pt-2">
                                                    ({{trans('site.The name appears to the customer after booking')}})
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-8 mb-3">
                                                <label for="area" class="pb-2 hagz-lbl"
                                                >@lang('site.total_area')
                                                    <span>(  @lang('site.Mandatory')  )</span>
                                                </label>

                                                <input
                                                        type="number"
                                                        id="area"
                                                        class="form-control hagz-input"
                                                        placeholder="1  "
                                                        min="1"
                                                        name="total_area"
                                                        value="{{$aqar->total_area ?? ''}}"
                                                        required
                                                />
                                            </div>

                                            <div class="col-lg-2 col-4 d-flex align-items-center pt-lg-0 pt-3">
                                                <h4></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-lg-5 mt-4 ads-radio-list">
                                        <div class="row">
                                            <div class="col-12  mb-lg-5 mb-4"><h2>@lang('site.Set the price')</h2></div>
                                        </div>
                                        <div class="row mb-ld-5 mb-4">
                                            <div class="col-lg-5 col-12">
                                                <div class="d-flex align-items-center mb-lg-0 mb-3">
                                                    <input
                                                            type="radio"
                                                            name="price"
                                                            id="price1"
                                                            value="1"
                                                            checked
                                                    />
                                                    <label for="price1" class="online-lbl custom-radio">
                                                        @lang('site.Price depends on the day')
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-12">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                            type="radio"
                                                            name="price"
                                                            id="price2"
                                                            value="2"
                                                    />
                                                    <label
                                                            for="price2"
                                                            class="online-lbl custom-radio"
                                                    >

                                                        @lang('site.Price depends on the week')

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="pt-3 border-light-bottom"></div>
                                            </div>
                                        </div>
                                        <div class="row  desc mb-4">
                                            <div class="col-12">
                                                <label for="normalDay" class="pb-2 hagz-lbl"
                                                >@lang('site.Regular day price')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-10 col-sm-8 col-6">


                                                <input
                                                        type="number"
                                                        id="normalDay"
                                                        class="form-control hagz-input"
                                                        placeholder="1  "
                                                        min="1"
                                                        name="fixed_price"
                                                        value="{{$aqar->fixed_price ?? ''}}"
                                                />
                                            </div>

                                            <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">
                                                <h4> @lang('site.Kuwaiti Dinar')</h4>
                                            </div>
                                        </div>
                                        <div class="row" id="detailprice2" style="display: none;">

                                            <div class="col-md-12 form-group col-12"
                                            >
                                                <table class="price-list" id="tb_price">


                                                    @if($aqar->changed_price)
                                                    @for ($x = 0; $x <= count($aqar->changed_price->price)-1; $x++)
                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.personnumber')</label>
                                                                        <input type="number" name="person_num[]"
                                                                               class="form-control"
                                                                               value="{{$aqar->changed_price->person_num[$x]}}" />
                                                                    </div>
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.fixed_price')</label>
                                                                        <input type="number"  step=".1" name="price[]"
                                                                               class="form-control"
                                                                               value="{{$aqar->changed_price->price[$x]}}" />
                                                                    </div>
                                                                    @if($x==0)
                                                                        <div class="col-md-4 form-group col-12">
                                                                            <a
                                                                                class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                                    class="fa fa-plus"
                                                                                    aria-hidden="true"></i></a>
                                                                        </div>
                                                                    @endif
                                                                    @if($x!=0)
                                                                        <div class="col-md-2 form-group col-12">
                                                                            <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30"
                                                                               onclick="deletetr(this)"><i
                                                                                    class="fa fa-trash"></i></a>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endfor
                                                    @else


                                                        <tr>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.personnumber')</label>
                                                                        <input type="number" name="person_num[]"
                                                                               class="form-control"/>
                                                                    </div>
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <label>@lang('site.fixed_price')</label>
                                                                        <input type="number" step=".1"
                                                                               name="price[]"
                                                                               class="form-control">
                                                                    </div>
                                                                    <div class="col-md-4 form-group col-12">
                                                                        <a
                                                                            class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                                class="fa fa-plus"
                                                                                aria-hidden="true"></i></a>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>





                                                    @endif

                                                </table>



                                            </div>

                                            {{--                                        <div class="col-12">--}}
                                            {{--                                            <label for="weekendPrice" class="pb-2 hagz-lbl">--}}
                                            {{--                                                سعر يوم العطلة--}}
                                            {{--                                                <span>( @lang('site.Mandatory')  )</span>--}}
                                            {{--                                            </label>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="col-lg-10 col-sm-8 col-6">--}}


                                            {{--                                            <input--}}
                                            {{--                                                type="number"--}}
                                            {{--                                                id="weekendPrice"--}}
                                            {{--                                                class="form-control hagz-input"--}}
                                            {{--                                                placeholder="1  "--}}
                                            {{--                                                min="1"--}}
                                            {{--                                            />--}}

                                            {{--                                        </div>--}}

                                            {{--                                        <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">--}}
                                            {{--                                            <h4>دينار كويتى</h4>--}}
                                            {{--                                        </div>--}}
                                            {{--                                        <div class="col-12">--}}
                                            {{--                                            <div class="text-danger pt-2">--}}
                                            {{--                                                اذا كان السعر ثابت يرجي ادخال نفس المبلغ في الخانتين.--}}
                                            {{--                                            </div>--}}
                                            {{--                                        </div>--}}
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="rentalPeriod" class="hagz-lbl-two pt-4">


                                                    @lang('site.Minimum rental period')

                                                    <span class="text-danger">( @lang('site.Mandatory')  )</span>
                                                </label>
                                            </div>
                                            <div class="col-12 mb-lg-5 mb-4">
                                                <div class="pt-2 border-light-bottom"></div>
                                            </div>
                                            <div class="col-lg-5 col-6">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                            type="radio"
                                                            name="rental_period"
                                                            id="day"
                                                            value="day"

                                                            @if($aqar->rental_period=='day') checked @endif
                                                    />
                                                    <label for="day" class="online-lbl custom-radio mb-4">

                                                        @lang('site.day')
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-6">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                            type="radio"
                                                            name="rental_period"
                                                            id="twoDay"
                                                            value="twoDay"

                                                            @if($aqar->rental_period=='twoDay') checked @endif
                                                    />
                                                    <label
                                                            for="twoDay"
                                                            class="online-lbl custom-radio mb-4"
                                                    >

                                                        @lang('site.twoDay')

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-6">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                            type="radio"
                                                            name="rental_period"
                                                            id="threeDay"
                                                            value="threeDay"

                                                            @if($aqar->rental_period=='threeDay') checked @endif
                                                    />
                                                    <label
                                                            for="threeDay"
                                                            class="online-lbl custom-radio mb-4"
                                                    >

                                                        @lang('site.threeDay')

                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-6">
                                                <div class="d-flex align-items-center">
                                                    <input
                                                            type="radio"
                                                            name="rental_period"
                                                            id="fourDays"
                                                            value="fourDays"
                                                            @if($aqar->rental_period=='fourDays') checked @endif
                                                    />
                                                    <label
                                                            for="fourDays"
                                                            class="online-lbl custom-radio mb-4"
                                                    >

                                                        @lang('site.fourDays')

                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-12">
                                                <label for="insuranceAmount" class="pb-2 hagz-lbl"
                                                >

                                                    @lang('site.Insurance_amount')
                                                    <span>(  @lang('site.optional') )</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-10 col-sm-8 col-6 ">


                                                <input
                                                        type="number"
                                                        name="Insurance_amount"
                                                        id="insuranceAmount"
                                                        class="form-control hagz-input"
                                                        placeholder="1  "
                                                        min="1"

                                                        value="{{$aqar->Insurance_amount ?? ''}}"
                                                />
                                            </div>

                                            <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center ">
                                                <h4 class="mb-0"> @lang('site.Kuwaiti Dinar')</h4>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-12">
                                                <label for="deposit" class="pb-2 hagz-lbl"
                                                >

                                                    @lang('site.amount_deposit')
                                                    <span>(  @lang('site.optional') )</span>
                                                </label>
                                            </div>
                                            <div class="col-lg-10 col-sm-8 col-6 ">


                                                <input
                                                        type="number"
                                                        id="deposit"
                                                        name="amount_deposit"
                                                        class="form-control hagz-input"
                                                        placeholder="1  "
                                                        min="1"
                                                        value="{{$aqar->amount_deposit ?? ''}}"
                                                />
                                            </div>

                                            <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">
                                                <h4 class="mb-0 ">         @lang('site.Kuwaiti Dinar')</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-md-5 mt-4">
                                        <div class="row">
                                            <div class="col-12  mb-lg-5 mb-4">
                                                <h2>   @lang('site.Determine the time')        </h2></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-10 mb-4">
                                                <label for="entryHour" class="pb-2 hagz-lbl"
                                                >
                                                    @lang('site.time_from')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>

                                                <input
                                                        type="time"
                                                        id="entryHour"
                                                        name="time_from"
                                                        class="form-control hagz-input time-txt-left"
                                                        placeholder="9:12pm  "
                                                        value="{{$aqar->time_from ?? ''}}"
                                                        required
                                                />
                                            </div>
                                            <div class="col-lg-10 mb-4">
                                                <label for="CheckoutHour" class="pb-2 hagz-lbl">

                                                    @lang('site.time_to')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>

                                                <input
                                                        type="time"
                                                        name="time_to"
                                                        id="CheckoutHour"
                                                        class="form-control hagz-input time-txt-left"
                                                        placeholder="9:12pm  "
                                                        value="{{$aqar->time_to ?? ''}}"
                                                        required
                                                />
                                            </div>
                                            <div class="col-lg-10 mb-3">
                                                <label for="specifiedPlace" class="pb-2 hagz-lbl">
                                                    @lang('site.specified place')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>
                                                <select
                                                        name="individual"
                                                        class="select2"
                                                        id="specifiedPlace"
                                                >
                                                    <option disabled> @lang('site.select')</option>
                                                    <option value="families"
                                                            @if($aqar->individual=='families') selected @endif > @lang('site.families')</option>
                                                    <option value="youths"
                                                            @if($aqar->individual=='youths') selected @endif > @lang('site.youths')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-md-5 mt-4">
                                        <div class="row">
                                            <div class="col-12  mb-lg-5 mb-4">
                                                <h2>      @lang('site.Choose the main image for the ad')     </h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <label for="mainImage" class="pb-2 hagz-lbl">
                                                    @lang('site.image')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>
                                                <div class="text-danger">
                                                    ( @lang('site.Pictures containing a logo or phone number will not be accepted')
                                                    )
                                                </div>
                                                <label class="upload__btn">
                                                    <div>
                                                        <i class="fal fa-cloud-download"></i>
                                                        <div>drag and drop or browse for upload image</div>
                                                    </div>
                                                    <input
                                                            type="file"
                                                            name="main_image"
                                                            data-max_length="20"
                                                            class="form-control upload__inputfile"
                                                            id="imgInp"

                                                    />
                                                </label>


                                                <img src="{{asset('images/aqars/'.$aqar->main_image)}}" data-bs-toggle="modal"
                                                     data-bs-target="#exampleModalss" width="100px" height="100px"
                                                     class="d-block"
                                                     onerror="this.src='{{asset('images/aqars/default.jpg')}}'">

                                                <img
                                                        id="frame"
                                                        src=""
                                                        width="150px"
                                                        class="img-upload"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-md-5 mt-4">
                                        <div class="row">
                                            <div class="col-12  mb-lg-5 mb-4">
                                                <h2>    @lang('site.Choose the rest of the photos for the ad')</h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <label for="mainImage" class="pb-2 hagz-lbl">
                                                    @lang('site.images')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>
                                                <div class="text-danger">
                                                    (@lang('site.A video containing a logo or phone number will not be accepted')
                                                    )
                                                </div>
                                                <label class="upload__btn">
                                                    <div>
                                                        <i class="fal fa-cloud-download"></i>
                                                        <div>drag and drop or browse for upload image</div>
                                                    </div>
                                                    <input
                                                            type="file"
                                                            name="images[]"
                                                            class="form-control upload__inputfile"
                                                            multiple
                                                            id="upload-imgs"

                                                    />
                                                </label>
                                                @if($aqar->images)
                                                    @foreach ((explode(',',$aqar->images)) as $img)
                                                        <div class="wrapper-thumb">
                                                            <img id="frame" src="{{asset('images/aqars/'.$img)}}"
                                                                 alt=""
                                                                 onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                                                 width="200px" class="img-preview-thumb" /><span
                                                                class="remove-btn">x</span>
                                                        </div>
                                                    @endforeach
                                                @endif


                                                <div
                                                        class="img-thumbs img-thumbs-hidden"
                                                        id="img-previews"
                                                ></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-md-5 mt-4">
                                        <div class="row">
                                            <div class="col-12  mb-lg-5 mb-4">
                                                <h2>  @lang('site.Choose the appropriate video')   </h2>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <label for="mainImage" class="pb-2 hagz-lbl">
                                                    @lang('site.videos')
                                                    <span>( @lang('site.Mandatory')  )</span>
                                                </label>
                                                <div class="text-danger">
                                                    (@lang('site.A video containing a logo or phone number will not be accepted')
                                                    )
                                                </div>
                                                <label class="upload__btn">
                                                    <div>
                                                        <i class="fal fa-cloud-download"></i>
                                                        <div>drag and drop or browse for upload vedio</div>
                                                    </div>

                                                    <input
                                                            type="file"
                                                            id="videoUpload"
                                                            class="form-control upload__inputfile"
                                                            name="videos"

                                                    />
                                                </label>


                                                <video
                                                        width="250"
                                                        height="250"
                                                        style="display: none;border-radius: 5px;"
                                                        controls
                                                        class="video-upload"
                                                        autoplay
                                                >
                                                    Your browser does not support the video tag.
                                                </video>

                                                <video width="250" height="200"
                                                       src="{{asset('images/aqars/videos/'.$aqar->videos)}}"
                                                       controls class="video-upload" autoplay>
                                                    Your browser does not support the video tag.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="investor_7agz_card mt-md-5 mt-4 ads-radio-list">


                                        <div class="row ads-checkbox-list custom-checkbox">


                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-4">
                                                <label for="allowedPerson" class="pb-2 hagz-lbl"
                                                >


                                                    @lang('site.Number of people allowed')
                                                    <span>(  @lang('site.Mandatory') )</span>
                                                </label>

                                                <input
                                                        type="number"
                                                        id="allowedPerson"
                                                        name="personnumber"
                                                        class="form-control hagz-input"
                                                        placeholder="1  "
                                                        min="1"
                                                        value="{{$aqar->personnumber ?? ''}}"
                                                />
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-12 mb-lg-0 mb-3">
                                                <label for="" class="pb-2 hagz-lbl">
                                                    @lang('site.description')
                                                    <span class="text-danger">@lang('site.optional') </span>
                                                </label>
                                                <div class="text-danger mt-1">
                                                    (@lang('site.Phone number is not accepted'))
                                                </div>
                                                <div class="form-group">
                                                <textarea name="details" class="form-control txtarea-7agz p-3 mt-2"
                                                          placeholder="{{trans('site.Please write specifications')}}  "
                                                          rows="6" required>


                                                      {{$aqar->details ?? ''}}
                                                </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row" id="result_data1">

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-flex justify-content-center mt-md-5 mt-3">
                                            <div
                                                    class="main-btn py-4 d-flex justify-content-center align-items-center add-ads-btn">
                                                <button type="submit">  @lang('site.update an advertisement')</button>
                                            </div>
                                        </div>
                                        <div class="danger-txt text-center pt-3">
                                            <span><i class="fas fa-exclamation-triangle"></i></span>
                                            ( @lang('site.Please do not close the page and wait for it to load') )
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </form>
    </main>

@endsection


@section('scripts')

    <script>
        $(document).ready(function () {

            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    ' <label>@lang('site.personnumber')</label><input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<label>@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("#price2").click(function () {
                var test = $(this).val();

                console.log('price', test);
                if (test == 2) {

                    $("div.desc").hide();
                    $("#detailprice2").show();
                }


            });

            $("#price1").click(function () {
                var test = $(this).val();

                console.log('price', test);

                $("#detailprice2").hide();

                $("div.desc").show();


            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        {{--$(document).ready(function () {--}}
        {{--    $("#FormAdd").submit(function (event) {--}}


        {{--        console.log("ffsdfsdfsffsdf");--}}
        {{--        var data = $("#FormAdd").serialize();--}}
        {{--        var url = '{{ route('invest.AjaxAddAds') }}';--}}

        {{--        console.log("formdata",formData);--}}
        {{--        $.ajax({--}}
        {{--            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},--}}

        {{--            url:url,--}}
        {{--            method:'POST',--}}
        {{--            cache: false,--}}
        {{--            processData:false,--}}
        {{--            contentType: false,--}}
        {{--            enctype: 'multipart/form-data',--}}
        {{--            data: new FormData(document.getElementById("add-form")),--}}
        {{--        }).done(function (data) {--}}
        {{--            console.log(data);--}}
        {{--        });--}}

        {{--        event.preventDefault();--}}
        {{--    });--}}
        {{--});--}}



        $('#cat').change(function () {
            var category_id = $(this).val();

            console.log("category", category_id);
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting') }}' + '/' + category_id,
                success: function (html) {

                    console.log("success", html);
                    $("#result_data1").show();
                    var element = $('#result_data');
                    element.empty();
                    $('#result_data1').html(html);
                }
            })
        });


    </script>
@endsection
