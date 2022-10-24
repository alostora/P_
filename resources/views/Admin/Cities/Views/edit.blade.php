<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('admin.EditCityPage')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/city/'.$city->id)}}" method="POST">
            @csrf
            @method('patch')
            
            <input type="hidden" class="form-control" name="id" id="id" value="{{$city->id}}">
            
            <div class="box-body">

              <div class="form-group">
                <div class="col-md-6">
                  <label>@lang('admin.Countries')</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          @if($city->country_id == $country->id)
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
                          @if($city->governorate_id == $governorate->id)
                            <option value="{{$governorate->id}}" selected>{{$governorate->nameAr}}</option>
                          @else
                            <option value="{{$governorate->id}}">{{$governorate->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
              <div class="clearfix"></div>
                
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="nameAr">@lang('admin.NameAr')</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$city->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">@lang('admin.NameEn')NameEn</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$city->nameEn}}">
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