@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.bookings')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">

                            <li class="breadcrumb-item">@lang('site.dashboard')</li>
                            <li class="breadcrumb-item active">@lang('site.bookings') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->


        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-12 col-lg-11 xl-50 morning-sec box-col-12">
                    <form action="{{ route('dashboard.booking.update', $data->id) }}" method="post"
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


                            <div class="row">

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.name')<span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control"
                                           value="{{$data->name ?? ''}}">
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.phone')<span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control"
                                           value="{{$data->phone ?? ''}}">
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.price')<span class="text-danger">*</span></label>
                                    <input type="number" name="price" class="form-control"
                                           value="{{$data->price ?? ''}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.total')<span class="text-danger">*</span></label>
                                    <input type="number" name="total" class="form-control"
                                           value="{{$data->total ?? ''}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.day_count')<span class="text-danger">*</span></label>
                                    <input type="number" name="day_count" class="form-control"
                                           value="{{$data->day_count ?? ''}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.commission')<span class="text-danger">*</span></label>
                                    {{--                                        <input type="number" name="comision" class="form-control"--}}
                                    {{--                                        >--}}

                                    <select class="js-example-placeholder-multiple col-sm-12" name="comision">
                                        <option>   @lang('site.Choisissez votre commission')</option>
                                        @for ($x = 0; $x <= 20; $x++)
                                            <option value="{{$x}}" @if($data->comision==$x)  selected @endif>{{$x}}%
                                            </option>
                                        @endfor
                                    </select>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.total_price')<span class="text-danger">*</span></label>
                                    <input type="text" name="total_price" class="form-control"
                                           value="{{$data->total_price ?? ''}}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.delivery_date')<span class="text-danger">*</span></label>
                                    <input type="date" name="delivery_date" class="form-control"
                                           value="{{$data->delivery_date ?? ''}}"
                                    >
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label>@lang('site.reciept_date')<span class="text-danger">*</span></label>
                                    <input type="date" name="reciept_date" class="form-control"
                                           value="{{$data->reciept_date ?? ''}}"
                                    >
                                </div>

                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.users')</label><span
                                            class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="user_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach(\App\Models\User::get() as $user)

                                            <option value="{{$user->id}}"
                                                    @if($data->user_id==$user->id) selected @endif>{{$user->firstname . $user->lastname ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 form-group col-12 p-2">
                                    <label class="form-label">@lang('site.aquars')</label><span
                                            class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="aqar_id">
                                        <option selected>@lang('site.select')</option>
                                        @foreach(\App\Models\Aqar::get() as $aqar)

                                            <option value="{{$aqar->id}}"
                                                    @if($data->aqar_id==$aqar->id) selected @endif>{{$aqar->name ?? ''}}</option>

                                        @endforeach

                                    </select>
                                </div>

                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label class="form-label">@lang('site.status')</label><span
                                            class="text-danger">*</span>
                                    <select class="js-example-placeholder-multiple col-sm-12" name="status">
                                        <option selected>@lang('site.select')</option>
                                        <option value="waiting"
                                                @if($data->status=='waiting') selected @endif>@lang('site.waiting')</option>
                                        <option value="accepted"
                                                @if($data->status=='accepted') selected @endif>@lang('site.accepted') </option>
                                        <option value="canceled"
                                                @if($data->status=='canceled') selected @endif>@lang('site.canceled') </option>
                                    </select>
                                </div>


                                <div class="col-md-6 form-group col-12 p-2 ">
                                    <label>@lang('site.notes')<span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="editor1" cols="15" rows="5" name="note">
{{$data->note ??''}}
                                        </textarea>
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
