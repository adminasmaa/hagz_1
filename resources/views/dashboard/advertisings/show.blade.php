@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.advertising')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.advertising') @endlang</li>
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
                        @include('partials._errors')


                        <div class="row form-group">

                            <div class="col-sm-12">


                                <label>@lang('site.image')</label>
                                <img src="{{asset('images/advertisings/'.$advertising->ads_image)}}"
                                     data-bs-toggle="modal"
                                     data-bs-target="#exampleModalss" width="100px" height="100px" class="d-block"
                                     onerror="this.src='{{asset('images/advertisings/default.jpg')}}'"
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
                                                         src="{{asset('images/advertisings/'.$advertising->ads_image)}}"
                                                         alt=""
                                                         width="400px" height="aut0"


                                                         onerror="this.src='{{asset('images/advertisings/default.jpg')}}'"
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
                                <input type="text" name="title" class="form-control"
                                       value="{{ $advertising->title ?? ''}}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.start_date')<span class="text-danger">*</span></label>
                                <input type="date" name="start_date" class="form-control"
                                       value="{{ $advertising->start_date  ?? ''}}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.end_date')<span class="text-danger">*</span></label>
                                <input type="date" name="end_date" class="form-control"
                                       value="{{ $advertising->end_date ?? '' }}" readonly
                                >
                            </div>


                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.value')<span class="text-danger">*</span></label>
                                <input type="number" name="value" class="form-control"
                                       value="{{ $advertising->value ?? '' }}" readonly
                                >
                            </div>

                            <div class="col-md-6 form-group col-12 p-2 ">
                                <label>@lang('site.link')<span class="text-danger">*</span></label>
                                <input type="text" name="ads_link" class="form-control" readonly
                                       value="{{ $advertising->ads_link ?? ''}}"
                                       required>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.type')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" name="type" readonly=""
                                        disabled>
                                    <option selected>@lang('site.select')</option>

                                    <option value="snap"

                                            @if($advertising->type=='snap') selected @endif
                                    >@lang('site.Snapchat download')</option>
                                    <option value="twitter"
                                            @if($advertising->type=='twitter') selected @endif>@lang('site.Twitter campaign')</option>
                                    <option value="insta"
                                            @if($advertising->type=='insta') selected @endif>@lang('site.Instagram campaign')</option>
                                    <option value="google"
                                            @if($advertising->type=='google') selected @endif>@lang('site.Google download')</option>
                                    <option value="App Store campaign"
                                            @if($advertising->type=='App Store campaign') selected @endif>@lang('site.App Store campaign')</option>
                                    <option value="WhatsApp download"
                                            @if($advertising->type=='WhatsApp download') selected @endif>@lang('site.WhatsApp download')</option>
                                    <option
                                        value="finstgram"
                                        @if($advertising->type=='finstgram') selected @endif >@lang('site.Instagram celebrities campaign')</option>
                                    <option value="SMS message campaign"
                                            @if($advertising->type=='SMS message campaign') selected @endif>@lang('site.SMS message campaign')</option>


                                </select>
                            </div>

                            <div class="col-md-6 form-group col-12 p-2">
                                <label class="form-label">@lang('site.position')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" name="country_id" readonly=""
                                        disabled>
                                    <option selected>@lang('site.select')</option>

                                    <option value="upper_middle"
                                            @if($advertising->position=='upper_middle') selected @endif>@lang('site.upper_middle')
                                    </option>
                                    <option value="lower_middle"
                                            @if($advertising->position=='lower_middle') selected @endif>@lang('site.lower_middle')
                                    </option>
                                    <option value="banner" @if($advertising->position=='banner') selected @endif>
                                        @lang('site.banner')
                                    </option>
                                    <option value="slider" @if($advertising->position=='slider') selected @endif>
                                        @lang('site.slider')
                                    </option>


                                </select>
                            </div>

                            <div class="col-md-6 form-group">
                                <label class="form-label">@lang('site.users')</label>
                                <select class="js-example-placeholder-multiple col-sm-12" name="user_id" readonly=""
                                        disabled>
                                    <option selected>@lang('site.select')</option>
                                    @foreach($users as $user)

                                        <option value="{{$user->id}}"
                                                @if($advertising->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row">


                            <div class="col-md-6 form-group col-12 p-2">
                                <label>@lang('site.notes')<span class="text-danger">*</span></label>
                                <textarea id="editor1" cols="15" rows="5" name="notes" readonly>
{{$advertising->notes ?? ''}}
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
