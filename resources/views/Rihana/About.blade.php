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
      {{-- @foreach ($aboutData as $aboutItem) --}}
      <div class="four columns">			
        <div class="about-block bottom-margin">	
          <div class="abs-icon">&#xf4a7;</div> {{--{{ $aboutItem->AboutHeadingOne --}}
          <h6><span>&#xf4a7;</span>Rihana</h6>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt eos reiciendis obcaecati molestiae excepturi reprehenderit, tempore et laboriosam exercitationem?</p>           {{--{{ $aboutItem->AboutPeragraphOne }}--}}
        </div>		
      </div>
      {{-- @endforeach --}}

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