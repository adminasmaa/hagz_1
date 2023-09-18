@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.notifications')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.notifications') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.notifications.update', $notification->id) }}" method="post"
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
                                        <label>@lang('site.title')<span class="text-danger">*</span></label>
                                        <input type="text" name="title" class="form-control"
                                               value="{{$notification->title}}"
                                            >
                                    </div>
                                    
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.description')</label><span class="text-danger">*</span>
                                        <input type="text" name="description" class="form-control"
                                               value="{{$notification->description}}"
                                            >
                                    </div>

                                    
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.booking_id')<span class="text-danger">*</span></label>
                                        <input type="number" name="booking_id" class="form-control"
                                               value="{{$notification->booking_id}}"
                                             >
                                    </div>

                                    <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="type">
                                            <option selected>@lang('site.select')</option>
                                        <option value="place"
                                                @if($notification->type=='place') selected @endif>@lang('site.place')
                                        </option>
                                        <option value="aqar"
                                                @if($notification->type=='aqar') selected @endif>@lang('site.aqar')
                                        </option>                                           
                                        <option value="car"
                                                @if($notification->type=='car') selected @endif>@lang('site.car')
                                        </option> 
                                    </select>
                                </div>

                                </div>
                                <div class="row">

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.users')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach($users as $user)

                                            <option value="{{$user->id}}"@if($notification->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                             
                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.status')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="status">
                                            <option selected>@lang('site.select')</option>
                                        <option value="1"
                                                @if($notification->status=='1') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($notification->status=='0') selected @endif>@lang('site.not-active')
                                        </option>   
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
