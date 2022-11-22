
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-6">@lang('parking.page_title_seller_accountants')</h3>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <form>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label>@lang('parking.saies_id') :</label>
                                    <div class="input-group">
                                        <select class="form-control" name="saies_id">
                                            @if (!empty($saies))
                                                @foreach ($saies as $oneSaies )
                                                    <option 
                                                        value="{{$oneSaies->id}}"
                                                        {{ !empty(Request('saies_id')) && Request('saies_id') == $oneSaies->id ? 'selected' : '' }}
                                                    >
                                                        {{$oneSaies->name . " : " .$oneSaies->phone }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label>@lang('parking.accountantsStatus') :</label>
                                    <div class="input-group">
                                        <select class="form-control" name="accountantsStatus">
                                            <option value="0" {{ !empty(Request('accountantsStatus')) && Request('accountantsStatus') == 0 ? 'selected' : '' }}>
                                                @lang('parking.opend')
                                            </option>
                                            <option value="1" {{ !empty(Request('accountantsStatus')) && Request('accountantsStatus') == 1 ? 'selected' : '' }}>
                                                @lang('parking.closed')
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3">
                                    <label>@lang('parking.starts_at') :</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="date_from" value="{{!empty(Request('date_from')) ? Request('date_from'):''}}">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label>@lang('parking.ends_at') :</label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="date_to" value="{{!empty(Request('date_to')) ? Request('date_to'):''}}">
                                    </div>
                                </div>

                            </div>
                            
                            <label>@lang('general.search')</label>
                            <div class="input-group">
                                <button class="btn btn-success"> <i class="fa fa-search"></i> </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xs-12"  style="display: {{ count($parking) ? '' : 'none' }};">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">الاجمالي</th>
                                    <th style="text-align: center;">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: center;"> {{!empty($parking) ? $parking->sum('cost') : 0}} RS</td>
                                    
                                    <td style="text-align: center;">
                                        <div style="display: {{ count($parking) && Request('accountantsStatus') == 1  ? 'none' : '' }};">

                                            <a href="{{url('admin/seller-accountants/close-account?parking_ids='.$parking->pluck('id'))}}" class="btn btn-primary btn-sm">
                                                <i class="fa fa-check"></i> @lang('parking.closeAccount')
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="box-body">
                    
                    <table id="example1" class="table table-bordered table-striped">
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