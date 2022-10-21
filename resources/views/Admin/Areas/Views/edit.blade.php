<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit area Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/area/'.$area->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">

              <div class="form-group">
                <div class="col-md-6">
                  <label>Countries</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          @if($area->country_id == $country->id)
                            <option value="{{$country->id}}" selected>{{$country->nameAr}}</option>
                          @else
                            <option value="{{$country->id}}">{{$country->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>governorates</label>
                    <select class="form-control" name="governorate_id">
                      @if(!empty($governorates))
                        @foreach ($governorates as $key=>$governorate)
                          @if($area->governorate_id == $governorate->id)
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
                  <label>cities</label>
                    <select class="form-control" name="city_id">
                      @if(!empty($cities))
                        @foreach ($cities as $key=>$city)
                          @if($area->city_id == $city->id)
                            <option value="{{$city->id}}" selected>{{$city->nameAr}}</option>
                          @else
                            <option value="{{$city->id}}">{{$city->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
              <div class="clearfix"></div>
                
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="id" id="id" value="{{$area->id}}">

                        <label for="nameAr">Name Ar</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$area->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">Name En</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$area->nameEn}}">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

       

      </div>
      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->