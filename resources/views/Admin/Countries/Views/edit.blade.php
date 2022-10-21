<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Country Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/country/'.$country->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="box-body">
                
                <div class="form-group">
                    <div class="col-md-6">
                        <input type="hidden" class="form-control" name="id" id="id" value="{{$country->id}}">

                        <label for="nameAr">Name Ar</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$country->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">Name En</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$country->nameEn}}">
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