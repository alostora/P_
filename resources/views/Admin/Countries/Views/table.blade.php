
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">@lang('country.page_title_countries')</h3>
                    <div class="col-md-4">
                        <a href="{{url('admin/country/create')}}" class="btn btn-primary btn-sm" style="height:25px;padding:2px;width:150px">
                            <i class="fa fa-plus"></i>
                            <span>@lang('general.create')</span>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('country.name')</th>
                                <th>@lang('country.governorate_id')</th>
                                <th>@lang('general.operations')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($countries))
                                @foreach ($countries as $key=>$country)
                                    <tr>
                                        <td> {{$country->nameAr}} </td>
                                        <td> 
                                            <a href="{{url('admin/governorates/'.$country->id)}}" class="">
                                                <i class="fa fa-info"></i>
                                                @lang('country.governorate_id')
                                            </a> 
                                        </td>
                                        <td>
                                            <a href="{{url('admin/country/edit/'.$country->id)}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{url('admin/country/delete/'.$country->id)}}" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
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