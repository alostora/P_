<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.createGaragePage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/garage')}}" method="POST">
            @csrf
            <div class="box-body">
              
              <div class="form-group">
                <div class="col-md-6">
                  <label>@lang('admin.Countries')</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          <option value="{{$country->id}}">{{$country->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>

                <div class="col-md-6">
                  <label>@lang('admin.governates')</label>
                    <select class="form-control" name="governorate_id">
                      @if(!empty($governates))
                        @foreach ($governates as $key=>$governate)
                          <option value="{{$governate->id}}">{{$governate->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                  <label>@lang('admin.Cities')</label>
                    <select class="form-control" name="city_id">
                      @if(!empty($cities))
                        @foreach ($cities as $key=>$city)
                          <option value="{{$city->id}}">{{$city->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>@lang('admin.Areas')</label>
                    <select class="form-control" name="area_id">
                      @if(!empty($areas))
                        @foreach ($areas as $key=>$area)
                          <option value="{{$area->id}}">{{$area->nameAr}}</option>
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
                          <option value="{{$street->id}}">{{$street->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>@lang('admin.saies')</label>
                    <select class="form-control" name="saies_id">
                      @if(!empty($saies))
                        @foreach ($saies as $key=>$oneSaies)
                          <option value="{{$oneSaies->id}}">{{$oneSaies->name}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>

              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="nameAr">@lang('admin.Name')</label>
                    <input type="text" class="form-control" name="nameAr" id="nameAr" placeholder="Enter nameAr">
                </div>
                <div class="col-md-6">
                    <label for="nameEn">@lang('admin.nameEn')</label>
                    <input type="text" class="form-control" name="nameEn" id="nameEn" placeholder="Enter nameEn">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="longitude">@lang('admin.longitude')</label>
                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Enter longitude">
                </div>
                <div class="col-md-6">
                    <label for="latitude">@lang('admin.latitude')</label>
                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="Enter latitude">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="hourCost">@lang('admin.hourCost')</label>
                    <input type="number" class="form-control" name="hourCost" id="hourCost" placeholder="Enter hourCost">
                </div>
                <div class="col-md-6">
                    <label for="carCount">@lang('admin.carCount')</label>
                    <input type="number" class="form-control" name="carCount" id="carCount" placeholder="Enter carCount">
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