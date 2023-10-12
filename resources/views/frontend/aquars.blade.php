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
                        <form action="{{route('aquars',$category->id)}}" method="get">
                        <div class="row align-items-end">
                            <div class="col-lg-3 col-6">
                                <div class="box-search mb-lg-0 mb-3">
                                    <label for="categories" class="lbl-search">@lang('site.categories')</label>
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
                                <div class="box-search mb-lg-0 mb-3" id="regions">
                                    <select class="select2" name="country_id">
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
                                <div class="box-search mb-sm-0" id="individuals">
                                    <select class="select2">
                                        <option disabled selected>@lang('site.select')</option>
                                        <option value="1">@lang('site.families')</option>
                                        <option value="2">@lang('site.youths')</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div
                                    class="search-btn d-flex align-items-center justify-content-center"
                                >
                                    <button type="submit">@lang('site.search')</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--all farms section -->
        <section class="py-lg-5 py-3 all-farms-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="main-title"> @lang('site.order')</h2>
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
                                    @lang('site.all')
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-2"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                              @lang('site.view')
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-3"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.max_price')
                                </a>
                            </li>
                            <li>
                                <a
                                    href="#tab-4"
                                    class="tab-link d-flex align-items-center justify-content-center"
                                >
                                    @lang('site.min_price')
                                </a>
                            </li>

                        </ul>
                        <ul class="tabs-content pt-5 list-unstyled tabs-aqars-booking">
                            <li id="tab-1">
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($aqars as $aquar)
                                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                            <div class="row g-0">
                                                <div class="col-lg-5">
                                                    <div
                                                        class="owl-carousel owl-theme farm-img-carousel"
                                                    >
                                                        @if(!empty($aquar->images))
                                                            @foreach(explode(',',$aquar->images) as $img)
                                                        <div class="item">

                                                            @if(!empty(auth()->user()))

                                                                <a
                                                                   id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                    class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                >
                                                                    <i
                                                                        class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                </a>



                                                            @else
                                                            <a
                                                                type="button"
                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                            >
                                                                <i class="fal fa-heart"></i>
                                                            </a>
                                                            @endif
                                                            <div class="farm-img-list">
                                                                <img
                                                                    loading="lazy"
                                                                    src="{{asset('images/aqars/'.$img)}}"

                                                                    onerror="this.src='{{FRONTASSETS}}/assets/images/farm-img-1.svg'"

                                                                    alt="image 1"
                                                                />
                                                            </div>
                                                        </div>
                                                            @endforeach

                                                        @else
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
                                                                        src="{{FRONTASSETS}}/assets/images/farm-img-1.svg"
                                                                        alt="image 1"
                                                                    />
                                                                </div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="col-lg-7 d-flex align-items-center">
                                                    <div class="card-body position-relative">
                                                        <div
                                                            class="d-md-flex align-items-center justify-content-md-between"
                                                        >
                                                            <div class="text-main number-ads">
                                                                @lang('site.id number')({{$aquar->id}})
                                                            </div>
                                                            <div
                                                                class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                            >
                                                                <div class="farm-badge bg-main text-white">
                                                                    <div class="pt-1"> {{$aquar->aqarReview->avg('rate') ?? 0}}</div>
                                                                    <div>
                                                                        <i class="fas fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="number-ads text-light-main">

                                                                    @lang('site.comments')

                                                                    {{$aquar->aqarComment->count()}}                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                        >
                                                            <h3 class="card-title mb-2 pt-0">
                                                                {{$aquar->name ?? ''}}
                                                            </h3>
                                                            <div
                                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                                            >
                                                                <div class="farm-share-ic">
                                                                    <img
                                                                        src="{{FRONTASSETS}}/assets/images/share-ic.svg"
                                                                        alt="share icon"
                                                                    />
                                                                </div>
                                                                <div class="fw-bold">@lang('site.Share the ad')</div>
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
                                                                        {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                                                            alt="families icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second"> {{trans('site.'.$aquar->individual)}}</div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-center farm-data"
                                                                >
                                                                    <div class="farm-data-img">
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/area-ic.svg"
                                                                            alt="area icon"
                                                                        />
                                                                    </div>
                                                                    <div class="text-second">
                                                                        {{$aquar->fixed_price?? 0}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                            >
                                                                <a href="{{route('detailAqar',$aquar->id)}}"> @lang('site.details')</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach



                                            @if(!empty($aqars->hasPages()))
                                                <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                    <nav
                                                        class="farm-list-pagination d-md-flex justify-content-md-between align-items-center"
                                                    >
                                                        <ul
                                                            class="pagination mb-0 justify-content-lg-start justify-content-center"
                                                        >
                                                            <li class="page-item">
                                                                {{ $aqars->links() }}
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            @endif


                                    </div>
                                </div>
                            </li>
                            <li id="tab-2">
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($aqars as $aquar)
                                            <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                <div class="row g-0">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="owl-carousel owl-theme farm-img-carousel"
                                                        >
                                                            @if(!empty($aquar->images))
                                                                @foreach(explode(',',$aquar->images) as $img)
                                                                    <div class="item">
                                                                        @if(!empty(auth()->user()))

                                                                            <a
                                                                                id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                                class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                            >
                                                                                <i
                                                                                    class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                            </a>



                                                                        @else
                                                                            <a
                                                                                type="button"
                                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                                            >
                                                                                <i class="fal fa-heart"></i>
                                                                            </a>
                                                                        @endif
                                                                        <div class="farm-img-list">
                                                                            <img
                                                                                loading="lazy"
                                                                                src="{{asset('images/aqars/'.$img)}}"

                                                                                onerror="this.src='{{FRONTASSETS}}/assets/images/farm-img-1.svg'"

                                                                                alt="image 1"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            @else
                                                                <div class="item">
                                                                    @if(!empty(auth()->user()))

                                                                        <a
                                                                            id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                            class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                        >
                                                                            <i
                                                                                class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                        </a>



                                                                    @else
                                                                        <a
                                                                            type="button"
                                                                            class="farm-like d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <i class="fal fa-heart"></i>
                                                                        </a>
                                                                    @endif
                                                                    <div class="farm-img-list">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="{{FRONTASSETS}}/assets/images/farm-img-1.svg"
                                                                            alt="image 1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 d-flex align-items-center">
                                                        <div class="card-body position-relative">
                                                            <div
                                                                class="d-md-flex align-items-center justify-content-md-between"
                                                            >
                                                                <div class="text-main number-ads">
                                                                    @lang('site.id number')({{$aquar->id}})
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                                >
                                                                    <div class="farm-badge bg-main text-white">
                                                                        <div class="pt-1"> {{$aquar->aqarReview->avg('rate') ?? 0}}</div>
                                                                        <div>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads text-light-main">

                                                                        @lang('site.comments')

                                                                        {{$aquar->aqarComment->count()}}                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                            >
                                                                <h3 class="card-title mb-2 pt-0">
                                                                    {{$aquar->name ?? ''}}
                                                                </h3>
                                                                <div
                                                                    class="farm-share d-flex justify-content-lg-end align-items-center"
                                                                >
                                                                    <div class="farm-share-ic">
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/share-ic.svg"
                                                                            alt="share icon"
                                                                        />
                                                                    </div>
                                                                    <div class="fw-bold">@lang('site.Share the ad')</div>
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
                                                                            {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                                                                alt="families icon"
                                                                            />
                                                                        </div>


                                                                        <div class="text-second"> {{trans('site.'.$aquar->individual)}}</div>
                                                                    </div>

                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/area-ic.svg"
                                                                                alt="area icon"
                                                                            />
                                                                        </div>
                                                                        <div class="text-second">
                                                                            {{$aquar->fixed_price?? 0}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                                >
                                                                    <a href="{{route('detailAqar',$aquar->id)}}"> @lang('site.details')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                            @if(!empty($aqars->hasPages()))
                                                <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                    <nav
                                                        class="farm-list-pagination d-md-flex justify-content-md-between align-items-center"
                                                    >
                                                        <ul
                                                            class="pagination mb-0 justify-content-lg-start justify-content-center"
                                                        >
                                                            <li class="page-item">
                                                                {{ $aqars->links() }}
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            @endif


                                    </div>
                                </div>
                            </li>
                            <li id="tab-3">
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($maxpriceAqars as $aquar)
                                            <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                <div class="row g-0">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="owl-carousel owl-theme farm-img-carousel"
                                                        >
                                                            @if(!empty($aquar->images))
                                                                @foreach(explode(',',$aquar->images) as $img)
                                                                    <div class="item">
                                                                        @if(!empty(auth()->user()))

                                                                            <a
                                                                                id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                                class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                            >
                                                                                <i
                                                                                    class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                            </a>



                                                                        @else
                                                                            <a
                                                                                type="button"
                                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                                            >
                                                                                <i class="fal fa-heart"></i>
                                                                            </a>
                                                                        @endif
                                                                        <div class="farm-img-list">
                                                                            <img
                                                                                loading="lazy"
                                                                                src="{{asset('images/aqars/'.$img)}}"

                                                                                onerror="this.src='{{FRONTASSETS}}/assets/images/farm-img-1.svg'"

                                                                                alt="image 1"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            @else
                                                                <div class="item">
                                                                    @if(!empty(auth()->user()))

                                                                        <a
                                                                            id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                            class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                        >
                                                                            <i
                                                                                class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                        </a>



                                                                    @else
                                                                        <a
                                                                            type="button"
                                                                            class="farm-like d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <i class="fal fa-heart"></i>
                                                                        </a>
                                                                    @endif
                                                                    <div class="farm-img-list">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="{{FRONTASSETS}}/assets/images/farm-img-1.svg"
                                                                            alt="image 1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 d-flex align-items-center">
                                                        <div class="card-body position-relative">
                                                            <div
                                                                class="d-md-flex align-items-center justify-content-md-between"
                                                            >
                                                                <div class="text-main number-ads">
                                                                    @lang('site.id number')({{$aquar->id}})
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                                >
                                                                    <div class="farm-badge bg-main text-white">
                                                                        <div class="pt-1"> {{$aquar->aqarReview->avg('rate') ?? 0}}</div>
                                                                        <div>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads text-light-main">

                                                                        @lang('site.comments')

                                                                        {{$aquar->aqarComment->count()}}                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                            >
                                                                <h3 class="card-title mb-2 pt-0">
                                                                    {{$aquar->name ?? ''}}
                                                                </h3>
                                                                <div
                                                                    class="farm-share d-flex justify-content-lg-end align-items-center"
                                                                >
                                                                    <div class="farm-share-ic">
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/share-ic.svg"
                                                                            alt="share icon"
                                                                        />
                                                                    </div>
                                                                    <div class="fw-bold">@lang('site.Share the ad')</div>
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
                                                                            {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                                                                alt="families icon"
                                                                            />
                                                                        </div>
                                                                        <div class="text-second"> {{trans('site.'.$aquar->individual)}}</div>
                                                                    </div>

                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/area-ic.svg"
                                                                                alt="area icon"
                                                                            />
                                                                        </div>
                                                                        <div class="text-second">
                                                                            {{$aquar->fixed_price?? 0}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                                >
                                                                    <a href="{{route('detailAqar',$aquar->id)}}"> @lang('site.details')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                            @if(!empty($maxpriceAqars->hasPages()))
                                                <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                    <nav
                                                        class="farm-list-pagination d-md-flex justify-content-md-between align-items-center"
                                                    >
                                                        <ul
                                                            class="pagination mb-0 justify-content-lg-start justify-content-center"
                                                        >
                                                            <li class="page-item">
                                                                {{ $maxpriceAqars->links() }}
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            @endif

                                    </div>
                                </div>
                            </li>
                            <li id="tab-4">
                                <div class="row">
                                    <div class="col-12">
                                        @foreach($minpriceAqars as $aquar)
                                            <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                <div class="row g-0">
                                                    <div class="col-lg-5">
                                                        <div
                                                            class="owl-carousel owl-theme farm-img-carousel"
                                                        >
                                                            @if(!empty($aquar->images))
                                                                @foreach(explode(',',$aquar->images) as $img)
                                                                    <div class="item">
                                                                        @if(!empty(auth()->user()))

                                                                            <a
                                                                                id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                                class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                            >
                                                                                <i
                                                                                    class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                            </a>



                                                                        @else
                                                                            <a
                                                                                type="button"
                                                                                class="farm-like d-flex justify-content-center align-items-center"
                                                                            >
                                                                                <i class="fal fa-heart"></i>
                                                                            </a>
                                                                        @endif
                                                                        <div class="farm-img-list">
                                                                            <img
                                                                                loading="lazy"
                                                                                src="{{asset('images/aqars/'.$img)}}"

                                                                                onerror="this.src='{{FRONTASSETS}}/assets/images/farm-img-1.svg'"

                                                                                alt="image 1"
                                                                            />
                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            @else
                                                                <div class="item">
                                                                    @if(!empty(auth()->user()))

                                                                        <a
                                                                            id="favouritess{{$aquar->id}}" data-id="{{$aquar->id}}"
                                                                            class="farm-like d-flex justify-content-center align-items-center favouritess"
                                                                        >
                                                                            <i
                                                                                class=" @if(count(\App\Models\AquarUser::where('aqar_id', '=',$aquar->id)->where('user_id', '=', auth()->user()->id)->get()) > 0) fas @else far @endif far fa-heart "></i>
                                                                        </a>



                                                                    @else
                                                                        <a
                                                                            type="button"
                                                                            class="farm-like d-flex justify-content-center align-items-center"
                                                                        >
                                                                            <i class="fal fa-heart"></i>
                                                                        </a>
                                                                    @endif
                                                                    <div class="farm-img-list">
                                                                        <img
                                                                            loading="lazy"
                                                                            src="{{FRONTASSETS}}/assets/images/farm-img-1.svg"
                                                                            alt="image 1"
                                                                        />
                                                                    </div>
                                                                </div>
                                                            @endif

                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 d-flex align-items-center">
                                                        <div class="card-body position-relative">
                                                            <div
                                                                class="d-md-flex align-items-center justify-content-md-between"
                                                            >
                                                                <div class="text-main number-ads">
                                                                    @lang('site.id number')({{$aquar->id}})
                                                                </div>
                                                                <div
                                                                    class="d-flex justify-content-lg-end align-items-center mt-lg-0 mt-3"
                                                                >
                                                                    <div class="farm-badge bg-main text-white">
                                                                        <div class="pt-1"> {{$aquar->aqarReview->avg('rate') ?? 0}}</div>
                                                                        <div>
                                                                            <i class="fas fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="number-ads text-light-main">

                                                                        @lang('site.comments')

                                                                        {{$aquar->aqarComment->count()}}                                                                </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                                            >
                                                                <h3 class="card-title mb-2 pt-0">
                                                                    {{$aquar->name ?? ''}}
                                                                </h3>
                                                                <div
                                                                    class="farm-share d-flex justify-content-lg-end align-items-center"
                                                                >
                                                                    <div class="farm-share-ic">
                                                                        <img
                                                                            src="{{FRONTASSETS}}/assets/images/share-ic.svg"
                                                                            alt="share icon"
                                                                        />
                                                                    </div>
                                                                    <div class="fw-bold">@lang('site.Share the ad')</div>
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
                                                                            {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                                                                alt="families icon"
                                                                            />
                                                                        </div>
                                                                        <div class="text-second"> {{trans('site.'.$aquar->individual)}}</div>
                                                                    </div>

                                                                    <div
                                                                        class="d-flex align-items-center farm-data"
                                                                    >
                                                                        <div class="farm-data-img">
                                                                            <img
                                                                                src="{{FRONTASSETS}}/assets/images/area-ic.svg"
                                                                                alt="area icon"
                                                                            />
                                                                        </div>
                                                                        <div class="text-second">
                                                                            {{$aquar->fixed_price?? 0}}
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div
                                                                    class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                                                >
                                                                    <a href="{{route('detailAqar',$aquar->id)}}"> @lang('site.details')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                            @if(!empty($minpriceAqars->hasPages()))
                                                <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                                                    <nav
                                                        class="farm-list-pagination d-md-flex justify-content-md-between align-items-center"
                                                    >
                                                        <ul
                                                            class="pagination mb-0 justify-content-lg-start justify-content-center"
                                                        >
                                                            <li class="page-item">
                                                                {{ $minpriceAqars->links() }}
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                            @endif
                                    </div>
                                </div>
                            </li>

                        </ul>
{{--                        @if($aqars->hasPages())--}}
{{--                            <div class="card card-farm round-border mb-3 p-3">--}}
{{--                                <nav--}}
{{--                                    class="farm-list-pagination d-md-flex justify-content-md-between align-items-center"--}}
{{--                                >--}}
{{--                                    <ul--}}
{{--                                        class="pagination mb-0 justify-content-lg-start justify-content-center"--}}
{{--                                    >--}}
{{--                                        <li class="page-item">--}}
{{--                                            {{ $aqars->links() }}--}}
{{--                                        </li>--}}

{{--                                    </ul>--}}
{{--                                </nav>--}}
{{--                            </div>--}}
{{--                        @endif--}}
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

@section('scripts')

    <script>


        jQuery(document).ready(function () {
            jQuery('.favouritess').click(function (e) {
                e.preventDefault();

                var id = $(this).data('id');
                jQuery.ajax({
                    url: 'favouritAqar/' + id,
                    method: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}',
                    },
                    success: function (result) {
                        console.log(result.status);
                        if (result.status == 'deleted')
                            $(`#favouritess${id} i`).addClass('far').removeClass('fas');
                        else if (result.status == 'added')
                            $(`#favouritess${id} i`).addClass('fas').removeClass('far');
                        console.log(result);
                    },
                    error: function (err) {
                        console.log(err)
                    }
                });
            });
        });
    </script>

@endsection

