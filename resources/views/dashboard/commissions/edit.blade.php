@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.commissions')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.commissions') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.commissions.update', $commission->id) }}" method="post"
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

                            <!--  End Of Modal -->
                            <div class="row">
                                    <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.commission')<span class="text-danger">*</span></label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="value">
                                        <option>   @lang('site.Choisissez votre commission')</option>
                                        @for ($x = 0; $x <= 20; $x++)
                                            <option value="{{$x}}" @if($commission->value==$x) selected @endif>{{$x}} %</option>
                                        @endfor
                                    </select>
                                    </div>
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="type">
                                        <option>@lang('site.select')</option>
                                        <option value="paid" @if($commission->type=='paid') selected @endif>@lang('site.paid')</option>
                                        <option value="nopaid" @if($commission->type=='nopaid') selected @endif>@lang('site.nopaid') </option>
                                    </select>
                                </div>
                                </div>
                                <div class="row">

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.users')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}" @if($commission->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>


                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.aquars')</label><span class="text-danger">*</span>
                                        <select class="js-example-placeholder-multiple col-sm-12" name="aqar_id">
                                            <option selected>@lang('site.select')</option>
                                            @foreach(\App\Models\Aqar::get() as $aqar)

                                                <option value="{{$aqar->id}}"  @if($commission->aqar_id==$aqar->id) selected @endif>{{$aqar->name ?? ''}}</option>

                                            @endforeach

                                        </select>
                                    </div>


                            <br>

                        </div>
                    </form>
                </div>
            </div>
        </div>
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
