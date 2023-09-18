@extends('layouts.main_admin')


@section('content')

<!-- <div class="content-page"> -->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>@lang('site.users')</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">@lang('site.dashboard')</li>

                        <li class="breadcrumb-item active">@lang('site.users') @endlang</li>
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


                    <!-- <h4 class="card-title">@lang('site.users')</h4> -->
                    @include('partials._errors')

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
                        <div class="row form-group">

                            <div class="col-sm-9">
                                <div class="d-flex align-items-center">
                                    <div class="col-md-6">
                                        <label class="d-block">@lang('site.image')</label>



                                        <img src="{{asset('images/employee/'.$user->image)}}" data-bs-toggle="modal"
                                             data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                             onerror="this.src='{{asset('images/employee/default.jpg')}}'"
                                        >
                                    </div>


                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalss" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
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
                                                    <img name="soso" src="{{asset('images/employee/'.$user->image)}}" alt=""
                                                        width="400px" height="aut0"    onerror="this.src='{{asset('images/employee/default.jpg')}}'">

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


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.name')</label>
                                <input type="text" name="name" class="form-control" value="{{ $user->username }}" disabled>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.first_name')<span class="text-danger">*</span></label>
                                <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}"
                                       disabled  >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.last_name')<span class="text-danger">*</span></label>
                                <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}"
                                       disabled  >
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.phone')</label>
                                <div id="result">
                                    <input type="text" name="phone" class="form-control" type="tel" id="phone"
                                        value="{{ $user->phone }}" disabled>

                                </div>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.password')</label>
                                <input type="password" name="password" class="form-control" disabled>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.password_confirmation')</label>
                                <input type="password" name="password_confirmation" class="form-control" disabled>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.address')</label>
                                <input type="text" name="address" class="form-control" value="{{ $user->address }}"
                                    disabled>
                            </div>


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.email')</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                    disabled>
                            </div>





                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.code')</label>
                                <input type="text" name="code" class="form-control"    value="{{ $user->code }}"   disabled>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.country')</label>
                                <select class="form-control btn-square" name="country_id" disabled>
                                    <option selected></option>
                                    @foreach($countries as $country)

                                        <option value="{{$country->id}}"   @if($country->id==$user->country_id) selected @endif>{{$country->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.city')</label>
                                <select class="form-control btn-square" name="city_id" disabled>
                                    <option selected></option>
                                    @foreach($cities as $city)

                                        <option value="{{$city->id}}"   @if($city->id==$user->city_id) selected @endif>{{$city->name_ar ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <h4 class="card-title mt-4">@lang('site.roles')</h4>

                        <div class="row">

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.roles')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="roles[]" disabled>

                                @foreach ($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                            {{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>





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
