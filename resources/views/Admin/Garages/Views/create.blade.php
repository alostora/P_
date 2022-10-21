<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">create Area Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/garage')}}" method="POST">
            @csrf
            <div class="box-body">
              
              <div class="form-group">
                <div class="col-md-6">
                  <label>Countries</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          <option value="{{$country->id}}">{{$country->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>

                <div class="col-md-6">
                  <label>governates</label>
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
                  <label>Cities</label>
                    <select class="form-control" name="city_id">
                      @if(!empty($cities))
                        @foreach ($cities as $key=>$city)
                          <option value="{{$city->id}}">{{$city->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
                <div class="col-md-6">
                  <label>Areas</label>
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
                  <label>streets</label>
                    <select class="form-control" name="street_id">
                      @if(!empty($streets))
                        @foreach ($streets as $key=>$street)
                          <option value="{{$street->id}}">{{$street->nameAr}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>

              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="nameAr">Name</label>
                    <input type="text" class="form-control" name="nameAr" id="nameAr" placeholder="Enter nameAr">
                </div>
                <div class="col-md-6">
                    <label for="nameEn">nameEn</label>
                    <input type="text" class="form-control" name="nameEn" id="nameEn" placeholder="Enter nameEn">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="lang">lang</label>
                    <input type="text" class="form-control" name="lang" id="lang" placeholder="Enter lang">
                </div>
                <div class="col-md-6">
                    <label for="lat">lat</label>
                    <input type="text" class="form-control" name="lat" id="lat" placeholder="Enter lat">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="hourCost">hourCost</label>
                    <input type="number" class="form-control" name="hourCost" id="hourCost" placeholder="Enter hourCost">
                </div>
                <div class="col-md-6">
                    <label for="carCount">carCount</label>
                    <input type="number" class="form-control" name="carCount" id="carCount" placeholder="Enter carCount">
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