@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.questions')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.questions') @endlang</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="card mt-30">
                        <form action="{{ route('dashboard.questions.store') }}" method="post"
                              enctype="multipart/form-data"
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
                            <div class="card-body d-flex justify-content-center">
                                <div>
                                @include('partials._errors')
                                <div class="row">
                                    <div class="form-group col-12 p-2 ">
                                        <label>@lang('site.question')<span class="text-danger">*</span></label>
                                        <input type="text" name="question" class="form-control"
                                               value="{{old('question')}}"
                                               required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 p-2 ">
                                        <label>@lang('site.answer')<span  class="text-danger">*</span></label>
                                        <textarea id="editor1"  cols="15" rows="5" name="answer">

                                        </textarea>
                                    </div>
                                </div>
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
    <!-- Container-fluid Ends-->


@endsection






