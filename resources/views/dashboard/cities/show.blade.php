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
                    <div class="card">


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
                                <!-- <label for="name"
                                    class="col-sm-3 col-form-label input-label">@lang('site.image')</label> -->
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <div class="col-md-6">
                                            <label class="d-block">@lang('site.image')</label>


                                            <img src="{{asset('images/cities/'.$city->image)}}"
                                                 data-bs-toggle="modal"
                                                 data-bs-target="#exampleModalss" width="100px" height="100px"
                                                 class="d-block"
                                                 onerror="this.src='{{asset('images/default.png')}}'"
                                            >
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalss" tabindex="-1"
                                 aria-labelledby="exampleModalLabel"
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
                                                        <img name="soso"
                                                             src="{{asset('images/cities/'.$city->image)}}"
                                                             alt=""
                                                             width="400px" height="aut0"
                                                             onerror="this.src='{{asset('images/default.png')}}'"
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


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.ar.name')</label>
                                    <input type="text" name="name_ar" class="form-control" value="{{ $city->name_ar }}"
                                           disabled>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.en.name')</label>
                                    <input type="text" name="name_an" class="form-control" value="{{ $city->name_en }}"
                                           disabled>
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.order')<span class="text-danger">*</span></label>
                                    <input type="text" name="order" class="form-control"
                                           value="{{ $city->order }}"
                                           disabled>
                                </div>


                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.country')</label>
                                    <select class="form-control btn-square" disabled>
                                        @foreach($countries as $country)

                                            <option value="{{$country->id}}" @if($country->id==$city->country_id) selected @endif>{{$country->name_ar ?? ''}}</option>

                                        @endforeach

                                    </select>
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
