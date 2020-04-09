			<!-- FOOTER -->
			<div class="footer clearfix" style="border: none;">
				<div class="container">
					<div class="row">
						<div class="col-md-6">

						</div>
						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>Events</h5>
								<ul class="list-unstyled">
									<li><a href="#">Wedding Organizer </a></li>
									<li><a href="#">Sweet 17 </a></li>
									<li><a href="#">Bridal Shower </a></li>
									<li><a href="#">Funeral </a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>Vendors</h5>
								<ul class="list-unstyled">
									<li><a href="#">EO </a></li>
									<li><a href="#">Table Decoration </a></li>
									<li><a href="#">Photographer</a></li>
									<li><a href="#">Make Up Artist</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-12">
							<div class="footerLink">
								<h5>Get in Touch</h5>
								<ul class="list-unstyled">
									<li>Call us at (555)-555-5555</li>
									<li><a href="mailto:support@iamabdus.com">support@iamabdus.com</a></li>
								</ul>
								<ul class="list-inline">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-vimeo"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- COPY RIGHT -->
			<div class="copyRight clearfix">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-12">
							<p>&copy; 2020 Copyright Evene .</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- LOGIN MODAL -->
		<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<h3 class="modal-title">log in</h3>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form action="{{ url('/login/submit') }}" id="login-form" method="POST" role="form">
								{{ csrf_field() }}
							<div class="form-group">
								<label for="">Enter Email</label>
								<input type="email" class="form-control" name="email" id="">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" name="pass" id="">
							</div>
							<div class="checkbox">
								<input id="checkbox-1" class="checkbox-custom form-check-input" name="checkbox-1" type="checkbox" checked>
								<label for="checkbox-1" class="checkbox-custom-label form-check-label">Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary btn-block">log in</button>
{{--							<button type="button" class="btn btn-link btn-block">Forgot Password?</button>--}}
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- SIGN UP CUSTOMER MODAL -->
		<div class="modal fade " id="signup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Create an account</h3>
					</div>
					<div class="modal-body">
						<form action="{{ url('/signup/submit') }}" method="POST" role="form">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">First Name</label>
								<input type="text" class="form-control" name="firstName" id="first-name" required>
							</div>
							<div class="form-group">
								<label for="">Last Name</label>
								<input type="text" class="form-control" name="lastName" id="last-name" required>
							</div>
							<div class="form-group">
								<label for="">Enter Email</label>
								<input type="email" class="form-control" name="email" id="" required>
							</div>
							<div class="form-group">
								<label for="">Phone</label>
								<input type="text" maxlength="13" class="form-control" name="phoneNumber" id="customer-phone-number" required>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" pattern=".{8,16}" title="8 to 16 characters" class="form-control" name="pass" id="" required>
							</div>
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" class="form-control" id="" required>
							</div>
							<button type="submit" class="btn btn-primary btn-block">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- SIGN UP VENDOR MODAL -->
		<div class="modal fade " id="signup-vendor" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header flex-column justify-content-center" style="background-color:#FBB03B">
						<div class="d-flex justify-content-end">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<h3 class="modal-title">ACCOUNT INFORMATION</h3>
						<h5>Please fill out All the column below</h5>
					</div>
					<div class="modal-body">
						<form action="{{ url('/signup/submit') }}" method="POST" role="form">
							{{ csrf_field() }}
							<div class="form-group">
								<label for="">Full name</label>
								<input type="text" class="form-control" name="fullName" id="full-name" required>
							</div>
							<div class="form-group">
								<label for="">Company name</label>
								<input type="text" class="form-control" name="companyName" id="company-name" required>
							</div>
							<div class="form-group">
								<label for="">Email</label>
								<input type="email" class="form-control" name="email" id="email" required>
							</div>
							<div class="form-group">
								<label for="">Phone</label>
								<input type="text" maxlength="13" class="form-control" name="phoneNumber" id="vendor-phone-number" required>
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" pattern=".{8,16}" title="8 to 16 characters" class="form-control" name="pass" id="password" required>
							</div>
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" class="form-control" id="confirm-password" required>
							</div>
							<input name="userType" value="vendor" type="hidden"/>
							<button type="submit" class="btn btn-primary btn-block">Sign up</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- PORDUCT QUICK VIEW MODAL -->
		<div class="modal fade quick-view" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<div class="media flex-wrap">
							<div class="media-left px-0">
								<img class="media-object" src="img/products/quick-view/quick-view-01.jpg" alt="Image">
							</div>
							<div class="media-body">
								<h2>Old Skool Navy</h2>
								<h3>$149</h3>
								<p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
								<span class="quick-drop">
									<select name="guiest_id3" id="guiest_id3" class="select-drop">
										<option value="0">Size</option>
										<option value="1">Size 1</option>
										<option value="2">Size 2</option>
										<option value="3">Size 3</option>
									</select>
								</span>
								<span class="quick-drop resizeWidth">
									<select name="guiest_id4" id="guiest_id4" class="select-drop">
										<option value="0">Qty</option>
										<option value="1">Qty 1</option>
										<option value="2">Qty 2</option>
										<option value="3">Qty 3</option>
									</select>
								</span>
								<div class="btn-area">
									<a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
