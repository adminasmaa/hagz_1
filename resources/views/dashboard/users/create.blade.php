@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.add')</h3>
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
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.users.store') }}" method="post" enctype="multipart/form-data"
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

                                <div class="row form-group">


                                </div>

                                <div class="row">
                                    <!--<div class="col-md-6">-->

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control"
                                               value="{{old('username')}}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.first_name')<span class="text-danger">*</span></label>
                                        <input type="text" name="firstname" class="form-control"
                                               value="{{old('firstname')}}"
                                        >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.last_name')<span class="text-danger">*</span></label>
                                        <input type="text" name="lastname" class="form-control"
                                               value="{{old('lastname')}}"
                                        >
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2 ">
                                        <label>@lang('site.code')<span class="text-danger">*</span></label>
                                        <input type="text" name="code" class="form-control" value="{{old('code')}}"
                                        >
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label>@lang('site.phone') <span class="text-danger">*</span></label>
                                        <div id="result">
                                            <input type="text" name="phone" class="form-control" type="tel"
                                                   id="mobilephone"
                                                   maxlength="10" size="10" required>

                                        </div>
                                    </div>


                                    <!--<div class="col-md-6">-->
                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label>@lang('site.address') <span class="text-danger">*</span></label>
                                        <input type="text" name="address" class="form-control"
                                               value="{{ old('address') }}"
                                               required>
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2">

                                        <label>@lang('site.email')<span class="text-danger">*</span></label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                               required>
                                    </div>

                                    <div class="col-md-6 form-group col-12 p-2">

                                        <label>@lang('site.password')<span class="text-danger">*</span></label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="col-md-6 form-group col-12 p-2">
                                        <label>@lang('site.password_confirmation')</label>
                                        <input type="password" name="password_confirmation" class="form-control">
                                    </div>


                                    <div class="col-md-6 form-group col-12 p-2">


                                        <label>@lang('site.image')</label>
                                        <input type="file" name="image" class="form-control" value="{{ old('image') }}">


                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="form-label">@lang('site.roles')</label>


                                        <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple"
                                                name="roles[]">
                                            <option disabled selected>@lang('site.select')</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">
                                                    {{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="country_id" id="country_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                            <option value="{{$country->id}}">{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="city_id" id="city_id">
                                                        <option selected value="0">@lang('site.select')</option>
                                                        <!-- @foreach($cities as $city)

                                                            <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>

                                                        @endforeach -->

                                                    </select>
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
@section('scripts')

    <script>
           
        $('#country_id').on('change',function(e){
            var country_id = e.target.value;

            $.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
                console.log(data);
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function(key, value){
                    $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
            })
        })
    </script>
@endsection
