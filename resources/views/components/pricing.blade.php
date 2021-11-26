<div class="section section-padding">
            <div class="container">
			
			<div class="section-title shape-03 text-center">
                  <h5 class="sub-title">Pricing</h5>
                  <h2 class="main-title">Our Pricing <span> Plan</span></h2>
               </div>
	
      <div class="row pt-10 mt-2 justify-content-center">
        <div class="col-md-5">
          <div class="card pricing-card pricing-plan-basic theme-bg">
            <div class="card-body">
			<i class="fa fa-cubes pricing-plan-icon" aria-hidden="true"></i>
             <p class="pricing-plan-title">Basic</p>
              <h3 class="pricing-plan-cost ml-auto">$3</h3>
			  <span class="plan-expire">Per 2 Weeks</span>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Test</li>
                <li>10 participants max</li>
              </ul>
              @if(!isset(auth()->user()->id))
              <a  onclick="window.location.href='{{ route('login_index') }}'" class="btn btn-primary btn-hover-dark"> Purchase</a>
              @else
              <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IQ9KRIBDrKC5T2" async> </script> </form>
                @endif
              </div>
          </div>
        </div>
        
        <div class="col-md-5">
          <div class="card pricing-card pricing-plan-enterprise theme-bg">
            <div class="card-body">
			<i class="fa fa-diamond pricing-plan-icon" aria-hidden="true"></i>
              <p class="pricing-plan-title">Premium</p>
              <h3 class="pricing-plan-cost ml-auto">$5</h3>
			  <span class="plan-expire">Per Month</span>
              <ul class="pricing-plan-features">
                <li>Unlimited conferences</li>
                <li>100 participants max</li>
                <li>Custom Test</li>
                <li>10 participants max</li>
              </ul>
              @if(!isset(auth()->user()->id))
              <a  onclick="window.location.href='{{ route('login_index') }}'" class="btn btn-primary btn-hover-dark"> Purchase</a>
              @else
              <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IQ9PaJWGQYQkzf" async> </script> </form>
              @endif
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
		 