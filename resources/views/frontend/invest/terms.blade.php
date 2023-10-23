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
                            @lang('site.policies')
                        </li>
                    </ol>
                </nav>
            </div>
        </section>
        <form action="{{route('invest.addterm')}}" method="post">
            @csrf
            <section class="investor-7agz mb-6 mt-lg-0 mt-3">
                <div class="container">
                    <div class="investor_7agz_card">
                        <div class="row">
                            <div class="col-12">
                                <h2> @lang('site.policies')</h2>
                                <h4 class="investor_q">@lang('site.Which cancellation and return policy suits you?')</h4>
                                <div class="danger-txt">
                                    <span><i class="fas fa-exclamation-triangle"></i></span>


                                    @lang('site.The customer will be shown the existing reservation conditions at the time of his reservation')
                                </div>
                            </div>
                            <div class="col-12 mt-lg-5 mt-3">

                                @foreach($polices as $policy)

                                    <div class=" ads-radio-list mb-lg-5 mb-3">
                                        <input
                                            type="radio"
                                            name="policy_id"
                                            id="{{$policy->id}}"

                                            value="{{$policy->id}}"

                                        />
                                        <label for="{{$policy->id}}" class="online-lbl custom-radio">
                                            {{$policy->name ?? ''}}

                                        </label>
                                        <div class="return-policy-items">
                                            <div class="return-policy-item">  {{$policy->description ?? ''}}</div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>
                            <div class="col-12 mb-lg-3">
                                <label for="name"
                                       class="return-lbl"> @lang('site.To amend or write other conditions') </label>
                                <textarea class="form-control txtarea-7agz"
                                          placeholder=" {{trans('site.Please write the conditions that suit you')}}   "
                                          rows="7" name="description" required></textarea>
                            </div>
                            <div class="col-12 d-flex align-items-center justify-content-center mt-lg-4 mt-3">
                                <div class="main-btn d-flex align-items-center justify-content-center w-100">
                                    <button type="submit">@lang('site.approved')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </main>

@endsection

