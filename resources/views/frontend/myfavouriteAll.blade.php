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
                            @lang('site.favorite')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <!-- static header -->
        <section class="static-header-fav py-5">
            <div class="container">
                <div class="row">
                    <div
                        class="col-12 d-lg-flex justify-content-between align-items-center"
                    >
                        <div class="static-header-title"> @lang('site.favorite')</div>
                        <div class="static-image">
                            <img
                                src="{{FRONTASSETS}}/assets/images/favorite-image.png"
                                alt="favorite image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- favorite -->
        <section class="favorite-page py-lg-5 py-4">
            <div class="container">
                <div class="row">

                    @foreach($favouriteaqar->favourite_aqars as $aquar)
                    <div class="col-12" id="favouritessAquar{{$aquar->id}}" >
                        <div class="card card-farm round-border mb-3 p-lg-3 p-2">
                            <div class="row g-0">
                                <div class="col-lg-5">
                                    <div class="owl-carousel owl-theme farm-img-carousel">


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
                                                    <i class="fas fa-heart"></i>
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
                                <div
                                    class="col-lg-7 d-flex align-items-center position-relative"
                                >
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

                                                    {{$aquar->aqarComment->count()}}
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="pt-2 d-lg-flex align-items-center justify-content-lg-between"
                                        >
                                            <h3 class="card-title mb-2 pt-0">        {{$aquar->name ?? ''}}</h3>
                                            <div
                                                class="farm-share d-flex justify-content-lg-end align-items-center"
                                            >
                                                <div class="farm-share-ic">
                                                    <img
                                                        src="{{FRONTASSETS}}/assets/images/share-ic.svg"
                                                        alt="share icon"
                                                    />
                                                </div>
                                                <div class="fw-bold"> @lang('site.Share the ad')</div>
                                            </div>
                                        </div>

                                        <div
                                            class="d-md-flex align-items-end justify-content-md-between"
                                        >
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="farm-data-img">
                                                        <i class="fas fa-map-marker-alt text-main"></i>
                                                    </div>
                                                    <div class="text-light-main farm-data">
                                                        {{$aquar->country->name ?? ''}} , {{$aquar->city->name ?? ''}}
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center farm-data">
                                                    <div class="farm-data-img">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/families-ic.svg"
                                                            alt="families icon"
                                                        />
                                                    </div>
                                                    <div class="text-second"> {{$aquar->details?? ''}}</div>
                                                </div>
                                                <div class="d-flex align-items-center farm-data">
                                                    <div class="farm-data-img">
                                                        <img
                                                            src="{{FRONTASSETS}}/assets/images/area-ic.svg"
                                                            alt="area icon"
                                                        />
                                                    </div>
                                                    <div class="text-second">{{$aquar->fixed_price?? 0}}</div>
                                                </div>
                                            </div>
                                            <div
                                                class="main-btn d-flex align-items-center justify-content-center mt-lg-0 mt-3"
                                            >
                                                <a href="{{route('detailAqar',$aquar->id)}}"> @lang('site.details')</a>
                                            </div>
                                        </div>
                                    </div>
{{--                                    <div class="delete-farm-card">--}}
{{--                                        <span><i class="fas fa-trash"></i></span>--}}
{{--                                        <span>حذف</span>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
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
                            // $(`#favouritess${id} i`).addClass('far').removeClass('fas');
                            $(`#favouritessAquar${id}`).remove();
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
