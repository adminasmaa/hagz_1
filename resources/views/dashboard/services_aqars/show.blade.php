@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.services_aqars')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.services_aqars') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">


                        <div class="bg-secondary-lighten card-header d-flex justify-content-between">
                            <h5>@lang('site.edit') </h5>
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

                                <div class="col-sm-12">

                                <label>@lang('site.image')</label>
                                <img src="{{asset('images/services_aqars/'.$AqarService->icon)}}"
                                     data-bs-toggle="modal"
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                     onerror="this.src='{{asset('images/services_aqars/default.jpg')}}'"
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
                                                         src="{{asset('images/services_aqars/'.$AqarService->icon)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{asset('images/services_aqars/default.jpg')}}'"
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
                                    <label>@lang('site.name_ar')<span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" class="form-control"
                                           value="{{ $AqarService->name_ar }}" readonly disabled
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name_en')</label>
                                    <input type="text" name="name_en" class="form-control"
                                           value="{{ $AqarService->name_en }}" readonly disabled
                                    >
                                </div>


                            </div>

                            <!-- <div class="row m-t-10">
                                <div class="m-checkbox-inline">

                                    <label for="edo-ani1">
                                        <input class="radio_animated" type="radio" name="price"
                                               data-bs-original-title="" title="" value="2">@lang('site.subcategories')
                                    </label>
                                </div>
                            </div> -->
                            <div class="row">
                                @foreach($SubAqarService as $service)
                                    <div class="col-md-12 form-group col-12   desc">
                                        
                                    <label>@lang('site.subcategories')</label>

                                        <table class="price-list" id="tb_price">
                                            <tr>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6 form-group col-12 p-2">
                                                            <label>@lang('site.name_ar')</label>
                                                            <input type="text" name="sub_name_ar[]"
                                                                   class="form-control" value="{{$service->name_ar}}" readonly disabled/>
                                                        </div>
                                                        <div class="col-md-6 form-group col-12 p-2">
                                                            <label>@lang('site.name_en')</label>
                                                            <input type="text" name="sub_name_en[]"
                                                                   class="form-control" value="{{$service->name_en}}" readonly disabled>
                                                        </div>

                                                    </div>
                                                </td>
                                            </tr>
                                        </table>

                                    </div>

                                @endforeach

                            </div>





                            <br>


                        </div>
                </div>
            </div>
        </div>
    </div>
    </div>


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


@endsection
