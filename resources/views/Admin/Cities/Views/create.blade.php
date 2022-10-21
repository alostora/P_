<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">create city Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/city')}}" method="POST">
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