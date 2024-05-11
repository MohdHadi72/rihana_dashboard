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
			
					@foreach ($HomeData as $HomeData)
					<div class="item" style="background-image: url(/productimage/{{$HomeData->HomeImg1}});">
						<div class="hero-top">
							<div class="container">
								<div class="twelve columns">
									<h2>{{$HomeData->HomeHeading1}}</h2>
								</div>
							</div>
						</div>
					</div>
				
					@endforeach 
				</div>
			
			<div class="clear"></div>

			<!-- <div class="banner-1 padding-top-bottom-small"> -->
				<div class="clear"></div>	

				<div class="section padding-top-bottom-small dark-background">
					<div class="container">					
						<div class="twelve columns">			
							<div id="owl-logo" class="owl-carousel owl-theme">
												 
								@foreach ($logodata as $logodata)
								<div class="item1">
									<img src="/logos/{{$logodata->Logo}}" alt="">		
								</div>										
								@endforeach
								
												 
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

			<div class="section padding-top-bottom">
				
				<div class="parallax-1">
					{{-- <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1215.18 702.43">
						<defs>
							<style>
								.cls-1, .cls-2 {
									fill: #fff;
								}
					
								.cls-2 {
									opacity: 0;
								}
							</style>
						</defs>
						<image width="7680" height="4320" transform="translate(0 32.74) scale(0.16)" xlink:href="G:%5COffice%20work%5CRaihana%20Park%5CAL%20HUR%20PERSPECTIVES%20FOR%20BILLBOARDS%2022-06-2022%5C16-12-2023%5C4.jpg"/>
						<path class="cls-1" d="M458.7,172.2s96.87,123.59,259.64,229.29c17.86,11.6,37,26.88,59,40.91,50.51,32.22,109.47,65.32,155.67,85.47,33.27,14.51,69.46,33.86,98.21,43.15,20.78,6.72,40.82,17.44,60.26,25.28,24.65,9.94,47.7,16.5,63.06,18.38,20.56,2.52,32.2-4.69,36-10,1.65-2.27,0-5.1,0-5.1l24.63-460.16H458.7Z" transform="translate(0 -139.46)"/>
						<rect class="cls-2" x="140.68" y="338.37" width="57.7" height="243.57"/>
						<polygon class="cls-2" points="205.87 286.96 205.87 323.05 249.11 324.41 425.45 150.54 387.32 112.66 205.87 286.96"/>
						<polygon class="cls-2" points="212.68 550.28 210.13 601.35 858.64 604.92 854.55 550.28 212.68 550.28"/>
						<polygon class="cls-2" points="417.45 206.62 607.91 375.64 861.7 518.62 883.66 476.24 643.15 339.39 445.02 171.54 417.45 206.62"/>
						<polygon class="cls-2" points="95.23 61.6 87.57 196.41 231.06 191.81 322.47 121.86 383.18 47.31 95.23 61.6"/>
						<path class="cls-2" d="M242.13,533.66l-2,14L244.85,558l12.43,11.4,2.89,2.05,3.06,5.95,2.39,7.66-3.07,7.66-7.49,9.19-7.32,7.32-2,8.86s-.34,9.53-.34,10.38,9.87,8.85,9.87,9.36S267,642.26,267,642.26l13.79-3.58L292,623.53s7-10.21,7.32-11.57.68-6,2.38-6.13,8.17-.85,8.85-.85h19.92l8.51-2s3.57-4.26,5.45-6.47,4.42-5.79,4.42-6.3a9.63,9.63,0,0,1,0-6.13c1.19-3.23-3.4-15.49-3.4-15.49s-12.43-5.44-12.94-5.44-9.36-1.2-9.36-1.2l-20.77,3.24-7.81-1.7-7.68-8-2.38-24.85L276,524.47l-11.91-5.11-13.62,5.11Z" transform="translate(0 -139.46)"/>
						<path class="cls-2" d="M298.47,461.66s-3.55,5.62-3.9,6.13-2.4,11.06-2.4,11.06l5.28,11.06,11.23,8h9.53l4.26-2.72,4.08.17,3.92,3.41,14.3,3.23h20.42l10.55-8.34,8.35-7.66,4.59-11.91,3.75-14.64-4.26-17.54,3.57-10.72L385.62,413l-13.11-7-15.15,1.53-10.72,10.38-3.24,12.26-2.89,1.19-2.38-.51-5.79-7.49L315.66,437l7,5.62,2,2,3.06,1.87-7,4.94s-10.22,2.38-10.9,2.55-6,1.7-6.3,2.21-4.42,4.26-4.42,4.26Z" transform="translate(0 -139.46)"/>
						<polygon class="cls-2" points="513.19 387.64 510.38 394.28 509.36 404.24 513.19 414.71 526.21 426.45 539.23 425.43 549.19 421.86 554.3 414.2 559.15 402.71 559.15 390.71 552.77 383.56 545.87 381.26 534.25 376.15 521.36 379.9 513.19 387.64"/>
						<path class="cls-2" d="M481.79,616.21v14l5.36,7.14,11,7.41s6.64,2.3,8.17,2,8.17-2.81,8.17-2.81L526,636.38l5.87-12.76V620l-1-10.47-4.09-8.42-8.93-3.32s-6.64-4.09-7.41-4.09-18.12,2.81-18.12,2.81l-8.43,12.51Z" transform="translate(0 -139.46)"/>
						<path class="cls-2" d="M364.09,513.06l40.85-26,22.46-5.36s33.2,10.21,33.71,12.25,19.91,12.23,20.68,13.14S492,523.53,492,524.55s-3.32,17.88-3.32,18.9,3.32,17.36,3.32,19.4a37.15,37.15,0,0,1-1.53,13.28,58.38,58.38,0,0,1-6.38,14.81c-2.56,4.08-19.15,18.38-19.41,19.15s-45.45,6.12-45.45,6.12l-22-7.91-7.66-3.07S374,588.38,373.28,588.38s-11.75-16.59-11.75-16.59-5.62-16.6-5.1-20.17S364.09,513.06,364.09,513.06Z" transform="translate(0 -139.46)"/>
						<path class="cls-2" d="M895.57,623.87,861.87,646l19.41,32-2.56,14.3L850.3,707.62,870,744.38l31-18.72,3.07,10.55,19.74-6.12,4.77,22.8,25.87-11.57,8.85-3.06-20.09-37.11,8.17-11.41s13.62-3.91,15.66-5.61,7.15-3.07,9.54-6.47,3.4-3.06,2.72-4.77-10.55-9.53-10.55-11.57-.68-7.49-2.73-10.21S962,639.53,962,639.53l-5.11-.68s-2.72-1.7-9.53,2.38-10.21,7.15-13.62,9.54.68-2-3.4,2.38-4.43-4.43-4.43-4.43-5.1-2-8.17-3.74,3.07-1.7-3.06-1.7-3.41-.68-6.13,0S895.57,623.87,895.57,623.87Z" transform="translate(0 -139.46)"/>
						<polygon class="cls-2" points="99.32 353.18 137.62 353.18 126.89 604.92 92.68 598.28 82.98 601.86 99.32 353.18"/>
					</svg> --}}

				</div>
				
				<div class="container z-index ">	
					<div class="twelve columns">	 
						<div class="box-parallax">	 
							<div class="image-wrap">
								<img src="images/imac.png" alt="">
							</div>					
							<p><span>&#xf452;</span> Creative Sections</p>	
							<p><span>&#xf482;</span> Parallax Effects</p>	
							<p><span>&#xf425;</span> Retina Ready</p>	
							<p><span>&#xf43f;</span> Smooth Scrolling</p>	
							<p><span>&#xf1fa;</span> Responsive Design</p>	
							<p><span>&#xf43d;</span> Easy Setup</p>
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
				 
								 <div id="projects-grid" >
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
				 
				 @include('Rihana.leaseform')
				<div id="form-message"></div>
				
<br>
<br>
<br>
			
<div class="clear"></div>	

<div id="features" style="display: none">
<div class="section padding-top-bottom" >
  
  <div class="parallax-2"></div>

  {{-- @foreach ($featureData as $featureData) --}}
		
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
{{-- @endforeach --}}

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
{{-- 			 --}}
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
									setTimeout(() => {
										document.getElementById("form-message").innerHTML = "";
										
									}, 4000);
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