<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar" style="display:{{auth()->user()->type == \App\Constants\UserTyps::MODERATOR['code'] ? 'none' : ''}}">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('AdminDesign')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{auth()->user()->name}}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>@lang('general.online')</a>
      </div>
    </div>
    <!-- search form -->
    <!-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"><a href="{{url('admin')}}">@lang('general.home')</a></li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>@lang('general.dashboard')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="{{url('admin/admins')}}">
              <i class="fa fa-circle-o"></i>@lang('general.admins')
            </a>
          </li>
          <li>
            <a href="{{url('admin/garage-keepers')}}">
              <i class="fa fa-circle-o"></i>@lang('general.saies')
            </a>
          </li>
          <li>
            <a href="{{url('admin/countries')}}">
              <i class="fa fa-circle-o"></i>@lang('general.countries')
            </a>
          </li>
          <li>
            <a href="{{url('admin/close-parking-cars')}}">
              <i class="fa fa-circle-o"></i>@lang('general.close_parking')
            </a>
          </li>
          <li>
            <a href="{{url('admin/open-parking-cars')}}">
              <i class="fa fa-circle-o"></i>@lang('general.open_parking')
            </a>
          </li>
          <li>
            <a href="{{url('admin/seller-accountants')}}">
              <i class="fa fa-circle-o"></i>@lang('general.seller_accountants')
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>

<div class="content-wrapper">
  
@if ($errors->any())
<div class="alert alert-warning col-md-6">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session()->has('success'))
<div class="alert alert-success col-md-6">
    <ul>
        <li>{{ session('success') }}</li>
    </ul>
</div>
@endif