@extends('master.layouts')

@section('body')

<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 pr-lg-5">
						<div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Recently Added</span>
		            <h2 class="mb-4">By State in Malaysia</h2>
		          </div>
		        </div>
                <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('img/image_1.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('img/image_2.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('img/image_3.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('img/image_4.jpg');">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>	
		      </div>
		      <div class="col-lg-3 sidebar">
		        <div class="row justify-content-center pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		            <h2 class="mb-4">Top Place</h2>
		          </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="{{ asset('img/company-1.jpg') }}" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Company Company</a></h3>
			        		<p><span class="number">500</span> <span>Open position</span></p>
			        	</div>
		        	</div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="{{ asset('img/company-2.jpg') }}" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">Facebook Company</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="{{ asset('img/company-3.jpg') }}" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		        <div class="sidebar-box ftco-animate">
		        	<div class="">
			        	<a href="#" class="company-wrap"><img src="{{ asset('img/company-4.jpg') }}" class="img-fluid" alt="Colorlib Free Template"></a>
			        	<div class="text p-3">
			        		<h3><a href="#">IT Programming INC</a></h3>
			        		<p><span class="number">700</span> <span>Open position</span></p>
			        	</div>
			        </div>
		        </div>
		      </div>
				</div>
			</div>
        </section>
@endsection