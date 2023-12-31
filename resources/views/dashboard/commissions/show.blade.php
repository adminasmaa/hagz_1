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
                                    <label>@lang('site.commission')</label>
                                    <input type="float" name="value" class="form-control" value="{{ $commission->value  ?? 0}} % "
                                           disabled>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.type')</label>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="type" readonly="" disabled>
                                        <option>@lang('site.select')</option>
                                        <option value="paid" @if($commission->type=='paid') selected @endif>@lang('site.paid')</option>
                                        <option value="nopaid" @if($commission->type=='nopaid') selected @endif>@lang('site.nopaid') </option>
                                    </select>
                                </div>

                            </div>

                            <div class="row">
                                <!--<div class="col-md-6">-->
                                <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" name="user_id" readonly=""disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($commission->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.aquars')</label><span class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="aqar_id" readonly=""  disabled>
                                        <option selected>@lang('site.select')</option>
                                        @foreach(\App\Models\Aqar::get() as $aqar)

                                            <option value="{{$aqar->id}}"  @if($commission->aqar_id==$aqar->id) selected @endif>{{$aqar->name ?? ''}}</option>

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
