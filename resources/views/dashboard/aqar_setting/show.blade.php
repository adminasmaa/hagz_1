@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqar_setting')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.aqar_setting') @endlang</li>
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
                    <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                        <h5>@lang('site.show') </h5>
                        <div class="text-end  group-btn-top">
                            <div class="form-group d-flex form-group justify-content-between">
                                <button type="button" class="btn btn-pill btn-outline-primary btn-air-primary"
                                        onclick="history.back();">
                                    <!--<i class="fa fa-backward"></i>-->
                                    @lang('site.back')
                                </button>

                            </div>
                        </div>


                    </div>
                    <center>
                        <div class="card-body">
                        @include('partials._errors')
                                <div class="col-sm-8">
                                    <div class="card">
                                        <div class="card-header">
                                        <h5 class="text-danger">@lang('site.alert')</h5>
                                            <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>
                                            <h6 class="text-info">0707078888</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="col-sm-12">
                                                <h5 class="text-decoration-underline border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <div class="m-t-15">
                                                @foreach($categories as $cat)
                                                <div class="form-check radio radio-primary">
                                                    <input class="form-check-input" id="category_id{{$cat->id}}" type="radio"  name="category_id"  value="{{$cat->id}}" {{$cat->id==$aqarSetting->category_id? 'checked':'' }}  disabled>
                                                    <label class="form-check-label mb-0" for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
                                                </div>
                                                @endforeach
                                                </div>
                                                
                                            </div>
                                            <div class="row m-t-10">
                                            <div class="col-md-6 form-group col-12 p-2">
                                                <label>@lang('site.input_id')</label>
                                                <input type="text" name="input_id" class="form-control" value="{{ $aqarSetting->input_id }}"
                                                    disabled>
                                            </div>

                                            <div class="col-md-6 form-group col-12 p-2">
                                            <label class="form-label">@lang('site.display')</label>
                                                <select class="form-control btn-square" name="display" readonly="" disabled>
                                                    <option selected>@lang('site.select')</option>

                                                    <option value="1"
                                                            @if($aqarSetting->display=='1') selected @endif>@lang('site.view')
                                                    </option>
                                                    <option value="0"
                                                            @if($aqarSetting->display=='0') selected @endif>@lang('site.notview')
                                                    </option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                </center>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection

