<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">@lang('general.create')</h3>
        </div>
        <form role="form" action="{{url('admin/assigned-garage-keeper')}}" method="POST">
          @csrf
          <input type="hidden" name="garage_id" value="{{$garage->id}}">
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
          </div>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">@lang('general.submit')</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>