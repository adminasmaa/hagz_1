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
                             @lang('site.contact')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- static header -->
        <section class="static-header-page py-5">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 d-lg-flex justify-content-between align-items-center"
                    >
                        <div>
                            <div class="static-header-title mb-lg-0 mb-2"> @lang('site.contact')</div>
                            <div class="static-header-txt">
                              @lang('site.contactmessage')
                            </div>
                        </div>
                        <div class="static-image">
                            <img
                                src="{{FRONTASSETS}}/assets/images/contact-image.png"
                                alt="contact image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact page -->
        <section class="py-lg-5 py-4 contact-page">
            <div class="container">
                <form class="formregister" id="formregister">



                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-3"> @lang('site.contact') </h2>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-card mt-4 mb-lg-0 mb-4">
                            <div
                                class="contact-ic d-flex align-items-center justify-content-center"
                            >
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>@lang('site.address')</h4>
                            <p class="mb-0">{{$setting->website_address ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-card mt-4 mb-lg-0 mb-4">
                            <div
                                class="contact-ic d-flex align-items-center justify-content-center"
                            >
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4> @lang('site.email')</h4>
                            <p class="mb-0">{{$setting->email ?? ''}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-card mt-4 mb-lg-0 mb-4">
                            <div
                                class="contact-ic d-flex align-items-center justify-content-center"
                            >
                                <i class="fas fa-phone-plus"></i>
                            </div>
                            <h4> @lang('site.inquires')</h4>
                            <p class="mb-0">{{$setting->phone_one ?? ''}}</p>
                        </div>
                    </div>

                    <div class="col-lg-8 register_errorsS">



                                <span class="register_errorsS"></span>

                    </div>
                    <div class="col-12">
                        <div class="contact-card my-lg-5 my-3 p-lg-5 p-3">
                            <div class="text-center"><h2> @lang('site.Submit your data')</h2></div>
                            <div class="row mt-lg-5 mt-4">
                                <div class="col-lg-6 mb-3">
                                    <label for="name" class="pb-2 contact-lbl">@lang('site.name')</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="form-control contact-input name2"
                                        placeholder=" {{trans('site.name')}}  "
                                    />
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="name" class="pb-2 contact-lbl">
                                         @lang('site.phone')
                                    </label>
                                    <input
                                        type="number"
                                        id="name"
                                        name="phone"
                                        class="form-control contact-input phone2"
                                        placeholder=" {{trans('site.phone')}}  "

                                    />
                                </div>
                                <div class="col-12 mb-lg-3">
                                    <label for="name" class="pb-2 contact-lbl"> @lang('site.contact_message') </label>
                                    <textarea
                                        class="form-control txtarea-7agz message2"
                                        placeholder=" {{trans('site.contact_message')}}  "
                                        name="message"
                                        rows="5"
                                    ></textarea>
                                </div>
                                <div
                                    class="col-12 d-flex align-items-center justify-content-center mt-lg-4 mt-3"
                                >
                                    <div
                                        class="main-btn d-flex align-items-center justify-content-center w-100"
                                    >
                                        <button type="submit" class="formregisters">@lang('site.send')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </section>
    </main>





@endsection

@section('scripts')

    <script>


        jQuery('.formregisters').click(function (e) {
            // console.log("daaaa");
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            jQuery.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},

                url: "{{ route('addContacts') }}",
                method: 'post',
                data: {
                    _token: '{{ csrf_token() }}',
                    name: jQuery('.name2').val(),
                    message: jQuery('.message2').val(),
                    phone: jQuery('.phone2').val(),


                },
                success: function (result) {
                    console.log(result);

                    if (result.content == 'success')


                        swal({
                            title: "Success!",
                            text: "The message has been successfully sent!",
                            type: "success",
                            confirmButtonText: "OK"
                        });

                    setTimeout(function () {
                        Swal.close()
                    }, 2000)

                    window.location.href = '{{route('Home')}}';

                },
                error: function (result) {
                    // console.log(result.responseJSON);
                    var errors = result.responseJSON;
                    var errorsList = "";
                    $.each(errors, function (_, value) {
                        $.each(value, function (_, fieldErrors) {
                            fieldErrors.forEach(function (error) {
                                errorsList += "<li style='color:#e81f1f'>" + error + "</li>";
                            })
                        });
                    });
                    $('.register_errorsS').html(errorsList);


                }
            });
        });

    </script>
@endsection

