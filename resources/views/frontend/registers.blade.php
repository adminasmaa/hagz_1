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
                            <a href="javascript:void(0)">
                            @lang('site.register')</a>
                        </li>

                        <li class="breadcrumb-item text-light-main" aria-current="page">
                            @lang('site.register')
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
                        <div
                            class="login-header-page d-lg-flex justify-content-between align-items-center py-5"
                        >
                            <div>
                                <h2 class="mb-lg-0 mb-2">@lang('site.register')</h2>
                                <p class="">


                                 @lang('site.You can create a new account through Fill in the following information')



                                </p>
                            </div>
                            <div class="static-image">
                                <img
                                    src="{{FRONTASSETS}}/assets/images/register-image.png"
                                    alt="Register image"
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
                            <ul  id="register_errorsUsers"></ul>


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
                             @lang('site.register')
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="#tab-2"
                                        class="tab-link d-flex align-items-center justify-content-center"
                                    >
                                        انشاء حساب كمستثمر
                                    </a>
                                </li>
                            </ul>
                            <ul class="tabs-content tabs-details-content list-unstyled">
                                <li id="tab-1">
                                    <div class="row mt-lg-5 mt-4">
                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    type="text"
                                                    class="form-control firstname"
                                                    name="firstname"
                                                    placeholder=" {{trans('site.first_name')}} "
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-user"></i>
                          </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    type="text"
                                                    class="form-control username"
                                                    name="username"
                                                    placeholder=" {{trans('site.last_name')}} "
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-user"></i>
                          </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    id="password-field"
                                                    type="password"
                                                    class="form-control password2"
                                                    name="password"
                                                    placeholder="{{trans('site.password')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    id="password-fieldd"
                                                    type="password"
                                                    class="form-control password_confirmation2"
                                                    name="confirm_password"
                                                    placeholder="{{trans('site.Confirm Password')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-fieldd"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="position-relative">
                                                <input
                                                    type="tel"
                                                    class="form-control phone2"
                                                    name="phone"
                                                    id="phoneData"
                                                    placeholder=" {{trans('site.phone')}}"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-phone"></i>
                          </span>

                                                <span id="valid-msg" class="hide">✓ Valid</span>
                                                <span id="error-msg" class="hide"></span>
                                            </div>
                                            <div class="py-lg-3 py-2 txt-phone">


                                          </span>
                                            </div>
                                            <div class="py-lg-3 py-2 txt-phone">
                                                @lang('site.We will send a text message to verify the phone number via whats up')

                                                <span>
                            <img
                                src="{{FRONTASSETS}}/assets/images/wt-icon.png"
                                alt="whatsapp "
                            />
                          </span>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="position-relative">
                                                <input
                                                    type="email"
                                                    class="form-control email"
                                                    name="email"
                                                    id="email"
                                                    value="{{$user->email ?? ''}}"
                                                    placeholder=" {{trans('site.email')}}"
                                                />


                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <div class="main-btn my-4">
                                                <button type="button" class="formregistersUser">     {{trans('site.sing_up')}}</button>
                                            </div>

                                            <div
                                                class="pt-3 d-flex justify-content-center user-link"
                                            >
                                            @lang('site.haveprofile')
                                                <a href="{{route('sitelogin')}}" class="text-main underline-line">
                                                    {{trans('site.Log in')}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li id="tab-2">
                                    <div class="row mt-lg-5 mt-4">
                                        <div class="col-12 ads-radio-list mb-lg-5 mb-3">
                                            <div class="row">
                                                <div class="col-md-2 col-4">
                                                    <div class="d-flex align-items-center">
                                                        <input
                                                            type="radio"
                                                            name="register-radio"
                                                            id="farm"
                                                            checked
                                                        />
                                                        <label for="farm" class="online-lbl custom-radio">
                                                            مزرعة
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-4">
                                                    <div class="d-flex align-items-center">
                                                        <input
                                                            type="radio"
                                                            name="register-radio"
                                                            id="chalet"
                                                        />
                                                        <label
                                                            for="chalet"
                                                            class="online-lbl custom-radio"
                                                        >
                                                            شالية
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-4">
                                                    <div class="d-flex align-items-center">
                                                        <input
                                                            type="radio"
                                                            name="register-radio"
                                                            id="break"
                                                        />
                                                        <label
                                                            for="break"
                                                            class="online-lbl custom-radio"
                                                        >
                                                            استراحة
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    name="first name"
                                                    placeholder="الاسم الشخصى  "
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-user"></i>
                          </span>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    id="password-field"
                                                    type="password"
                                                    class="form-control"
                                                    name="password"
                                                    placeholder="كلمة المرور"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-field"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <div class="position-relative">
                                                <input
                                                    id="password-fieldd"
                                                    type="password"
                                                    class="form-control"
                                                    name="confirm password"
                                                    placeholder="تاكيد كلمة المرور"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-lock-alt"></i>
                          </span>
                                                <div
                                                    toggle="#password-fieldd"
                                                    class="fa fa-fw fa-eye field-icon toggle-password"
                                                ></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                                <select class="select2">
                                                    <option>اختر عمولتك</option>
                                                    <option value="1">5%</option>
                                                    <option value="2">10%</option>
                                                </select>
                                                <span class="icon-placeholder">
                            <i class="fas fa-wallet"></i>
                          </span>
                                            </div>
                                            <div class="pt-lg-3 pt-2 txt-phone">(تبدأ من 5%)</div>
                                            <div class="pt-lg-3 text-second txt-commission">
                                                (عزيزى العميل كلما زادت نسبة العمولة سوف يتم إظهار
                                                أعلانك بالمقدمة)
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <div class="position-relative">
                                                <input
                                                    type="tel"
                                                    class="form-control"
                                                    placeholder="رقم الهاتف"
                                                />
                                                <span class="icon-placeholder">
                            <i class="fas fa-phone"></i>
                          </span>
                                            </div>
                                            <div class="py-lg-3 py-2 txt-phone">
                                                @lang('site.We will send a text message to verify the phone number via whats up')

                                                <span>
                            <img
                                src="./assets/images/wt-icon.png"
                                alt="whatsapp "
                            />
                          </span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                        <textarea
                            class="form-control txtarea-7agz py-lg-3 py-2"
                            placeholder=" الشروط والاحكام  "
                            rows="5"
                        ></textarea>
                                        </div>
                                        <div class="col-12 mt-lg-4 mt-3">
                                            <input
                                                class="input-custom-checkbox-item"
                                                type="checkbox"
                                                id="register-check"
                                            />
                                            <label
                                                for="register-check"
                                                class="custom-checkbox-item"
                                            >
                                                أوافق على الشروط والاحكام
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <div class="main-btn my-4">
                                                <button type="button">تسجيل</button>
                                            </div>

                                            <div
                                                class="pt-3 d-flex justify-content-center user-link"
                                            >
                                                لديك حساب ؟
                                                <a href="#" class="text-main underline-line">
                                                    قم بتسجيل الدخول
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


        const phonedata = document.querySelector("#phoneData");
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


        jQuery('.formregistersUser').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('createaccount') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    firstname: jQuery('.firstname').val(),
                    username: jQuery('.username').val(),
                    phone: jQuery('.phone2').val(),
                    email: jQuery('.email').val(),
                    password: jQuery('.password2').val(),
                    password_confirmation: jQuery('.password_confirmation2').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')


                        swal({
                            title: "Success!",
                            text: "The user has been successfully Added!",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 10000)

                    window.location.href = '{{route('Home')}}';

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
                    $('#register_errorsUsers').html(errorsList);


                }
            });
        });


        ;


    </script>


@endsection

