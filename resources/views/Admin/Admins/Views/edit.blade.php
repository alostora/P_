<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.EditAdminPage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/admin/'.$user->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
                
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="id" id="id" value="{{$user->id}}">

                        <label for="name">@lang('admin.Name')</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="email">@lang('admin.EmailAddress')</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6">
                        <label for="phone">@lang('admin.Phone')</label>
                        <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" >
                    </div>
                    <div class="col-md-6">
                        <label for="address">@lang('admin.Address')</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}"  >
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="password">@lang('admin.Password')</label>
                        <input type="password" class="form-control" name="password" id="password" >
                    </div>
                    <div class="col-md-6">
                        <label for="confirmPassword">@lang('admin.ConfirmPassword')</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" >
                    </div>
                </div>
             
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

       

      </div>
      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->