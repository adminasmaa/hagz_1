@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqars')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.aqars') @endlang</li>
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
                        <form action="{{ route('dashboard.aqars.store') }}" method="post" enctype="multipart/form-data"
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
                                <center>
                                    <div class="col-sm-8">
                                        <div class="card">
{{--                                            <div class="card-header">--}}
{{--                                                <h5 class="text-danger">@lang('site.alert')</h5>--}}
{{--                                                <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>--}}
{{--                                                <h6 class="text-info">0707078888</h6>--}}
{{--                                            </div>--}}
                                            <div class="card-body">

                                                <div class="col-sm-12">
                                                    <label class="form-label">@lang('site.users')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12"
                                                            name="user_id" required>
                                                        <option selected>@lang('site.select')</option>
                                                        @foreach($users as $user)

                                                            <option value="{{$user->id}}">
                                                                {{$user->firstname . $user->lastname ?? ''}}</option>

                                                        @endforeach

                                                    </select>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label">@lang('site.country')</label>
                                                        <select class="js-example-placeholder-multiple col-sm-12"
                                                                name="country_id" id="country_id">
                                                            <option selected value="0">@lang('site.select')</option>
                                                            @foreach($countries as $country)

                                                                <option
                                                                    value="{{$country->id}}">{{$country->name_ar ?? ''}}</option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label">@lang('site.city')</label>
                                                        <select class="js-example-placeholder-multiple col-sm-12"
                                                                name="city_id" id="city_id">
                                                            <option selected value="0">@lang('site.select')</option>
                                                            <!-- @foreach($cities as $city)

                                                                <option value="{{$city->id}}">{{$city->name_ar ?? ''}}</option>


                                                            @endforeach -->

                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-sm-12">
                                                    <h5 class="border-bottom">@lang('site.categories')</h5>
                                                </div>
                                                <div class="col">
                                                    <ul class="mt-4 p-0 categories-list">
                                                        @foreach($categories as $cat)
                                                            <li class="form-check radio radio-primary">
                                                                <input class="form-check-input"
                                                                       id="category_id{{$cat->id}}"
                                                                       type="radio" name="category_id"
                                                                       value="{{$cat->id}}"
                                                                       required>
                                                                <label class="form-check-label mb-0"
                                                                       for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <br>
{{--                                                <div class="col-sm-12" id="cityarea">--}}
{{--                                                    <h5 class="border-bottom">@lang('site.areas')</h5>--}}
{{--                                                </div>--}}
{{--                                                <div class="col">--}}
{{--                                                    <ul class="mt-4 areas-list" id="area_id">--}}
{{--                                                        <!-- @foreach($Area as $item)--}}
{{--                                                            <li class="form-check radio radio-primary" >--}}

{{--                                                            </li>--}}

{{--                                                        @endforeach -->--}}
{{--                                                    </ul>--}}
{{--                                                </div>--}}
                                                <br>
                                                <div class="row m-t-10">
                                                    <!--<div class="col-md-6">-->

                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.name_ar')<span
                                                                class="text-danger">*</span></label>
                                                        <input type="text" name="name_ar" class="form-control"
                                                               value="{{old('name_ar')}}" required>
                                                    </div>

                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.name_en')</label>
                                                        <input type="text" name="name_en" class="form-control"
                                                               value="{{old('name_en')}}">
                                                    </div>

                                                </div>
                                                <div class="row m-t-10">
                                                    <!--<div class="col-md-6">-->

                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.time_from')<span
                                                                class="text-danger">*</span></label>
                                                        <input type="time" name="time_from" class="form-control"
                                                               value="{{old('time_from')}}" required>
                                                    </div>

                                                    <div class="col-md-6 form-group col-12 p-2 ">
                                                        <label>@lang('site.time_to')</label>
                                                        <input type="time" name="time_to" class="form-control"
                                                               value="{{old('time_to')}}" required>
                                                    </div>

                                                </div>
                                                <br>
                                                <div class="row m-t-10">
                                                    <div class="m-checkbox-inline">
                                                        <label for="edo-ani">
                                                            <input class="radio_animated" type="radio" name="price"
                                                                   checked="" data-bs-original-title="" title=""
                                                                   value="1">@lang('site.fixed_price')
                                                        </label>
                                                        <label for="edo-ani1">
                                                            <input class="radio_animated" type="radio" name="price"
                                                                   data-bs-original-title="" title=""
                                                                   value="2">@lang('site.changed_price')
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="row m-t-10">
                                                    <!--<div class="col-md-6">-->

                                                    <div class="col-md-6 form-group col-12 p-2  desc" id="price1">
                                                        <label>@lang('site.fixed_price')<span
                                                                class="text-danger">*</span></label>
                                                        <input type="number" step=".1" name="fixed_price"
                                                               class="form-control"
                                                               value="{{old('fixed_price')}}">
                                                    </div>

                                                    <div class="col-md-12 form-group col-12   desc" id="price2"
                                                         style="display: none;">
                                                        <table class="price-list" id="tb_price">
                                                            <tr>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-md-4 form-group col-12">
                                                                            <label>@lang('site.personnumber')</label>
                                                                            <input type="number" name="person_num[]"
                                                                                   class="form-control"/>
                                                                        </div>
                                                                        <div class="col-md-4 form-group col-12">
                                                                            <label>@lang('site.fixed_price')</label>
                                                                            <input type="number" step=".1"
                                                                                   name="price[]"
                                                                                   class="form-control">
                                                                        </div>
                                                                        <div class="col-md-4 form-group col-12">
                                                                            <a
                                                                                class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                                    class="fa fa-plus"
                                                                                    aria-hidden="true"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>


                                                    </div>
                                                    <br>
{{--                                                    <div class="col-md-6 form-group">--}}
{{--                                                        <label class="form-label">@lang('site.ads_status')</label>--}}
{{--                                                        <select class="form-control btn-square" name="ads_status_id"--}}
{{--                                                                id="ads_status_id">--}}
{{--                                                            <option selected value="0">@lang('site.select')</option>--}}
{{--                                                            @foreach($adsStatus as $ads_status)--}}

{{--                                                                <option--}}
{{--                                                                    value="{{$ads_status->id}}">{{$ads_status->status_ar ?? ''}}</option>--}}

{{--                                                            @endforeach--}}

{{--                                                        </select>--}}
{{--                                                    </div>--}}

                                                    <div class="col-md-6 form-group">
                                                        <label>@lang('site.latitude')</label>
                                                        <input type="text" name="latitude" class="form-control"
                                                               value="{{old('latitude')}}" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label>@lang('site.longitude')</label>
                                                        <input type="text" name="longitude" class="form-control"
                                                               value="{{old('longitude')}}" required>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label">@lang('site.active')</label>
                                                        <select class="js-example-placeholder-multiple col-sm-12" name="active">
                                                            <option>@lang('site.select')</option>
                                                            <option value="1">@lang('site.active')</option>
                                                            <option value="0">@lang('site.not-active') </option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-12 p-2">
                                                            <label>@lang('site.display_photo')</label>

                                                            <input type="file" class="form-control" name="main_image"
                                                                   id="imgInp" required/>
                                                            <img id="frame" src="" width="200px" class="img-upload"/>

                                                        </div>
                                                        <div class="form-group col-12 p-2 mb-3">

                                                            <label>@lang('site.images')</label>

                                                            <input type="file" class="form-control" name="images[]"
                                                                   value="{{ old('images[]') }}" multiple
                                                                   id="upload-imgs"/>

                                                            <div class="img-thumbs img-thumbs-hidden" id="img-previews">

                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="form-group col-12 p-2">
                                                                    <label>@lang('site.video')</label>

                                                                    <input type='file' id='videoUpload'
                                                                           class="form-control"
                                                                           name="videos" value="{{ old('videos') }}"/>
                                                                    <video width="250" height="200" style="display:none"
                                                                           controls
                                                                           class="video-upload" autoplay>
                                                                        Your browser does not support the video tag.
                                                                    </video>
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <div id="result_data1">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                                    <label>@lang('site.descrption')<span
                                                                            class="text-danger">*</span></label>
                                                                    <textarea class="form-control" cols="5" rows="5"
                                                                              name="description" required>
                                                                    </textarea>
                                                                </div>
                                                                <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                                    <label>@lang('site.policy_place')</label>
                                                                    <textarea class="form-control" cols="5" rows="5"
                                                                              name="policy_place"
                                                                              id="editor1" >
                                                                    </textarea>
                                                                </div>
                                                            </div>
                                                    </div>
                                </center>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Container-fluid Ends-->

@endsection


@section('scripts')
    <script>
        $(document).ready(function () {
            $("#cityarea").hide();
            jQuery('a.add-price').click(function (event) {
                event.preventDefault();
                var newRow = jQuery('<tr><td><div class="row"><div class="col-md-5 form-group col-12 p-2">' +
                    ' <label>@lang('site.personnumber')</label><input type="number"  name="person_num[]" class="form-control"/></div><div class="col-md-5 form-group col-12 p-2">' +
                    '<label>@lang('site.fixed_price')</label><input type="number" name="price[]" class="form-control" >' +
                    '  </div>  <div class="col-md-2 form-group col-12 p-2 "> <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30" onclick="deletetr(this)" ><i class="fa fa-trash"></i></a>' +
                    '</div></div> </td>  </tr>');
                jQuery('.price-list').append(newRow);
            });

            $("input[name='price']").click(function () {
                var test = $(this).val();

                $("div.desc").hide();
                $("#price" + test).show();
            });
        });

        function deletetr(r) {
            r.closest('tr').remove();
        }

        $('#country_id').on('change', function (e) {
            var country_id = e.target.value;


            $.get("{{url('dashboard/countrycities')}}/" + country_id, function (data) {
                console.log(data);
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });
            })
        })


        $('#city_id').on('change', function (e) {
            var city_id = e.target.value;
            $("#cityarea").show();
            $.get("{{url('dashboard/cityareas')}}/" + city_id, function (data) {
                console.log(data);
                $('#area_id').empty();
                $.each(data, function (key, value) {
                    $('#area_id').append('<li class="form-check radio radio-primary" ><input class="form-check-input" id="area_' + value.id + '" type="radio" name="area_id" value="' + value.id + '" required><label class="form-check-label mb-0" for="area_' + value.id + '">' + value.name_ar + '</label></li>')

                });
            })
        })
        $('input[type=radio][name=category_id]').change(function () {
            var category_id = $('input[name="category_id"]:checked').val();

            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting') }}' + '/' + category_id,
                success: function (html) {
                    $("#result_data1").show();
                    var element = $('#result_data');
                    element.empty();
                    $('#result_data1').html(html);
                }
            })
        });
    </script>
    <script>
        var imgUploads = document.getElementById("upload-imgs"),
            imgPreviews = document.getElementById("img-previews"),
            imgUploadForms = document.getElementById("form-upload"),
            totalFiles,
            previewTitle,
            previewTitleText,
            img;

        imgUploads.addEventListener("change", previewImgss, true);

        function previewImgss(event) {
            totalFiles = imgUploads.files.length;

            if (!!totalFiles) {
                imgPreviews.classList.remove("img-thumbs-hidden");
            }

            for (var i = 0; i < totalFiles; i++) {
                wrapper = document.createElement("div");
                wrapper.classList.add("wrapper-thumb");
                removeBtn = document.createElement("span");
                nodeRemove = document.createTextNode("x");
                removeBtn.classList.add("remove-btn");
                removeBtn.appendChild(nodeRemove);
                img = document.createElement("img");
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add("img-preview-thumb");
                wrapper.appendChild(img);
                wrapper.appendChild(removeBtn);
                imgPreviews.appendChild(wrapper);

                $(".remove-btn").click(function () {
                    $(this).parent(".wrapper-thumb").remove();
                });
            }
        }

        document.getElementById("imgInp").onchange = function () {
            let imgURL = (frame.src = URL.createObjectURL(event.target.files[0]));
            document.querySelector("img").src = imgURL;
        };

        /*video */
        document.getElementById("videoUpload").onchange = function (event) {
            let file = event.target.files[0];
            let blobURL = URL.createObjectURL(file);
            document.querySelector("video").style.display = "block";
            document.querySelector("video").src = blobURL;
        };
    </script>

@endsection
