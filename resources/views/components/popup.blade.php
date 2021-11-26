	  <div class="modal fade" id="price-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  	<div class="modal-dialog">
	  		<div class="modal-content">
	  			<div class="modal-header">
	  				<h5 class="modal-title" id="exampleModalLabel">Choose Your Plan</h5>
	  				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  			</div>
	  			<div class="modal-body price-pop-body">
	  				<div class="row mt-2 justify-content-center">
	  					<div class="col-md-6">
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
	  								<a onclick="window.location.href='{{ route('login_index') }}'" class="btn btn-primary btn-hover-dark w-100 mx-auto d-block"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check With Assistant</a>
	  								@else
	  								<form>
	  									<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IQ9KRIBDrKC5T2" async> </script>
	  								</form>
	  								@endif
	  							</div>
	  						</div>
	  					</div>

	  					<div class="col-md-6">
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
	  								<a onclick="window.location.href='{{ route('login_index') }}'" class="btn btn-primary btn-hover-dark w-100 mx-auto d-block"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check With Assistant</a>
	  								@else
	  								<form>
	  									<script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_IQ9PaJWGQYQkzf" async> </script>
	  								</form>
	  								@endif
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>

	  		</div>
	  	</div>
	  </div>