 <!-- Register & Login Wrapper Start -->
 <div class="register-login-wrapper">
    <div class="row align-items-center">
       <div class="col-lg-6">
          <!-- Register & Login Images Start -->
          <div class="register-login-images">
             <div class="images">
                <img src="{{ asset('public/assets/front_assets/images/register-login.png') }}" alt="Register Login">
             </div>
          </div>
          <!-- Register & Login Images End -->
       </div>
       <div class="col-lg-6">
          <!-- Register & Login Form Start -->
          <div class="register-login-form">
             <h3 class="title">Login <span>Now</span></h3>
             <div class="form-wrapper pt-0">
                <form action="{{ route('login') }}" method="post">
                   @csrf
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                      @error('email')
                      <span style="color: red">{{ $message }}</span>
                      @enderror
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="password" name="password" class="form-control" placeholder="Enter password" value="{{ old('password') }}">
                      @error('password')
                      <span style="color: red">{{ $message }}</span>
                      @enderror
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <button class="btn btn-primary btn-hover-dark w-100">Login</button>
                   </div>
                   <!-- Single Form End -->
                </form>
             </div>
          </div>
          <!-- Register & Login Form End -->
       </div>
    </div>
 </div>
 <!-- Register & Login Wrapper End -->