<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-6">@lang('parking.page_title_seller_accountants')</h3>
                </div>

                <div class="box-body">

                    <form>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-3">
                                    <select class="form-control select2 input-md" name="saies_id">
                                        <option value="">@lang('general.all')</option>
                                        @if(!empty($saies))
                                            @foreach ($saies as $oneSaies )
                                                <option value="{{$oneSaies->id}}" {{ !empty(Request('saies_id')) && Request('saies_id') == $oneSaies->id ? 'selected' : '' }}>
                                                    {{$oneSaies->name . " : " .$oneSaies->phone }}
                                                </option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="col-xs-3">
                                    <select class="form-control select2 input-md" name="accountantsStatus">
                                        <option value="0" {{ !empty(Request('accountantsStatus')) && Request('accountantsStatus') == 0 ? 'selected' : '' }}>
                                            @lang('parking.opend')
                                        </option>
                                        <option value="1" {{ !empty(Request('accountantsStatus')) && Request('accountantsStatus') == 1 ? 'selected' : '' }}>
                                            @lang('parking.closed')
                                        </option>
                                    </select>
                                </div>
                                <div class="col-xs-3">
                                    <input name = "date_from" type="date" class = "form-control" value = "{{!empty(Request('date_from'))?Request('date_from'):date('Y-m-d', strtotime('-1 day'))}}">
                                </div>
                                <div class="col-xs-3">
                                    <div class="input-group">
                                    <input name = "date_to" type="date" class = "form-control" value = "{{!empty(Request('date_to'))?Request('date_to'):date('Y-m-d', strtotime('+0 day'))}}">
                                        <div class="input-group-btn">
                                            <button class="btn btn-success btn-md"> <i class="fa fa-search"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
    
                    <div class="" style="display: {{ count($parking) ? '' : 'none' }};">
                        <table id="example2" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">الاجمالي</th>
                                    @if(count($parking) && Request('accountantsStatus') == 0)
                                        <th style="text-align: center;">#</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"> {{!empty($parking) ? $parking->sum('cost') : 0}} RS</td>
                                    @if(count($parking) && Request('accountantsStatus') == 0)
                                        <td style="text-align: center;">
                                            <a href="{{url('admin/seller-accountants/close-account?parking_ids='.$parking->pluck('id'))}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-check"></i> @lang('parking.closeAccount')
                                            </a>
                                        </td>
                                    @endif

                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <table id="example1" class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('parking.type')</th>
                                <th>@lang('parking.cost')</th>
                                <th>@lang('parking.starts_at')</th>
                                <th>@lang('parking.ends_at')</th>
                                <th>@lang('parking.saies_id')</th>
                                <th>@lang('parking.garage_id')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($parking))
                            @foreach ($parking as $key=>$park)
                            <tr>
                                <td> {{$park->id}} </td>
                                <td> {{App\Constants\Api\ParkingTypes::TYPE_LIST[$park->type ? $park->type : 0]['name_ar']}} </td>
                                <td> {{$park->cost}} </td>
                                <td> {{$park->starts_at}} </td>
                                <td> {{$park->ends_at}} </td>
                                <td> {{$park->saies->name}} </td>
                                <td> {{$park->garage->nameAr}} </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>