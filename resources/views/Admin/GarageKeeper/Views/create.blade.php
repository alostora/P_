<!-- Main content -->
<section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">create Admin Page</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{url('admin/garage-keeper')}}" method="POST">
            @csrf
            <div class="box-body">
              <div class="form-group">
                <div class="col-md-6">

                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                </div>
                <div class="col-md-6">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="col-md-6">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confim Password">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="phone">
                </div>
                <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="address">
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-6">
                    <label for="idNo">id number</label>
                    <input type="text" class="form-control" name="idNo" id="idNo" placeholder="idNo">
                </div>
              </div>
            </div>

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>

       

      </div>
      
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->