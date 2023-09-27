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
                        {{$category->name?? ''}}
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- search all farms section -->
        <section class="search-section py-5">
            <div class="search-container-farms">
                <div class="container">
                    <div class="search-stage-farms">
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-6">
                                <div class="box-search mb-lg-0 mb-3">
                                    <label for="categories" class="lbl-search">@lang('site.categories')</label>
                                    <select class="select2" id="categories" name="category_id">
                                        <option>@lang('site.select')</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="regions" class="lbl-search">@lang('site.countries') </label>
                                <div class="box-search mb-lg-0 mb-3" id="regions">
                                    <select class="select2" name="country_id">
                                        <option>@lang('site.select')</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}"> {{$country->name ?? ''}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="individuals" class="lbl-search"
                                >اختر الافراد
                                </label>
                                <div class="box-search mb-sm-0" id="individuals">
                                    <select class="select2">
                                        <option value="1">الكل</option>
                                        <option value="2">الكل</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div
                                    class="search-btn d-flex align-items-center justify-content-center"
                                >
                                    <a href="#">@lang('site.search')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--all farms section -->
        <section class="py-lg-5 py-3 all-farms-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="main-title">الترتيب حسب</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="tabs-details mt-lg-5 mt-4">
                        <ul
                            class="tabs-nav-details list-unstyled mb-0 tabs-in-mobile flex-wrap"
                        >
                            <li>
                                <a
                                    href="#tab-1"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    الكل
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-2"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    الاعلى مشاهدة
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-3"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    الاعلى سعر
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-4"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    الاقل سعر
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-5"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    الاعلى تقيم
                                </a>
                            </li>
                        </ul>
                        <ul class="tabs-content pt-5 list-unstyled tabs-aqars-booking">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <div
                                                        class="owl-carousel owl-theme farm-img-carousel"
                                                    >
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-1.svg"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-2.png"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="card-body position-relative">
                                                        <div
                                                            class="d-md-flex align-items-center justify-content-md-between"
                                                        >
                                                            <div class="text-main number-ads">
                                                                رقم الاعلان( 702 )
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                            >
                                                                <div class="farm-badge bg-main text-white">
                                                                    <div class="pt-1">5</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="number-ads text-light-main">
                                                                    64 من التقييمات
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                        >
                                                            <h3 class="card-title mb-2 pt-0">
                                                                مزرعة الواحة
                                                            </h3>
                                                            <div
                                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                                            >
                                                                <div class="farm-share-ic">
                                                                    <img
                                                                        src="./assets/images/share-ic.svg"
                                                                        alt="share icon"
                                                                    />
                                                                </div>
                                                                <div class="fw-bold">مشاركة الاعلان</div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-md-flex align-items-end justify-content-md-between"
                                                        >
                                                            <div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="farm-data-img">
                                                                        <i
                                                                            class="fas fa-map-marker-alt text-main"
                                                                        ></i>
                                                                    </div>
                                                                    <div class="text-light-main farm-data">
                                                                        مزارع الوفرة
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/families-ic.svg"
                                                                            alt="families icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">للعائلات فقط</div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/area-ic.svg"
                                                                            alt="area icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">
                                                                        المساحة 20000م2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <div
                                                        class="owl-carousel owl-theme farm-img-carousel"
                                                    >
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-1.svg"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-2.png"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="card-body position-relative">
                                                        <div
                                                            class="d-md-flex align-items-center justify-content-md-between"
                                                        >
                                                            <div class="text-main number-ads">
                                                                رقم الاعلان( 702 )
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                            >
                                                                <div class="farm-badge bg-main text-white">
                                                                    <div class="pt-1">5</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="number-ads text-light-main">
                                                                    64 من التقييمات
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                        >
                                                            <h3 class="card-title mb-2 pt-0">
                                                                مزرعة الواحة
                                                            </h3>
                                                            <div
                                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                                            >
                                                                <div class="farm-share-ic">
                                                                    <img
                                                                        src="./assets/images/share-ic.svg"
                                                                        alt="share icon"
                                                                    />
                                                                </div>
                                                                <div class="fw-bold">مشاركة الاعلان</div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-md-flex align-items-end justify-content-md-between"
                                                        >
                                                            <div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="farm-data-img">
                                                                        <i
                                                                            class="fas fa-map-marker-alt text-main"
                                                                        ></i>
                                                                    </div>
                                                                    <div class="text-light-main farm-data">
                                                                        مزارع الوفرة
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/families-ic.svg"
                                                                            alt="families icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">للعائلات فقط</div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/area-ic.svg"
                                                                            alt="area icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">
                                                                        المساحة 20000م2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <div
                                                        class="owl-carousel owl-theme farm-img-carousel"
                                                    >
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-1.svg"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-2.png"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="card-body position-relative">
                                                        <div
                                                            class="d-md-flex align-items-center justify-content-md-between"
                                                        >
                                                            <div class="text-main number-ads">
                                                                رقم الاعلان( 702 )
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                            >
                                                                <div class="farm-badge bg-main text-white">
                                                                    <div class="pt-1">5</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="number-ads text-light-main">
                                                                    64 من التقييمات
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                        >
                                                            <h3 class="card-title mb-2 pt-0">
                                                                مزرعة الواحة
                                                            </h3>
                                                            <div
                                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                                            >
                                                                <div class="farm-share-ic">
                                                                    <img
                                                                        src="./assets/images/share-ic.svg"
                                                                        alt="share icon"
                                                                    />
                                                                </div>
                                                                <div class="fw-bold">مشاركة الاعلان</div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-md-flex align-items-end justify-content-md-between"
                                                        >
                                                            <div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="farm-data-img">
                                                                        <i
                                                                            class="fas fa-map-marker-alt text-main"
                                                                        ></i>
                                                                    </div>
                                                                    <div class="text-light-main farm-data">
                                                                        مزارع الوفرة
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/families-ic.svg"
                                                                            alt="families icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">للعائلات فقط</div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/area-ic.svg"
                                                                            alt="area icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">
                                                                        المساحة 20000م2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <div
                                                        class="owl-carousel owl-theme farm-img-carousel"
                                                    >
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-1.svg"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class="item">
                                                            <button
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </button>
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="./assets/images/farm-img-2.png"
                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="card-body position-relative">
                                                        <div
                                                            class="d-md-flex align-items-center justify-content-md-between"
                                                        >
                                                            <div class="text-main number-ads">
                                                                رقم الاعلان( 702 )
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                            >
                                                                <div class="farm-badge bg-main text-white">
                                                                    <div class="pt-1">5</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="number-ads text-light-main">
                                                                    64 من التقييمات
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                        >
                                                            <h3 class="card-title mb-2 pt-0">
                                                                مزرعة الواحة
                                                            </h3>
                                                            <div
                                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                                            >
                                                                <div class="farm-share-ic">
                                                                    <img
                                                                        src="./assets/images/share-ic.svg"
                                                                        alt="share icon"
                                                                    />
                                                                </div>
                                                                <div class="fw-bold">مشاركة الاعلان</div>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-md-flex align-items-end justify-content-md-between"
                                                        >
                                                            <div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="farm-data-img">
                                                                        <i
                                                                            class="fas fa-map-marker-alt text-main"
                                                                        ></i>
                                                                    </div>
                                                                    <div class="text-light-main farm-data">
                                                                        مزارع الوفرة
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/families-ic.svg"
                                                                            alt="families icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">للعائلات فقط</div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="./assets/images/area-ic.svg"
                                                                            alt="area icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">
                                                                        المساحة 20000م2
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                            >
                                                                <a href="#">عرض التفاصيل</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="tab-5">
                                <div class="col-12">
                                    <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                        <div class="row g-0">
                                            <div class="col-lg-5">
                                                <div
                                                    class="owl-carousel owl-theme farm-img-carousel"
                                                >
                                                    <div class="item">
                                                        <button
                                                            type="button"
                                                            class="farm-like d-flex justify-content-center align-items-center"
                                                        >
                                                            <i class="fal fa-heart"></i>
                                                        </button>
                                                        <div class="farm-img-list">
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/farm-img-1.svg"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="item">
                                                        <button
                                                            type="button"
                                                            class="farm-like d-flex justify-content-center align-items-center"
                                                        >
                                                            <i class="fal fa-heart"></i>
                                                        </button>
                                                        <div class="farm-img-list">
                                                            <img
                                                                loading="lazy"
                                                                src="./assets/images/farm-img-2.png"
                                                                alt="image 1"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 d-flex align-items-center">
                                                <div class="card-body position-relative">
                                                    <div
                                                        class="d-md-flex align-items-center justify-content-md-between"
                                                    >
                                                        <div class="text-main number-ads">
                                                            رقم الاعلان( 702 )
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                        >
                                                            <div class="farm-badge bg-main text-white">
                                                                <div class="pt-1">5</div>
                                                                <div>
                                                                    <i class="fas fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="number-ads text-light-main">
                                                                64 من التقييمات
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                    >
                                                        <h3 class="card-title mb-2 pt-0">
                                                            مزرعة الواحة
                                                        </h3>
                                                        <div
                                                            class="farm-share d-flex justify-content-lg-end align-items-center"
                                                        >
                                                            <div class="farm-share-ic">
                                                                <img
                                                                    src="./assets/images/share-ic.svg"
                                                                    alt="share icon"
                                                                />
                                                            </div>
                                                            <div class="fw-bold">مشاركة الاعلان</div>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-md-flex align-items-end justify-content-md-between"
                                                    >
                                                        <div>
                                                            <div class="d-flex align-items-center">
                                                                <div class="farm-data-img">
                                                                    <i
                                                                        class="fas fa-map-marker-alt text-main"
                                                                    ></i>
                                                                </div>
                                                                <div class="text-light-main farm-data">
                                                                    مزارع الوفرة
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center farm-data"
                                                            >
                                                                <div class="farm-data-img">
                                                                    <img
                                                                        src="./assets/images/families-ic.svg"
                                                                        alt="families icon"
                                                                    />
                                                                </div>
                                                                <div class="text-second">للعائلات فقط</div>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center farm-data"
                                                            >
                                                                <div class="farm-data-img">
                                                                    <img
                                                                        src="./assets/images/area-ic.svg"
                                                                        alt="area icon"
                                                                    />
                                                                </div>
                                                                <div class="text-second">
                                                                    المساحة 20000م2
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                        >
                                                            <a href="#">عرض التفاصيل</a>
                                                        </div>
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
        </section>

        <section class="d-lg-flex">
            <div class="right-container d-flex align-items-center py-lg-0 py-4">
                <div class="right-container-content">
                    <h2>@lang('site.Download the application now')</h2>
                    <p>@lang('site.You can download the application now from us on')</p>
                    <div class="d-flex justify-content-between py-3">
                        <div
                            class="footer-img d-flex align-items-center justify-content-center"
                        >
                            <a href="#">
                                <img
                                    src="{{FRONTASSETS}}/assets/images/google-play.svg"
                                    alt="google play"
                                />
                            </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#">
                                <img src="{{FRONTASSETS}}/assets/images/app-store.svg" alt=" app store" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="left-container"
                style="background-image: url('{{FRONTASSETS}}/assets/images/footer-image.png')"
            ></div>
        </section>
    </main>




@endsection

