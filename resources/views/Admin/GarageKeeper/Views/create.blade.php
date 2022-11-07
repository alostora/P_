<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('general.create')</h3>
        </div>
        <form role="form" action="{{url('admin/garage-keeper')}}" method="POST">
          
          @csrf

          <div class="box-body">
            <div class="form-group">
              <div class="col-md-6">
                  <label for="name">@lang('user.name')</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="@lang('user.name')">
              </div>
              <div class="col-md-6">
                  <label for="email">@lang('user.email')</label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="@lang('user.email')">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="password">@lang('user.password')</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="@lang('user.password')">
              </div>
              <div class="col-md-6">
                  <label for="confirmPassword">@lang('user.confirmPassword')</label>
                  <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="@lang('user.confirmPassword')">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="phone">@lang('user.phone')</label>
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="@lang('user.phone')">
              </div>
              <div class="col-md-6">
                  <label for="address">@lang('user.address')</label>
                  <input type="text" class="form-control" name="address" id="address" placeholder="@lang('user.address')">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                  <label for="identificationNumber">@lang('user.identificationNumber')</label>
                  <input type="text" class="form-control" name="identificationNumber" id="identificationNumber" placeholder="@lang('user.identificationNumber')">
              </div>
            </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('user.Submit')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>