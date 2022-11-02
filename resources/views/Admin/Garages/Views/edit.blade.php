<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('admin.EditgaragePage')</h3>
        </div>
        <form role="form" action="{{url('admin/garage/'.$garage->id)}}" method="POST">
          
          @csrf

          @method('patch')

          <input type="hidden" class="form-control" name="id" id="id" value="{{$garage->id}}">

          <div class="box-body">
            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('admin.Countries')</label>
                  <select class="form-control" name="country_id">
                    @if(!empty($countries))
                      @foreach ($countries as $key=>$country)
                          <option value="{{$country->id}}"  {{$garage->country_id == $country->id ? "selected" : ""}}>
                            {{$country->nameAr}}
                          </option>
                      @endforeach
                    @endif     
                  </select>
              </div>
              <div class="col-md-6">
                <label>@lang('admin.governorates')</label>
                  <select class="form-control" name="governorate_id">
                    @if(!empty($governorates))
                      @foreach ($governorates as $key=>$governorate)
                          <option value="{{$governorate->id}}" {{$garage->governorate_id == $governorate->id ? "selected" : ""}}>{{$governorate->nameAr}}</option>
                      @endforeach
                    @endif     
                  </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('admin.cities')</label>
                  <select class="form-control" name="city_id">
                    @if(!empty($cities))
                      @foreach ($cities as $key=>$city)
                          <option value="{{$city->id}}" {{$garage->city_id == $city->id ? "selected" : ""}}>
                            {{$city->nameAr}}
                          </option>
                      @endforeach
                    @endif     
                  </select>
              </div>
              <div class="col-md-6">
                <label>@lang('admin.areas')</label>
                  <select class="form-control" name="area_id">
                    @if(!empty($areas))
                      @foreach ($cities as $key=>$area)
                        <option value="{{$area->id}}" {{$garage->area_id == $area->id ? "selected" : ""}}>
                          {{$area->nameAr}}
                        </option>
                      @endforeach
                    @endif     
                  </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('admin.streets')</label>
                  <select class="form-control" name="street_id">
                    @if(!empty($streets))
                      @foreach ($streets as $key=>$street)
                        <option value="{{$street->id}}" {{$garage->street_id == $street->id ? "selected" : ""}}>
                          {{$street->nameAr}}
                        </option>
                      @endforeach
                    @endif     
                  </select>
              </div>
              <div class="col-md-6">
                <label>@lang('admin.saies')</label>
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
                      <label for="nameAr">@lang('admin.nameAr')</label>
                      <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$garage->nameAr}}">
                  </div>
                  <div class="col-md-6">
                      <label for="nameEn">@lang('admin.nameEn')</label>
                      <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$garage->nameEn}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="longitude">@lang('admin.longitude')</label>
                      <input type="text" class="form-control" name="longitude" id="longitude" value="{{$garage->longitude}}">
                  </div>
                  <div class="col-md-6">
                      <label for="latitude">@lang('admin.latitude')</label>
                      <input type="text" class="form-control" name="latitude" id="latitude" value="{{$garage->latitude}}">
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-md-6">
                      <label for="hourCost">@lang('admin.hourCost')</label>
                      <input type="text" class="form-control" name="hourCost" id="hourCost" value="{{$garage->hourCost}}">
                  </div>
                  <div class="col-md-6">
                      <label for="carCount">@lang('admin.carCount')</label>
                      <input type="text" class="form-control" name="carCount" id="carCount" value="{{$garage->carCount}}">
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