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

        <div class="container-fluid">

            <div class="row">
                <!-- Individual column searching (text inputs) Starts-->
                <div class="col-sm-12">
                    <div class="card">


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


                        <div class="card-body">

                            <!--  End Of Modal -->
                            <div class="row">


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.title')</label>
                                    <input type="text" name="title" class="form-control" value="{{ $notification->title }}"
                                           disabled>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.booking_id')</label>
                                    <input type="integer" name="booking_id" class="form-control" value="{{ $notification->booking_id }}"
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.description')</label>
                                    <input type="text" name="description" class="form-control" value="{{ $notification->description }}"
                                           disabled>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.status')</label>
                                    <select class="form-control btn-square" name="status" readonly="" disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="1"
                                                @if($notification->status=='1') selected @endif>@lang('site.active')
                                        </option>
                                        <option value="0"
                                                @if($notification->status=='0') selected @endif>@lang('site.inactive')
                                        </option>
                                        
                                    </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label class="form-label">@lang('site.type')</label>
                                    <select class="form-control btn-square" name="type" readonly=""disabled>
                                        <option selected>@lang('site.select')</option>

                                        <option value="aqar"
                                                @if($notification->type=='aqar') selected @endif>@lang('site.aqar')
                                        </option>
                                        <option value="place"
                                                @if($notification->type=='place') selected @endif>@lang('site.place')
                                        </option>
                                        <option value="car"
                                                @if($notification->type=='car') selected @endif>@lang('site.car')
                                        </option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <!--<div class="col-md-6">-->
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="form-control btn-square" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($notification->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                                
                            </div>


                            <br>


                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Individual column searching (text inputs) Ends-->
    </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->
    </div>
    </div>

@endsection
