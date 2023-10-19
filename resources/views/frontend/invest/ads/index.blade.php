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

@lang('site.Add an advertisement')

                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- add-ads-page -->
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



                                            @lang('site.If you have a problem adding your ad, please call us')
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
                                <h2> @lang('site.Add an advertisement')</h2>
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
                                                <option value="{{$category->id}}"> {{$category->name ?? ''}}</option>

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
                                                <option value="{{$country->id}}"> {{$country->name ?? ''}}</option>
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
                                            />
                                        </div>

                                        <div class="col-lg-2 col-4 d-flex align-items-center pt-lg-0 pt-3">
                                            <h4> </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="investor_7agz_card mt-lg-5 mt-4 ads-radio-list">
                                    <div class="row">
                                        <div class="col-12  mb-lg-5 mb-4"><h2>حدد السعر</h2></div>
                                    </div>
                                    <div class="row mb-ld-5 mb-4">
                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex align-items-center mb-lg-0 mb-3">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="priceDay"
                                                    checked=""
                                                />
                                                <label for="priceDay" class="online-lbl custom-radio">
                                                    السعر حسب اليوم
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="priceWeek"
                                                />
                                                <label
                                                    for="priceWeek"
                                                    class="online-lbl custom-radio"
                                                >
                                                    السعر حسب الاسبوع
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="pt-3 border-light-bottom"></div>
                                        </div>
                                    </div>
                                    <div class="row  mb-4">
                                        <div class="col-12">
                                            <label for="normalDay" class="pb-2 hagz-lbl"
                                            >سعر اليوم العادى
                                                <span>( اجبارى )</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-10 col-sm-8 col-6">


                                            <input
                                                type="number"
                                                id="normalDay"
                                                class="form-control hagz-input"
                                                placeholder="1  "
                                                min="1"
                                            />
                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">
                                            <h4 >دينار كويتى</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="weekendPrice" class="pb-2 hagz-lbl">
                                                سعر يوم العطلة
                                                <span>( اجبارى )</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-10 col-sm-8 col-6">


                                            <input
                                                type="number"
                                                id="weekendPrice"
                                                class="form-control hagz-input"
                                                placeholder="1  "
                                                min="1"
                                            />

                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">
                                            <h4>دينار كويتى</h4>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-danger pt-2">
                                                اذا كان السعر ثابت يرجي ادخال نفس المبلغ في الخانتين.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="rentalPeriod" class="hagz-lbl-two pt-4">
                                                أقل مدة ايجار
                                                <span class="text-danger">( اجبارى )</span>
                                            </label>
                                        </div>
                                        <div class="col-12 mb-lg-5 mb-4">
                                            <div class="pt-2 border-light-bottom"></div>
                                        </div>
                                        <div class="col-lg-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="day"
                                                    checked=""
                                                />
                                                <label for="day" class="online-lbl custom-radio mb-4">
                                                    يوم
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="twoDay"
                                                />
                                                <label
                                                    for="twoDay"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    يومين
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="threeDay"
                                                    checked=""
                                                />
                                                <label
                                                    for="threeDay"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    3 ايام
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="register-radio"
                                                    id="fourDays"
                                                />
                                                <label
                                                    for="fourDays"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    4 ايام
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="insuranceAmount" class="pb-2 hagz-lbl"
                                            >مبلغ التأمين
                                                <span>( غير اجبارى )</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-10 col-sm-8 col-6 ">


                                            <input
                                                type="number"
                                                id="insuranceAmount"
                                                class="form-control hagz-input"
                                                placeholder="1  "
                                                min="1"
                                            />
                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center ">
                                            <h4 class="mb-0">دينار كويتى</h4>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="deposit" class="pb-2 hagz-lbl"
                                            >مبلغ العربون
                                                <span>( غير اجبارى )</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-10 col-sm-8 col-6 ">


                                            <input
                                                type="number"
                                                id="deposit"
                                                class="form-control hagz-input"
                                                placeholder="1  "
                                                min="1"
                                            />
                                        </div>

                                        <div class="col-lg-2 col-sm-4 col-6 d-flex align-items-center">
                                            <h4 class="mb-0 ">دينار كويتى</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="investor_7agz_card mt-md-5 mt-4">
                                    <div class="row">
                                        <div class="col-12  mb-lg-5 mb-4"><h2>تحديد الوقت</h2></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-10 mb-4">
                                            <label for="entryHour" class="pb-2 hagz-lbl"
                                            >ساعة الدخول
                                                <span>( اجبارى )</span>
                                            </label>

                                            <input
                                                type="time"
                                                id="entryHour"
                                                class="form-control hagz-input time-txt-left"
                                                placeholder="9:12pm  "
                                            />
                                        </div>
                                        <div class="col-lg-10 mb-4">
                                            <label for="CheckoutHour" class="pb-2 hagz-lbl">
                                                ساعة الخروج
                                                <span>( اجبارى )</span>
                                            </label>

                                            <input
                                                type="time"
                                                id="CheckoutHour"
                                                class="form-control hagz-input time-txt-left"
                                                placeholder="9:12pm  "
                                            />
                                        </div>
                                        <div class="col-lg-10 mb-3">
                                            <label for="specifiedPlace" class="pb-2 hagz-lbl">
                                                المكان المخصص
                                                <span>( اجبارى )</span>
                                            </label>
                                            <select
                                                name="specifiedPlace"
                                                class="select2"
                                                id="specifiedPlace"
                                            >
                                                <option value="">اختر المكان</option>
                                                <option value="one">للعائلات فقط</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="investor_7agz_card mt-md-5 mt-4">
                                    <div class="row">
                                        <div class="col-12  mb-lg-5 mb-4">
                                            <h2>اختر الصورة الرئيسية للاعلان</h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label for="mainImage" class="pb-2 hagz-lbl">
                                                الصورة
                                                <span>( اجبارى )</span>
                                            </label>
                                            <div class="text-danger">
                                                ( لايتم قبول صور بها شعار أو رقم تليفون )
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
                                                    required
                                                />
                                            </label>

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
                                            <h2>     اختر باقى الصور للاعلان</h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label for="mainImage" class="pb-2 hagz-lbl">
                                                الصورة(على الاقل صورتين)
                                                <span>( اجبارى )</span>
                                            </label>
                                            <div class="text-danger">
                                                ( لايتم قبول صور بها شعار أو رقم تليفون )
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
                                                    required
                                                />
                                            </label>

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
                                            <h2>  اخترالفيديو المناسب   </h2>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label for="mainImage" class="pb-2 hagz-lbl">
                                                الفيديو
                                                <span>( اختيارى )</span>
                                            </label>
                                            <div class="text-danger">
                                                ( لايتم قبول فيديو به شعار أو رقم تليفون )
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
                                                    value=""
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
                                        </div>
                                    </div>
                                </div>
                                <div class="investor_7agz_card mt-md-5 mt-4 ads-radio-list">

                                    <div class="row">
                                        <div class="col-12">
                                            <label for="rentalPeriod" class="hagz-lbl-two pt-4">
                                                عدد الغرف الماستر
                                                <span class="text-danger">(@lang('site.optional'))</span>
                                            </label>
                                        </div>
                                        <div class="col-12  mb-lg-5 mb-4">
                                            <div class="pt-2 border-light-bottom"></div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="room-radio"
                                                    id="one"
                                                    checked=""
                                                />
                                                <label for="one" class="online-lbl custom-radio mb-4">
                                                    1
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="room-radio"
                                                    id="two"
                                                />
                                                <label
                                                    for="two"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="room-radio"
                                                    id="three"
                                                    checked=""
                                                />
                                                <label
                                                    for="three"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    3
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="d-flex align-items-center">
                                                <input
                                                    type="radio"
                                                    name="room-radio"
                                                    id="four"
                                                />
                                                <label
                                                    for="four"
                                                    class="online-lbl custom-radio mb-4"
                                                >
                                                    4
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ads-checkbox-list custom-checkbox">
                                        <div class="col-12">
                                            <label for="rentalPeriod" class="hagz-lbl-two pt-4">
                                                غرف اخرى
                                                <span class="text-danger">(@lang('site.optional'))</span>
                                            </label>
                                        </div>
                                        <div class="col-12  mb-lg-5 mb-4">
                                            <div class="pt-2 border-light-bottom"></div>
                                        </div>
                                        <div class="col-md-5 col-6">
                                            <div class="form-group mb-0">
                                                <input
                                                    type="checkbox"
                                                    id="roomOne"
                                                    checked=""
                                                />
                                                <label
                                                    for="roomOne"
                                                    class="mb-4"
                                                > 1</label
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="form-group mb-0">
                                                <input type="checkbox" id="roomTwo" />
                                                <label
                                                    for="roomTwo"
                                                    class="mb-4"
                                                >2
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12  mb-lg-5 mb-4">
                                            <div class="pt-2 border-light-bottom"></div>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-4">
                                            <label for="allowedPerson" class="pb-2 hagz-lbl"
                                            > عدد الاشخاص المسموح بهم
                                                <span>(  @lang('site.Mandatory') )</span>
                                            </label>

                                            <input
                                                type="number"
                                                id="allowedPerson"
                                                class="form-control hagz-input"
                                                placeholder="1  "
                                                min="1"
                                            />
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-12 mb-lg-0 mb-3">
                                            <label for="" class="pb-2 hagz-lbl">
                                                المواصفات
                                                <span class="text-danger">@lang('site.optional') </span>
                                            </label>
                                            <div class="text-danger mt-1">
                                                ( لايتم قبول  رقم تليفون )
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control txtarea-7agz p-3 mt-2" placeholder="يرجي كتابة المواصفات  " rows="6"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mt-md-5 mt-3">
                                        <div class="main-btn py-4 d-flex justify-content-center align-items-center add-ads-btn">
                                            <a href="#">  @lang('site.Add an advertisement')</a>
                                        </div></div>
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
    </main>





@endsection

