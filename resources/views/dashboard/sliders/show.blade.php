@extends('layouts.main_admin')


@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.sliders')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.sliders') @endlang</li>
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
                            @include('partials._errors')


                            <div class="row form-group">

                                <div class="col-md-6 form-group col-12 p-2  ">

                                    <label>@lang('site.image')</label>
                                    <img  name="image"src="{{asset('images/sliders/'.$slider->image)}}"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                        onerror="this.src='{{asset('images/categories/default.jpg')}}'"
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
                                                    <img name="image"
                                                         src="{{asset('images/sliders/'.$slider->image)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{FRONTASSETS}}/assets/images/slider-image.svg'"
                                                    >

                                                </th>
                                            </tr>


                                        </table>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                    </div>
                                    <br>
                                    </div>
                                </div>
                                    </div>

                                </div>
                            </div>
                            <!--  End Of Modal -->
                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.ar.name')</label>
                                    <input type="text" name="name_ar" class="form-control" value="{{ $slider->name_ar }}"
                                    disabled readonly="">
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.en.name')</label>
                                    <input type="text" name="name_en" class="form-control" value="{{ $slider->name_en }}"
                                    disabled readonly="">
                                </div>

                            </div>

                            <div class="row">
                                <!--<div class="col-md-6">-->

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.ar.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" cols="2" rows="2" name="description" disabled readonly="">
                     {{ $slider->description_ar  ?? ''}}
                                        </textarea>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.en.description')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" cols="2" rows="2" name="description" disabled readonly="">
                     {{ $slider->description_en  ?? ''}}
                                        </textarea>
                                </div>




                            </div>

                            <br>



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
