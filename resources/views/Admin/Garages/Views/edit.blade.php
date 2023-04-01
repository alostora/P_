<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('general.update')</h3>
        </div>
        <form role="form" action="{{url('admin/garage/'.$garage->id)}}" method="POST">

          @csrf

          @method('patch')

          <input type="hidden" name="country_id" value="{{$garage->country_id}}" required>
          <input type="hidden" name="governorate_id" value="{{$garage->governorate_id}}" required>
          <input type="hidden" name="city_id" value="{{$garage->city_id}}" required>
          <input type="hidden" name="area_id" value="{{$garage->area_id}}" required>
          <input type="hidden" name="street_id" value="{{$garage->street_id}}" required>
          <input type="hidden" name="id" value="{{$garage->id}}" required>

          <div class="box-body">
            <div class="form-group">
              <div class="col-md-6">
                <label>@lang('garage.saies_id')</label>
                <select class="form-control" name="saies_id" required>
                  @if(!empty($saies))
                  @foreach ($saies as $key=>$oneSaies)
                  <option value="{{$oneSaies->id}}" {{$garage->saies_id == $oneSaies->id ? "selected" : ""}}>
                    {{$oneSaies->name}}
                  </option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="nameAr">@lang('garage.name')</label>
                <input type="text" class="form-control" name="nameAr" id="nameAr" value="{{$garage->nameAr}}" required>
              </div>
              <div class="col-md-6">
                <label for="nameEn">@lang('garage.name') En</label>
                <input type="text" class="form-control" name="nameEn" id="nameEn" value="{{$garage->nameEn}}" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="hourCost">@lang('garage.hourCost')</label>
                <input type="text" class="form-control" name="hourCost" id="hourCost" value="{{$garage->hourCost}}" required>
              </div>
              <div class="col-md-6">
                <label for="vipCost">@lang('garage.vipCost')</label>
                <input type="number" class="form-control" name="vipCost" id="vipCost" value="{{$garage->vipCost}}" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="valetCost">@lang('garage.valetCost')</label>
                <input type="number" class="form-control" name="valetCost" id="valetCost" value="{{$garage->valetCost}}" required>
              </div>
              <div class="col-md-6">
                <label for="fineCost">@lang('garage.fineCost')</label>
                <input type="number" class="form-control" name="fineCost" id="fineCost" value="{{$garage->fineCost}}" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6">
                <label for="freeHours">@lang('garage.freeHours')</label>
                <input type="number" class="form-control" name="freeHours" id="freeHours" value="{{$garage->freeHours ? $garage->freeHours : 0 }}" required>
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