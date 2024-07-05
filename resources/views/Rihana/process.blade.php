<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="/assets/css/process.css">
</head>
<body>
<h1>Our  Process</h1>
<br> 
<div class="process-wrapper">
<div id="progress-bar-container">
	<ul>
		<li class="step step01 active"><div class="step-inner">HOME WORK</div></li>
		<li class="step step02"><div class="step-inner">RESPONSIVE PART</div></li>
		<li class="step step03"><div class="step-inner">Creative cREATIONS</div></li>
		<li class="step step04"><div class="step-inner">TESTIMONIALS PART</div></li>
		<li class="step step05"><div class="step-inner">OUR LOCATIONS</div></li>
	</ul>
	
	<div id="line">
		<div id="line-progress"></div>
	</div>
</div>

<div id="progress-content-section">
	<div class="section-content discovery active">
		<h2>HOME SECTION</h2>
		<img src="../HEllo.jpeg" alt="" style="margin: 2% 20%;">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	
	<div class="section-content strategy">
		<h2>GALLERY SECTION</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	
	<div class="section-content creative">
		<h2>Creative CREATIONS</h2>
		<img src="../second.jpg" alt="" style="margin: 2% 20%;" width="100px">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	
	<div class="section-content production">
		<h2>TESTIMONIALS NOW</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	
	<div class="section-content analysis">
		<h2>OUR LOCATIONS</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec neque justo, consequat non fermentum ac, tempor eu turpis. Proin nulla eros, placerat non ipsum ut, dapibus ullamcorper ex. Nulla in dapibus lorem. Suspendisse vitae velit ac ante consequat placerat ut sed eros. Nullam porttitor mattis mi, id fringilla ex consequat eu. Praesent pulvinar tincidunt leo et condimentum. Maecenas volutpat turpis at felis egestas malesuada. Phasellus sem odio, venenatis at ex a, lacinia suscipit orci.</p>
	</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>
        $(document).ready(function() {
            function activateStep(stepNumber) {
                $(".step").removeClass("active");
                $(".step0" + stepNumber).addClass("active").prevAll().addClass("active");
                $(".step0" + stepNumber).nextAll().removeClass("active");
                
                switch (stepNumber) {
                    case 1:
                        $("#line-progress").css("width", "3%");
                        $(".discovery").addClass("active").siblings().removeClass("active");
                        break;
                    case 2:
                        $("#line-progress").css("width", "25%");
                        $(".strategy").addClass("active").siblings().removeClass("active");
                        break;
                    case 3:
                        $("#line-progress").css("width", "50%");
                        $(".creative").addClass("active").siblings().removeClass("active");
                        break;
                    case 4:
                        $("#line-progress").css("width", "75%");
                        $(".production").addClass("active").siblings().removeClass("active");
                        break;
                    case 5:
                        $("#line-progress").css("width", "100%");
                        $(".analysis").addClass("active").siblings().removeClass("active");
                        break;
                }
            }

            $(".step").click(function() {
                let stepNumber = $(this).index() + 1;
                activateStep(stepNumber);
                clearInterval(autoStepInterval);
                autoStepInterval = setInterval(autoStep, 3000);
            });

            let currentStep = 1;
            function autoStep() {
                currentStep = (currentStep % 5) + 1;
                activateStep(currentStep);
            }

            let autoStepInterval = setInterval(autoStep, 3000);
        });
    </script>
 
{{-- @include('Rihana.footer') --}}