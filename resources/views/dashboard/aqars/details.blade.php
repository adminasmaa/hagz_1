
@foreach($details as $detail)

            @if($detail->name_en=='space'&&($detail->display==1))
            <br>
            <div id="space">
                <div class="col-sm-6 col-md-6">
                    <h5 class="mb-0 border-bottom">@lang('site.space')</h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="space" class="form-control"
                        value="{{$aqar->space ?? ''}}" >
                </div>
            </div>
            @endif
            @if($detail->name_en=='unitnumber'&&($detail->display==1))
            <br>
            <div  id="unitnumber">
                <div class="col-sm-6">
                    <h5 class="mb-0 border-bottom">@lang('site.unitnumber')</h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="unitnumber" class="form-control"
                        value="{{$aqar->unitnumber ?? ''}}">
                </div>
            </div>
            @endif
            @if($detail->name_en=='hallnumber'&&($detail->display==1))
            <br>
            <div id="hallnumber">
                <div class="col-sm-6 col-md-6">
                    <h5 class="mb-0 border-bottom">@lang('site.hallnumber')</h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="hallnumber" class="form-control"
                        value="{{$aqar->hallnumber ?? ''}}">
                </div>
            </div>
            @endif
            @if($detail->name_en=='bathroomnumber'&&($detail->display==1))
            <br>
            <div  id="bathroomnumber">
                <div class="col-sm-6">
                    <h5 class="mb-0 border-bottom">@lang('site.bathroomnumber')
                    </h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="bathroomnumber"
                        class="form-control" value="{{$aqar->bathroomnumber ?? ''}}">
                </div>
            </div>
            @endif
            @if($detail->name_en=='personnumber'&&($detail->display==1))
            <br>
            <div  id="personnumber">
                <div class="col-sm-6 col-md-6">
                    <h5 class="mb-0 border-bottom">@lang('site.personnumber')
                    </h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="personnumber"
                        class="form-control" value="{{$aqar->personnumber ?? ''}}">
                </div>
            </div>
            @endif
            @if($detail->name_en=='daynumber'&&($detail->display==1))
            <br>
            <div  id="daynumber">
                <div class="col-sm-6 col-md-6">
                    <h5 class="mb-0 border-bottom">@lang('site.daynumber')
                    </h5>
                </div>
                <div class="col m-t-15">
                    <input type="number" name="daynumber"
                        class="form-control" value="{{$aqar->daynumber ?? ''}}">
                </div>
            </div>
            @endif
        
        @if(count($detail->subservices)!=0)
        <br>
        <div class="col-sm-12 ">
            <h5 class="mb-0 border-bottom">{{$detail->name_ar ?? ''}}</h5>
        </div>
        <div class="col m-t-15">

       
        @foreach($detail->subservices as $subservice)
            <div class="form-check form-check-inline checkbox checkbox-solid-primary">   
                <input class="form-check-input" id="subservice_{{$subservice->id}}"
                    type="checkbox" name="subservice[]" value="{{$detail->id}}-{{$subservice->id}}"  {{in_array($subservice->id,$arr)? 'checked':'' }}>
                <label class="form-check-label"
                    for="subservice_{{$subservice->id}}">{{$subservice->name_ar ?? ''}}<span
                        class="digits"></span></label>
            </div>
        @endforeach
        
        </div>
        @endif
@endforeach