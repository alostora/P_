
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">@lang('admin.AdminsData')</h3>
                    <div class="col-md-4">
                        <a href="{{url('admin/admin/create')}}" class="btn btn-primary btn-sm" style="height:25px;padding:2px;width:150px">
                            <i class="fa fa-plus"></i>
                            <span>@lang('admin.CreateAdmin')</span>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>@lang('admin.NAME')</th>
                                <th>@lang('admin.EMAIL')</th>
                                <th>@lang('admin.PHONE')</th>
                                <th>@lang('admin.ADDRESS')</th>
                                <th>@lang('admin.OPERATIONS')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($users))
                                @foreach ($users as $key=>$admin)
                                    <tr>
                                        <td> {{$admin->name}} </td>
                                        <td> {{$admin->email}} </td>
                                        <td> {{$admin->phone}} </td>
                                        <td> {{$admin->address}} </td>
                                        <td>
                                            <a href="{{url('admin/admin/edit/'.$admin->id)}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{url('admin/admin/delete/'.$admin->id)}}" class="btn btn-danger btn-sm">
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