@extends('layouts.dashboard')
@section('title','Edit Sample')

@section('content')

<!-- Dashboard aside Start -->
<x-dashboard.admin_aside />
<!-- Dashboard aside End -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header sty-one">
    <h1 class="text-black">Edit Sample</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="sub-bread"><i class="fa fa-angle-right"></i>Sample</li>
      <li><i class="fa fa-angle-right"></i>Edit </li>
    </ol>
  </div>

  <!-- Main content -->
  <div class="content">
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="info-box">
            <div class="card tab-style1">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs profile-tab" role="tablist">

                <li class="nav-item">Edit Sample</li>
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <div class="card-body">
                  <form class="form-horizontal form-material" action="{{ route('admin_sample_update') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $sample->id }}" name="id" />
                    <div class="form-group">
                      <label class="col-md-12">Type</label>
                      <div class="col-md-12">
                        <select class="form-control form-control-line" name="type" required>
                          <option selected disabled>Choose Type</option>
                          <option value="1"  @if($sample->sample_id == 1) selected @endif >Essay</option>
                          <option value="2"  @if($sample->sample_id == 2) selected @endif >Letter</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Title</label>
                      <div class="col-md-12">
                        <input placeholder="Enter Title" name="title" value="{{ (old('title')) ? old('title'): $sample->question  }}" class="form-control form-control-line" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-12">Description</label>
                      <div class="col-md-12">
                        <textarea name="answer" placeholder="Enter Description" class=" ckeditor form-control form-control-line" style="resize: none; height:250px">
                        {{ (old('answer')) ? old('answer') : $sample->answer }}
                        </textarea>

                      </div>
                    </div>
                    <!-- <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input placeholder="Email" value="{{ old('email') }}" class="form-control form-control-line" name="email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Password" name="password" minlength="6" class="form-control form-control-line" type="password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Confirm Password" name="c_password" minlength="6" class="form-control form-control-line" type="password" required>
                                        </div>
                                    </div> -->
                    <div class="form-group">
                      <div class="col-sm-12">
                        <button class="btn btn-success" type="submit">Update Sample</button>
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
  </div>
  <!-- Main content End -->

</div>

@endsection

@section('extra-js')
<script src="https://cdn.ckeditor.com/4.14.1/basic/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection