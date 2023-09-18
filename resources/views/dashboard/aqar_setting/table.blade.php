

                                                    <br>
                                                    <div class="table-responsive p-2">
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
                                                        @foreach($details as $detail)         
                                                            <tr>
                                                                <td>{{$detail->id}}</td>
                                                                <td style="width: 30%;">{{$detail->name_ar}}</td>    
                                                                <input type="hidden" name="ID" id="ID" value=""/>    
                                                                <td class="w-50">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="display" id="{{$detail->ID }}" {{$detail->display==1? 'checked':'' }} data-bs-original-title="" title=""><span class="switch-state"></span>
                                                                    </label>
                                                                </td>
                                                                </td>
                                                                <td class="w-50">
                                                                    <label class="switch">
                                                                        <input type="checkbox" name="required" id="{{$detail->ID }}" {{$detail->required==1? 'checked':'' }} data-bs-original-title="" title=""><span class="switch-state"></span>
                                                                    </label>
                                                                </td>
                                                            </tr>
                                                        @endforeach  
                                                        </tbody>
                                                    </table>
                                                    </div>


                                                    