@extends('layouts.main_admin')

@section('content')

    <!-- <div class="content-page"> -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>@lang('site.aqar_setting')</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">@lang('site.dashboard')</li>

                            <li class="breadcrumb-item active">@lang('site.aqar_setting') @endlang</li>
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
                        <form action="" method="post"
                              enctype="multipart/form-data"
                              id="" class="form-main">

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
                                    <!-- <button type="submit" class="btn btn-air-primary btn-pill btn-primary"><i
                                            class="fa fa-magic"></i>
                                        @lang('site.edit')</button> -->
                                </div>
                            </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                        @include('partials._errors')
                                        <center>
                                        <div class="col-sm-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="col-sm-12">
                                                        <h5 class="text-decoration-underline border-bottom">@lang('site.categories')</h5>
                                                    </div>
                                                    <div class="col">
                                                        <div class="m-t-15">                                               
                                                            <select class="form-control btn-square" name="category_id" id="category_id" onchange="getdetails(this.value)">
                                                                <option selected value="0">@lang('site.select')</option>
                                                                @foreach($categories as $cat)
                                                                    <option value="{{$cat->id}}">{{$cat->name_ar ?? ''}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="table-responsive p-2" id="result_data">
                                                    <table  class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>                                                        
                                                                <th scope="col">@lang('site.input_id')</th>
                                                                <th scope="col">@lang('site.display')</th>
                                                                <th scope="col">@lang('site.required')</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if($details)
                                                        @foreach($details as $detail)         
                                                            <tr>
                                                                <td>{{$detail->ID}}</td>
                                                                <td style="width: 30%;">{{$detail->name_ar}}</td>    
                                                                <input type="hidden" name="ID" id="ID" value=""/>    
                                                                <td class="w-50">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="display" id="{{$detail->ID}}" {{$detail->display==1? 'checked':'' }} data-bs-original-title="" title=""><span class="switch-state"></span>
                                                                    </label>
                                                                </td>
                                                                </td>
                                                                <td class="w-50">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="required" id="{{$detail->ID}}" {{$detail->required==1? 'checked':'' }} data-bs-original-title="" title=""><span class="switch-state"></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        @endforeach 
                                                        @endif 
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                    <div id="result_data1">
                                                    </div>
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

   
function getdetails(category_id)
{
  
    $.ajax({
        url: '{{ url('dashboard/aqarsetting/getsetting') }}' + '/' +category_id ,
        success : function(html)
		{ 
           
            $("#result_data1").show();
            var element = $('#result_data');
            element.empty();
            $('#result_data1').html(html) ;

            $('input[type=checkbox][name=display]').change(function() {
            var element = $(this);
            var detail_id = element.attr("id");
            var check=this.checked;
            if(check==true){check=1;}else{check=0;}
            $.ajax({
                url: '{{ url('dashboard/aqarsetting/active_input_display') }}' + '/' +detail_id + '/' +check,
                success: function (data) {
                var n = new Noty({
                text: "{{__('site.updated_successfully')}}",
                type: "information",
                killer: true,
                buttons: [
                    Noty.button("اغلاق", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
                
                }

                
            
            })
            
        });

        $('input[type=checkbox][name=required]').change(function() {
            var element = $(this);
            var detail_id = element.attr("id");
            var check=this.checked;
            if(check==true){check=1;}else{check=0;}
            $.ajax({
                url: '{{ url('dashboard/aqarsetting/active_input_required') }}' + '/' +detail_id + '/' +check,
                success: function (data) {
                var n = new Noty({
                text: "{{__('site.updated_successfully')}}",
                type: "information",
                killer: true,
                buttons: [
                    Noty.button("اغلاق", 'btn btn-primary mr-2', function () {
                        n.close();
                    })
                ]
            });
            n.show();
                
                }
            
            })
            
        });

                    
                }
            })
        }
</script>
<script>

$(document).ready(function() {
}); 


</script>

@endsection


