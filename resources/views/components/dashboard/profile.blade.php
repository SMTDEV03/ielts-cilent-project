    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-8">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">

                <li class="nav-item">Profile Settings </li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="card-body">
                  <form class="form-horizontal form-material" action="@if(auth()->user()->role_id == 1) {{ route('update_profile') }}@else {{ route('admin_profile') }} @endif" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ auth()->user()->id }}" />
                    <input type="hidden" name="role" value="{{ auth()->user()->role_id }}" />
                    <div class="form-group">
                      <label class="col-md-12">First Name</label>
                      <div class="col-md-12">
                        <input placeholder="First Name" name="fname" class="form-control form-control-line" type="text" value="{{ (old('fname')) ? old('fname') : auth()->user()->fname }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Last Name</label>
                      <div class="col-md-12">
                        <input placeholder="Last Name" name="lname" class="form-control form-control-line" type="text" value="{{ (old('lname')) ? old('lname') : auth()->user()->lname }}">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Email</label>
                      <div class="col-md-12">
                        <input class="form-control form-control-line" name="email" type="email" value="{{ auth()->user()->email }}" readonly>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Password</label>
                      <div class="col-md-12">
                        <input name="password" class="form-control form-control-line" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Confirm Password</label>
                      <div class="col-md-12">
                        <input name="c_password" class="form-control form-control-line" type="password">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main row -->
    </div>
    <!-- /.content -->

