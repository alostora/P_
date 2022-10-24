<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.EditareaPage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/street/'.$street->id)}}" method="POST">
            @csrf
            @method('patch')

            <input type="hidden" class="form-control" name="id" id="id" value="{{$street->id}}">
            
            <div class="box-body">

              <div class="form-group">
                <div class="col-md-6">
                  <label>@lang('admin.Countries')</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          @if($street->country_id == $country->id)
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
                          @if($street->governorate_id == $governorate->id)
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
                          @if($street->city_id == $city->id)
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
                          @if($street->area_id == $area->id)
                            <option value="{{$area->id}}" selected>{{$area->nameAr}}</option>
                          @else
                            <option value="{{$area->id}}">{{$area->nameAr}}</option>
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
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$street->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">@lang('admin.nameEn')</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$street->nameEn}}">
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