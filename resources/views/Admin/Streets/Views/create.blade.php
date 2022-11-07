<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
          <h3 class="box-title">@lang('general.create')</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/street')}}" method="POST">

            @csrf

            <input type="hidden" name="country_id" value="{{$area->country_id}}">
            <input type="hidden" name="governorate_id" value="{{$area->governorate_id}}">
            <input type="hidden" name="city_id" value="{{$area->city_id}}">
            <input type="hidden" name="area_id" value="{{$area->id}}">

            <div class="box-body">
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="nameAr">@lang('country.name')</label>
                    <input type="text" class="form-control" name="nameAr" id="nameAr" placeholder="@lang('country.name')">
                </div>
                <div class="col-md-6">
                    <label for="nameEn">@lang('country.name') En</label>
                    <input type="text" class="form-control" name="nameEn" id="nameEn" placeholder="@lang('country.name') En">
                </div>
              </div>
            </div>
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