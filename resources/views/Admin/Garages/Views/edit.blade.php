<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.EditgaragePage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
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
                          @if($garage->country_id == $country->id)
                            <option value="{{$country->id}}" selected>{{$country->nameAr}}</option>
                          @else
                            <option value="{{$country->id}}">{{$country->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>@lang('admin.governorates')</label>
                    <select class="form-control" name="governorate_id">
                      @if(!empty($governorates))
                        @foreach ($governorates as $key=>$governorate)
                          @if($garage->governorate_id == $governorate->id)
                            <option value="{{$governorate->id}}" selected>{{$governorate->nameAr}}</option>
                          @else
                            <option value="{{$governorate->id}}">{{$governorate->nameAr}}</option>
                          @endif
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
                          @if($garage->city_id == $city->id)
                            <option value="{{$city->id}}" selected>{{$city->nameAr}}</option>
                          @else
                            <option value="{{$city->id}}">{{$city->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>@lang('admin.areas')</label>
                    <select class="form-control" name="area_id">
                      @if(!empty($areas))
                        @foreach ($cities as $key=>$area)
                          @if($garage->area_id == $area->id)
                            <option value="{{$area->id}}" selected>{{$area->nameAr}}</option>
                          @else
                            <option value="{{$area->id}}">{{$area->nameAr}}</option>
                          @endif
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
                          @if($garage->street_id == $street->id)
                            <option value="{{$street->id}}" selected>{{$street->nameAr}}</option>
                          @else
                            <option value="{{$street->id}}">{{$street->nameAr}}</option>
                          @endif
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
                        <label for="lang">@lang('admin.lang')</label>
                        <input type="text" class="form-control" name="lang" id="lang" value="{{$garage->lang}}">
                    </div>
                    <div class="col-md-6">
                        <label for="lat">@lang('admin.lat')</label>
                        <input type="text" class="form-control" name="lat" id="lat" value="{{$garage->lat}}">
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