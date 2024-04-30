@include('Rihana.header')

<!-- Navigation And Logo
	================================================== -->
	
	
	@include('Rihana.topbar')
		
	<!-- Primary Page Layout
	================================================== -->

			<div class="section full-height" id="home">
	
				<div class="customNavigation">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
							
				<div id="owl-top" class="owl-carousel owl-theme">		 
					<div class="item top-image-1">
						<div class="hero-top">							
							<div class="container">	
								<div class="twelve columns">
									<h2>Rihana Park</h2>
								</div>	
							</div>		
						</div>		
					</div>			
					<div class="item top-image-2">
						<div class="hero-top">							
							<div class="container">	
								<div class="twelve columns">
									<h2>Rihana Park</h2>
								</div>
							</div>		
						</div>	
					</div>
					<div class="item top-image-3"> 
						<div class="hero-top">							
							<div class="container">	
								<div class="twelve columns">
									<h2>Rihana Park</h2>
								<!-- <a class="link link--takiri" href="#contact" data-gal="m_PageScroll2id" data-ps2id-offset="75">IN TOUCH <span>Contact us</span></a> -->
								</div>
							</div>		
						</div>	
									
					</div>
								 
				</div>	

			</div>	
			
			<div class="clear"></div>

			<!-- <div class="banner-1 padding-top-bottom-small"> -->
				<div class="clear"></div>	

				<div class="section padding-top-bottom-small dark-background">
					<div class="container">					
						<div class="twelve columns">			
							<div id="owl-logo" class="owl-carousel owl-theme">
												 
								<div class="item1">
									<img src="/assets/image/logos/1.png" alt="">		
								</div>										
								<div class="item1">
									<img src="/assets/image/logos/2.png" alt="">			
								</div>										
								<div class="item1"> 
									<img src="/assets/image/logos/3.png" alt="">				
								</div>		 
								<div class="item1">
									<img src="/assets/image/logos/4.png" alt="">			
								</div>										
								<div class="item1">
									<img src="/assets/image/logos/5.png" alt="">			
								</div>										
								<div class="item1"> 
									<img src="/assets/image/logos/6.png" alt="">				
								</div>		 
								<div class="item1">
									<img src="/assets/image/logos/1.png" alt="">			
								</div>										
								<div class="item1">	
									<img src="/assets/image/logos/2.png" alt="">		
								</div>										
								<div class="item1"> 
									<img src="/assets/image/logos/3.png" alt="">				
								</div> 
								<div class="item1">
									<img src="/assets/image/logos/4.png" alt="">			
								</div>										
								<div class="item1">
									<img src="/assets/image/logos/5.png" alt="">			
								</div>	
												 
							</div>	
						</div>	
					</div>
				</div>							
				</div>
			
				<div class="clear"></div>	
				<div id="about">
					<div class="section padding-top-bottom white-background">
							<div class="container">					
									<div class="four columns">				
											<div class="section-title">
													<h3>About us</h3> 
													<p>Our ambition is<br>our weaponry.</p>
											</div>
									</div>
									<div class="four columns">            
											@foreach ($aboutData->take(2) as $about) 
													<div class="about-block bottom-margin">   
															<h6><span>{{ $loop->iteration }}</span>{{ $about->AboutHeadingOne }}</h6>
															<p>{{ $about->AboutPeragraphOne }}</p>
													</div>      
											@endforeach
									</div>
									<div class="four columns">
											@foreach ($aboutData->skip(2) as $about) 
													<div class="about-block bottom-margin">   
															<h6><span>{{ $loop->iteration + 2 }}</span>{{ $about->AboutHeadingOne }}</h6>
															<p>{{ $about->AboutPeragraphOne }}</p>
													</div>      
											@endforeach
									</div>
							</div>
					</div>
			</div>
			

				<div class="clear"></div>	
				
				<div class="section grey-background">
					
					<div class="cd-single-item">
						<div class="cd-slider-wrapper">
							<ul class="cd-slider">
								<!-- <li class="selected"><img src="images/img-1.jpg" alt="Product Image 1"></li> -->
								<li><img src="/assets/image/img-2.jpg" alt="Product Image 2"></li>
								<li><img src="/assets/image/img-3.jpg" alt="Product Image 3"></li>
							</ul> <!-- cd-slider -->
				
							<ul class="cd-slider-navigation">
								<li><a href="#0" class="cd-prev inactive">Next</a></li>
								<li><a href="#0" class="cd-next">Prev</a></li>
							</ul> <!-- cd-slider-navigation -->
				
							<a href="#0" class="cd-close">Close</a>
						</div> <!-- cd-slider-wrapper -->
				
						<div class="cd-item-info">
							<!-- <p>Our agency can only be as strong as our people and because of this, we hired <span class="counter-facts">17</span> individuals who have won <span class="counter-facts">45</span> awards with <span class="counter-facts">27</span> clients at the <span class="counter-facts">52</span> projects and who aren’t afraid of challenges.</p> 	 -->
						</div> <!-- cd-item-info -->
					</div> <!-- cd-single-item -->
				
				</div>

				<div class="clear"></div>

				<div class="section padding-top-bottom white-background">
					<div class="container">                    
							<div class="twelve columns">               
									<div class="section-title on-center just-heading">
											<h3>OUR TEAM</h3> 
									</div>
							</div>              
			
							<div class="twelve columns">
									<div class="team-carousel-wrap">
											<div id="sync1" class="owl-carousel">
													@foreach ($OurTeamData as $teamMember)
													<div class="item">
															<p>"{{ $teamMember->TeamPeragraph }}"</p>
															<h6>{{ $teamMember->TeamHeading }}<br><span>{{ $teamMember->TeamPost }}</span></h6> 
															<div class="social-team">
																	<ul class="list-social-team">
																			<li class="icon-team tipped" data-title="YouTube"  data-tipper-options='{"direction":"top","follow":"true"}'>
																					<a href="https://www.youtube.com/channel/UC9pIzwcFlGe8ZRlZkSNCejA"><i class="fa fa-youtube-play"></i></a>
																			</li>
																			<li class="icon-team tipped" data-title="Instagram"  data-tipper-options='{"direction":"top","follow":"true"}'>
																					<a href="https://www.instagram.com/raihanapark.iq?igsh=NTNza3MzcmxvbjZn"><i class="fa fa-instagram"></i></a>
																			</li>
																			<li class="icon-team tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
																					<a href="https://www.facebook.com/profile.php?id=100094593293144&mibextid=PlNXYD"><i class="fa fa-facebook-f"></i></a>
																			</li>
																			<li class="icon-team tipped" data-title="WhatSapp"  data-tipper-options='{"direction":"top","follow":"true"}'>
																					<a href="https://wa.me/9647735660066"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
																			</li>
																	</ul>   
															</div>
														</div>
														@endforeach
											</div>
			
											<div id="sync2" class="owl-carousel">
													@foreach ($OurTeamData as $teamMember)
													<div class="item">
															<img src="/ourteamimages/{{$teamMember->TeamImg}}" alt="">
													</div>
													@endforeach
											</div>
									</div>  
							</div>  
					</div>  
			</div>
			
			<div class="clear"></div>
			<div id="work">
						 <div class="section padding-top-bottom white-background">
								 <div class="container">					
										 <div class="twelve columns">				
												 <div class="section-title on-center">
														 <h3>Gallery</h3> 
														 <!-- <p>We work in cycles. Build something nimble and let<br>it grow, gradually, into something huge.</p> -->
												 </div>
										 </div>
				 
										 <div class="clear"></div>
				 
										 <div class="portfolio">
												 <!-- Portfolio items will be dynamically generated here -->
										 </div>
				 
										 <div class="expander-wrap relative">
												 <div id="expander-wrap">
														 <p class="cls-btn"><a class="close">&#xf2d7;</a></p>
														 <div class="expander-inner"></div>
												 </div>
										 </div>
				 
										 <div class="clear"></div>
				 
										 <div class="twelve columns">
												 <div id="portfolio-filter">
														 <ul id="filter">
																 <li><a href="#" class="current" data-filter="*" title="">all</a></li>
																 <!-- Additional filter options can be added here if needed -->
														 </ul>
												 </div>
										 </div>	
								 </div>
								 <div class="clear"></div>
				 
								 <div id="projects-grid">
										 <!-- This is where your portfolio items will be looped through -->
										 @foreach ($GalleryData as $data)
												 <div class="portfolio-box-1">
														 <div class="mask-1"></div>
														 <img src="/gallerys/{{$data->GalleryImg}}" alt="{{$data->ImageHeading}}">
														 <h6>{{$data->ImageHeading}}</h6>
														 <p>{{$data->ImageTitle}}</p>
														 <a class="group2 tipped" href="/gallerys/{{$data->GalleryImg}}" data-title="image zoom"  data-tipper-options='{"direction":"top","follow":"true"}'><div class="icon-2">&#xf2c7;</div></a>
												 </div>
										 @endforeach
								 </div>
						 </div>
				 </div>

			
<div class="clear"></div>	

<div id="features">
<div class="section padding-top-bottom">
  
  <div class="parallax-2"></div>
  
  <div class="container z-index ">				
    <div class="twelve columns">				
      <div class="section-title on-center with-dark-back">
        <h3>features</h3> 
        <p>Anime is intended to have ambiguous features.<br>That's part of the art form.</p>
      </div>
    </div>						
    <div class="four columns">			
      <div class="box-parallax-features margin-top right">
        <div class="icon">&#xf37b;</div>
        <div class="clear"></div>
        <h6>Unlimited Colors</h6>
        <p>Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus.</p>
      </div>			
      <div class="box-parallax-features margin-top right">
        <div class="icon">&#xf36c;</div>
        <div class="clear"></div>
        <h6>Creative Sections</h6>
        <p>Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus.</p>
      </div>	
    </div>				
    <div class="four columns">		
      <div class="box-parallax-features">
        <img src="/assets/image/iphones.png" alt="">
      </div>	
    </div>				
    <div class="four columns">		
      <div class="box-parallax-features margin-top left">
        <div class="icon">&#xf368;</div>
        <div class="clear"></div>
        <h6>Easy Setup</h6>
        <p>Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus.</p>
      </div>			
      <div class="box-parallax-features margin-top left">
        <div class="icon">&#xf35a;</div>
        <div class="clear"></div>
        <h6>Customer Support</h6>
        <p>Praesent sed nisi eleifend, fermentum orci amet, iaculis ultricies purus.</p>
      </div>	
    </div>	
  </div>
</div>	

<div class="clear"></div>	

<div class="section padding-top-bottom grey-background">				
  <div class="container">				
    <div class="twelve columns">			
      <div id="owl-clients" class="owl-carousel owl-theme">
                 
        <div class="item2">
          <p>"Friendly people are caring people, eager to provide encouragement and support when needed most."</p>
          <h6>Rosabeth Moss Kanter</h6>		
        </div>										
        <div class="item2">	
          <p>"You can design and create, and build the most wonderful place in the world. But it takes people to make the dream a reality."</p>
          <h6>Walt Disney</h6>		
        </div>										
        <div class="item2"> 
          <p>"Eventually everything connects - people, ideas, objects. The quality of the connections is the key to quality per se."</p>
          <h6>Charles Eames</h6>				
        </div>	
                 
      </div>	
    </div>		
  </div>
</div>	




			 {{--  This Code Is Extra But Don't Comment And Delete This Code Olready Display None This Code --}}
			<div class="clear"></div>	

			<div class="section padding-top-bottom white-background " style="display: none;">				
				<div class="container">			
					<div class="twelve columns">				
						<div class="section-title on-center just-heading">
							<h3>our skills</h3> 
						</div>
					</div>
					<div class="six columns">		
						<div class="skills-name">photoshop <span><span class="counter-skills">70</span>%</span></div>
						<div class="pro-bar-container pro-bar-margin">					
							<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
						</div>
															
						<div class="skills-name">html5 <span><span class="counter-skills">87</span>%</span></div>
						<div class="pro-bar-container pro-bar-margin">
							<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
						</div>
															
						<div class="skills-name">wordpress <span><span class="counter-skills">64</span>%</span></div>
						<div class="pro-bar-container pro-bar-margin">
							<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
						</div>
						
						<div class="skills-name">css3 <span><span class="counter-skills">93</span>%</span></div>
						<div class="pro-bar-container">					
							<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
						</div>	
					</div>
					<div class="six columns">
						<div class="accordion">
								
							<div class="accordion_in">
								<div class="acc_head">FULLY CUSTOMIZABLE</div>
								<div class="acc_content">
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>

							<div class="accordion_in">
								<div class="acc_head">UNLIMITED OPTIONS</div>
								<div class="acc_content">
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
								
							<div class="accordion_in">
								<div class="acc_head">RETINA READY</div>
								<div class="acc_content">
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>

							<div class="accordion_in">
								<div class="acc_head">100% RESPONSIVE</div>
								<div class="acc_content">
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>

							<div class="accordion_in">
								<div class="acc_head">UNLIMITED COLORS</div>
								<div class="acc_content">
									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
								</div>
							</div>
									
						</div>
					</div>			
				</div>
			</div>
			
			<div class="clear"></div>	

			<div class="section padding-top-bottom" style="display: none;">
				
				<div class="parallax-3"></div>
				
				<div class="container z-index ">				
					<div class="twelve columns">				
						<div class="section-title on-center with-dark-back just-heading">
							<h3>featured work</h3> 
						</div>
					</div>		
				</div>						
				<div id="owl-featured" class="owl-carousel owl-theme z-index ">
											 
					<div class="item">
						<a href="/assets/image/portfolio/classic/1.jpg" class="group1">
							<div class="mask"></div>
							<img src="/assets/image/portfolio/classic/1.jpg" alt="">	
							<p>shanghay chair</p> 
						</a>	
					</div>										
					<div class="item">
						<a href="/assets/image/portfolio/classic/2.jpg" class="group1">
							<div class="mask"></div>
							<img src="/assets/image/portfolio/classic/2.jpg" alt="">	
							<p>tracks leather</p>
						</a>		
					</div>										
					<div class="item"> 
						<a href="/assets/image/portfolio/classic/3.jpg" class="group1">
							<div class="mask"></div>
							<img src="/assets/image/portfolio/classic/3.jpg" alt="">	
							<p>hang around</p>
						</a>			
					</div>		 
					<div class="item">
						<a href="/assets/image/portfolio/classic/4.jpg" class="group1">
							<div class="mask"></div>
							<img src="/assets/image/portfolio/classic/4.jpg" alt="">	
							<p>slice</p>
						</a>		
					</div>										
					<div class="item">
						<a href="/assets/image/portfolio/classic/5.jpg" class="group1">
							<div class="mask"></div>
							<img src="/assets/image/portfolio/classic/5.jpg" alt="">
							<p>tube chair</p>	
						</a>		
					</div>										
					<div class="item">
						<a href="/assets/image/portfolio/classic/6.jpg" class="group1">
							<div class="mask"></div> 
							<img src="/assets/image/portfolio/classic/6.jpg" alt="">
							<p>turn around</p>
						</a>				
					</div>		 
											 
				</div>
				<div class="container z-index ">				
					<div class="twelve columns">	
						<div class="link-featured">
							<a class="link link--takiri" href="#work" data-gal="m_PageScroll2id" data-ps2id-offset="75">DISCOVER ALL <span>Our work</span></a>
						</div>
					</div>		
				</div>	
			</div>
			</div>	
			<div class="clear"></div>	

			<div class="section padding-top-bottom white-background" style="display: none;">				
				<div class="container">				
					<div class="twelve columns">				
						<div class="section-title on-center just-heading">
							<h3>our pricing</h3> 
						</div>
					</div>
					<div class="four columns">
						<div class="pricing-item">
							<h5>Basic</h5>
							<div class="number-price"><span>&#xf155;</span>30<span>/ MO</span></div>
							<p><span>256MB</span> MEMORY</p>
							<p><span>1</span> USER</p>
							<p><span>1</span> WEBSITE</p>
							<p><span>1</span> DOMAIN</p>
							<p>UNLIMITED BANDWIDTH</p>
							<p><span>24/7</span> SUPPORT</p>
							<a href="#" class="price-link">select</a>
						</div>
					</div>
					<div class="four columns">
						<div class="pricing-item popular">
							<h5>Popular</h5>
							<div class="number-price"><span>&#xf155;</span>60<span>/ MO</span></div>
							<p><span>512MB</span> MEMORY</p>
							<p><span>3</span> USER</p>
							<p><span>5</span> WEBSITE</p>
							<p><span>7</span> DOMAIN</p>
							<p>UNLIMITED BANDWIDTH</p>
							<p><span>24/7</span> SUPPORT</p>
							<a href="#" class="price-link">select</a>
						</div>
					</div>	
					<div class="four columns">
						<div class="pricing-item">
							<h5>Ultra</h5>
							<div class="number-price"><span>&#xf155;</span>90<span>/ MO</span></div>
							<p><span>1024MB</span> MEMORY</p>
							<p><span>5</span> USER</p>
							<p><span>10</span> WEBSITE</p>
							<p><span>10</span> DOMAIN</p>
							<p>UNLIMITED BANDWIDTH</p>
							<p><span>24/7</span> SUPPORT</p>
							<a href="#" class="price-link">select</a>
						</div>
					</div>		
				</div>
			</div>				
			</div>	
			
		 
			<div class="clear"></div>	

			<div class="section padding-top-bottom">
				
				<div class="parallax-4"></div>
								
				<div class="container z-index ">			
					@foreach ($ContactData as $ContactData)	
					<div class="four columns">		
						<div class="contact-parallax-box">		
							<h6>Call Us:</h6>	
							<a href="tel:{{$ContactData->Number}}"><p><span>&#xf4b9;</span>{{$ContactData->Number}}</p></a>		
						</div>	
					</div>		
					<div class="four columns">		
						<div class="contact-parallax-box">	
							<h6>Address:</h6>
							<a href="#google-contai" data-gal="m_PageScroll2id" data-ps2id-offset="75"><p><span>&#xf3a3;</span>{{$ContactData->Address}}</p></a>
						</div>
					</div>			
					<div class="four columns">		
						<div class="contact-parallax-box">	
							<h6>Email:</h6>
							<a href="mailto:{{$ContactData->Email}}"><p><span>&#xf2eb;</span>{{$ContactData->Email}}</p></a>	
						</div>
					</div>
					@endforeach
				</div>
			</div>
			
			<div class="clear"></div>	
			
			<div id="contact">
			<div class="section padding-top-bottom grey-background">				
				<div class="container">				
					<div class="twelve columns">				
						<div class="section-title on-center">
							<h3>Contact</h3> 
							<p>Get in touch. Don’t hesitate<br>to contact us.</p>
						</div>
					</div>
					<div class="clear"></div>
						
					<form name="ajax-form" id="ajax-form" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="six columns">
								<label for="name">
										<span class="error" id="err-name">Please enter name</span>
								</label>
								<input name="name" id="name" type="text" placeholder="Your Name: *" required/>
						</div>
						<div class="six columns">
								<label for="email">
										<span class="error" id="err-email">Please enter e-mail</span>
								</label>
								<input name="email" id="email" type="text" placeholder="E-Mail: *" required/>
						</div>
						<div class="six columns">
								<label for="mobile">
										<span class="error" id="err-mobile">Please enter Mobile</span>
								</label>
								<input name="mobile" id="mobile" type="text" placeholder="Your Mobile: *" required/>
								<small class="text-danger" id="numberError" style="display: none;">Please enter a valid number with 10 or 14 digits.</small>
						</div>
						<div class="twelve columns">
								<label for="message"></label>
								<textarea name="message" id="message" placeholder="Tell Us Everything" required></textarea>
						</div>
						<div class="twelve columns">
								<button type="submit" class="send_message" id="send">submit</button>
						</div>
						<div class="clear"></div>
						<div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
						<div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
						<div class="error" id="err-state"></div>
				</form>
				<div id="form-message"></div>
				
						
					<div class="clear"></div>
 
				 {{-- @endif --}}
					<div class="clear"></div>		
				</div>
			</div>	
			</div>
		
														

			<script>
				document.getElementById("ajax-form").addEventListener("submit", function(event) {
						let name = document.getElementById("name").value;
						let mobile = document.getElementById("mobile").value;
		
						let nameRegex = /^[a-zA-Z]+$/;
						let mobileRegex = /^[0-9]+$/;
		
				
						if (!nameRegex.test(name)) {
								document.getElementById("err-name").innerText = "Name should contain only letters";
								event.preventDefault(); 
						} else {
								document.getElementById("err-name").innerText = ""; 
						}
		
						if (!mobileRegex.test(mobile)) {
								document.getElementById("err-mobile").innerText = "Mobile should contain only numbers";
								event.preventDefault(); 
						} else {
								document.getElementById("err-mobile").innerText = ""; 
						}
				});
		</script>
		<script>
			document.getElementById("send").addEventListener("click", function() {
					let form = document.getElementById("ajax-form");
					let formData = new FormData(form);
	
			 
					var xhr = new XMLHttpRequest();
					xhr.open("POST", "{{ route('form.store') }}", true);
					xhr.onreadystatechange = function() {
							if (xhr.readyState === 4 && xhr.status === 200) {
							 
									document.getElementById("form-message").innerHTML = "<p>Form submitted successfully!</p>";
									form.reset();  
							} else if (xhr.readyState === 4 && xhr.status !== 200) {
						 
									document.getElementById("form-message").innerHTML = "<p>Form submission failed. Please try again later.</p>";
							}
					};
					xhr.send(formData);
			});
	</script>
	<script>
		document.getElementById("Number").addEventListener("input", function(event) {
				let input = event.target.value;
				let numberError = document.getElementById("numberError");
				if (!/^\d{10}$/.test(input) && !/^\d{14}$/.test(input)) {
						numberError.style.display = "block";
						event.target.setCustomValidity("Invalid number. Please enter a valid number with 10 or 12 digits.");
				} else {
						numberError.style.display = "none";
						event.target.setCustomValidity("");
				}
		});
	</script>
		@include('Rihana.footer')