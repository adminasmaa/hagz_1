@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.cities')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.cities') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.cities.store') }}" method="post"
                              enctype="multipart/form-data"
                              id="" class="form-main">

                            {{ csrf_field() }}
                            {{ method_field('post') }}
                            <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                                <h5>@lang('site.add') </h5>
                                <div class="text-end  group-btn-top">
                                    <div class="form-group d-flex form-group justify-content-between">
                                        <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                                onclick="history.back();">

                                            @lang('site.back')
                                        </button>
                                        <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                                class="fa fa-plus p-1"></i>
                                            @lang('site.add')</button>
                                    </div>
                                </div>


                            </div>
                            <div class="card-body">
                                @include('partials._errors')


                                <div class="row">

                                    <div class="col-md-6 form-group">
                                        <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control"
                                               value="{{old('name_ar')}}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_en" class="form-control"
                                               value="{{old('name_en')}}"
                                               >
                                    </div>

                                    <input type="hidden" name="country_id" value="{{request()->country_id}}">

                                    <div class="col-md-6 form-group">
                                        <label>@lang('site.order')<span class="text-danger">*</span></label>
                                        <input type="text" name="order" class="form-control"
                                               value="{{old('order')}}"
                                        >
                                    </div>

                                    <div class="row">

                                        <div class="col-md-6 form-group">
                                            <label>@lang('site.code')<span class="text-danger">*</span></label>
                                            <input type="text" name="code" class="form-control"
                                                   value="{{old('code')}}"
                                            >
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6 form-group">


                                            <label>@lang('site.image')</label>
                                            <input type="file" name="image" class="form-control"
                                                   value="{{ old('image') }}">


                                        </div>
                                    </div>


                                </div>


                            </div>


                    </div>
                </div>
            </div>
        </div>

        </form>
        <!--    </div>-->
    </div>
    </div><!--</div>-->

    </div>
    <!-- Container-fluid Ends-->

@endsection
