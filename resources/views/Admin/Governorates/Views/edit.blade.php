<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('general.update')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/governorate/'.$governorate->id)}}" method="POST">
            @csrf
            @method('patch')

            <input type="hidden" class="form-control" name="id" value="{{$governorate->id}}">
            <input type="hidden" name="country_id" value="governorate->country_id}}">
            
            <div class="box-body">
                
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="nameAr">@lang('country.name')</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$governorate->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">@lang('country.name') En</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$governorate->nameEn}}">
                    </div>
                </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">@lang('general.submit')</button>
            </div>
          </form>
        </div>
        <!-- /.box -->

       

      </div>
      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->