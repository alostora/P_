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
          <form role="form" action="{{url('admin/garage')}}" method="POST">
            @csrf
            <input type="hidden" name="country_id" value="{{$street->country_id}}">
            <input type="hidden" name="governorate_id" value="{{$street->governorate_id}}">
            <input type="hidden" name="city_id" value="{{$street->city_id}}">
            <input type="hidden" name="area_id" value="{{$street->area_id}}">
            <input type="hidden" name="street_id" value="{{$street->id}}">

            <div class="box-body">
              
              <div class="form-group">
                <div class="col-md-6">
                  <label>@lang('garage.saies_id')</label>
                    <select class="form-control" name="saies_id">
                      @if(!empty($saies))
                        @foreach ($saies as $key=>$oneSaies)
                          <option value="{{$oneSaies->id}}">{{$oneSaies->name}}</option>
                        @endforeach
                      @endif     
                    </select>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="nameAr">@lang('garage.name')</label>
                    <input type="text" class="form-control" name="nameAr" id="nameAr" placeholder="@lang('garage.name')">
                </div>
                <div class="col-md-6">
                    <label for="nameEn">@lang('garage.name') En</label>
                    <input type="text" class="form-control" name="nameEn" id="nameEn" placeholder="@lang('garage.name') En">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="longitude">@lang('garage.longitude')</label>
                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="@lang('garage.longitude')">
                </div>
                <div class="col-md-6">
                    <label for="latitude">@lang('garage.latitude')</label>
                    <input type="text" class="form-control" name="latitude" id="latitude" placeholder="@lang('garage.latitude')">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="hourCost">@lang('garage.hourCost')</label>
                    <input type="number" class="form-control" name="hourCost" id="hourCost" placeholder="@lang('garage.hourCost')">
                </div>
                <div class="col-md-6">
                    <label for="carCount">@lang('garage.carCount')</label>
                    <input type="number" class="form-control" name="carCount" id="carCount" placeholder="@lang('garage.carCount')">
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