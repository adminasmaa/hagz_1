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
                                            <span id="valid-msg" class="hide">✓ Valid</span>
                                            <span id="error-msg" class="hide"></span>
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
                                                    class="form-control"
                                                    placeholder=" {{trans('site.phone')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-phone"></i>
                          </span>
                                            </div>
                                            <div class="position-relative">
                                                <input
                                                    id="password-fieldd"
                                                    type="password"
                                                    class="form-control"
                                                    name="password"
                                                    placeholder="كلمة المرور"
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
                                                >هل نسيت كلمه المرور ؟</a
                                                >
                                            </div>
                                            <div class="main-btn my-4">
                                                <button type="button">تسجيل الدخول</button>
                                            </div>

                                            <div
                                                class="pt-3 d-flex justify-content-center user-link"
                                            >
                                                ليس لديك حساب ؟
                                                <a href="#" class="text-main underline-line">
                                                    قم بانشاء حساب جديد
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
    </main>




@endsection

@section('scripts')

    <script>


        const phonedata = document.querySelector("#phoneee");
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


