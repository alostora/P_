<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{url('AdminDesign')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Alexander Pierce</p>
        <a href="#"><i class="fa fa-circle text-success"></i>@lang('admin.Online')</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">@lang('admin.MAINNAVIGATION')</li>
      <li class="active treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>@lang('admin.Dashboard')</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{url('admin/admins')}}"><i class="fa fa-circle-o"></i>@lang('admin.Admins') </a></li>
          <li class="active"><a href="{{url('admin/garage-keepers')}}"><i class="fa fa-circle-o"></i>@lang('admin.GarageKeeper')</a></li>
          <li class="active"><a href="{{url('admin/countries')}}"><i class="fa fa-circle-o"></i>@lang('admin.Countries')</a></li>
          <li class="active"><a href="{{url('admin/governorates')}}"><i class="fa fa-circle-o"></i>@lang('admin.governorates')</a></li>
          <li class="active"><a href="{{url('admin/cities')}}"><i class="fa fa-circle-o"></i>@lang('admin.Cities')</a></li>
          <li class="active"><a href="{{url('admin/areas')}}"><i class="fa fa-circle-o"></i>@lang('admin.Areas')</a></li>
          <li class="active"><a href="{{url('admin/streets')}}"><i class="fa fa-circle-o"></i>@lang('admin.Streets')</a></li>
          <li class="active"><a href="{{url('admin/garages')}}"><i class="fa fa-circle-o"></i>@lang('admin.Garages')</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Layout Options</span>
          <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
          </span>
        </a>
        {{-- <ul class="treeview-menu">
          <li><a href="{{url('AdminDesign')}}/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
          <li><a href="{{url('AdminDesign')}}/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
          <li><a href="{{url('AdminDesign')}}/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
          <li><a href="{{url('AdminDesign')}}/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
        </ul> --}}
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