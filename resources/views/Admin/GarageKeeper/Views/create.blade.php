<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('admin.createAdminPage')</h3>
        </div>
        <form role="form" action="{{url('admin/garage-keeper')}}" method="POST">
          
          @csrf

          <div class="box-body">
            <div class="form-group">
              <div class="col-md-6">
                  <label for="name">@lang('admin.name')</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>
              <div class="col-md-6">
                  <label for="email">@lang('admin.email')</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="password">@lang('admin.password')</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                  <label for="confirmPassword">@lang('admin.confirmPassword')</label>
                  <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confim Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="phone">@lang('admin.phone')</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
              </div>
              <div class="col-md-6">
                  <label for="address">@lang('admin.address')</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="address">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="identificationNumber">@lang('admin.identificationNumber')</label>
                  <input type="text" class="form-control" name="identificationNumber" id="identificationNumber" placeholder="identificationNumber">
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('admin.Submit')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>