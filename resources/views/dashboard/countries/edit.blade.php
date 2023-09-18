@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.countries')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.countries') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.countries.update', $country->id) }}" method="post"
                          enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                            <h5>@lang('site.edit') </h5>
                            <div class="text-end  group-btn-top">
                                <div class="form-group d-flex form-group justify-content-between">
                                    <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                            onclick="history.back();">
                                        <!--<i class="fa fa-backward"></i>-->
                                        @lang('site.back')
                                    </button>
                                    <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                            class="fa fa-magic"></i>
                                        @lang('site.edit')</button>
                                </div>
                            </div>


                        </div>
                        <div class="card-body">
                            @include('partials._errors')


                            <div class="row form-group">

                                <!-- <div class="col-sm-12"> -->
                                <div class="col-md-6 form-group col-12 p-2  ">

                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/countries/'.$country->image)}}" data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                         onerror="this.src='{{asset('images/countries/default.jpg')}}'"
                                    >


                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.flag_image')</label>
                                    <img name="flag_image" src="{{asset('images/countries/'.$country->flag_image)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss2" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/countries/default.jpg')}}'"
                                    >

                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang('site.image')</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="border-5">
                                                <tr>
                                                    <th>
                                                        <img name="soso"
                                                             src="{{asset('images/countries/'.$country->image)}}" alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/countries/default.jpg')}}'"
                                                        >

                                                    </th>
                                                </tr>


                                            </table>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalss2" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">@lang('site.flag_image')</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <table class="border-5">
                                                <tr>
                                                    <th>
                                                        <img name="soso"
                                                             src="{{asset('images/countries/'.$country->flag_image)}}" alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/countries/default.jpg')}}'"
                                                        >

                                                    </th>
                                                </tr>


                                            </table>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  End Of Modal -->
                            <div class="row">
                                <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label>@lang('site.ar.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_ar" class="form-control" value="{{ $country->name_ar }}"
                                               required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label>@lang('site.en.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="name_en" class="form-control" value="{{ $country->name_en }}"
                                               >
                                    </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.currency')<span class="text-danger">*</span></label>
                                    <input type="text" name="currency" class="form-control" value="{{ $country->currency }}"
                                    >
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.code')<span class="text-danger">*</span></label>
                                    <input type="text" name="code" class="form-control" value="{{ $country->code }}"
                                    >
                                </div>
                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                    <label class="form-label">@lang('site.active')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="active">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($country->active==1) selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($country->active==0) selected @endif>@lang('site.not-active')
                                        </option>

                                    </select>
                                </div>
                              

                                <div class="col-md-6 form-group col-12 p-2">

                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}">

                                </div>          
                                 <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.flag_image')</label>
                                    <input type="file" name="flag_image" class="form-control" value="{{ old('flag_image') }}">

                                </div>





                            </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>

@endsection
