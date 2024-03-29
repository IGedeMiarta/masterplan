<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>Masterplan - Email Verification</title>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('assets/landing/css/animsition.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/landing/css/unicons.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/landing/css/lighbox.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/landing/css/tooltip.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/landing/css/swiper.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/landing/css/style.css') }}"/>

	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ asset('assets/images/favicon-new.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon-new.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon-new.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon-new.png') }}">


</head>
<body>

	<div class="animsition">

        <!-- Navigation
		================================================== -->

        {{-- <div class="navigation-wrap cbp-af-header header-transparent">
            <div class="padding-on-scroll">
				<div class="section-1400">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<nav class="navbar navbar-expand-xl navbar-light">

									<a class="navbar-brand animsition-link" href="index.html"><img src="img/logo.png"
											alt="logo"></a>

									<button class="navbar-toggler" type="button" data-toggle="collapse"
										data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
										aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse" id="navbarSupportedContent">
										<ul class="navbar-nav mr-xl-4 ml-auto pt-4 pt-xl-0">
											<li class="nav-item dropdown">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home</a>
												<div class="dropdown-menu">
													<ul class="p-0 m-0">
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - landing page</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="index.html">Landing page 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-landing-2.html">Landing page 2</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - creative</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-1.html">Creative layout 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-2.html">Creative layout 2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-3.html">Creative layout 3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-4.html">Creative layout 4</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - corporate</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-1.html">Corporate layout 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-2.html">Corporate layout 2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-3.html">Corporate layout 3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-4.html">Corporate layout 4</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - blog</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-1.html">Blog layout 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-2.html">Blog layout 2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-3.html">Blog layout 3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-4.html">Blog layout 4</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - portfolio</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-1.html">Portfolio layout 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-2.html">Portfolio layout 2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-3.html">Portfolio layout 3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-4.html">Portfolio layout 4</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - shop</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-1.html">Shop layout 1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-2.html">Shop layout 2</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Home - one page</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-one-page-1.html">One page top menu</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-one-page-2.html">One page side menu</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Niche demos v1</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-cafe.html">Home - cafe</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-fashion.html">Home - fashion</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-bakery.html">Home - bakery</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-fitness.html">Home - fitness</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-hotel.html">Home - hotel</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Niche demos v2</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<span class="dropdown-item" >Taxi <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Lawyer <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Real Estate <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Non-Profit <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Music <span class="label hot">coming soon</span></span>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Niche demos v3</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<span class="dropdown-item" >Medical <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Barber <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Hosting <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Travel <span class="label hot">coming soon</span></span>
																	</li>
																	<li class="nav-item">
																		<span class="dropdown-item">Event <span class="label hot">coming soon</span></span>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="home-agency.html">Home - agency</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="home-startup.html">Home - startup</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="home-design-studio.html">Home - design studio</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="home-branding.html">Home - branding</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Features</a>
												<div class="dropdown-menu">
													<ul class="p-0 m-0">
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-sliders-v-alt color-secondary size-19 mr-2 pr-1'></i>Hero sliders</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-2.html">Slider v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-3.html">Slider v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-4.html">Slider v3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-1.html">Slider v4</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-2.html">Slider v5</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-2.html">Slider v6</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-blog-3.html">Slider v7</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-3.html">Slider v8</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-1.html">Slider v9</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-2.html">Slider v10</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-design-studio.html">Slider v11</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-branding.html">Slider v12</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-bakery.html">Slider v13</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="mega-menu.html"><i class='uil uil-window-section color-secondary size-19 mr-2 pr-1'></i>Mega Menu</a>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-window-maximize color-secondary size-19 mr-2 pr-1'></i>Headers</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html">Light version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-2.html">Dark version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="user-profile.html">Transparent - Light</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-landing-2.html">Transparent - Dark</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="index.html">Semi transparent - Light</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-2.html">Semi transparent - Dark</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-bakery.html">Floating version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-3.html">Overlay version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-one-page-1.html">One-Page top version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-one-page-2.html">One-Page side version</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-portfolio-3.html">Left side header</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-1.html">Side menu</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-1.html">Above section</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-label-alt color-secondary size-19 mr-2 pr-1'></i>Menu labels</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item" href="#">Label (new) <span class="label new">new</span></a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item" href="#">Label (hot) <span class="label hot">hot</span></a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item" href="#">Label (popular) <span class="label popular">popular</span></a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item" href="#">Label (sale) <span class="label sale">sale</span></a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item" href="#">Label (info) <span class="label info">info</span></a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-border-bottom color-secondary size-19 mr-2 pr-1'></i>Footers</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#footer">Footer v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-agency.html#footer">Footer v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-startup.html#footer">Footer v3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-branding.html#footer">Footer v4</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-1.html#footer">Footer v5</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-creative-2.html#footer">Footer v6</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-1.html#footer">Footer v7</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-3.html#footer">Footer v8</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-corporate-4.html#footer">Footer v9</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-shop-2.html#footer">Footer v10</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="home-hotel.html#footer">Footer v11</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-clock-two color-secondary size-19 mr-2 pr-1'></i>Coming soon</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="coming-soon-1.html">Coming soon v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="coming-soon-2.html">Coming soon v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="coming-soon-3.html">Coming soon v3</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-clapper-board color-secondary size-19 mr-2 pr-1'></i>Events</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="events-calendar.html">Events - calendar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="events-list.html">Events - list</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="event.html">Single event</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-right-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#"><i class='uil uil-minus-path color-secondary size-19 mr-2 pr-1'></i>Modal onload</a>
															<div class="dropdown-menu drop-right-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="modal-onload-1.html">Modal onload v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="modal-onload-2.html">Modal onload v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="modal-onload-3.html">Modal onload v3</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="widgets.html"><i class='uil uil-parcel color-secondary size-19 mr-2 pr-1'></i>Widgets</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="home-agency.html"><i class='uil uil-info-circle color-secondary size-19 mr-2 pr-1'></i>Cookie notify</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="user-profile.html"><i class='uil uil-user-check color-secondary size-19 mr-2 pr-1'></i>User profile</a>
														</li>
													</ul>
												</div>
											</li>
											<li class="nav-item dropdown mega-menu-dropdown-link">
												<a class="nav-link active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Pages</a>
												<div class="dropdown-menu mega-menu-dropdown">
													<div class="container-fluid">
														<div class="row">
															<div class="col-md-6 col-xl-3">
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="about-us-creative.html">About us - creative</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="about-us-extended.html">About us - extended</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="about-me-creative.html">About me - creative</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="about-me-extended.html">About me - extended</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="team.html">Team members</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="careers.html">Careers</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="our-clients.html">Our clients</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html">Side navigation</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="services-creative.html">Services - creative</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="services-extended.html">Services - extended</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="maintanance.html">Maintanance page</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="faq-1.html">FAQs v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="faq-2.html">FAQs v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="sitemap.html">Sitemap</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="404.html">404 page</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="500.html">500 page</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="contact-1.html">Contact us v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="contact-2.html">Contact us v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="contact-3.html">Contact us v3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="contact-4.html">Contact us v4</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="login-register-1.html">Login/register v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="login-register-2.html">Login/register v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="login-1.html">Login v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="login-2.html">Login v2</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="register-1.html">Register v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="register-2.html">Register v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item active animsition-link" href="recovery.html">Recovery password</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="fullwidth.html">Fullwidth page</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="fullwidth-wide.html">Fullwidth page wide</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="right-sidebar.html">Right sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="both-sidebars.html">Both sidebars</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="nav-item dropdown mega-menu-dropdown-link">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Portfolio</a>
												<div class="dropdown-menu mega-menu-dropdown">
													<div class="container-fluid">
														<div class="row">
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Masonry</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-mixed.html">Mixed columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-masonry-2.html">2 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-masonry-3.html">3 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-masonry-4.html">4 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-masonry-5.html">5 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-masonry-6.html">6 columns</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Grid</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-1.html">1 column</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-2.html">2 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-3.html">3 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-4.html">4 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-5.html">5 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-grid-6.html">6 columns</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Layouts</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-right-sidebar.html">Right sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-both-sidebars.html">Both sidebars</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-full-width.html">100% width</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-slice-revealer.html">Slice revealer</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="portfolio-full-screen.html">Full-screen</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Single project</h6>
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-1.html">Project page v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-2.html">Project page v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-3.html">Project page v3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-4.html">Project page v4</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-5.html">Project page v5</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="project-6.html">Project page v6</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="nav-item dropdown mega-menu-dropdown-link">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Blog</a>
												<div class="dropdown-menu mega-menu-dropdown">
													<div class="container-fluid">
														<div class="row">
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Masonry</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-mixed.html">Mixed columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-masonry-2.html">2 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-masonry-3.html">3 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-masonry-4.html">4 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-masonry-5.html">5 columns</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Grid</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-grid-1.html">1 column</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-grid-2.html">2 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-grid-3.html">3 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-grid-4.html">4 columns</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-grid-5.html">5 columns</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Post page</h6>
																<ul class="pb-2 p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="post-1.html">Post page v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="post-2.html">Post page v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="post-3.html">Post page v3</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="post-4.html">Post page v4</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="post-5.html">Post page v5</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<h6 class="mb-0 my-2 pl-xl-3 color-secondary">Layouts</h6>
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-right-sidebar.html">Right sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-both-sidebars.html">Both sidebars</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-full-width.html">100% width</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="blog-slice-revealer.html">Slice revealer</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="nav-item dropdown mega-menu-dropdown-link">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Shortcodes</a>
												<div class="dropdown-menu mega-menu-dropdown mega-menu-background-3">
													<div class="container-fluid">
														<div class="row">
															<div class="col-md-6 col-xl-3">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#colors"><i class='uil uil-palette color-secondary size-19 mr-2 pr-1'></i>Colors</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#typography"><i class='uil uil-text-size color-secondary size-19 mr-2 pr-1'></i>Typography</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#code"><i class='uil uil-code color-secondary size-19 mr-2 pr-1'></i>Code</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#alerts"><i class='uil uil-bell color-secondary size-19 mr-2 pr-1'></i>Alerts</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#btn-link"><i class='uil uil-link-alt color-secondary size-19 mr-2 pr-1'></i>Button & Links</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#forms"><i class='uil uil-grid color-secondary size-19 mr-2 pr-1'></i>Forms</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#checkboxes"><i class='uil uil-toggle-on color-secondary size-19 mr-2 pr-1'></i>Checkboxes & Radios</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#modals"><i class='uil uil-minus-path color-secondary size-19 mr-2 pr-1'></i>Modals</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#pagination"><i class='uil uil-ellipsis-h color-secondary size-19 mr-2 pr-1'></i>Pagination</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#progress"><i class='uil uil-arrow-to-right color-secondary size-19 mr-2 pr-1'></i>Progress</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#media"><i class='uil uil-forward color-secondary size-19 mr-2 pr-1'></i>Media & Embeds</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes.html#accordion"><i class='uil uil-wrap-text color-secondary size-19 mr-2 pr-1'></i>Accordion</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#dividers"><i class='uil uil-align-center-v color-secondary size-19 mr-2 pr-1'></i>Dividers</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#lightbox"><i class='uil uil-images color-secondary size-19 mr-2 pr-1'></i>Lightbox</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#counters"><i class='uil uil-0-plus color-secondary size-19 mr-2 pr-1'></i>Counters</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#testimonials"><i class='uil uil-comment-alt-notes color-secondary size-19 mr-2 pr-1'></i>Testimonials</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3 pr-xl-0">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#animations"><i class='uil uil-history-alt color-secondary size-19 mr-2 pr-1'></i>Animations</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#promo-boxes"><i class='uil uil-cube color-secondary size-19 mr-2 pr-1'></i>Promo Boxes</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#data-tables"><i class='uil uil-table color-secondary size-19 mr-2 pr-1'></i>Data Tables</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#breadcrumbs"><i class='uil uil-link-h color-secondary size-19 mr-2 pr-1'></i>Breadcrumbs</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#tooltip"><i class='uil uil-chat color-secondary size-19 mr-2 pr-1'></i>Tooltip</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#range-slider"><i class='uil uil-sliders-v color-secondary size-19 mr-2 pr-1'></i>Range Slider</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shortcodes-2.html#tabs"><i class='uil uil-window-restore color-secondary size-19 mr-2 pr-1'></i>Tabs</a>
																	</li>
																</ul>
															</div>
															<div class="col-md-6 col-xl-3 pl-xl-0">
																<div class="section img-wrap pr-sm-3 py-sm-3">
																	<img class="border-4" src="img/navigation-2.png" alt="">
																	<div class="hero-center-section text-center">
																		<a href="index.html" class="btn btn-dark-primary animsition-link">All Demos<i class="uil uil-arrow-right size-22 ml-2"></i></a>
																	</div>
																</div>
															</div>
															<div class="col-12 pt-3 pb-3">
																<div class="section pr-sm-3">
																	<div class="row">
																		<div class="col-xl-2 align-self-center d-none d-xl-inline">
																			<a class="dropdown-item animsition-link" href="shortcodes.html"><i class='uil uil-arrow-right color-secondary size-19 mr-2 pr-1'></i>Shortcodes v1</a>
																		</div>
																		<div class="col-sm-auto align-self-center d-none d-xl-inline">
																			<a class="dropdown-item animsition-link" href="shortcodes-2.html"><i class='uil uil-arrow-right color-secondary size-19 mr-2 pr-1'></i>Shortcodes v2</a>
																		</div>
																		<div class="col-sm align-self-center text-xl-right">
																			<h5 class="mb-0">More than <span class="color-primary">1000+</span> UI Features included!</h5>
																		</div>
																		<div class="col-sm-auto align-self-center mt-4 mt-sm-0">
																			<a href="shortcodes.html" class="btn btn-primary animsition-link">Discover All<i class="uil uil-arrow-right size-22 ml-2"></i></a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Shop</a>
												<div class="dropdown-menu">
													<ul class="p-0 m-0">
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="shop-4-col.html">4 columns</a>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-left-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">3 columns</a>
															<div class="dropdown-menu drop-left-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-3-col-full.html">Full width</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-3-col-left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-3-col-right-sidebar.html">Right sidebar</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-left-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">2 columns</a>
															<div class="dropdown-menu drop-left-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-2-col-full.html">Full width</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-2-col-left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-2-col-right-sidebar.html">Right sidebar</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-left-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">1 column</a>
															<div class="dropdown-menu drop-left-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-1-col-full.html">Full width</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-1-col-left-sidebar.html">Left sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-1-col-right-sidebar.html">Right sidebar</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="shop-1-col-both-sidebars.html">Both sidebar</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item dropdown-2">
															<a class="dropdown-item drop-left-sub dropdown-sub" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Single product</a>
															<div class="dropdown-menu drop-left-sub">
																<ul class="p-0 m-0">
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="product-1.html">Product v1</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="product-2.html">Product v2</a>
																	</li>
																	<li class="nav-item">
																		<a class="dropdown-item animsition-link" href="product-3.html">Product v3</a>
																	</li>
																</ul>
															</div>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="wishlist.html">Wishlist</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="cart.html">Shoping cart</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="checkout.html">Checkout</a>
														</li>
														<li class="nav-item">
															<a class="dropdown-item animsition-link" href="checkout-completed.html">Checkout completed</a>
														</li>
													</ul>
												</div>
											</li>
										</ul>

										<a href="#"
											class="btn btn-icon-transparent btn-44 mt-4 mt-xl-0">
											<i class="uil uil-heart size-20"></i>
										</a>
										<a href="#"
											class="btn btn-icon-transparent btn-44 mt-4 mt-xl-0 position-relative" data-toggle="modal" data-target="#modalCart">
											<i class="uil uil-cart size-20"></i>
											<span class="btn-small-icon bg-primary color-white">7</span>
										</a>
										<a href="#"
											class="btn btn-icon-transparent btn-44 mt-4 mt-xl-0" data-toggle="modal" data-target="#modalSearch">
											<i class="uil uil-search size-20"></i>
										</a>
										<div class="pb-3 pb-xl-0"></div>
									</div>

								</nav>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div> --}}

		<!-- Modal Search -->

		{{-- <div class="modal fade modal-search" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="modalSearch" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark-blue">
					<div class="modal-body z-bigger d-flex justify-content-center align-items-center">
						<div class="container-fluid">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="uil uil-multiply"></i>
							</button>
							<div class="row justify-content-center">
								<div class="col-lg-8">
									<div class="form-group">
										<input type="text" class="form-style search" placeholder="Search..." autocomplete="off">
									</div>
									<p class="mb-0 mt-4 text-center color-gray-dark font-weight-500">Start typing & press "Enter" or "ESC" to close</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<!-- Modal Cart -->

		{{-- <div class="modal fade modal-cart" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="modalCart" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content bg-dark-blue">
					<div class="modal-body z-bigger">
						<div class="container-fluid">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<i class="uil uil-multiply"></i>
							</button>
							<div class="row">
								<div class="col-12">
									<h5 class="mb-3 pb-3 color-light-2">Shopping cart</h5>
								</div>
								<div class="col-sm-4 img-wrap mb-2 mb-sm-0">
									<img class="border-4" src="img/shop-1.jpg" alt="shop cart">
								</div>
								<div class="col align-self-center">
									<a href="" class="link link-gray mr-3" data-hover="Old retro suitcase">Old retro suitcase</a>
									<p class="mb-0 lead font-weight-500 color-gray">$237</p>
								</div>
								<div class="col-auto align-self-center">
									<p class="mb-0 lead color-primary">x 2</p>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-sm-4 img-wrap mb-2 mb-sm-0">
									<img class="border-4" src="img/shop-2.jpg" alt="shop cart">
								</div>
								<div class="col align-self-center">
									<a href="" class="link link-gray mr-3" data-hover="Blank retro sign">Blank retro sign</a>
									<p class="mb-0 lead font-weight-500 color-gray">$173</p>
								</div>
								<div class="col-auto align-self-center">
									<p class="mb-0 lead color-primary">x 3</p>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-sm-4 img-wrap mb-2 mb-sm-0">
									<img class="border-4" src="img/shop-3.jpg" alt="shop cart">
								</div>
								<div class="col align-self-center">
									<a href="" class="link link-gray mr-3" data-hover="Mechanical weight scale">Mechanical weight scale</a>
									<p class="mb-0 lead font-weight-500 color-gray">$57</p>
								</div>
								<div class="col-auto align-self-center">
									<p class="mb-0 lead color-primary">x 2</p>
								</div>
							</div>
							<div class="row mt-5">
								<div class="col-sm align-self-center">
									<p class="mb-0 lead color-light-2 size-24 font-weight-500">Total: <span class="font-weight-bold">$1107</span></p>
								</div>
								<div class="col-sm text-sm-right mt-3 mt-sm-0">
									<a href="cart.html" class="btn btn-primary-gradient animsition-link"><i class="uil uil-arrow-circle-right size-22 mr-2"></i>View Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}

		<!-- Primary Page Layout
		================================================== -->

		<!-- Hero
		================================================== -->

		<div class="section over-hide padding-top-120 padding-top-mob-nav section-background-24">
			<div class="section-1400 padding-top-bottom-120">
				<div class="container-fluid">
					<div class="row justify-content-center">
						<div class="col-lg-7 col-xl-5">
							<div class="section py-4 py-md-5 px-3 px-sm-4 px-lg-5 over-hide border-4 section-shadow-blue bg-white section-background-24 background-img-top form">
								<form class="section text-center" method="post" action="{{ route('user.verify_email') }}">
                                    @csrf

									<h4 class="mb-3">
										@lang('Verify your email to get access')
									</h4>
									<p class="mb-4">
										@lang('Your Email:') <strong>{{auth()->user()->email}}</strong>
									</p>
									<div class="form-group">
                                        <label for="code">@lang('Verification Code')</label>
										<input
                                            type="text"
                                            class="form-style big gray-version no-shadow section-shadow-blue"
                                            name="code"
                                            id="code"
                                            placeholder="@lang('Code')"
                                            autocomplete="off"
                                        >
									</div>
									<div class="row mt-4">
										<div class="col-12 text-center">
											<button type="submit" class="btn btn-dark-primary">@lang('Submit')<i class="uil uil-arrow-right size-22 ml-3"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer
		================================================== -->


        @include($activeTemplate . 'partials/landing/footer')


	</div>




	<!-- JAVASCRIPT
    ================================================== -->
	<script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/plugins.js') }}"></script>
	<script src="{{ asset('assets/landing/js/custom.js') }}"></script>
<!-- End Document
================================================== -->
</body>
</html>
