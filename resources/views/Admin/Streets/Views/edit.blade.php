<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">@lang('general.update')</h3>
          </div>
          <form role="form" action="{{url('admin/street/'.$street->id)}}" method="POST">
            @csrf
            @method('patch')

            <input type="hidden" name="country_id" value="{{$street->country_id}}">
            <input type="hidden" name="governorate_id" value="{{$street->governorate_id}}">
            <input type="hidden" name="city_id" value="{{$street->city_id}}">
            <input type="hidden" name="area_id" value="{{$street->area_id}}">
            <input type="hidden" name="id" value="{{$street->id}}">
            
            <div class="box-body">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="nameAr">@lang('country.name')</label>
                        <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$street->nameAr}}">
                    </div>
                    <div class="col-md-6">
                        <label for="nameEn">@lang('country.name') En</label>
                        <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$street->nameEn}}">
                    </div>
                </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">@lang('general.submit')</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</section>