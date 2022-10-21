
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title col-md-8">Cities Data</h3>
                    <div class="col-md-4">
                        <a href="{{url('admin/city/create')}}" class="btn btn-primary btn-sm" style="height:25px;padding:2px;width:150px">
                            <i class="fa fa-plus"></i>
                            <span>Create governorate</span>
                        </a>
                    </div>
                </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>NAME_EN</th>
                                <th>OPERATIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($cities))
                                @foreach ($cities as $key=>$city)
                                    <tr>
                                        <td> {{$city->nameAr}} </td>
                                        <td> {{$city->nameEn}} </td>
                                        <td>
                                            <a href="{{url('admin/city/edit/'.$city->id)}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{url('admin/city/delete/'.$city->id)}}" class="btn btn-danger btn-sm">
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