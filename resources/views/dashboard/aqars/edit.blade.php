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
                        <form action="{{ route('dashboard.aqars.update', $aqar->id) }}" method="post"
                              enctype="multipart/form-data" id="" class="form-main">

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

                            <div class="card">
                                <center>
                                    <div class="card-body">
                                        @include('partials._errors')
                                        <div class="col-md-6 form-group col-12 p-2  ">


                                            <label>@lang('site.display_photo')</label>
                                            <img src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                 data-bs-toggle="modal"
                                                 data-bs-target="#exampleModalss" width="100px" height="100px"
                                                 class="d-block"
                                                 onerror="this.src='{{asset('images/aqars/default.jpg')}}'">
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalss" tabindex="-1"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            @lang('site.display_photo')</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="border-5">
                                                            <tr>
                                                                <th>
                                                                    <img name="display_photo"
                                                                         src="{{asset('images/aqars/'.$aqar->main_image)}}"
                                                                         alt="" width="400px" height="aut0"
                                                                         onerror="this.src='{{asset('images/aqars/default.jpg')}}'">

                                                                </th>
                                                            </tr>


                                                        </table>
                                                    </div>
                                                    <br>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">@lang('site.Cancel')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End Of Modal -->

                                    <div class="col-sm-8">
                                        <div class="card">
                                            {{--                                        <div class="card-header">--}}
                                            {{--                                            <h5 class="text-danger">@lang('site.alert')</h5>--}}
                                            {{--                                            <h6 class="text-warning">@lang('site.If you have a problem adding your ad, please call us')</h6>--}}
                                            {{--                                            <h6 class="text-info">0707078888</h6>--}}
                                            {{--                                        </div>--}}
                                            <div class="card-body">

                                                <div class="col-sm-12">
                                                    <label class="form-label">@lang('site.users')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12"
                                                            name="user_id">
                                                        <option selected>@lang('site.select')</option>
                                                        @foreach($users as $user)

                                                            <option value="{{$user->id}}"
                                                                {{$user->id==$aqar->user_id? 'selected':'' }}>
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
                                                            <option selected>@lang('site.select')</option>
                                                            @foreach($countries as $country)

                                                                <option value="{{$country->id}}" @if($country->
                                                            id==$aqar->country_id) selected
                                                                    @endif>{{$country->name_ar ?? ''}}</option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 form-group">
                                                        <label class="form-label">@lang('site.city')</label>
                                                        <select class="js-example-placeholder-multiple col-sm-12"
                                                                name="city_id" id="city_id">
                                                            <option selected>@lang('site.select')</option>
                                                            <!-- @foreach($cities as $city)

                                                                <option value="{{$city->id}}" @if($city->id==$aqar->city_id)
                                                                    selected
                                                                @endif>{{$city->name_ar ?? ''}}</option>


                                                            @endforeach -->

                                                        </select>
                                                    </div>


                                                    <div class="col-md-6 form-group">
                                                        <label for="individuals" class="lbl-search"
                                                        > @lang('site.Individuals')
                                                        </label>
                                                        <div class="box-search" id="individuals">
                                                            <select class="js-example-placeholder-multiple col-sm-12"
                                                                    name="individual">
                                                                <option disabled selected>@lang('site.select')</option>
                                                                <option value="families"
                                                                        @if($aqar->individual=='families')  selected @endif>@lang('site.families')</option>
                                                                <option value="youths"
                                                                        @if($aqar->individual=='youths')  selected @endif>@lang('site.youths')</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <br>
                                            <div class="col-sm-12">
                                                <h5 class="  border-bottom">@lang('site.categories')</h5>
                                            </div>
                                            <div class="col">
                                                <ul class="mt-4 p-0 categories-list">
                                                    @foreach($categories as $cat)
                                                        <li class="form-check radio radio-primary">
                                                            <input class="form-check-input" id="category_id{{$cat->id}}"
                                                                   type="radio" name="category_id" value="{{$cat->id}}"
                                                                {{$cat->id==$aqar->category_id? 'checked':'' }}>
                                                            <label class="form-check-label mb-0"
                                                                   for="category_id{{$cat->id}}">{{$cat->name_ar ?? ''}}</label>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            <br>
                                            <div class="col-sm-12" id="cityarea">
                                                <h5 class="  border-bottom">@lang('site.areas')</h5>
                                            </div>
                                            {{--                                            <div class="col">--}}
                                            {{--                                                <ul class="mt-4 areas-list"  id="area_id">--}}
                                            {{--                                                    <!-- @foreach($Area as $item)--}}
                                            {{--                                                    <li class="form-check radio radio-primary" >--}}
                                            {{--                                                        <input class="form-check-input" id="area_{{$item->id}}"--}}
                                            {{--                                                            type="radio" name="area_id" value="{{$item->id}}"--}}
                                            {{--                                                            {{$item->id==$aqar->area_id? 'checked':'' }}>--}}
                                            {{--                                                        <label class="form-check-label mb-0"--}}
                                            {{--                                                            for="area_{{$item->id}}">{{$item->name_ar ?? ''}}</label>--}}
                                            {{--                                                    </li>--}}
                                            {{--                                                    @endforeach -->--}}
                                            {{--                                                </ul>--}}
                                            {{--                                            </div>--}}
                                            <br>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_ar')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="name_ar" class="form-control"
                                                           value="{{$aqar->name_ar}}" required>
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.name_en')</label>
                                                    <input type="text" name="name_en" class="form-control"
                                                           value="{{$aqar->name_en}}">
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.total_area')</label>
                                                    <input type="text" name="total_area" class="form-control"
                                                           value="{{$aqar->total_area}}">
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.Insurance_amount')</label>
                                                    <input type="text" name="Insurance_amount" class="form-control"
                                                           value="{{$aqar->Insurance_amount}}">
                                                </div>
                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.amount_deposit')</label>
                                                    <input type="text" name="amount_deposit" class="form-control"
                                                           value="{{$aqar->amount_deposit}}">
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <!--<div class="col-md-6">-->

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_from')<span
                                                            class="text-danger">*</span></label>
                                                    <input type="time" name="time_from" class="form-control"
                                                           value="{{$aqar->time_from}}">
                                                </div>

                                                <div class="col-md-6 form-group col-12 p-2 ">
                                                    <label>@lang('site.time_to')</label>
                                                    <input type="time" name="time_to" class="form-control"
                                                           value="{{$aqar->time_to}}">
                                                </div>

                                            </div>
                                            <div class="row m-t-10">
                                                <div class="m-checkbox-inline">
                                                    <label for="edo-ani">
                                                        <input class="radio_animated" type="radio" name="price"
                                                               {{$aqar->fixed_price ? 'checked':'' }} data-bs-original-title=""
                                                               title="" value="1">@lang('site.fixed_price')
                                                    </label>
                                                    <label for="edo-ani1">
                                                        <input class="radio_animated" type="radio" name="price"
                                                               {{is_null($aqar->fixed_price) ? 'checked':'' }} data-bs-original-title=""
                                                               title="" value="2">@lang('site.changed_price')
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
                                                           value="{{$aqar->fixed_price}}">
                                                </div>

                                                <div class="col-md-12 form-group col-12   desc" id="price2"
                                                     style="display: none;">
                                                    <table class="price-list" id="tb_price">

                                                        @if(!empty($aqar->changed_price))
                                                            @for ($x = 0; $x <= count($aqar->changed_price->price)-1; $x++)
                                                                <tr>
                                                                    <td>
                                                                        <div class="row">
                                                                            <div class="col-md-4 form-group col-12">
                                                                                <label>@lang('site.personnumber')</label>
                                                                                <input type="number" name="person_num[]"
                                                                                       class="form-control"
                                                                                       value="{{$aqar->changed_price->person_num[$x]}}"/>
                                                                            </div>
                                                                            <div class="col-md-4 form-group col-12">
                                                                                <label>@lang('site.fixed_price')</label>
                                                                                <input type="number" step=".1"
                                                                                       name="price[]"
                                                                                       class="form-control"
                                                                                       value="{{$aqar->changed_price->price[$x]}}"/>
                                                                            </div>
                                                                            @if($x==0)
                                                                                <div class="col-md-4 form-group col-12">
                                                                                    <a
                                                                                        class="btn btn-air-primary btn-pill btn-success add-price w-100 m-t-30"><i
                                                                                            class="fa fa-plus"
                                                                                            aria-hidden="true"></i></a>
                                                                                </div>
                                                                            @endif
                                                                            @if($x!=0)
                                                                                <div class="col-md-2 form-group col-12">
                                                                                    <a class="btn btn-air-primary btn-pill btn-danger add-price w-100 m-t-30"
                                                                                       onclick="deletetr(this)"><i
                                                                                            class="fa fa-trash"></i></a>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            @endfor

                                                        @endif
                                                    </table>

                                                </div>
                                                <br>
                                                {{--                                                <div class="col-md-6 form-group">--}}
                                                {{--                                                    <label class="form-label">@lang('site.ads_status')</label>--}}
                                                {{--                                                    <select class="form-control btn-square" name="ads_status_id">--}}
                                                {{--                                                        <option selected value="0">@lang('site.select')</option>--}}
                                                {{--                                                        @foreach($adsStatus as $ads_status)--}}

                                                {{--                                                            <option value="{{$ads_status->id}}"--}}
                                                {{--                                                                    @if($aqar->ads_status_id==$ads_status->id) selected @endif>{{$ads_status->status_ar?? ''}}</option>--}}

                                                {{--                                                        @endforeach--}}

                                                {{--                                                    </select>--}}
                                                {{--                                                </div>--}}

                                                <div class="col-md-6 form-group">
                                                    <label>@lang('site.latitude')</label>
                                                    <input type="text" name="latitude" class="form-control"
                                                           value="{{$aqar->latitude ?? ''}}" required>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label>@lang('site.longitude')</label>
                                                    <input type="text" name="longitude" class="form-control"
                                                           value="{{$aqar->longitude ?? ''}}" required>
                                                </div>
                                                <div class="col-md-6 form-group"><span class="text-danger">*</span>
                                                    <label class="form-label">@lang('site.active')</label>
                                                    <select class="js-example-placeholder-multiple col-sm-12"
                                                            name="active">
                                                        <option selected>@lang('site.select')</option>
                                                        <option value="1"
                                                                @if($aqar->active==1) selected @endif>@lang('site.active')
                                                        </option>
                                                        <option value="0"
                                                                @if($aqar->active==0) selected @endif>@lang('site.not-active')
                                                        </option>

                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 p-2">
                                                        <label>@lang('site.display_photo')</label>

                                                        <input type="file" class="form-control" name="main_image"
                                                               value="{{$aqar->main_image}}" id="imgInp"/>
                                                        <img id="frame"
                                                             src="{{asset('images/aqars/'.$aqar->main_image)}}" alt=""
                                                             onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                                             width="200px" class="img-upload"/>

                                                    </div>
                                                    <div class="form-group col-12 p-2 mb-2">

                                                        <label>@lang('site.images')</label>

                                                        <input type="file" class="form-control" name="images[]"
                                                               value="{{$aqar->images}}" multiple id="upload-imgs"/>

                                                        <div class="img-thumbs " id="img-previews">
                                                            @if($aqar->images)
                                                                @foreach ((explode(',',$aqar->images)) as $img)
                                                                    <div class="wrapper-thumb">
                                                                        <img id="frame"
                                                                             src="{{asset('images/aqars/'.$img)}}"
                                                                             alt=""
                                                                             onerror="this.src='{{asset('images/aqars/default.jpg')}}'"
                                                                             width="200px"
                                                                             class="img-preview-thumb"/><span
                                                                            class="remove-btn">x</span>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </div>


                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="form-group col-12 p-2">
                                                        <label>@lang('site.video')</label>

                                                        <input type='file' id='videoUpload' class="form-control"
                                                               name="videos" value="{{$aqar->videos}}?>"/>
                                                        <video width="250" height="200"
                                                               src="{{asset('images/aqars/videos/'.$aqar->videos)}}"
                                                               controls class="video-upload" autoplay>
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>


                                                <br>
                                                <div id="result_data1" class="p-2  m-t-15">
                                                </div>

                                                <div class="row">
                                                    <!--<div class="col-md-6"> -->

                                                    <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                        <label>@lang('site.descrption')<span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" cols="5" rows="5"
                                                                  name="description">
                                                            {{$aqar->description}}
                                                            </textarea>
                                                    </div>
                                                    <div class="col-md-12 form-group col-12 p-2  m-t-15">
                                                        <label>@lang('site.policy_place')</label>
                                                        <textarea class="form-control" cols="5" rows="5"
                                                                  name="policy_place"
                                                                  id="editor1">
                                                            {{$aqar->policy_place}}
                                                            </textarea>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </center>
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
            var test = $('input[name="price"]:checked').val();
            $("div.desc").hide();
            $("#price" + test).show();

            var category_id = $('input[name="category_id"]:checked').val();
            var aqar_id = '<?php echo $aqar->id ?>';
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting1') }}' + '/' + category_id + '/' + aqar_id,
                success: function (html) {
                    $("#result_data1").show();
                    var element = $('#result_data1');
                    element.empty();
                    $('#result_data1').html(html);
                }
            });
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

            var country_id = $('#country_id').val();
            $.get("{{url('dashboard/countrycities')}}/" + country_id, function (data) {
                $('#city_id').empty();
                $('#city_id').append('<option>@lang('site.select')</option>');
                $.each(data, function (key, value) {
                    $('#city_id').append('<option value="' + value.id + '">' + value.name_ar + '</option>')

                });


                $('#city_id').val({{$aqar->city_id}});

                var city_id = $('#city_id').val();
                var aqarrea = {{$aqar->area_id}};
                $("#cityarea").show();
                $.get("{{url('dashboard/cityareas')}}/" + city_id, function (data) {
                    $('#area_id').empty();
                    $.each(data, function (key, value) {
                        $('#area_id').append('<li class="form-check radio radio-primary" ><input class="form-check-input" id="area_' + value.id + '" type="radio" name="area_id" value="' + value.id + '" ' + (value.id == aqarrea ? 'checked' : '') + ' ><label class="form-check-label mb-0" for="area_' + value.id + '">' + value.name_ar + '</label></li>')

                    });

                });

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
            var aqar_id = '<?php echo $aqar->id ?>';
            $.ajax({
                url: '{{ url('dashboard/aqars/getsetting1') }}' + '/' + category_id + '/' + aqar_id,
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

        $(".remove-btn").click(function () {
            $(this).parent(".wrapper-thumb").remove();
        });
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
