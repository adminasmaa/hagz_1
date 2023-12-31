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
                            @lang('site.Add an external reservation')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>

        <form action="{{route('invest.addbookingAd')}}" method="post">
            @csrf
            <!-- add reservation section  -->
            <section class="add-reservation-investor">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4"> @lang('site.Add an external reservation')</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-5">
                            <div class="booking_investor_card mb-md-5 mb-4 px-lg-0">
                                <div class="row justify-content-center">
                                    <div class="col-lg-5 mb-4">
                                        <label for="datepicker" class="pb-2 hagz-lbl">
                                            @lang('site.date of arrival')
                                            <span>( @lang('site.Mandatory') )</span>
                                        </label>
                                        <div class="position-relative">
                                            <input
                                                placeholder="12/10/2023"
                                                type="text"
                                                name="reciept_date"
                                                id="datepicker"
                                                value=""
                                                class="form-control hagz-input calendar recieptdate"
                                                required
                                            />
                                            <span class="icon-placeholder">
                        <i class="fas fa-calendar"></i>
                      </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mb-4">
                                        <label for="datepicker1" class="pb-2 hagz-lbl">
                                            @lang('site.Departure Date')
                                            <span>(  @lang('site.Mandatory') )</span>
                                        </label>
                                        <div class="position-relative">
                                            <input
                                                placeholder="20/10/2023"
                                                type="text"
                                                name="delivery_date"
                                                id="datepicker1"
                                                value=""
                                                class="form-control hagz-input calendar deliverydate"
                                                required

                                            />
                                            <span class="icon-placeholder">
                        <i class="fas fa-calendar"></i>
                      </span>
                                        </div>
                                    </div>
                                    <!-- booking-days -->
                                    <div class="col-lg-10 mb-4">
                                        <div class="booking-days text-center">


                                            @lang('site.counttotalday'):<span id="days"></span>
                                        </div>
                                        <div class="booking-days text-center mb-3">
                                            {{trans('site.Total amount')}}:<span id="total"></span>
                                        </div>
                                    </div>
                                    <input type="hidden" name="aqar_id" value="{{$aqar->id}}" class="aqar_id">
                                    <input type="hidden" name="price" id="price" value="{{$aqar->fixed_price}}">
                                    <div class="col-lg-5 mb-4">
                                        <label for="totalAmount" class="pb-2 hagz-lbl">
                                            {{trans('site.Total amount')}}
                                            <span>( @lang('site.optional') )</span>
                                        </label>
                                        <input
                                            placeholder=" {{trans('site.Total amount')}} "
                                            type="number"
                                            name="total"
                                            id="totalAmount"
                                            class="form-control hagz-input"
                                            required
                                        />
                                    </div>
                                    <div class="col-lg-5 mb-4">
                                        <label for="name" class="pb-2 hagz-lbl">
                                            {{trans('site.client_name')}}
                                            <span>( @lang('site.optional') )</span>
                                        </label>
                                        <input
                                            placeholder="{{trans('site.client_name')}} "
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control hagz-input"

                                            required
                                        />
                                    </div>
                                    <div class="col-lg-10 mb-4">
                                        <label for="phone" class="pb-2 hagz-lbl">
                                            {{trans('site.phone')}}
                                            <span>(  @lang('site.optional') )</span>
                                        </label>
                                        <div class="position-relative">
                                            <input
                                                placeholder="{{trans('site.phone')}} "
                                                type="tel"
                                                name="phone"
                                                id="phoneee"
                                                class="form-control hagz-input"
                                                required
                                            />
                                            <span class="icon-placeholder">
                        <i class="fas fa-phone"></i>
                      </span>
                                        </div>

                                        <span id="valid-msg" class="hide valid-msg">✓ Valid</span>
                                        <span id="error-msg" class="hide error-msg"></span>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="main-btn my-lg-4">
                                            <button
                                                type="submit"
                                                {{--                                            data-bs-toggle="modal"--}}
                                                {{--                                            data-bs-target="#paymentModal"--}}
                                            >
                                                @lang('site.add')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section -->
        </form>
        <!-- Modal payment -->

    </main>

@endsection

@section('scripts')

{{--    <script>--}}
{{--        function getcountday()--}}

{{--        {--}}
{{--            var start = $('.recieptdate').val();--}}
{{--            var end = $('.deliverydate').val();--}}

{{--            var start = new Date(start);--}}
{{--            var end = new Date(end);--}}

{{--            var diffDate = (end - start) / (1000 * 60 * 60 * 24);--}}
{{--            var days = Math.round(diffDate);--}}

{{--            $("#days").text(days);--}}
{{--            var price = $('#price').val();--}}

{{--            var total=price*days;--}}

{{--            $("#total").text(total);--}}



{{--        }--}}
{{--    </script>--}}

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



        jQuery('.deliverydate').change(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('invest.getdaycount') }}",
                method: 'get',
                data: {
                    _token: '{{ csrf_token() }}',
                    reciept_date: jQuery('.recieptdate').val(),
                    delivery_date: jQuery('.deliverydate').val(),
                    aqar_id: jQuery('.aqar_id').val(),
                },
                success: function (result) {
                    console.log(result);
                    $("#days").text(result.data.days);
                    $("#total").text(result.data.price);

                },
                error: function (result) {
                    console.log(result.responseJSON);



                }
            });
        });

    </script>

@endsection
