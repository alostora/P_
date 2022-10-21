<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">create Country Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/country')}}" method="POST">
            @csrf
            <div class="box-body">
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