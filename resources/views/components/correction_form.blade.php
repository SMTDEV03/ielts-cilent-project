<!-- Blog Details Wrapper Start -->
<div class="blog-details-wrapper mt-0">
   <div class="register-login-form mx-0">
      <div class="form-wrapper">
         <form>
            <!-- Single Form Start -->
            <div class="single-form mt-1 mb-4">
               <input type="text" placeholder="Type or paste the topic of your writing">
            </div>
            <!-- Single Form End -->
            <!-- Single Form Start -->
            <div class="single-form" id="correction_form_block">
               <textarea class="h-auto" placeholder="Type or paste your essay, letter or academic writing" rows="14" cols="50" id="correct1" main="0"></textarea>
            </div>
            <!-- Single Form End -->
            <div class="single-form" >
            @if(!isset(auth()->user()->id))
               <a  onclick="window.location.href='{{ route('login_index') }}'" class="btn btn-primary btn-hover-dark w-100 mx-auto d-block"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check With Assistant</a>
            @else
            <button type="button" class="btn btn-primary btn-hover-dark w-100 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#price-popup">
					<i class="fa fa-check-square-o" aria-hidden="true"></i> Check With Assistant
				</button>
               <!-- <a id="correct" onclick="check_spell()" class="btn btn-primary btn-hover-dark w-100 mx-auto d-block"><i class="fa fa-check-square-o" aria-hidden="true"></i> Check With Assistant</a> -->
            @endif
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Blog Details Wrapper End -->