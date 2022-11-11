
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">@lang('user.page_title_saies')</h3>
                    <div class="col-md-4">
                        <a href="{{url('admin/assigned-garage-keeper/create/'.Request('garage')->id)}}" class="btn btn-primary btn-sm" style="height:25px;padding:2px;width:150px">
                            <i class="fa fa-plus"></i>
                            <span>@lang('general.create')</span>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('user.name')</th>
                                <th>@lang('user.phone')</th>
                                <th>@lang('general.operations')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($garageKeepers))
                                @foreach ($garageKeepers as $key=>$garagekeeper)
                                    <tr>
                                        <td> {{$garagekeeper->saies->name}} </td>
                                        <td> {{$garagekeeper->saies->phone}} </td>
                                        <td>
                                            <a href="{{url('admin/assigned-garage-keeper/delete/'.$garagekeeper->id)}}" class="btn btn-danger btn-sm">
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