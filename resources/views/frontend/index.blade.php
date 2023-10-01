@extends('frontend.layouts.app')
@section('content')

    <div class="overlay-mobile"></div>
    <main>
        <!-- slider section -->
        <section class="slider-section position-relative">
            <div class="hero-section">
                <div class="owl-carousel owl-theme slider-owl">

                    @foreach($sliders as $slider)
                    <div class="slider-item">
                        <div class="hero-section-image">
                            <img
                                alt="slider image"
                                src="{{asset('images/sliders/'.$slider->image)}}"
                                onerror="this.src='{{FRONTASSETS}}/assets/images/slider-image.svg'"

                            />
                        </div>
                        <div class="container">
                            <div class="slider-container d-flex align-items-center">
                                <div>
                                    <h2 class="title-hero">
                                        <span>@lang('site.title')</span>
                                    </h2>
                                    <p class="text-hero">

                                        @lang('site.slidertitle')

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="search-container">

                <div class="container">
                    <div class="search-stage">
                        <form action="{{route('aquars',1)}}" method="get">

                        <div class="row align-items-end">
                            <div class="col-lg-3 col-6">
                                <div class="box-search mb-lg-0 mb-3">
                                    <label for="categories" class="lbl-search"> @lang('site.categories')</label>
                                    <select class="select2" id="categories" name="category_id" >
                                        <option disabled selected>@lang('site.select')</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name ?? ''}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="regions" class="lbl-search">@lang('site.countries') </label>
                                <div class="box-search mb-lg-0 mb-3" id="regions" >
                                    <select class="select2" name="country_id" >
                                        <option disabled selected>@lang('site.select')</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->id}}"> {{$country->name ?? ''}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <label for="individuals" class="lbl-search"
                                > @lang('site.Individuals')
                                </label>
                                <div class="box-search" id="individuals">
                                    <select class="select2">
                                        <option disabled selected>@lang('site.select')</option>
                                        <option value="1">@lang('site.families')</option>
                                        <option value="2">@lang('site.youths')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div
                                    class="search-btn d-flex align-items-center justify-content-center mt-lg-0"
                                >
                                    <button type="submit" >
                                        @lang('site.search')
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </section>
        <!-- add your ads section -->
        <section class="your-ads-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="your-ads-content pt-3">
                            <h2 class="main-title">  @lang('site.Add your ad')</h2>
                            <p class="main-text my-lg-5 my-3">
                                @lang('site.You can now add your ad at any time you want')
                            </p>
                            <div class="main-btn">
                                <a href="#"> @lang('site.details')</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 your-ads-image-box">
                        <div class="your-ads-image">
                            <img
                                src="{{FRONTASSETS}}/assets/images/your-ads-image.svg"
                                alt="your ads image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="Choose-the-category py-lg-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="main-title">    @lang('site.Choose the category that suits you')</h2>
                    </div>
                </div>
                <div class="row mt-lg-5 mt-4">
                    @foreach($categories as $cat)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card-category mb-5">
                                <div class="card-image-box">
                                    <img class="card-img"
                                         src="{{asset('images/categories/'.$cat->image)}}"
                                         onerror="this.src='{{FRONTASSETS}}/assets/images/category-image-1.png'"
                                         alt="Card image cap"/>
                                </div>
                                <div class="card-category-body p-3 text-center">
                                    <h2>{{$cat->name ?? ''}}</h2>
                                    <p class="card-title-category">
                                        {!! html_entity_decode($cat->description) !!}

                                    </p>
                                    <div class="d-flex justify-content-center my-3">
                                        <div class="main-btn">
                                            <a href="{{route('aquars',$cat->id)}}"> @lang('site.Explore now')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>
        <section class="about-section py-lg-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="main-title">  @lang('site.What do we provide for you?')</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            @foreach($HomeServices as $service)
                            <div class="col-md-6 col-12">
                                <div class="about-card mb-5 text-center py-5">
                                    <img
                                        src="{{asset('images/home_serviecs/'.$service->image)}}"
                                        onerror="this.src='{{FRONTASSETS}}/assets/images/trust-icon.svg'"
                                        />
                                    <div class="pt-3">
                                        <h3 class="text-second">  {{ $service->title_ar}}</h3>
                                        <p class="mb-0">   {!! html_entity_decode(substr($service->description_ar, 0, 125)) !!}</p>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                    <div class="col-lg-4 col-12"></div>
                </div>
            </div>
        </section>
        <section class="d-lg-flex">
            <div class="right-container d-flex align-items-center py-lg-0 py-4">
                <div class="right-container-content">
                    <h2>@lang('site.Download the application now')</h2>
                    <p>  @lang('site.You can download the application now from us on')</p>
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
                                <img src="{{FRONTASSETS}}/assets/images/app-store.svg" alt=" app store"/>
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

