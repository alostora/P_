
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
                                <th>#</th>
                                <th>@lang('parking.type')</th>
                                <th>@lang('parking.cost')</th>
                                <th>@lang('parking.vat')</th>
                                <th>@lang('parking.total')</th>
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
                                        <td> {{App\Constants\Api\ParkingTypes::TYPE_LIST[$park->type ? $park->type : 1]['name_ar']}} </td>
                                        <td> {{$park->cost}} </td>
                                        <td> {{$park->cost * 15/100}} </td>
                                        <td> {{($park->cost * 15/100) + $park->cost}} </td>
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