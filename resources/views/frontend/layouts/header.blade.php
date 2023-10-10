<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>@lang('site.title')</title>
    <!-- Cairo Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />
    <!-- Font Awesome-->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
    />
    <!-- Owl Carousel -->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/assets/js/OwlCarousel/css/owl.carousel.min.css"
    />
    <!--select 2-->
    <link rel="stylesheet" href="{{FRONTASSETS}}/assets/js/select2/css/select2.min.css"/>
    <!-- Bootstrap-->
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/assets/vendor/bootstrap/css/bootstrap.min.css.map"
        type="text/css"
    />
    <link
        rel="stylesheet"
        href="{{FRONTASSETS}}/assets/vendor/bootstrap/css/bootstrap.min.css"
        type="text/css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    @yield('css')

    <style>

        .hide {
            display: none;
        }

        #valid-msg {
            color: #00c900;
        }

        [dir=rtl] .iti--allow-dropdown .iti__flag-container, [dir=rtl] .iti--separate-dial-code .iti__flag-container {
            right: auto;
            left: 0;
        }
    </style>


    @if(app()->getLocale()=='ar')
        <!-- css ar -->
        <link
            rel="stylesheet"
            href="{{FRONTASSETS}}/assets/vendor/bootstrap/css/bootstrap.rtl.min.css"
            type="text/css"
        />
        <link rel="stylesheet" href="{{FRONTASSETS}}/assets/styles/styles.css"/>
        <link rel="stylesheet" href="{{FRONTASSETS}}/assets/styles/responsive-styles.css"/>

    @else

        <!-- CSS en -->
        <link rel="stylesheet" href="{{FRONTASSETS}}/assets/styles/styles-en.css"/>
        <link rel="stylesheet" href="{{FRONTASSETS}}/assets/styles/responsive-styles-en.css"/>

    @endif

</head>

<body>

<header class="web-view">
    <!-- upper Header -->
    <section class="upper-header d-flex justify-content-between">
        <div class="container">
            <div class="row justify-content-between align-items-center py-3">
                <div class="col-4">
                    <a href="{{route('Home')}}">
                        <img class="logo" src="{{FRONTASSETS}}/assets/images/logo.svg" alt="logo"/>
                    </a>
                </div>

                <div class="col-8 position-relative">
                    <div class="d-flex justify-content-end nav-section">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                <ul class="navbar-nav align-items-center">
                                    <li class="ms-5">
                                        <a class="nav-link" href="javascript:void(0)">
                                            <div
                                                class="notification d-flex justify-content-center align-items-center position-relative"
                                            >
                                                <img
                                                    src="{{FRONTASSETS}}/assets/images/notification-icon.png"
                                                    alt="notification icon"
                                                />
                                                <div
                                                    class="cart-count d-flex justify-content-center align-items-center"
                                                >
                                                    5
                                                </div>
                                            </div>
                                        </a>
                                    </li>


                                    @if(!empty(auth()->user()))
                                        <!-- when user login -->
                                        <li>
                                            <div class="dropdown-container">
                                                <div class="dropdown-toggle click-dropdown d-flex align-items-center">

                                                    @lang('site.welcome')

                                                    {{auth()->user()->firstname ?? ''}}
                                                    <span>
                                                      <i
                                                          class="far fa-angle-down d-flex align-items-center"
                                                      ></i>
                                                    </span>
                                                </div>
                                                <div class="dropdown-menu">
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('updateprofile',auth()->user()->id)}}"
                                                               class="d-flex align-items-center">
                                                                <div class="profile-ic">
                                                                    <i class="far fa-user"></i>
                                                                </div>
                                                                <div>@lang('site.Profile')</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('myfavouriteAll')}}"
                                                               class="d-flex align-items-center">
                                                                <div class="profile-ic">
                                                                    <i class="far fa-heart"></i>
                                                                </div>
                                                                <div>@lang('site.favorite')</div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" class="d-flex align-items-center">
                                                                <div class="profile-ic">
                                                                    <i class="far fa-book-open"></i>
                                                                </div>
                                                                <div>@lang('site.My bookings')</div>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="{{route('logout')}}"
                                                               class="d-flex align-items-center">
                                                                <div class="profile-ic">
                                                                    <i class="far fa-sign-out"></i>
                                                                </div>
                                                                <div> @lang('site.logout')</div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- without login -->

                                    @else
                                        <li>
                                            <a
                                                href="{{route('sitelogin')}}"
                                                class="btn-outline-7agz btn-space d-flex justify-content-center align-items-center"
                                            >
                                                <span><i class="fas fa-user"></i></span>
                                                <span> @lang('site.login')</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a
                                                href="{{route('registers')}}"
                                                class="btn-7agz d-flex justify-content-center align-items-center"
                                            >
                                                <span><i class="fas fa-user"></i></span>
                                                <span> @lang('site.register')</span>
                                            </a>
                                        </li>

                                    @endif

                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="box-notifications bg-white" id="box-notifications">
                        <div class="box-notify">
                            <div
                                class="d-flex justify-content-start align-items-center close-notify"
                            >
                                <i class="fas fa-times close-btn-notify cursor"></i>
                            </div>

                            <ul class="notifications-list px-0">
                                <li class="p-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="svg-icon"
                                            >
                                                <path
                                                    d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                                    fill="#8B8B8B"
                                                />
                                            </svg>
                                        </div>
                                        <p class="mb-0 box-notifications-txt">
                                            @lang('site.You can now add your ad at any time you want')
                                        </p>
                                    </a>
                                </li>
                                <li class="p-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="svg-icon"
                                            >
                                                <path
                                                    d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                                    fill="#8B8B8B"
                                                />
                                            </svg>
                                        </div>
                                        <p class="mb-0 box-notifications-txt">
                                            @lang('site.You can now add your ad at any time you want')
                                        </p>
                                    </a>
                                </li>
                                <li class="p-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                class="svg-icon"
                                            >
                                                <path
                                                    d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                                    fill="#8B8B8B"
                                                />
                                            </svg>
                                        </div>
                                        <p class="mb-0 box-notifications-txt">
                                            @lang('site.You can now add your ad at any time you want')
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<header class="header-web web-view">
    <!-- lower Header -->
    <section class="lower-header">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-8">
                    <ul
                        class="navbar-nav d-flex align-items-center flex-lg-row position-relative"
                    >
                        <li class="nav-link active">
                            <a href="{{route('Home')}}" class="home-link"> @lang('site.home') </a>
                        </li>
                        @foreach($categories as $catt)
                            <li class="nav-link">
                                <a href="{{route('aquars',$catt->id)}}" class=""> {{$catt->name ?? ''}} </a>
                            </li>
                        @endforeach
                        {{--                        <li class="nav-link">--}}
                        {{--                            <a href="javascript:void(0)" class=""> استراحة </a>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-link">--}}
                        {{--                            <a href="javascript:void(0)" class=""> شالية </a>--}}
                        {{--                        </li>--}}
                        {{--                        <li class="nav-link">--}}
                        {{--                            <a href="javascript:void(0)" class=""> شالية </a>--}}
                        {{--                        </li>--}}
                    </ul>
                </div>

                <div class="col-4">
                    <div class="d-flex justify-content-end nav-section">
                        <nav class="navbar navbar-expand-lg">
                            <div class="collapse navbar-collapse">
                                <ul class="navbar-nav align-items-center">
                                    <li class="nav-link ms-3">
                                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#helpModal">
                          <span class="help-icon">
                            <i class="fas fa-question-circle"></i>
                          </span>
                                            @lang('site.help')
                                        </a>
                                    </li>


                                    <li class="nav-link">
                                        <a
                                            href="javascript:void(0)"
                                            class="dropdown"
                                            id="dropdownMenuButton4"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                        >
                          <span
                          ><img src="{{FRONTASSETS}}/assets/images/flag-ar.svg" alt="lang"
                              /></span>
                                            @lang('site.language')
                                            <span class="pe-2">
                            <i class="far fa-chevron-down"></i>
                          </span>
                                        </a>
                                        <div
                                            class="dropdown-menu lang-dropdown"
                                            aria-labelledby="dropdownMenuButton4"
                                        >
                                            <ul class="sub-menu__sub-list px-0 list-unstyled">

                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                                                $properties)

                                                    @if($properties['native']=='English')
                                                        <li class="sub-menu__sub-item pb-2">
                                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                               class="sub-menu-link">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/flag-en.png"
                                                                            alt="lang-icon"
                                                                            class="ps-2"
                                                                        />
                                                                    </div>
                                                                    <div>{{ $properties['native'] }}</div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    @else
                                                        <li class="sub-menu__sub-item pb-2">
                                                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                                               class="sub-menu-link">
                                                                <div class="d-flex align-items-center">
                                                                    <div>
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/flag-ar.svg"
                                                                            alt="lang-icon"
                                                                            class="ps-2"
                                                                        />
                                                                    </div>
                                                                    <div>{{ $properties['native'] }}</div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </li>


                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
<header class="px-0 header-mobile mobile-view">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <div
                    class="side-menu-close d-flex d-lg-none flex-wrap flex-column align-items-center justify-content-center menu-mobile"
                >
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="">
                <div class="header-logo">
                    <a class="" href="#">
                        <img
                            src="{{FRONTASSETS}}/assets/images/logo-sm.svg"
                            alt="logo"
                            class="img-logo-mobile"
                        />
                    </a>
                </div>
            </div>

            <div class="d-flex align-items-center">
                <a
                    class="notification cart-notify d-flex align-items-center justify-content-end h-100"
                >
                    <div class="position-relative">
                        <img
                            src="{{FRONTASSETS}}/assets/images/notification-icon.png"
                            alt="cart icon"
                        />
                        <span
                            class="cart-count d-flex justify-content-center align-items-center"
                        >1</span
                        >
                    </div>
                </a>
                <div class="lang-link">
                    <a
                        href="javascript:void(0)"
                        class="dropdown"
                        id="dropdownMenuButton4"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                <span
                ><img src="{{FRONTASSETS}}/assets/images/flag-ar.svg" alt="lang"
                    /></span>
                        @lang('site.language')
                    </a>
                    <div
                        class="dropdown-menu lang-dropdown"
                        aria-labelledby="dropdownMenuButton4"
                    >
                        <ul class="sub-menu__sub-list px-0 list-unstyled mb-0">

                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode =>
                            $properties)

                                @if($properties['native']=='English')
                                    <li class="sub-menu__sub-item pb-2">
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                           class="sub-menu-link">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img
                                                        src="{{FRONTASSETS}}/assets/images/flag-en.png"
                                                        alt="lang-icon"
                                                        class="ps-2"
                                                    />
                                                </div>
                                                <div>{{ $properties['native'] }}</div>
                                            </div>
                                        </a>
                                    </li>

                                @else
                                    <li class="sub-menu__sub-item pb-2">
                                        <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                           class="sub-menu-link">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img
                                                        src="{{FRONTASSETS}}/assets/images/flag-ar.svg"
                                                        alt="lang-icon"
                                                        class="ps-2"
                                                    />
                                                </div>
                                                <div>{{ $properties['native'] }}</div>
                                            </div>
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-notifications bg-white" id="box-notifications">
                <div class="box-notify">
                    <div
                        class="d-flex justify-content-start align-items-center close-notify"
                    >
                        <i class="fas fa-times close-btn-notify cursor"></i>
                    </div>

                    <ul class="notifications-list px-0">
                        <li class="p-3">
                            <a href="#" class="d-flex">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        class="svg-icon"
                                    >
                                        <path
                                            d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                            fill="#8B8B8B"
                                        />
                                    </svg>
                                </div>
                                <p class="mb-0 box-notifications-txt">
                                    @lang('site.You can now add your ad at any time you want')
                                </p>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#" class="d-flex">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        class="svg-icon"
                                    >
                                        <path
                                            d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                            fill="#8B8B8B"
                                        />
                                    </svg>
                                </div>
                                <p class="mb-0 box-notifications-txt">
                                    @lang('site.You can now add your ad at any time you want')
                                </p>
                            </a>
                        </li>
                        <li class="p-3">
                            <a href="#" class="d-flex">
                                <div>
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        class="svg-icon"
                                    >
                                        <path
                                            d="M2.15518 2.51759C2.09214 2.47031 2.02041 2.43591 1.94408 2.41636C1.86776 2.3968 1.78832 2.39247 1.71032 2.40362C1.63232 2.41476 1.55728 2.44116 1.48948 2.4813C1.42168 2.52145 1.36245 2.57455 1.31518 2.63759C1.2679 2.70062 1.2335 2.77235 1.21395 2.84868C1.19439 2.925 1.19006 3.00444 1.20121 3.08244C1.21235 3.16044 1.23875 3.23548 1.27889 3.30328C1.31904 3.37108 1.37214 3.43031 1.43518 3.47759L3.83758 5.27999C3.90061 5.32726 3.97234 5.36166 4.04867 5.38121C4.12499 5.40077 4.20443 5.4051 4.28243 5.39395C4.36043 5.38281 4.43547 5.35641 4.50327 5.31627C4.57107 5.27613 4.6303 5.22302 4.67758 5.15999C4.72485 5.09695 4.75925 5.02522 4.7788 4.94889C4.79836 4.87257 4.80269 4.79313 4.79155 4.71513C4.7804 4.63713 4.754 4.56209 4.71386 4.49429C4.67372 4.42649 4.62061 4.36726 4.55758 4.31999L2.15518 2.51759ZM1.19998 8.39999C1.04085 8.39999 0.888233 8.4632 0.775711 8.57572C0.66319 8.68824 0.599976 8.84086 0.599976 8.99999C0.599976 9.15912 0.66319 9.31173 0.775711 9.42425C0.888233 9.53677 1.04085 9.59999 1.19998 9.59999H2.99998C3.15911 9.59999 3.31172 9.53677 3.42424 9.42425C3.53676 9.31173 3.59998 9.15912 3.59998 8.99999C3.59998 8.84086 3.53676 8.68824 3.42424 8.57572C3.31172 8.4632 3.15911 8.39999 2.99998 8.39999H1.19998ZM14.94 19.2C14.8011 19.8772 14.4327 20.4856 13.897 20.9226C13.3613 21.3596 12.6913 21.5982 12 21.5982C11.3087 21.5982 10.6386 21.3596 10.1029 20.9226C9.56727 20.4856 9.19887 19.8772 9.05998 19.2H14.94ZM11.9976 2.39999C15.7764 2.39999 18.8904 5.20079 19.1784 8.82599L19.1952 9.09239L19.2 9.36239L19.1988 13.6896L20.3436 16.794L20.3736 16.8948L20.3928 16.9992L20.3988 17.1048C20.3988 17.4828 20.1636 17.8128 19.7724 17.9532L19.6368 17.9928L19.4988 18.0048H4.50118C4.39513 18.0048 4.28991 17.9862 4.19038 17.9496C3.84598 17.8224 3.61918 17.5032 3.61198 17.0904L3.61678 16.9488L3.65758 16.7928L4.79878 13.6932L4.79998 9.35039L4.80478 9.08159C4.95238 5.33999 8.12518 2.39999 11.9976 2.39999ZM22.6848 2.63759C22.5893 2.51028 22.4472 2.42612 22.2896 2.40362C22.1321 2.38111 21.9721 2.42211 21.8448 2.51759L19.4424 4.31999C19.3151 4.41546 19.2309 4.5576 19.2084 4.71513C19.1859 4.87266 19.2269 5.03268 19.3224 5.15999C19.4179 5.28729 19.56 5.37145 19.7175 5.39395C19.8751 5.41646 20.0351 5.37546 20.1624 5.27999L22.5648 3.47759C22.6921 3.38211 22.7762 3.23997 22.7987 3.08244C22.8212 2.92491 22.7803 2.76489 22.6848 2.63759ZM23.4 8.99999C23.4 8.84086 23.3368 8.68824 23.2242 8.57572C23.1117 8.4632 22.9591 8.39999 22.8 8.39999H21C20.8408 8.39999 20.6882 8.4632 20.5757 8.57572C20.4632 8.68824 20.4 8.84086 20.4 8.99999C20.4 9.15912 20.4632 9.31173 20.5757 9.42425C20.6882 9.53677 20.8408 9.59999 21 9.59999H22.8C22.9591 9.59999 23.1117 9.53677 23.2242 9.42425C23.3368 9.31173 23.4 9.15912 23.4 8.99999Z"
                                            fill="#8B8B8B"
                                        />
                                    </svg>
                                </div>
                                <p class="mb-0 box-notifications-txt">
                                    @lang('site.You can now add your ad at any time you want')
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="side-menu-wrap">
    <nav class="navbar side-menu-nav">
        <ul
            class="main-menu d-flex flex-column flex-lg-row align-items-lg-center list-unstyled p-0 m-0 w-100"
        >
            <li class="nav-item">
                <a class="nav-link" href="{{route('Home')}}"> @lang('site.home') </a>
            </li>
            @foreach($categories as $ccat)
                <li class="nav-item">
                    <a class="nav-link" href="{{route('aquars',$ccat->id)}}"> {{$ccat->name ?? ''}} </a>
                </li>
            @endforeach


            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#helpModal">
                     <span class="help-icon">
                        <i class="fas fa-question-circle"></i>
                      </span>
                    @lang('site.help') </a>
            </li>


            @if(!empty(auth()->user()))
                <!-- WHEN User Login -->
                <li>
                    <div class="accordion accordion-flush" id="accordionFlushProfile">
                        <div
                            id="flush-headingOne2 d-flex justify-content-center"
                            class="d-flex justify-content-center"
                        >
                            <a
                                class="accordion-button collapsed d-flex align-items-center justify-content-between mt-3"
                                type="button"
                                href="#"
                                data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseProfile"
                                aria-expanded="false"
                                aria-controls="flush-collapseProfile"
                            >
                                @lang('site.welcome')

                                {{auth()->user()->firstname ?? ''}}

                                <i class="far fa-angle-down"></i>
                            </a>
                        </div>
                        <div
                            id="flush-collapseProfile"
                            class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne2"
                            data-bs-parent="#accordionFlushProfile"
                        >
                            <div class="accordion-Profile">
                                <ul class="submenu">
                                    <li>
                                        <a href="{{route('updateprofile',auth()->user()->id)}}"
                                           class="d-flex align-items-center">
                                            <div class="profile-ic">
                                                <i class="far fa-user"></i>
                                            </div>
                                            <div>@lang('site.Profile')</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('myfavouriteAll')}}"
                                           class="d-flex align-items-center">
                                            <div class="profile-ic">
                                                <i class="far fa-heart"></i>
                                            </div>
                                            <div>@lang('site.favorite')</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="d-flex align-items-center">
                                            <div class="profile-ic">
                                                <i class="far fa-book-open"></i>
                                            </div>
                                            <div>@lang('site.My bookings')</div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{route('logout')}}"
                                           class="d-flex align-items-center">
                                            <div class="profile-ic">
                                                <i class="far fa-sign-out"></i>
                                            </div>
                                            <div> @lang('site.logout')</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            @else

                <!-- without login -->

                <li>
                    <a
                        href="{{route('sitelogin')}}"
                        class="btn-outline-7agz btn-space d-flex justify-content-center align-items-center"
                    >
                        <span><i class="fas fa-user"></i></span>
                        <span> @lang('site.login')</span>
                    </a>
                </li>
                <li>
                    <a
                        href="{{route('registers')}}"
                        class="btn-7agz d-flex justify-content-center align-items-center"
                    >
                        <span><i class="fas fa-user"></i></span>
                        <span> @lang('site.register')</span>
                    </a>
                </li>

            @endif
        </ul>
    </nav>
    <div
        class="side-menu-close d-flex flex-wrap flex-column align-items-center justify-content-center"
    >
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
