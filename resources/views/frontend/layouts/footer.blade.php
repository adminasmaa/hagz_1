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
                            <li class="py-md-2 py-1"><a href="#">@lang('site.Become a partner with us')</a></li>
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

<!-- Owl Carousel -->
<script src="{{FRONTASSETS}}/assets/js/OwlCarousel/js/owl.carousel.min.js"></script>

<!--select 2-->
<script src="{{FRONTASSETS}}/assets/js/select2/js/select2.min.js"></script>
<script src="{{FRONTASSETS}}/assets/js/dist/jquery-ui.js"></script>
<!-- Main JS -->
<script src="{{FRONTASSETS}}/assets/js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>

</body>
</html>
