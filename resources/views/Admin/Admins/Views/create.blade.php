<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.CreateAdminPage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/admin')}}" method="POST">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <div class="col-md-6">

                    <label for="name">@lang('admin.Name')</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="col-md-6">
                    <label for="email">@lang('admin.EmailAddress')</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6">
                    <label for="password">@lang('admin.Password')</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <label for="confirmPassword">@lang('admin.ConfirmPassword')</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confim Password">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="phone">@lang('admin.Phone')</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                </div>
                <div class="col-md-6">
                    <label for="address">@lang('admin.Address')</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address">
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