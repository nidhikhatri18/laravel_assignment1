<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Strongly Typed by HTML5 UP</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
			<div id="header-wrapper">
				<div id="header" class="container">
					
					<!-- Logo -->
						<h1 id="logo"><a href="index.html">Strongly Typed</a></h1>
						<p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>
					
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a class="icon fa-home" href="{{(url('/'))}}"><span>Introduction</span></a></li>
								<li>
									<a href="" class="icon fa-bar-chart-o"><span>Dropdown</span></a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="">Phasellus consequat</a>
											<ul>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
												<li><a href="#">Phasellus consequat</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								<li><a class="icon fa-cog" href="{{(url('left'))}}"><span>Left Sidebar</span></a></li>
								<li><a class="icon fa-retweet" href="{{(url('right'))}}"><span>Right Sidebar</span></a></li>
								<li><a class="icon fa-sitemap" href="{{(url('no'))}}"><span>No Sidebar</span></a></li>
							</ul>
						</nav>

				</div>
			</div>
			
		<!-- Features -->
        @yield('content')
        @yield('left_content')
        @yield('right_content')
        @yield('no_content')
        
		<!-- Footer -->
			<div id="footer-wrapper">
				<div id="footer" class="container">
					<header>
						<h2>Questions or comments? <strong>Get in touch:</strong></h2>
					</header>
					<div class="row">
						<div class="6u">
							<section>
								<form method="post" action="#">
									<div class="row 50%">
										<div class="6u">
											<input name="name" placeholder="Name" type="text" />
										</div>
										<div class="6u">
											<input name="email" placeholder="Email" type="text" />
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<textarea name="message" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="row 50%">
										<div class="12u">
											<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
										</div>
									</div>
								</form>
							</section>
						</div>
						<div class="6u">
							<section>
								<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet 
								mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur 
								leo nibh, rutrum eu malesuada.</p>
								<div class="row">
									<div class="6u">
										<ul class="icons">
											<li class="icon fa-home">
												1234 Somewhere Road<br />
												Nashville, TN 00000<br />
												USA
											</li>
											<li class="icon fa-phone">
												(000) 000-0000
											</li>
											<li class="icon fa-envelope">
												<a href="#">info@untitled.tld</a>
											</li>
										</ul>
									</div>
									<div class="6u">
										<ul class="icons">
											<li class="icon fa-twitter">
												<a href="#">@untitled-tld</a>
											</li>
											<li class="icon fa-instagram">
												<a href="#">instagram.com/untitled-tld</a>
											</li>
											<li class="icon fa-dribbble">
												<a href="#">dribbble.com/untitled-tld</a>
											</li>
											<li class="icon fa-facebook">
												<a href="#">facebook.com/untitled-tld</a>
											</li>
										</ul>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
				<div id="copyright" class="container">
					<ul class="links">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</div>

	</body>
</html>