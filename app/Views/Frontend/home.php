<<<<<<< HEAD
<?php
// ... existing code ...
?>
<?= view('Frontend/frontend_partials/header', ['title' => 'Home Page', 'headers' => isset($headers) ? $headers : []]) ?>

    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo base_url('FontendAssets/images/bg_1.jpg'); ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-11 ftco-animate text-center">
          	<h1 class="mb-4">Highest Quality Care For Pets You'll Love </h1>
            <p><a href="#" class="btn btn-primary mr-md-4 py-3 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light ftco-no-pt ftco-intro">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services active text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-blind"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Dog Walking</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-dog-eating"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pet Daycare</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch px-4 ftco-animate">
            <div class="d-block services text-center">
              <div class="icon d-flex align-items-center justify-content-center">
            		<span class="flaticon-grooming"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Pet Grooming</h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="fa fa-chevron-right"></span><i class="sr-only">Read more</i></a>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-5 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url('<?php echo base_url('FontendAssets/images/about-1.jpg'); ?>');">
    				</div>
    			</div>
    			<div class="col-md-7 pl-md-5 py-md-5">
    				<div class="heading-section pt-md-5">
	            <h2 class="mb-4">Why Choose Us?</h2>
    				</div>
    				<div class="row">
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-stethoscope"></span></div>
	    					<div class="text pl-3">
	    						<h4>Care Advices</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-customer-service"></span></div>
	    					<div class="text pl-3">
	    						<h4>Customer Supports</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-emergency-call"></span></div>
	    					<div class="text pl-3">
	    						<h4>Emergency Services</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    				<div class="col-md-6 services-2 w-100 d-flex">
	    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-veterinarian"></span></div>
	    					<div class="text pl-3">
	    						<h4>Veterinary Help</h4>
	    						<p>Far far away, behind the word mountains, far from the countries.</p>
	    					</div>
	    				</div>
	    			</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Customer</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Professionals</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="20">0</strong>
              </div>
              <div class="text">
              	<span>Products</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="50">0</strong>
              </div>
              <div class="text">
              	<span>Pets Hosted</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 order-md-last">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url('<?php echo base_url('FontendAssets/images/about.jpg'); ?>');">
    					<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    				<div class="d-flex mt-3">
    					<div class="img img-2 mr-md-2" style="background-image:url('<?php echo base_url('FontendAssets/images/about-2.jpg'); ?>');"></div>
    					<div class="img img-2 ml-md-2" style="background-image:url('<?php echo base_url('FontendAssets/images/about-3.jpg'); ?>');"></div>
    				</div>
    			</div>

    			<div class="col-lg-6">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
	            <h2 class="mb-3">Frequently Asks Questions</h2>
	            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
    				</div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
						        	<p class="mb-0">How to train your pet dog?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0">How to manage your pets?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-0">What is the best grooming for your pets?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Far far away, behind the word mountains</li>
						      		<li>Consonantia, there live the blind texts</li>
						      		<li>When she reached the first hills of the Italic Mountains</li>
						      		<li>Bookmarksgrove, the headline of Alphabet Village</li>
						      		<li>Separated they live in Bookmarksgrove right</li>
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0">What are those requirements for sitting pets?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						      </div>
						    </div>
						  </div>
						</div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section" style="background-image: url('<?php echo base_url('FontendAssets/images/bg_2.jpg'); ?>');">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Happy Clients &amp; Feedbacks</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo base_url('FontendAssets/images/person_1.jpg'); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo base_url('FontendAssets/images/person_2.jpg'); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo base_url('FontendAssets/images/person_3.jpg'); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo base_url('FontendAssets/images/person_1.jpg'); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></span></div>
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(<?php echo base_url('FontendAssets/images/person_2.jpg'); ?>)"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Affordable Packages</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url(<?php echo base_url('FontendAssets/images/pricing-1.jpg'); ?>);"></div>
	            <div class="text-center p-4">
	            	<span class="excerpt d-block">Personal</span>
	            	<span class="price"><sup>$</sup> <span class="number">49</span> <sub>/mos</sub></span>
	            
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
		              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
		              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
		              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
		            </ul>

	            	<a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url(<?php echo base_url('FontendAssets/images/pricing-2.jpg'); ?>);"></div>
	            <div class="text-center p-4">
	            	<span class="excerpt d-block">Business</span>
		            <span class="price"><sup>$</sup> <span class="number">79</span> <sub>/mos</sub></span>
		            
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
		              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
		              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
		              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-4 ftco-animate">
	          <div class="block-7">
	          	<div class="img" style="background-image: url(<?php echo base_url('FontendAssets/images/pricing-3.jpg'); ?>);"></div>
	            <div class="text-center p-4">
	            	<span class="excerpt d-block">Ultimate</span>
		            <span class="price"><sup>$</sup> <span class="number">109</span> <sub>/mos</sub></span>
		            
		            <ul class="pricing-text mb-5">
		              <li><span class="fa fa-check mr-2"></span>5 Dog Walk</li>
		              <li><span class="fa fa-check mr-2"></span>3 Vet Visit</li>
		              <li><span class="fa fa-check mr-2"></span>3 Pet Spa</li>
		              <li><span class="fa fa-check mr-2"></span>Free Supports</li>
		            </ul>

		            <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Pets Gallery</h2>
          </div>
        </div>
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-1.jpg'); ?>);">
            	<a href="images/gallery-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Cat</span>
	              	<h2><a href="work-single.html">Persian Cat</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-2.jpg'); ?>);">
            	<a href="images/gallery-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Dog</span>
	              	<h2><a href="work-single.html">Pomeranian</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-3.jpg'); ?>);">
            	<a href="images/gallery-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Cat</span>
	              	<h2><a href="work-single.html">Sphynx Cat</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-4.jpg'); ?>);">
            	<a href="images/gallery-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Cat</span>
	              	<h2><a href="work-single.html">British Shorthair</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-5.jpg'); ?>);">
            	<a href="images/gallery-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Dog</span>
	              	<h2><a href="work-single.html">Beagle</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url(<?php echo base_url('FontendAssets/images/gallery-6.jpg'); ?>);">
            	<a href="images/gallery-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Dog</span>
	              	<h2><a href="work-single.html">Pug</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Latest news from our blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo base_url('FontendAssets/images/image_1.jpg'); ?>');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">April 07, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo base_url('FontendAssets/images/image_2.jpg'); ?>');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">April 07, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20 rounded" style="background-image: url('<?php echo base_url('FontendAssets/images/image_3.jpg'); ?>');">
              </a>
              <div class="text p-4">
              	<div class="meta mb-2">
                  <div><a href="#">April 07, 2020</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url('<?php echo base_url('FontendAssets/images/bg_3.jpg'); ?>');">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate">
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="#" class="appointment">
    					<div class="row">
    						<div class="col-md-12">
									<div class="form-group">
			    					<div class="form-field">
	          					<div class="select-wrap">
	                      <div class="icon"><span class="fa fa-chevron-down"></span></div>
	                      <select name="" id="" class="form-control">
	                      	<option value="">Select services</option>
	                        <option value="">Cat Sitting</option>
	                        <option value="">Dog Walk</option>
	                        <option value="">Pet Spa</option>
	                        <option value="">Pet Grooming</option>
	                        <option value="">Pet Daycare</option>
	                      </select>
	                    </div>
			              </div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Your Name">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			              <input type="text" class="form-control" placeholder="Vehicle number">
			            </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-calendar"></span></div>
			            		<input type="text" class="form-control appointment_date" placeholder="Date">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
			    					<div class="input-wrap">
			            		<div class="icon"><span class="fa fa-clock-o"></span></div>
			            		<input type="text" class="form-control appointment_time" placeholder="Time">
		            		</div>
			    				</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
			            </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
			              <input type="submit" value="Send message" class="btn btn-primary py-3 px-4">
			            </div>
								</div>
    					</div>
	          </form>
    			</div>
    		</div>
    	</div>
    </section>

   
=======
<?= view('Frontend/frontend_partials/header', ['title' => 'Home Page']) ?>


<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 text-center text-lg-start">
                <h1 class="display-1 text-uppercase text-dark mb-lg-4">Pet Shop</h1>
                <h1 class="text-uppercase text-white mb-lg-4">Make Your Pets Happy</h1>
                <p class="fs-4 text-white mb-lg-4">Dolore tempor clita lorem rebum kasd eirmod dolore diam eos kasd. Kasd clita ea justo est sed kasd erat clita sea</p>
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                    <a href="" class="btn btn-outline-light border-2 py-md-3 px-md-5 me-5">Read More</a>
                    <button type="button" class="btn-play" data-bs-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ms-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!-- Video Modal Start -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="<?php echo base_url('FontendAssets/img/about.jpg') ?>" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="border-start border-5 border-primary ps-5 mb-5">
                    <h6 class="text-primary text-uppercase">About Us</h6>
                    <h1 class="display-5 text-uppercase mb-0">We Keep Your Pets Happy All Time</h1>
                </div>
                <h4 class="text-body mb-4">Diam dolor diam ipsum tempor sit. Clita erat ipsum et lorem stet no labore lorem sit clita duo justo magna dolore</h4>
                <div class="bg-light p-4">
                    <ul class="nav nav-pills justify-content-between mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100 active" id="pills-1-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1"
                                aria-selected="true">Our Mission</button>
                        </li>
                        <li class="nav-item w-50" role="presentation">
                            <button class="nav-link text-uppercase w-100" id="pills-2-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2"
                                aria-selected="false">Our Vission</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                            <p class="mb-0">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                            <p class="mb-0">Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Services Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Services</h6>
            <h1 class="display-5 text-uppercase mb-0">Our Excellent Pet Care Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-house display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Boarding</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-food display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Feeding</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-grooming display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Grooming</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-cat display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Training</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-dog display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Exercise</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="service-item bg-light d-flex p-4">
                    <i class="flaticon-vaccine display-1 text-primary me-4"></i>
                    <div>
                        <h5 class="text-uppercase mb-3">Pet Treatment</h5>
                        <p>Kasd dolor no lorem sit tempor at justo rebum rebum stet justo elitr dolor amet sit</p>
                        <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Products</h6>
            <h1 class="display-5 text-uppercase mb-0">Products For Your Best Friends</h1>
        </div>
        <div class="owl-carousel product-carousel">
            <?php foreach ($products as $product): ?>
                <div class="pb-5">
                    <div class="product-item position-relative bg-light d-flex flex-column text-center">
                        <img class="img-fluid mb-4"
                            src="<?= base_url('uploads/' . $product['product_image']) ?>"
                            alt="<?= esc($product['product_name']) ?>">

                        <h6 class="text-uppercase"><?= esc($product['product_name']) ?></h6>
                        <h5 class="text-primary mb-0">₹<?= esc($product['product_price']) ?></h5>

                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn btn-primary py-2 px-3" href="#">
                                <i class="bi bi-cart"></i>
                            </a>
                            <a class="btn btn-primary py-2 px-3" href="#">
                                <i class="bi bi-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid bg-offer my-5 py-5">
    <div class="container py-5">
        <div class="row gx-5 justify-content-start">
            <div class="col-lg-7">
                <div class="border-start border-5 border-dark ps-5 mb-5">
                    <h6 class="text-dark text-uppercase">Special Offer</h6>
                    <h1 class="display-5 text-uppercase text-white mb-0">Save 50% on all items your first order</h1>
                </div>
                <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                <a href="" class="btn btn-light py-md-3 px-md-5 me-3">Shop Now</a>
                <a href="" class="btn btn-outline-light py-md-3 px-md-5">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Pricing Plan Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Pricing Plan</h6>
            <h1 class="display-5 text-uppercase mb-0">Competitive Pricing For Pet Services</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Basic</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>49<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5">
                    <h2 class="text-uppercase">Standard</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-dark p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>99<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-x fs-4 text-danger"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-light text-center pt-5 mt-lg-5">
                    <h2 class="text-uppercase">Extended</h2>
                    <h6 class="text-body mb-5">The Best Choice</h6>
                    <div class="text-center bg-primary p-4 mb-2">
                        <h1 class="display-4 text-white mb-0">
                            <small class="align-top"
                                style="font-size: 22px; line-height: 45px;">$</small>149<small
                                class="align-bottom" style="font-size: 16px; line-height: 40px;">/
                                Mo</small>
                        </h1>
                    </div>
                    <div class="text-center p-4">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>HTML5 & CSS3</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Bootstrap v5</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Responsive Layout</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <span>Browsers Compatibility</span>
                            <i class="bi bi-check2 fs-4 text-primary"></i>
                        </div>
                        <a href="" class="btn btn-primary text-uppercase py-2 px-4 my-3">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Plan End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Team Members</h6>
            <h1 class="display-5 text-uppercase mb-0">Qualified Pets Care Professionals</h1>
        </div>
        <div class="owl-carousel team-carousel position-relative" style="padding-right: 25px;">
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo base_url('FontendAssets/img/team-1.jpg') ?>" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo base_url('FontendAssets/img/team-2.jpg') ?>" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo base_url('FontendAssets/img/team-3.jpg') ?>" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo base_url('FontendAssets/img/team-4.jpg') ?>" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
            <div class="team-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="<?php echo base_url('FontendAssets/img/team-5.jpg') ?>" alt="">
                    <div class="team-overlay">
                        <div class="d-flex align-items-center justify-content-start">
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-twitter"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-facebook"></i></a>
                            <a class="btn btn-light btn-square mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bg-light text-center p-4">
                    <h5 class="text-uppercase">Full Name</h5>
                    <p class="m-0">Designation</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-testimonial py-5" style="margin: 45px 0;">
    <div class="container py-5">
        <div class="row justify-content-end">
            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel bg-white p-5">
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="<?php echo base_url('FontendAssets/img/testimonial-1.jpg') ?>" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Client Name</h5>
                        <span>Profession</span>
                    </div>
                    <div class="testimonial-item text-center">
                        <div class="position-relative mb-4">
                            <img class="img-fluid mx-auto" src="<?php echo base_url('FontendAssets/img/testimonial-2.jpg') ?>" alt="">
                            <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                                <i class="bi bi-chat-square-quote text-primary"></i>
                            </div>
                        </div>
                        <p>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat. Erat dolor rebum sit ipsum.</p>
                        <hr class="w-25 mx-auto">
                        <h5 class="text-uppercase">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="border-start border-5 border-primary ps-5 mb-5" style="max-width: 600px;">
            <h6 class="text-primary text-uppercase">Latest Blog</h6>
            <h1 class="display-5 text-uppercase mb-0">Latest Articles From Our Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php echo base_url('FontendAssets/img/blog-1.jpg') ?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="blog-item">
                    <div class="row g-0 bg-light overflow-hidden">
                        <div class="col-12 col-sm-5 h-100">
                            <img class="img-fluid h-100" src="<?php echo base_url('FontendAssets/img/blog-2.jpg') ?>" style="object-fit: cover;">
                        </div>
                        <div class="col-12 col-sm-7 h-100 d-flex flex-column justify-content-center">
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="bi bi-bookmarks me-2"></i>Web Design</small>
                                    <small><i class="bi bi-calendar-date me-2"></i>01 Jan, 2045</small>
                                </div>
                                <h5 class="text-uppercase mb-3">Dolor sit magna rebum clita rebum dolor</h5>
                                <p>Ipsum sed lorem amet dolor amet duo ipsum amet et dolore est stet tempor eos dolor</p>
                                <a class="text-primary text-uppercase" href="">Read More<i class="bi bi-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
>>>>>>> 3a6179a23b281024741b27a42226f0c5599bac99

<?= view('Frontend/frontend_partials/footer') ?>