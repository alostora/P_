
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">@lang('parking.page_title')</h3>
                    <div class="col-md-4">
                       
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('parking.clientName')</th>
                                <th>@lang('parking.clientCarNumber')</th>
                                <th>@lang('parking.clientIdentificationNumber')</th>
                                <th>@lang('parking.licenceNumber')</th>
                                <th>@lang('parking.clientPhone')</th>
                                <th>@lang('parking.code')</th>
                                <th>@lang('parking.costType')</th>
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
                                        <td> {{$park->clientName}} </td>
                                        <td> {{$park->clientCarNumber}} </td>
                                        <td> {{$park->clientIdentificationNumber}} </td>
                                        <td> {{$park->licenceNumber}} </td>
                                        <td> {{$park->clientPhone}} </td>
                                        <td> {{$park->code}} </td>
                                        <td> {{$park->costType}} </td>
                                        <td> {{$park->cost}} </td>
                                        <td> {{$park->starts_at}} </td>
                                        <td> {{$park->ends_at}} </td>
                                        <td> {{$park->saies_id}} </td>
                                        <td> {{$park->garage_id}} </td>
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