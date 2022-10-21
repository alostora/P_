<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit governorate Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/governorate/'.$governorate->id)}}" method="POST">
            @csrf
            @method('patch')

            <input type="hidden" class="form-control" name="id" id="id" value="{{$governorate->id}}">
            
            <div class="box-body">

              <div class="form-group">
                <div class="col-md-6">
                  <label>Countries</label>
                    <select class="form-control" name="country_id">
                      @if(!empty($countries))
                        @foreach ($countries as $key=>$country)
                          @if($governorate->country_id == $country->id)
                            <option value="{{$country->id}}" selected>{{$country->nameAr}}</option>
                          @else
                            <option value="{{$country->id}}">{{$country->nameAr}}</option>
                          @endif
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
              <div class="clearfix"></div>
                
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="nameAr">Name Ar</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$governorate->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">Name En</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$governorate->nameEn}}">
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