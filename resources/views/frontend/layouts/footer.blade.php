<footer class="footer-section bg-second">
    <div class="footer-top">
        <div class="container">
            <div class="row pt-md-5 pb-3 pt-3">
                <div class="col-lg-3 col-md-6">
                    <div>
                        <div class="logo-footer-content">
                            <img
                                src="{{FRONTASSETS}}/assets/images/logo.svg"
                                alt="logo"
                                class="logo-footer"
                            />
                        </div>
                        <div class="google-apps desk-view">
                            <h3 class="footer-title">  @lang('site.Download the application now')</h3>
                            <ul
                                class="mt-md-3 mt-2 d-flex list-unstyled justify-content-center"
                            >
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/assets/images/store.svg" alt="store" />
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="google app">
                                        <img
                                            src="{{FRONTASSETS}}/assets/images/google-app.svg"
                                            alt="google app"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex justify-content-center">
                    <div>
                        <h3 class="footer-title"> @lang('site.Important links')</h3>
                        <ul class="list-unstyled links-list">
                            <li class="py-md-2 py-1"><a href="{{route('Home')}}">@lang('site.home')</a></li>


                            @if(!empty(auth()->user()))

                                <li class="py-md-2 py-1"><a href="{{route('logout')}}">@lang('site.logout')</a></li>

                            @else

                                <li class="py-md-2 py-1"><a href="{{route('sitelogin')}}">@lang('site.Become a partner with us')</a></li>

                            @endif

                            <li class="py-md-2 py-1">
                                <a href="{{route('faqs')}}"> @lang('site.questions') </a>
                            </li>
                            <li class="py-md-2 py-1"><a href="{{route('terms')}}"> @lang('site.conditions')</a></li>
                            <li class="py-md-2 py-1"><a href="{{route('contact')}}">@lang('site.contact')  </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex justify-content-center">
                    <div>
                        <h3 class="footer-title"> @lang('site.social media')</h3>
                        <ul class="mt-sm-3 mt-2 d-flex list-unstyled list-icons">
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
{{--                                {{$setting->snapchat}}--}}
                                <a href="{{$setting->snapchat}}" class="lh-0" target="_blank" title="Snapchat">
                                    <i class="fab fa-snapchat-ghost"></i>
                                </a>
                            </li>

                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
{{--                                {{$setting->instagram}}--}}
                                <a href="{{$setting->instagram}}" class="lh-0" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li
                                class="footerSocialIcons d-flex align-items-center justify-content-center"
                            >
{{--                                {{$setting->facebook}}--}}
                                <a href="{{$setting->facebook}}" class="lh-0" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 mob-view">
                        <div class="google-apps">
                            <h3 class="footer-title">  @lang('site.Download the application now')</h3>
                            <ul
                                class="mt-sm-3 mt-2 d-flex align-items-center list-unstyled list-icons"
                            >
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="store">
                                        <img src="{{FRONTASSETS}}/assets/images/store.svg" alt="store" />
                                    </a>
                                </li>
                                <li class="footer-google-app">
                                    <a href="#" target="_blank" title="google app">
                                        <img
                                            src="{{FRONTASSETS}}/assets/images/google-app.svg"
                                            alt="google app"
                                        />
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-md-flex justify-content-center">
                    <div>
                        <h3 class="footer-title"> @lang('site.serving our customers')</h3>
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <ul class="list-unstyled">
                                    <li class="pt-sm-2 pt-1">
                                        <a href="#" class="link-chat">
                                            <div class="d-flex align-items-center">
                                                <span><i class="fab fa-whatsapp"></i></span>
{{--                                                {{$setting->phone_two ?? ''}}--}}
                                                <div class="pe-2"> {{$setting->phone_two ?? ''}}</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="pt-sm-2 pt-1">
                                        <a href="#" class="link-chat">
                                            <div class="d-flex align-items-center">
                                                <span><i class="fab fa-whatsapp"></i></span>
{{--                                                {{$setting->phone_one ?? ''}}--}}
                                                <div class="pe-2">{{$setting->phone_one ?? ''}}</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row py-sm-3 py-2">
                <div class="col-12">
                    <div class="thgCopyright">
                        <p class="mb-0">@lang('site.copyrights')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap-->

<!--start Modal help -->
<div
    class="modal fade modal-custom modal-height-mobile"
    id="helpModal"
    tabindex="-1"
    aria-labelledby="helpModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <button
                type="button"
                class="close-modal d-flex justify-content-center align-items-center"
                data-bs-dismiss="modal"
                aria-label="Close"
            >
                <i class="fal fa-times"></i>
            </button>
            <div class="modal-body my-lg-5 my-3">
                <div class="row d-flex justify-content-center">
                    <div
                        class="col-11 d-lg-flex justify-content-between align-items-center help-header"
                    >
                        <div>
                            <h2 class="mb-lg-0 mb-3">   @lang('site.Report any problem')</h2>
                        </div>



                        <div class="static-image">
                            <img src="{{FRONTASSETS}}/assets/images/help-image.png" alt="help image" />
                        </div>
                    </div>
                </div>

                <div class="mb-lg-0 mb-3">
                    <ul class="register_errors"></ul>
                </div>
                <div
                    class="row d-flex justify-content-center align-items-center mt-lg-5 mt-4"
                >



                    <div class="col-11">
                        <div class="help-card p-lg-4 p-3">
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="name" class="pb-2 contact-lbl"> @lang('site.name') </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        class="form-control contact-input name1"
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
                                        class="form-control contact-input phone1"
                                        placeholder="{{trans('site.phone')}}"
                                    />
                                </div>
                                <div class="col-12 mb-lg-3">
                                    <label for="name" class="pb-2 contact-lbl"> @lang('site.message') </label>
                                    <textarea
                                        class="form-control txtarea-7agz message1"
                                        name="message"
                                        placeholder="{{trans('site.message')}}"
                                        rows="5"
                                    ></textarea>
                                </div>
                                <div
                                    class="col-12 d-flex align-items-center justify-content-center my-lg-4 my-3"
                                >
                                    <div
                                        class="main-btn d-flex align-items-center justify-content-center w-100"
                                    >
                                        <button  class="addContactsUserss">@lang('site.send')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End modal-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
    integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
></script>
<script src="{{FRONTASSETS}}/assets/vendor/bootstrap/js/bootstrap.js"></script>
<!-- JQuery-->
<script src="{{FRONTASSETS}}/assets/js/jquery.min.js"></script>
<!--datepicker-->
<script src="{{FRONTASSETS}}/assets/js/datepicker/js/datepicker.min.js"></script>
<!-- Owl Carousel -->
<script src="{{FRONTASSETS}}/assets/js/OwlCarousel/js/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
<!--select 2-->
<script src="{{FRONTASSETS}}/assets/js/select2/js/select2.min.js"></script>
<script src="{{FRONTASSETS}}/assets/js/dist/jquery-ui.js"></script>



<!-- Main JS -->
@if(app()->getLocale()=='ar')
<!-- Main JS ar-->
<script src="{{FRONTASSETS}}/assets/js/customdate.js"></script>

<script src="{{FRONTASSETS}}/assets/js/script.js"></script>
@else
<!-- Main JS en-->
<script src="{{FRONTASSETS}}/assets/js/script-en.js"></script>

@endif




<script>



    $(document).ready(function(){
        $('ul li ').click(function(){
            $('li').removeClass("active");
            $(this).addClass("active");
        });
    });



    jQuery('.addContactsUserss').click(function (e) {
        console.log("daaaa");
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
                name: jQuery('.name1').val(),
                message: jQuery('.message1').val(),
                phone: jQuery('.phone1').val(),


            },
            success: function (result) {
                console.log(result);

                if (result.content == 'success')

                    $('#helpModal').hide()
                swal({
                    title: "Success!",
                    text: "The message has been successfully sent!",
                    type: "success",
                    confirmButtonText: "OK"
                });
                window.location.href = '{{route('Home')}}';


            },
            error: function (result) {
                // console.log(result.responseJSON);
                var errors = result.responseJSON;
                var errorsList = "";
                $.each(errors, function (_, value) {
                    $.each(value, function (_, fieldErrors) {
                        fieldErrors.forEach(function (error) {
                            errorsList += "<li style='color:red'>" + error + "</li>";
                        })
                    });
                });
                $('.register_errors').html(errorsList);


            }
        });
    });



</script>


<script>
    var imgUploads = document.getElementById("upload-imgs"),
        imgPreviews = document.getElementById("img-previews"),
        imgUploadForms = document.getElementById("form-upload"),
        totalFiles,
        previewTitle,
        previewTitleText,
        img;

    imgUploads.addEventListener("change", previewImgss, true);

    function previewImgss(event) {
        totalFiles = imgUploads.files.length;

        if (!!totalFiles) {
            imgPreviews.classList.remove("img-thumbs-hidden");
        }

        for (var i = 0; i < totalFiles; i++) {
            wrapper = document.createElement("div");
            wrapper.classList.add("wrapper-thumb");
            removeBtn = document.createElement("span");
            nodeRemove = document.createTextNode("x");
            removeBtn.classList.add("remove-btn");
            removeBtn.appendChild(nodeRemove);
            img = document.createElement("img");
            img.src = URL.createObjectURL(event.target.files[i]);
            img.classList.add("img-preview-thumb");
            wrapper.appendChild(img);
            wrapper.appendChild(removeBtn);
            imgPreviews.appendChild(wrapper);

            $(".remove-btn").click(function () {
                $(this).parent(".wrapper-thumb").remove();
            });
        }
    }

    document.getElementById("imgInp").onchange = function () {
        let imgURL = (frame.src = URL.createObjectURL(event.target.files[0]));
        document.querySelector("img-upload").src = imgURL;
    };

    /*video */
    document.getElementById("videoUpload").onchange = function (event) {
        let file = event.target.files[0];
        let blobURL = URL.createObjectURL(file);
        document.querySelector("video").style.display = "block";
        document.querySelector("video").src = blobURL;
    };
</script>


</body>
</html>
