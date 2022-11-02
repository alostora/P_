<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('admin.EditAdminPage')</h3>
        </div>
        <form role="form" action="{{url('admin/garage-keeper/'.$user->id)}}" method="POST">
          
          @csrf
        
          @method('patch')
          
          <input type="hidden" class="form-control" name="id" id="id" value="{{$user->id}}">
          
          <div class="box-body">
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="name">@lang('admin.name')</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                  </div>
                  <div class="col-md-6">
                      <label for="email">@lang('admin.email')</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="phone">@lang('admin.phone')</label>
                      <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" >
                  </div>
                  <div class="col-md-6">
                      <label for="address">@lang('admin.address')</label>
                      <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}"  >
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="password">@lang('admin.password')</label>
                      <input type="password" class="form-control" name="password" id="password" >
                  </div>
                  <div class="col-md-6">
                      <label for="confirmPassword">@lang('admin.confirmPassword')</label>
                      <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" >
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="identificationNumber">@lang('admin.identificationNumber')</label>
                      <input type="identificationNumber" class="form-control" name="identificationNumber" id="identificationNumber" value="{{$user->identificationNumber}}" >
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