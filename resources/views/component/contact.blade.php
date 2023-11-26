<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Contact us</span>
					<h2 class="mb-4">Have a Project?</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
				</div>
			</div>


			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif

			<div class="row block-9">
				<div class="col-md-8">
					<form method="POST" action="{{ url('/contact-me') }}" class="bg-light p-4 p-md-5 contact-form">
						@csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" id="email" name="email" class="form-control" placeholder="Your Email" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea id="message" name="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
								</div>
							</div>

							@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
											<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
							@endif

							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</div>
					</form>
					
				</div>

				<div class="col-md-4 d-flex pl-md-5">
					<div class="row">
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-map-marker"></span>
							</div>
							<div class="text">
								<p><span>Address:</span> SAF Plaza, 12/D, Av-2/58, Shahidbag, Pollabi, Mirpur 12, Dhaka, Bangladesh</p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-phone"></span>
							</div>
							<div class="text">
								<p><span>Phone:</span> <a href="tel://1234567920">+ 88 01756505566</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-paper-plane"></span>
							</div>
							<div class="text">
								<p><span>Email:</span> <a href="mailto:info@yoursite.com">saurovsaha786@gmail.com</a></p>
							</div>
						</div>
						<div class="dbox w-100 d-flex">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="fa fa-globe"></span>
							</div>
							<div class="text">
								<p><span>Website</span> <a href="#">fractionsbd.com</a></p>
							</div>
						</div>
					</div>
					<!-- <div id="map" class="map"></div> -->
				</div>
			</div>
		</div>
	</section>
