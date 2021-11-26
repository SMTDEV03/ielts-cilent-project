 <!-- Register & Login Wrapper Start -->
 <div class="register-login-wrapper">
    <div class="row align-items-center">
       <div class="col-lg-6">
          <!-- Register & Login Images Start -->
          <div class="register-login-images">
             <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                   <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                   <div class="carousel-item active">
                      <img src="{{ asset('public/assets/front_assets/images/register-slider-1.png') }}" class="d-block mx-auto" alt="">
                   </div>
                   <div class="carousel-item">
                      <img src="{{ asset('public/assets/front_assets/images/register-slider-2.png') }}" class="d-block mx-auto" alt="">
                   </div>

                </div>
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
                      <input type="text" name="fname" placeholder="First Name" value="{{ old('fname') }}">
                   </div>
                   <div class="single-form">
                      <input type="text" name="lname" placeholder="Last Name" value="{{ old('lname') }}">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
                   </div>
                   <!-- Single Form End -->
                   <!-- Single Form Start -->
                   <div class="single-form">
                      <input type="password" name="c_password" placeholder="Confirm Password" value="{{ old('c_password') }}">
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