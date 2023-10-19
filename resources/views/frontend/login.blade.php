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
                      @lang('site.login')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- static header -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div  class="login-header-page d-lg-flex justify-content-between align-items-center" >
                            <div>
                                <h2 class="mb-lg-0 mb-2">   @lang('site.login')</h2>
                                <p class="">

                                    @lang('site.login with phone and password')





                                </p>
                            </div>
                            <div class="static-image">
                                <img
                                    src="{{FRONTASSETS}}/assets/images/login-image.png"
                                    alt="login image"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- login page -->
        <section class="pt-4 mb-6 login-page">
            <div class="container">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <ul  id="register_errorslogin"></ul>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tabs-details p-lg-5 p-3">
                            <ul class="tabs-nav-details list-unstyled mb-0">
                                <li>
                                    <a
                                        href="#tab-1"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.loginuser')
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#tab-2"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        @lang('site.logininvestor')

                                    </a>
                                </li>
                            </ul>
                            <ul class="tabs-content tabs-details-content list-unstyled">
                                <li id="tab-1">
                                    <div class="row">
                                        <div class="col-12 mt-lg-5 mt-4">
                                            <div class="position-relative mb-4">
                                                <input
                                                    type="tel"
                                                    class="form-control phone3"
                                                    id="phoneee"
                                                    name="phone"
                                                    placeholder="{{trans('site.phone')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-phone"></i>
                          </span>


                                            </div>
                                            <span id="valid-msg" class="hide valid-msg">✓ Valid</span>
                                            <span id="error-msg" class="hide error-msg"></span>
                                            <div class="position-relative">
                                                <input
                                                    id="password-fieldd"
                                                    type="password"
                                                    class="form-control password3"
                                                    name="password"
                                                    placeholder=" {{trans('site.password')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-fieldd"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                            <div class="py-3">
                                                <a href="#" class="password-link"
                                                >@lang('site.forget_password')</a
                                                >
                                            </div>
                                            <div class="main-btn my-lg-4">
                                                <button type="button" class="formregisterslogin"> @lang('site.login')</button>
                                            </div>

                                            <div
                                                class="pt-3 d-flex justify-content-center user-link"
                                            >
                                               @lang('site.dont_have_an_account')
                                                <a href="{{route('registers')}}" class="text-main underline-line">
                                                    {{trans('site.Create a new account')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="tab-2">
                                    <div class="row">
                                        <div class="col-12 mt-lg-5 mt-4">



                                            <div class="position-relative mb-4">
                                                <input
                                                    type="tel"
                                                    class="form-control phone3"
                                                    id="phoneee"
                                                    name="phone"
                                                    placeholder="{{trans('site.phone')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-phone"></i>
                          </span>


                                            </div>
                                            <span id="valid-msg" class="hide valid-msg">✓ Valid</span>
                                            <span id="error-msg" class="hide error-msg"></span>




                                            <div class="position-relative">
                                                <input
                                                    id="password-fieldd"
                                                    type="password"
                                                    class="form-control password3"
                                                    name="password"
                                                    placeholder=" {{trans('site.password')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-fieldd"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                            <div class="py-3">
                                                <a href="#" class="password-link"
                                                >@lang('site.forget_password')</a
                                                >
                                            </div>
                                            <div class="main-btn my-4">
                                                <button type="button" class="formregisterslogin">  @lang('site.login')</button>
                                            </div>

                                            <div
                                                class="pt-3 d-flex justify-content-center user-link"
                                            >
                                                @lang('site.dont_have_an_account')
                                                <a href="{{route('registers')}}" class="text-main underline-line">
                                                    {{trans('site.Create a new account')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="row pt-lg-5 pt-4">
                                        <div class="col-12">
                                            <h2>ماذا سنوفر لك عند تسجيلك معنا؟</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row padding-provide">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic1.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2">
                                                                يساعدك على تحسين أدائك على المنصة، تستطيع التواصل معه في اي وقت
                                                            </h4>
                                                            <p class="mb-0">سنوصلك إلى شريحة كبيرة من العملاء</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic2.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2">
                                                                برنامج لإدارة أعلانك<br />
                                                                مجاناً
                                                            </h4>
                                                            <p class="mb-0">
                                                                سنزودك ببرنامج لإدارة الحجوزات العملاء - متوفر على آبل
                                                                ستور و قوقل بلاي و موقع إلكتروني
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic3.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2">تقارير إحصائية عن أداء أعلانك</h4>
                                                            <p class="mb-0">
                                                                سنزودك بتقارير عن أداء أعلانك كالحجوزات, الاشغال و
                                                                الاتاحة, المبيعات و الماليه.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic4.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2">
                                                                مدير لحسابك مسؤول عن أداء أعلاناتك
                                                            </h4>
                                                            <p class="mb-0">
                                                                سيساعدك على تحسين أدائك على المنصة، تستطيع التواصل معه
                                                                في اي وقت
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <h2>لماذا تختار حجز ؟</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row padding-provide justify-content-center">
                                                <div class="col-lg-6 col-12">
                                                    <div class="provide-card mb-3 provide-card2">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center"
                                                        >
                                                            <img
                                                                src="{{FRONTASSETS}}/assets/images/investor/provide-ic5.png"
                                                                alt="image"
                                                            />
                                                            <h3 class="mb-0">جودة</h3>
                                                        </div>

                                                        <div class="pt-3 px-0 login-list-items">
                                                            <div class="login-list-item">أكبر منصة لحجوزات أماكن الإقامة قصيرة الأجل</div>
                                                            <div class="login-list-item">
                                                                خدمة عملاء 24 ساعة فريق كامل متخصص لمساعدتك و عملائك على
                                                                مدار الـ 24 ساعة
                                                            </div>
                                                            <div class="login-list-item">أكثر من نصف مليون محمل للتطبيق</div>
                                                            <div class="login-list-item">أكثر من 1,500 وحدة</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6  col-12">
                                                    <div class="provide-card mb-3 provide-card2">
                                                        <div
                                                            class="d-flex justify-content-center align-items-center"
                                                        >
                                                            <img
                                                                src="{{FRONTASSETS}}/assets/images/investor/provide-ic6.png"
                                                                alt="image"
                                                            />
                                                            <h3 class="mb-0">ثقة</h3>
                                                        </div>
                                                        <div class="pt-3 px-0 login-list-items">
                                                            <div class="login-list-item">
                                                                نطلب من الضيوف تقديم معلومات قبل إجراء السايح مثل رقم
                                                                الجوال وعنوان البريد الإلكتروني. لمزيد من التحكم، يمكنك
                                                                مطالبة الضيوف أيضًا بتقديم بطاقة الهوية الشخصية أو جواز
                                                                السفر.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row  ">
                                        <div class="col-12">
                                            <h2>كيف يعمل؟</h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row padding-provide ">
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic7.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2 how-work-title">
                                                                أعرض أعلانك معنا مجاناًً
                                                            </h4>
                                                            <p class="mb-0 how-work-txt">شاليه ,استراحة ,مزرعة.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic8.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2 how-work-title">
                                                                قرر كيف تريد إستضافة ضيوفك
                                                            </h4>
                                                            <p class="mb-0 how-work-txt">
                                                                أنت تتحكم بشكل كامل في التوافر والأسعار و شروط السايح و
                                                                سياسات الالغاء و الاسترجاع وكيفية تفاعلك مع الضيوف.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                                    <div class="provide-card mb-3 text-center">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/investor/provide-ic9.png"
                                                            alt="image"
                                                        />
                                                        <div class="pt-3">
                                                            <h4 class="text-gray-2 how-work-title">
                                                                إستقبل حجوزاتك و رحب بضيوفك
                                                            </h4>
                                                            <p class="mb-0 how-work-txt">
                                                                بمجرد عرض أعلانك على المنصة، يمكن للضيوف الذين تم التحقق
                                                                منهم و يمكنك التواصل معهم قبل تاريخ الوصول.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
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
    </main>




@endsection

@section('scripts')


    <script>


        const phonedata = document.querySelector("[type='tel']");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");

        // here, the index maps to the error code returned from getValidationError - see readme
        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        // initialise plugin
        const iti = window.intlTelInput(phonedata, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/utils.js",
            initialCountry: "sa",
            preferredCountries: ["sa"],
            separateDialCode: true,
        });

        const reset = () => {
            phonedata.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        // on blur: validate
        phonedata.addEventListener('blur', () => {
            reset();
            if (phonedata.value.trim()) {
                if (iti.isValidNumber()) {
                    validMsg.classList.remove("hide");
                } else {
                    phonedata.classList.add("error");
                    const errorCode = iti.getValidationError();
                    errorMsg.innerHTML = errorMap[errorCode];
                    errorMsg.classList.remove("hide");
                }
            }
        });

        // on keyup / change flag: reset
        phonedata.addEventListener('change', reset);
        phonedata.addEventListener('keyup', reset);

    </script>

    <script>



        jQuery('.formregisterslogin').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('checklogin') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    phone: jQuery('.phone3').val(),
                    password: jQuery('.password3').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success') {

                        swal({
                            title: "Success!",
                            text: "The Login  successfully !",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                        setTimeout(function () {
                            Swal.close()
                        }, 50000)

                        window.location.href = '{{route('Home')}}';

                    }
                    else if (result.content == 'error') {
                        swal({
                            title: "Error!",
                            text: "password or phone number is  incorrect!",
                            type: "warning",
                            confirmButtonText: "OK"
                        });
                    }
                },
                error: function (result) {
                    console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('#register_errorslogin').html(errorsList);


                }
            });
        });

    </script>
@endsection


