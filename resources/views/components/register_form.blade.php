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
             <h3 class="title">Registration <span>Now</span></h3>
             <div class="form-wrapper pt-0">
                <form action="{{ route('register') }}" method="post">
                   @csrf
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="text" name="fname" placeholder="First Name">
                   </div>
                   <div class="single-form">
                      <input type="text" name="lname" placeholder="Last Name">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="email" name="email" placeholder="Email">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="password" name="password" placeholder="Password">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="password" name="c_password" placeholder="Confirm Password">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <button class="btn btn-primary btn-hover-dark w-100">Create an account</button>
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