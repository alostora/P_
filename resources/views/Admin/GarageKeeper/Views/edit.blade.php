<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('general.update')</h3>
        </div>
        <form role="form" action="{{url('admin/garage-keeper/'.$user->id)}}" method="POST">
          
          @csrf
        
          @method('patch')
          
          <input type="hidden" name="id" value="{{$user->id}}">
          
          <div class="box-body">
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="name">@lang('user.name')</label>
                      <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                  </div>
                  <div class="col-md-6">
                      <label for="email">@lang('user.email')</label>
                      <input type="email" class="form-control" name="email" id="email" value="{{$user->email}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="phone">@lang('user.phone')</label>
                      <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" >
                  </div>
                  <div class="col-md-6">
                      <label for="address">@lang('user.address')</label>
                      <input type="text" class="form-control" name="address" id="address" value="{{$user->address}}"  >
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="password">@lang('user.password')</label>
                      <input type="password" class="form-control" name="password" id="password" >
                  </div>
                  <div class="col-md-6">
                      <label for="confirmPassword">@lang('user.confirmPassword')</label>
                      <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" >
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="identificationNumber">@lang('user.identificationNumber')</label>
                      <input type="identificationNumber" class="form-control" name="identificationNumber" id="identificationNumber" value="{{$user->identificationNumber}}" >
                  </div>
                  
                <div class="col-md-6">
                    <label>@lang('user.garage_id')</label>
                    <select class="form-control" name="garage_id">
                      @if(!empty($garages))
                        @foreach ($garages as $key=>$garage)
                          <option value="{{$garage->id}}" {{$user->garage && $user->garage->garage_id == $garage->id ? "selected" : ""}}>{{$garage->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('general.submit')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>