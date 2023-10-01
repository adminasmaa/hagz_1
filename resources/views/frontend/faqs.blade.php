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


                            @lang('site.faqs')
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
                        <div class="static-header-title">    @lang('site.faqs')</div>
                        <div class="static-image">
                            <img src="{{FRONTASSETS}}/assets/images/faq-image.png" alt="faq image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- faq items -->
        <section class="faq-items py-lg-5 py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-lg-5 mb-3"> @lang('site.faqs')</h2>
                    </div>
                    <div class="col-12">

                        @foreach($faqs as $faq)
                        <div class="accordion-item faq-item mb-4">
                            <h3 class="accordion-header">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#accordion-faq-{{$faq->id}}"
                                    aria-expanded="false"
                                    aria-controls="accordion-faq-{{$faq->id}}"
                                >
                                    <div class="faq-title">{{$faq->question ?? ''}}</div>

                                    <div class="faq-arrow-down">
                                        <i class="far fa-chevron-down"></i>
                                    </div>
                                </button>
                            </h3>
                            <div
                                id="accordion-faq-{{$faq->id}}"
                                class="accordion-collapse collapse"
                            >
                                <div class="accordion-body pb-3 pt-0">
                                    <p class="faq-text">
                                 {{$faq->answer ?? ''}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach






                    </div>

                </div>
            </div>
        </section>
    </main>



@endsection



