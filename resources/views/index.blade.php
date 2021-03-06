@extends('layout')
@section('slider')
    <div id="fawesome-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators indicatior2">
            <li data-target="#fawesome-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#fawesome-carousel" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/slider1.jpg" alt="Sider Big Image">
                <div class="carousel-caption">
                    <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                    <div class="slider-btn wow fadeIn">
                        <a href="#" class="btn btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/slider2.jpg" alt="Sider Big Image">
                <div class="carousel-caption">
                    <h1 class="wow fadeInLeft">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                    <div class="slider-btn wow fadeIn">
                        <a href="#" class="btn btn-learn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('main')
		<!-- About Section -->
		<section id="about" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="about-image wow fadeInLeft">
							<img src="img/about-image.jpg" alt="About Image" />
						</div>
					</div>
					<div class="col-sm-6">
						<div class="about-text wow fadeInRight">
							<h3>About Our Company</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="#" class="btn btn-read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About Section -->


		<!-- Award Winning Section -->

		<section id="awards" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="progress-bar-custom wow fadeInLeft">
							<h5>Photoshop</h5>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
								60%
							  </div>
							</div>
						</div>

						<div class="progress-bar-custom wow fadeInLeft">
							<h5>Illustrator</h5>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
								90%
							  </div>
							</div>
						</div>

					</div>

					<div class="col-sm-4">

						<div class="progress-bar-custom wow fadeInLeft">
							<h5>Web Design</h5>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
								80%
							  </div>
							</div>
						</div>

						<div class="progress-bar-custom wow fadeInLeft">
							<h5>WordPress</h5>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
								70%
							  </div>
							</div>
						</div>

					</div>


					<div class="col-sm-4">
						<div class="award-win wow fadeInRight">
							<div class="trophy">
								<i class="fa fa-trophy"></i>
							</div>
							<h3>180 <br /> awards get & win</h3>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Award Winning Section -->


		<!-- Feature Section -->

		<section id="features" class="site-padding">

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Our <span>Services</span></h3>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-bitbucket"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-apple "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-automobile "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->


				</div>


				<div class="row">

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-bullhorn "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInLeft">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-camera-retro"></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->

					<!-- Single Feature-->
					<div class="col-sm-4">
						<div class="single-feature wow fadeInRight">
							<div class="row">
								<div class="col-md-2">
									<div class="feature-icon">
										<i class="fa fa-coffee "></i>
									</div>
								</div>
								<div class="col-md-10">
									<div class="feature-text">
										<h4>Lorem ipsum dolor sit amet</h4>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
										<a href="#">Read More>></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Single Feature-->


				</div>


			</div>
		</section>

		<!-- Feature Section -->



		<!-- Featured Work -->

		<section id="feature-work" class="protfolio-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Featured <span>Work</span></h3>
						</div>
					</div>
				</div>
			</div>

			<div class="featured-list">
				<div id="grid" class="clearfix">

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio1.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>

					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio2.jpg" alt="Feature Image" />
						</a>
						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio3.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio4.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio5.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio6.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio7.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>

					<div class="thumb">
						<a href="#">
							<img src="img/protfolio8.jpg" alt="Feature Image" />
						</a>

						<div class="thumb-rollover">
							<div class="project-title">
								<h4>Project Title</h4>
								<h5>Category: Web Design</h5>
							</div>
						</div>
					</div>


				</div>
			</div>


		</section>

		<!-- Featured Work -->


		<!-- Testimonials -->

		<section id="testimonials">
			<div class="container">

				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Client <span>Testimonials</span></h3>
						</div>
					</div>
				</div>

				<div id="fawesome-carousel-two" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#fawesome-carousel-two" data-slide-to="0" class="active"></li>
						<li data-target="#fawesome-carousel-two" data-slide-to="1"></li>
					</ol>

					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="row">
								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>

										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>John Doe</h4>
											<p>Marketing Manager</p>
										</div>

									</div>
								</div>

								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>

										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>John Doe</h4>
											<p>Marketing Manager</p>
										</div>

									</div>
								</div>
							</div>
						</div>

						<!-- Next Slide -->
						<div class="item">
							<div class="row">
								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>

										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Jason Cheng</h4>
											<p>Marketing Manager</p>
										</div>

									</div>
								</div>

								<div class="col-sm-6">
									<div class="single-testimonials">
										<div class="text">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
										</div>

										<div class="profile-image">
											<img src="img/client.jpg" alt="Author Image" />
											<h4>Kim Cheng</h4>
											<p>Marketing Manager</p>
										</div>

									</div>
								</div>
							</div>
						</div>
						<!-- Next Slide -->

					</div>

				</div>

			</div>
		</section>

		<!-- Testimonials -->


		<!-- From the Blog-->

		<section id="blog" class="site-padding">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Latest From The <span>Blog</span></h3>
						</div>
					</div>
				</div>

				<div class="row">

					<!-- Single Blog -->
					<div class="col-sm-4">
						<div class="single-blog">
							<img src="img/blog.jpg" alt="Blog Image" />
							<h4><a href="blog.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							<a href="#">Read More>></a>
						</div>
					</div>
					<!-- Single Blog -->

					<!-- Single Blog -->
					<div class="col-sm-4">
						<div class="single-blog">
							<img src="img/blog.jpg" alt="Blog Image" />
							<h4><a href="blog.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							<a href="#">Read More>></a>
						</div>
					</div>
					<!-- Single Blog -->

					<!-- Single Blog -->
					<div class="col-sm-4">
						<div class="single-blog">
							<img src="img/blog.jpg" alt="Blog Image" />
							<h4><a href="blog.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
							<a href="#">Read More>></a>
						</div>
					</div>
					<!-- Single Blog -->


				</div>

			</div>
		</section>

		<!-- From the Blog-->


		<!-- Pricing --->
		<section class="pricing" id="pricing">

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Our Affordable<span>Pricing</span></h3>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

					<!-- PRICE ITEM -->
					<div class="panel price panel-green">
						<div class="panel-heading arrow_box text-center">
						<h3>Standard</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:30px"><strong>$9 / Month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->


					</div>


				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

					<!-- PRICE ITEM -->
					<div class="panel price panel-green">
						<div class="panel-heading arrow_box text-center">
						<h3>Premium</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:30px"><strong>$19 / Month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->


				</div>


				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

					<!-- PRICE ITEM -->
					<div class="panel price panel-green">
						<div class="panel-heading arrow_box text-center">
						<h3>Professional</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:30px"><strong>$29 / Month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-success" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->


				</div>

				<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">

					<!-- PRICE ITEM -->
					<div class="panel price panel-grey">
						<div class="panel-heading arrow_box text-center">
						<h3>Ultimate</h3>
						</div>
						<div class="panel-body text-center">
							<p class="lead" style="font-size:30px"><strong>$39 / Month</strong></p>
						</div>
						<ul class="list-group list-group-flush text-center">
							<li class="list-group-item"><i class="icon-ok text-success"></i> Personal use</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> Unlimited projects</li>
							<li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
						</ul>
						<div class="panel-footer">
							<a class="btn btn-lg btn-block btn-primary" href="#">BUY NOW!</a>
						</div>
					</div>
					<!-- /PRICE ITEM -->


				</div>

				</div>
			</div>
		</section>
		<!-- Pricing --->


		<!--FAQ-->

		<section id="faq">

			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Frequently Aksed <span>Questions</span></h3>
						</div>
					</div>
				</div>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="panel-group" id="accordion">
							<div class="faqHeader"><h4>01. FAQ Header Title Goes Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse in">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseTen" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseEleven" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="faqHeader"><h4>02. Second Title Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse">
									<div class="panel-body">
										The steps involved in this process are really simple. All you need to do is:
										<ul>
											<li>Register an account</li>
											<li>Activate your account</li>
											<li>Go to the <strong>Themes</strong> section and upload your theme</li>
											<li>The next step is the approval step, which usually takes about 72 hours.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseFive" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
										<br />
									</div>
								</div>
							</div>


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseSix" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>


							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseEight" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNine" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="faqHeader"><h4>03. FAQ Header Title Goes Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseFour" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseSeven" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>


						</div>
					</div>


					<div class="col-md-6">
						<div class="panel-group" id="accordion">
							<div class="faqHeader"><h4>04. FAQ Header Title Goes Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNew">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNew" class="panel-collapse collapse in">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNewOne" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>



							<div class="faqHeader"><h4>05. Second Title Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewTwo">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNewTwo" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewThree">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNewThree" class="panel-collapse collapse">
									<div class="panel-body">
										The steps involved in this process are really simple. All you need to do is:
										<ul>
											<li>Register an account</li>
											<li>Activate your account</li>
											<li>Go to the <strong>Themes</strong> section and upload your theme</li>
											<li>The next step is the approval step, which usually takes about 72 hours.</li>
										</ul>
									</div>
								</div>
							</div>



							<div class="faqHeader"><h4>06. FAQ Header Title Goes Here</h4></div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNewFour">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
									</h4>
								</div>
								<div id="collapseNewFour" class="panel-collapse collapse">
									<div class="panel-body">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</div>
								</div>
							</div>



						</div>
					</div>

				</div>
			</div>
		</section>
		<!--FAQ-->



		<!-- Contact -->
		<section id="contact-us">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="title">
							<h3>Contact <span>Us</span></h3>
						</div>
					</div>
				</div>
			</div>

			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14608.272959726353!2d90.38896245!3d23.744945849999997!3m2!1i1024!2i768!4f13.1!4m3!3e1!4m0!4m0!5e0!3m2!1sen!2sbd!4v1465238371126" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

			<div class="contact">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h4>Please Contact With Us For Any Kind Of Information</strong></h4>
							<form id="contactform" action="" method="post" class="validateform" name="send-contact">
								<div class="row">
									<div class="col-lg-4 field">
										<input type="text" name="name" placeholder="* Your Name" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" name="email" placeholder="* Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-4 field">
										<input type="text" name="subject" placeholder="Subject" data-rule="maxlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation">
										</div>
									</div>
									<div class="col-lg-12 margintop10 field">
										<textarea rows="12" name="message" class="input-block-level" placeholder="* Your message here..." data-rule="required" data-msg="Please write something"></textarea>
										<div class="validation">
										</div>
										<p>
											<button class="btn btn-theme margintop10 pull-left" type="submit">Submit message</button>

										</p>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Contact -->

@stop
