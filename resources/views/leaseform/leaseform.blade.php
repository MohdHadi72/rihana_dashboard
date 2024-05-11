<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- Mirrored from www.ivang-design.com/oreades/9/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 14:10:10 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>حديقة ريحانة	</title>
 

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	
	
	<!-- CSS
  ================================================== -->

	
	<link rel="stylesheet" href="/assets/ArbCSS/base.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/skeleton.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/layout.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/font-awesome.css" />
	<link rel="stylesheet" href="/assets/ArbCSS/ionicons.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/retina.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/owl.carousel.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/owl.transitions.css"/>
	<link rel="stylesheet" href="/assets/ArbCSS/colorbox.css"/>
	

		
	<!-- Favicons
	================================ ================== -->
	<link rel="shortcut icon" href="/assets/image/logo.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/ArbCSSs/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
	<script type="text/javascript" src="/assets/js/modernizr.custom.js"></script> 
	
	
</head>
<style>
</style>
<body class="royal_loader">	
	
	<!-- Navigation And Logo
		================================================== -->
	
		<div id="menu-wrap" class="menu-back cbp-af-header">
			<div class="menu-container">
				<div class="logo"></div>
					<ul class="slimmenu">
						<li>
							<a href="{{url('/index')}}">بيت</a>
						</li>
						<li>
							<a href="{{url('/index')}}#about">عن</a>
						</li>
						<li>
							<a href="{{url('/index')}}#work">صالة عرض</a>
						</li>
						<li>
							<a href="{{url('/index')}}#features">سمات</a>
						</li>
						<li>
							<a href="{{url('/index')}}#contact">اتصال</a>
						</li>
						<li>
							<a href="{{url('/index')}}#footer">تذييل</a>
						</li>
						<li>
							<a href="#leaseform">نموذج الإيجار</a>
						</li>
						 <li>
							<a href="{{url('/ArbHome')}}">لوحة القيادة</a>
						</li> 
					</ul>
			</div>
		</div>
		
<div class="clear"></div>	
			
			<div id="leaseform">
			<div class="section padding-top-bottom grey-background">				
				<div class="container">				
					<div class="twelve columns">				
						<div class="section-title on-center">
							<h3>تقدم بطلب للإيجار</h3> 
							<p>ابقى على تواصل. لا تتردد<br>للتأجير الآن.</p>
						</div>
					</div>
					<div class="clear"></div>
						
						<form  id="ajax-form" action="{{url('leaseform')}}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="six columns">
									<input name="name" id="name" type="text" placeholder="اسمك: *" required/>
							</div>
							<div class="six columns">
									<input name="email" id="email" type="text" placeholder="بريد إلكتروني: *" required/>
							</div>
							<div class="six columns">
									<input name="mobile" id="mobile" type="text" placeholder="هاتفك النقال: *" required/>
                  <small class="text-danger" id="numberError" style="display: none;">الرجاء إدخال رقم صالح مكون من 10 أو 14 رقمًا.</small>
							</div>
							<div class="six columns">
									<input name="DateForApply" id="DateForApply" type="text" placeholder="تاريخ التقديم: *" readonly/>
							</div>
							<div class="six columns">
									<input name="ProjectName" id="ProjectName" type="text" placeholder="اسم المشروع: *" required/>
							</div>
							<div class="six columns">
									<input name="ProjectCategory" id="ProjectCategory" type="text" placeholder="فئة المشروع: *" required/>
							</div>
							<div class="six columns">
									<input name="CapitalProject" id="CapitalProject" type="text" placeholder="المشروع الرأسمالي: *" required/>
							</div>
							<div class="six columns">
									<input name="NoOfEmployee" id="NoOfEmployee" type="number" placeholder="عدد الموظفين: *" required/>
							</div>
							<div class="six columns">
								<select name="AreaRequired" class="select-box">
									<option selected class="selectedColor">المنطقة المطلوبة: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="ShopNo" class="select-box">
									<option selected class="selectedColor">رقم المحل والرقم الجانبي: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="RentType" class="select-box">
									<option selected class="selectedColor">نوع الإيجار: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="MultisideShop" class="select-box">
									<option selected class="selectedColor">الوصول إلى متجر متعدد الجوانب: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<input name="RentPeriod" id="RentPeriod" type="text" placeholder="مدة الإيجار: *" required/>
							</div>
							<div class="six columns">
								<input name="ServiceRequiredByRahinaPark" id="ServiceRequiredByRahinaPark" type="text" placeholder="الخدمة المطلوبة من رهينة بارك: *" readonly/>
							</div>
							<div class="six columns">
								<select name="InTheProject" class="select-box">
									<option selected class="selectedColor">في المشروع: *</option>
									<option value="National">وطني</option>
									<option value="International">دولي</option>
								</select>
							</div>
							<div class="twelve columns">
									<label for="message"></label>
									<textarea name="Description" id="Description" placeholder="أخبرنا بكل شيء" required></textarea>
							</div>
							<div class="twelve columns">
									<button type="submit" class="form-message" id="send" >يُقدِّم</button>
							</div>
							<div class="clear"></div>
		
							<div class="error" id="err-state"></div>
					</form>

					<script>
						function updateDateField() {
								let currentDate = new Date();
								let day = currentDate.getDate();
								let month = currentDate.getMonth() + 1;
								let year = currentDate.getFullYear();
				
								let formattedDate = month + '/' + day + '/' + year;
				
								document.getElementById('DateForApply').value = formattedDate;
								let color =    document.getElementById('DateForApply');
									 color.style.color = "#888";
						}
				
						window.onload = function() {
								updateDateField();
						};
				</script>


<script>
			document.getElementById("send").addEventListener("click", function() {
					let form = document.getElementById("ajax-form");
					let formData = new FormData(form);
	
			 
					var xhr = new XMLHttpRequest();
					xhr.open("POST", "{{ route('leaseform') }}", true);
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


<div class="scroll-to-top"></div>	
				
<script>
  document.getElementById("mobile").addEventListener("input", function(event) {
      let input = event.target.value;
      let numberError = document.getElementById("numberError");
      if (!/^\d{10}$/.test(input) && !/^\d{14}$/.test(input)) {
          numberError.style.display = "block";
          event.target.setCustomValidity("رقم غير صالح. الرجاء إدخال رقم صالح مكون من 10 أو 12 رقمًا.");
      } else {
          numberError.style.display = "none";
          event.target.setCustomValidity("");
      }
  });



</script>

  
{{-- <!-- JAVASCRIPT --}}
<script type="text/javascript" src="/assets/js/jquery-2.1.1.js"></script>	
<script type="text/javascript" src="/assets/js/royal_preloader.min.js"></script>
<script type="text/javascript">
(function($) { "use strict";
    Royal_Preloader.config({
        mode:           'logo', // 'number', "text" or "logo"
        logo:           '/assets/image/logo.png',
        timeout:        0,
        showInfo:       false,
        opacity:        1,
        background:     ['#FFFFFF'],
    
    });
})(jQuery);
</script>
<script type="text/javascript" src="/assets/js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.easing.js"></script>
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fs.tipper.min.js"></script>  	
<script type="text/javascript" src="/assets/js/scroll.js"></script>	
<script type="text/javascript"> 
(function($) { "use strict";          
jQuery(document).ready(function() {
var offset = 350;
var duration = 500;
jQuery(window).scroll(function() {
  if (jQuery(this).scrollTop() > offset) {
    jQuery('.scroll-to-top').fadeIn(duration);
  } else {
    jQuery('.scroll-to-top').fadeOut(duration);
  }
});

jQuery('.scroll-to-top').click(function(event) {
  event.preventDefault();
  jQuery('html, body').animate({scrollTop: 0}, duration);
  return false;
})
});
})(jQuery);
</script> 
<script type="text/javascript" src="/assets/js/classie.js"></script>
<script type="text/javascript" src="/assets/js/cbpAnimatedHeader.min.js"></script>
<script type="text/javascript" src="/assets/js/menu-classic.js"></script> 
<script type="text/javascript" src="/assets/js/jquery.malihu.PageScroll2id.js"></script>	
<script type="text/javascript" src="/assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="/assets/js/visible.min.js"></script>
<script type="text/javascript" src="/assets/js/pro-bars.js"></script>
<script type="text/javascript" src="/assets/js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="/assets/js/imagesloaded.pkgd.min.js"></script> 
<script type="text/javascript" src="/assets/js/smk-accordion.js"></script>
<script type="text/javascript" src="/assets/js/masonry.js"></script> 
<script type="text/javascript" src="/assets/js/isotope.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script> 
<script type="text/javascript" src="/assets/js/jquery.colorbox.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvpnlHRidMIU374bKM5-sx8ruc01OvDjI"></script>
<!-- ==================
Go to this link to activated your google map API KEY https://developers.google.com/maps/documentation/javascript/tutorial#api_key 
your key replace in script link for google map after .../maps/api/js?key=HERE_YOUR_API_KEY
coordinates for map you can change in template.js file 
================== -->	
<script type="text/javascript" src="/assets/js/contact.js"></script>
<script type="text/javascript" src="/assets/js/template.js"></script>    
<!-- End Document
================================================== -->
</body>

<!-- Mirrored from www.ivang-design.com/oreades/9/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Apr 2024 14:10:53 GMT -->
</html>