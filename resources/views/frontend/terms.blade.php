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
                             @lang('site.conditions')
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
                        <div class="static-header-title"> @lang('site.conditions')</div>
                        <div class="static-image">
                            <img
                                src="{{FRONTASSETS}}/assets/images/terms-of-use-image.png"
                                alt="terms of use image"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- terms items -->
        <section class="py-lg-5 py-4 terms-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-3"> @lang('site.conditions')</h2>
                    </div>
                    <div class="col-12">
                        <div class="card-terms py-5 px-4">
                            <div class="terms-content">
                                <h3 class="terms-title mb-0"> @lang('site.conditions')</h3>
                                <p class="details-sm-txt mb-4">
                           {{$setting->terms_conditions ?? ''}}



                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





@endsection



