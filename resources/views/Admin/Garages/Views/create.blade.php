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
          <input type="hidden" name="country_id" value="{{$street->country_id}}" required>
          <input type="hidden" name="governorate_id" value="{{$street->governorate_id}}" required>
          <input type="hidden" name="city_id" value="{{$street->city_id}}" required>
          <input type="hidden" name="area_id" value="{{$street->area_id}}" required>
          <input type="hidden" name="street_id" value="{{$street->id}}" required>

          <div class="box-body">

            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('garage.saies_id')</label>
                <select class="form-control" name="saies_id" required>
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
                <input type="text" class="form-control" name="nameAr" id="nameAr" placeholder="@lang('garage.name')" required>
              </div>
              <div class="col-md-6">
                <label for="nameEn">@lang('garage.name') En</label>
                <input type="text" class="form-control" name="nameEn" id="nameEn" placeholder="@lang('garage.name') En" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="hourCost">@lang('garage.hourCost')</label>
                <input type="number" class="form-control" name="hourCost" id="hourCost" placeholder="@lang('garage.hourCost')" required>
              </div>
              <div class="col-md-6">
                <label for="vipCost">@lang('garage.vipCost')</label>
                <input type="number" class="form-control" name="vipCost" id="vipCost" placeholder="@lang('garage.vipCost')" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6">
                <label for="valetCost">@lang('garage.valetCost')</label>
                <input type="number" class="form-control" name="valetCost" id="valetCost" placeholder="@lang('garage.valetCost')" required>
              </div>
              <div class="col-md-6">
                <label for="fineCost">@lang('garage.fineCost')</label>
                <input type="number" class="form-control" name="fineCost" id="fineCost" placeholder="@lang('garage.fineCost')" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6">
                <label for="freeHours">@lang('garage.freeHours')</label>
                <input type="number" class="form-control" name="freeHours" id="freeHours" value="0" required>
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