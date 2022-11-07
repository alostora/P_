<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('general.update')</h3>
        </div>
        <form role="form" action="{{url('admin/garage/'.$garage->id)}}" method="POST">
          
          @csrf

          @method('patch')
          
          <input type="hidden" name="country_id" value="{{$garage->country_id}}">
          <input type="hidden" name="governorate_id" value="{{$garage->governorate_id}}">
          <input type="hidden" name="city_id" value="{{$garage->city_id}}">
          <input type="hidden" name="area_id" value="{{$garage->area_id}}">
          <input type="hidden" name="street_id" value="{{$garage->street_id}}">
          <input type="hidden" name="id" value="{{$garage->id}}">

          <div class="box-body">
            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('garage.saies_id')</label>
                  <select class="form-control" name="saies_id">
                    @if(!empty($saies))
                      @foreach ($saies as $key=>$oneSaies)
                        <option value="{{$oneSaies->id}}" {{$garage->saies_id == $oneSaies->id ? "selected" : ""}}>
                          {{$oneSaies->name}}
                        </option>
                      @endforeach
                    @endif     
                  </select>
              </div>
            </div>
            <div class="clearfix"></div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="nameAr">@lang('garage.name')</label>
                      <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$garage->nameAr}}">
                  </div>
                  <div class="col-md-6">
                      <label for="nameEn">@lang('garage.name') En</label>
                      <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$garage->nameEn}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="longitude">@lang('garage.longitude')</label>
                      <input type="text" class="form-control" name="longitude" id="longitude" value="{{$garage->longitude}}">
                  </div>
                  <div class="col-md-6">
                      <label for="latitude">@lang('garage.latitude')</label>
                      <input type="text" class="form-control" name="latitude" id="latitude" value="{{$garage->latitude}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="hourCost">@lang('garage.hourCost')</label>
                      <input type="text" class="form-control" name="hourCost" id="hourCost" value="{{$garage->hourCost}}">
                  </div>
                  <div class="col-md-6">
                      <label for="carCount">@lang('garage.carCount')</label>
                      <input type="text" class="form-control" name="carCount" id="carCount" value="{{$garage->carCount}}">
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