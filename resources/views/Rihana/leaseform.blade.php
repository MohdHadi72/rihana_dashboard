{{-- @include('Rihana.header') --}}
{{-- @include('Rihana.topbar'); --}}
<div class="clear"></div>	
			
			<div id="contact">
			<div class="section padding-top-bottom grey-background">				
				<div class="container">				
					<div class="twelve columns">				
						<div class="section-title on-center">
							<h3>Apply for Lease</h3> 
							<p>Get in touch. Don’t hesitate<br>to Lease Now.</p>
						</div>
					</div>
					<div class="clear"></div>
						
						<form  id="ajax-form" action="{{ route('formsubmit') }}" method="POST" enctype="multipart/form-data">
							@csrf
							<div class="six columns">
									<input name="name" id="name" type="text" placeholder="Your Name: *" required/>
							</div>
							<div class="six columns">
									<input name="email" id="email" type="text" placeholder="E-Mail: *" required/>
							</div>
							<div class="six columns">
									<input name="mobile" id="mobile" type="text" placeholder="Your Mobile: *" required/>
							</div>
							<div class="six columns">
									<input name="DateForApply" id="DateForApply" type="text" placeholder="Date For Apply: *" readonly/>
							</div>
							<div class="six columns">
									<input name="ProjectName" id="ProjectName" type="text" placeholder="Project Name: *" required/>
							</div>
							<div class="six columns">
									<input name="ProjectCategory" id="ProjectCategory" type="text" placeholder="Project Category: *" required/>
							</div>
							<div class="six columns">
									<input name="CapitalProject" id="CapitalProject" type="text" placeholder="Capital Project: *" required/>
							</div>
							<div class="six columns">
									<input name="NoOfEmployee" id="NoOfEmployee" type="number" placeholder="No Of Employee: *" required/>
							</div>
							<div class="six columns">
								<select name="AreaRequired" class="select-box">
									<option selected class="selectedColor">Area Required: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="ShopNo" class="select-box">
									<option selected class="selectedColor">Shop no & Side no: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="RentType" class="select-box">
									<option selected class="selectedColor">Rent Type: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<select name="MultisideShop" class="select-box">
									<option selected class="selectedColor">Multiside Shop Acces: *</option>
									<option value="A">A</option>
									<option value="B">B</option>
								</select>
							</div>
							<div class="six columns">
								<input name="RentPeriod" id="RentPeriod" type="text" placeholder="Rent Period: *" required/>
							</div>
							<div class="six columns">
								<input name="ServiceRequiredByRahinaPark" id="ServiceRequiredByRahinaPark" type="text" value="Service Required By Rahina Park: *" readonly/>
							</div>
							<div class="six columns">
								<select name="InTheProject" class="select-box">
									<option selected class="selectedColor">In The Project: *</option>
									<option value="National">National</option>
									<option value="International">International</option>
								</select>
							</div>
							<div class="twelve columns">
									<label for="message"></label>
									<textarea name="Description" id="Description" placeholder="Tell Us Everything" required></textarea>
							</div>
							<div class="twelve columns">
									<button type="submit" class="form-message-send" id="sendform" >submit</button>
							</div>
							<div class="clear"></div>
							<div class="error text-align-center" id="err-form">There was a problem validating the form please check!</div>
							<div class="error text-align-center" id="err-timedout">The connection to the server timed out!</div>
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
			document.getElementById("sendform").addEventListener("click", function() {
					let form = document.getElementById("ajax-form");
					let formData = new FormData(form);
	
			 
					var xhr = new XMLHttpRequest();
					xhr.open("POST", "{{ route('formsubmit') }}", true);
					xhr.onreadystatechange = function() {
							if (xhr.readyState === 4 && xhr.status === 200) {
							 
									document.getElementById("form-message-send").innerHTML = "<p>Form submitted successfully!</p>";
									form.reset();  
									setTimeout(() => {
										document.getElementById("form-message-send").innerHTML = "";
										
									}, 4000);
							} else if (xhr.readyState === 4 && xhr.status !== 200) {
						 
									document.getElementById("form-message-send").innerHTML = "<p>Form submission failed. Please try again later.</p>";
							}
					};
					xhr.send(formData);
			});
	</script> 

      {{-- @include('Rihana.footer') --}}