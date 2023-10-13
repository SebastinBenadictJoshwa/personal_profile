<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Sebastin Benadict Joshwa D</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
				<?php
// Start a session
session_start();

if (isset($_SESSION['success'])) { 
    ?>
    <div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Message Sent Successfully !!!!
    </div>
    <?php 
} elseif (isset($_SESSION['error'])) {
    ?>
    <div class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Error!</strong> Error in Sending Message !!!!
    </div>
    <?php
}

// Clear the session variables after displaying the message
unset($_SESSION['success']);
unset($_SESSION['error']);
?>

					<div class="display-t js-fullheight" <?= isset($_SESSION)?'style="margin-top:-20px;"':""?>>
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user.jpg);"></div>
							<h1><span>Sebastin Benadict Joshwa D</span></h1>
							<h3><span>PHP Full Stack Developer</span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="https://in.linkedin.com/in/sebastin-benadict-joshwa"><i class="icon-linkedin2"></i></a></li>
									<li><a href="https://github.com/SebastinBenadictJoshwa"><i class="icon-github"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block">Sebastin Benadict Joshwa</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">+91 8883166011</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">joshwadsb@gmail.com</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">438, Valayampatti, Sivagangai (District) - 630551.</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>Motivated and detail-oriented PHP Developer with a solid background in programming and web development. Proficient in leveraging a variety of technologies and frameworks to craft innovative and user-friendly software solutions. My passion lies in delivering top-notch code and staying updated with industry trends. Dedicated to collaborating with dynamic development teams to achieve project success.</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://in.linkedin.com/in/sebastin-benadict-joshwa"><i class="icon-linkedin2"></i></a></li>
							<li><a href="https://github.com/SebastinBenadictJoshwa"><i class="icon-github"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Work Experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">PHP Developer Trainee</h3>
									<span class="company">Alphasoftz Solutions - Jul 2023 - Current</span>
								</div>
								<div class="timeline-body">
									<p>I'm currently working as trainee in the company and I have gained my knowledge in PHP Laravel and Codeigniter frameworks.</p>
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">BCA</h3>
									<span class="company">St. Joseph's College (Trichy) - 2020 - 2023</span>
								</div>
								<div class="timeline-body">
									<p>I have completed my undergraduate degree in May 2023 without any backlogs and I have gained lots of knowledge about the software industry.</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>My Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-bargraph"></i>
							</span>
							<div class="feature-copy">
								<h3>Web Development</h3>
								<p>Crafting Digital Experiences ✨ | Freelance Web Developer specializing in PHP, CodeIgniter, and Laravel 💻 | Turning Ideas into Stunning Websites 🌐</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">HTML5/CSS3</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Bootstrap 5</span><span class="value-right">90%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-2 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Codeigniter</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">Laravel</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
						  aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">MySQL</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">jQuery</span><span class="value-right">75%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Type Writing</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width:95%">
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Projects</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center col-padding animate-box">
					<a href="https://github.com/SebastinBenadictJoshwa/Laravel-ecommerce" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Ecommerce</h3>
							<span class="px-3">I have done this Ecommerce site using Laravel Framework</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center col-padding animate-box">
					<a href="https://github.com/SebastinBenadictJoshwa/codeigniter-todolist" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Todo List</h3>
							<span class="px-3">This todo list is done through codeigniter</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center col-padding animate-box">
					<a href="https://github.com/SebastinBenadictJoshwa/Laravel-online-assignment-submission-portal" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Online Assignment Submission Portal in Laravel</h3>
							<span class="px-3">This was my personal project which was done in reference with my college project</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center col-padding animate-box">
					<a href="https://github.com/SebastinBenadictJoshwa/Laravel-blog-page" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Blog Page</h3>
							<span class="px-3">I have done this as crud project in Laravel</span>
						</div>
					</a>
				</div>
				<div class="col-md-4 text-center col-padding animate-box">
					<a href="https://github.com/SebastinBenadictJoshwa/Online-Assignment-Submission-Portal" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Online Assignment Submission Portal in Python Flask</h3>
							<span class="px-3">This was my personal project which was done in college</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(images/cover_bg_1.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contact</h2>
			<form action="send.php" method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" name="fname" id="fname" class="form-control" placeholder="Your firstname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" name="lname" id="lname" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="sub" id="subject" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>
	
	<div id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p></p>
				</div>
			</div>
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

