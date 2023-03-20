
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">@lang('user.page_title_admins')</h3>
                    <div class="col-md-4">
                        <a href="{{url('admin/admin/create')}}" class="btn btn-primary btn-sm" style="height:25px;padding:2px;width:150px">
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
                                <th>@lang('user.email')</th>
                                <th>@lang('user.phone')</th>
                                <th>@lang('user.type')</th>
                                <th>@lang('general.operations')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($users))
                                @foreach ($users as $key=>$admin)
                                    <tr>
                                        <td> {{$admin->name}} </td>
                                        <td> {{$admin->email}} </td>
                                        <td> {{$admin->phone}} </td>
                                        <td> {{\App\Constants\UserTyps::STATUS_LIST[$admin->type]['name_ar']}} </td>
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