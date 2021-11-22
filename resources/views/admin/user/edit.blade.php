@extends('layouts.dashboard')
@section('title','Edit User')

@section('content')

<!-- Dashboard aside Start -->
<x-dashboard.admin_aside />
<!-- Dashboard aside End -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
        <h1 class="text-black">Edit User</h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="sub-bread"><i class="fa fa-angle-right"></i>User</li>
            <li><i class="fa fa-angle-right"></i>Edit </li>
        </ol>
    </div>

    <!-- Main content -->
    <div class="content">
          <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-8">
                <div class="info-box">
                    <div class="card tab-style1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs profile-tab" role="tablist">

                            <li class="nav-item">Edit User</li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="{{ route('admin_user_update') }}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{ $user->id }}" name="id" />
                                    <div class="form-group">
                                        <label class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input placeholder="First Name" name="fname" value="{{ (old('fname')) ? old('fname') : $user->fname }}" class="form-control form-control-line" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input placeholder="Last Name" name="lname" value="{{ old('lname') ? old('lname') : $user->lname }}" class="form-control form-control-line" type="text" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input placeholder="Email" value="{{ old('email') ? old('email') : $user->email }}" class="form-control form-control-line" name="email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Password" name="password" minlength="6" class="form-control form-control-line" type="password" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input placeholder="Confirm Password" name="c_password" minlength="6" class="form-control form-control-line" type="password" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success" type="submit">Update</button>
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