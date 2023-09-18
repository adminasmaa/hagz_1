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
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.users.update', $user->id) }}" method="post"
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
                            <!--<h4 class="card-title">@lang('site.users')</h4>-->
                            @include('partials._errors')


                            <div class="row form-group">

                                <div class="col-sm-12">


                                    <label>@lang('site.image')</label>
                                    <img src="{{asset('images/employee/'.$user->image)}}" data-bs-toggle="modal"
                                         data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                         onerror="this.src='{{asset('images/employee/default.jpg')}}'"
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
                                                             src="{{asset('images/employee/'.$user->image)}}" alt=""
                                                             width="400px" height="aut0"


                                                             onerror="this.src='{{asset('images/employee/default.jpg')}}'"
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
                                        <label>@lang('site.name')<span class="text-danger">*</span></label>
                                        <input type="text" name="username" class="form-control" value="{{ $user->username }}"
                                               required>
                                    </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.first_name')<span class="text-danger">*</span></label>
                                    <input type="text" name="firstname" class="form-control" value="{{ $user->firstname }}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.last_name')<span class="text-danger">*</span></label>
                                    <input type="text" name="lastname" class="form-control" value="{{ $user->lastname }}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.code')<span class="text-danger">*</span></label>
                                    <input type="text" name="code" class="form-control" value="{{ $user->code }}"
                                    >
                                </div>


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.phone')<span class="text-danger">*</span></label>
                                    <div id="result">
                                        <input type="text" name="phone" class="form-control" value="{{ $user->phone }}"
                                               id="mobilephone" maxlength="10" size="10" required>

                                    </div>
                                </div>


                                <!--</div>-->
                                <!--<div class="col-md-6">-->
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.address')<span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control" value="{{ $user->address }}"
                                           required>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.email')<span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control" value="{{ $user->email }}"
                                           required>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.password')</label>
                                    <input type="password" name="password" class="form-control">
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
                                    <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple" name="roles[]">
                                        <option disabled selected>@lang('site.select')</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}"
                                                {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                                {{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.country')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="country_id" id="country_id">
                                                        <option selected disabled>@lang('site.select')</option>
                                                        @foreach($countries as $country)

                                                        <option value="{{$country->id}}" @if($country->
                                                            id==$user->country_id) selected
                                                            @endif>{{$country->name_ar ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="form-label">@lang('site.city')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12" name="city_id" id="city_id">
                                                        <option selected disabled>@lang('site.select')</option>
                                                      
                                                    </select>
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

@section('scripts')

    <script>
        $(document).ready(function () {
            var country_id =  $('#country_id').val();
                $.get("{{url('dashboard/countrycities')}}/"+country_id, function(data){
                    $('#city_id').empty();
                    $('#city_id').append('<option>@lang('site.select')</option>');
                    $.each(data, function(key, value){
                        $('#city_id').append('<option value="'+value.id+'">'+value.name_ar+'</option>')

                });
                $('#city_id').val({{$user->city_id}});

        });
    });
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
