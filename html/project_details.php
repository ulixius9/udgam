<?php
session_start();
include_once("../config.php");
$eid=$_GET['eid'];
$sql="select reqamt from event where event.eid=$eid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$req=$row['reqamt'];
$sql="select SUM(Amount) as receive from funds where eid=$eid group by eid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$rec=$row['receive'];
$per=$rec*100/$req;

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="unititled">
	<meta name="keywords" content="HTML5 Crowdfunding Profile Template">
	<meta name="author" content="Audain Designs">
	<link rel="shortcut icon" href="favicon.ico">  
	<title>Udgam Charity</title>

	<!-- Gobal CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Template CSS -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--Fonts-->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!--Google Analytics-->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12345678-9', 'auto');
		ga('send', 'pageview');

	</script>
</head>
<body>
	<!--header-->
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="goal-summary pull-left">
					<div class="backers">
						<h3><?php echo $req?></h3>
						<span>backers</span>
					</div>
					<div class="funded">
						<h3>$<?php echo $rec?></h3>
						<span>raised out of $23,000</span>
					</div>
					<div class="time-left">
						<h3>27</h3>
						<span>days left to go</span>
					</div>
					<div class="reminder last">
						<a href="#"><i class="fa fa-star"></i> REMIND ME</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/header-->
	<!--main content-->
	<div class="main-content">
		<div class="container">
			<div class="row">
				<div class="content col-md-8 col-sm-12 col-xs-12">
					<div class="section-block">
						<div class="funding-meta">
							<h1>LAUNCH INTO SUCCESS</h1>
							<span class="type-meta"><i class="fa fa-user"></i> Jonathan Doe </span>
							<span class="type-meta"><i class="fa fa-tag"></i> <a href="#">crowdfunding</a>, <a href="#">launch</a> </span>
							<!--img src="assets/img/image-heartbeat.jpg" class="img-responsive" alt="launch HTML5 Crowdfunding"-->
							<div class="video-frame">
								<iframe src="https://player.vimeo.com/video/67938315" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
							<p>Launch will enable you be in run  your own crowdfunding campaign, and be in complete control from concept to crowdfunding to launch.</p>
							<h2><?php echo 'Rs. '.$rec?></h2>							
							<span class="contribution">raised by <strong>5,234</strong> ready to launch</span>
							<div class="progress">
							<?php 
								echo '<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:'.$per.'%;">';
									echo '<span class="sr-only">'.$per.'% Complete</span>';
									?>
									</div>
							</div>
							<span class="goal-progress"><strong><?php printf("%.2f",$per)?>%</strong> of Rs. <?php printf($req)?>  raised</span>
						</div>
						
						<span class="count-down"><strong>27</strong>Days to go.</span>
						<a href="#" class="btn btn-launch" data-toggle="modal" data-target="#myModal">HELP LAUNCH</a>
						<a href="#" class="btn btn-launch btn-lg pull-right">
								<i class="fa fa-thumbs-o-up"></i> Like (0)
						</a>
					</div>
					<!--Modal-->
					<!-- The Modal -->
					<div class="modal fade" id="myModal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
							
								<!-- Modal Header -->
								<div class="modal-header">
									<h4>Make Payement</h4>
								</div>
								
								<!-- Modal body -->
								<form class="form-group"  action="donate.php" method="post">
									<div class="modal-body">
										<label for="name" class="my-3">Name :</label>
										<input class="form-control form-control-lg " type="text" name="name" placeholder="Enter Full Name"/>
										<label for="amount" class="my-3"> Email:</label>
										<input class="form-control form-control-lg " type="text" name="email" placeholder="Enter Email Address"/>
										<label for="amount" class="my-3">  Contact:</label>
										<input class="form-control form-control-lg " type="text" name="contact" placeholder="Enter Contact Number"/>
										<label for="amount"class="my-3"> Amount:</label>
										<input class="form-control form-control-lg " type="text" name="amount" placeholder="Enter Amount in INR"/>
										<br>
										<div class="form-check my-3">
										<label for="method">Payment Method</label><br>
										<input class="form-check-input" type="radio" name="method" id="method" value="Debit">Debit Card<br/>
										<input class="form-check-input" type="radio" name="method" id="method" value="Credit"><span>Credit Card</span><br>
										<input class="form-check-input" type="radio" name="method" id="method" value="PayTM">PayTM<br>
											</div>
									</div>
									
									<!-- Modal footer -->
									<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<input type="submit" class="btn btn-secondary" value="submit">
									</div> 	
								</form>
							</div>
						</div>
					</div>
					<!--signup-->
					<div class="section-block signup">
						<div class="sign-up-form">
							<form>
								<p>Sign up now for updates and a chance to win a free version of launch!</p>
								<input class="signup-input" type="text" name="email" placeholder="Email Address"><button class="btn btn-signup" type="submit"><i class="fa fa-paper-plane"></i></button>
							</form>
						</div>
					</div>
					<!--/signup-->
					<!--tabs-->
					<div class="section-block">
						<div class="section-tabs">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#about" aria-controls="about" role="tab" data-toggle="tab">About</a></li>
								<li role="presentation"><a href="#updates" aria-controls="updates" role="tab" data-toggle="tab">Updates</a></li>
							</ul>
						</div>
					</div>
					<!--/tabs-->
					<!--tab panes-->
					<div class="section-block">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="about">
								<div class="about-information">
									<h1 class="section-title">ABOUT LAUNCH</h1>
									<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
									<p>Quisque fermentum blandit ex at commodo. Nulla facilisi. Pellentesque porttitor nisi tellus, at gravida mi interdum et. Nulla vestibulum imperdiet libero eget mattis. Vestibulum porttitor, nibh quis sagittis tincidunt, velit orci molestie magna, in congue tortor mauris sit amet eros. Nam dictum gravida tempus.</p>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="updates">
								<div class="update-information">
								<h1 class="section-title">UPDATES</h1>
									<!--update items-->
									<div class="update-post">
										<h4 class="update-title">We've started shipping!</h4>
										<span class="update-date">Posted 2 days ago</span>
										<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
									</div>
									<div class="update-post">
										<h4 class="update-title">Launch begins manufacturing </h4>
										<span class="update-date">Posted 9 days ago</span>
										<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
									</div>
									<div class="update-post">
										<h4 class="update-title">Designs have now been finalized</h4>
										<span class="update-date">Posted 17 days ago</span>
										<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
									</div>
									<!--/update items-->
								</div>
							</div>
						</div>
					</div>
				<!--Comments Section-->	

					<div class="section-block">
							
							<div class="update-information">
								<h1 class="section-title">Comments</h1>
								<!--update items-->

								<div class="form-group">
										<div class="form-group">
												<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
										</div>
										<div class="btn">
												<button class="btn btn-reward" type="button">Share</button>
										</div>
								</div>
								<div class="update-post">
									<h4 class="update-title">Person 1 | <small>Student</small></h4>
									<span class="update-date">Posted 2 days ago</span>
									<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
								</div>
								<div class="update-post">
									<h4 class="update-title">Person 2 | <small>Investor</small> </h4>
									<span class="update-date">Posted 9 days ago</span>
									<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
								</div>
								<div class="update-post">
									<h4 class="update-title">Person 3 | <small>Investor</small></h4>
									<span class="update-date">Posted 17 days ago</span>
									<p>Suspendisse luctus at massa sit amet bibendum. Cras commodo congue urna, vel dictum velit bibendum eget. Vestibulum quis risus euismod, facilisis lorem nec, dapibus leo. Quisque sodales eget dolor iaculis dapibus. Vivamus sit amet lacus ipsum. Nullam varius lobortis neque, et efficitur lacus. Quisque dictum tellus nec mi luctus imperdiet. Morbi vel aliquet velit, accumsan dapibus urna. Cras ligula orci, suscipit id eros non, rhoncus efficitur nisi.</p>
								</div>
									<!--/update items-->
							</div>
					</div>
				<!--/Comments Section-->
				</div>
				<!--/tabs-->
				<!--/main content-->
				<!--sidebar-->
				<div class="content col-md-4 col-sm-12 col-xs-12">
					<div class="section-block summary">
						<h1 class="section-title">Spread the word!</h1>
						<div class="profile-contents">
							<h2 class="position">Sky Rocketing Your Funding Campaign</h2>
							<img src="assets/img/profile-img.jpg" class="profile-image img responsive" alt="John Doe">
							<!--social links-->
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-git"></i></a></li>
							</ul>
							<!--/social links-->
							<a href="#" class="btn btn-contact"><i class="fa fa-envelope"></i>CONTACT US</a>
						</div>
					</div>
					<div class="section-x">
						<!--reward blocks-->
						<div class="reward-block">
							<h2>FAQ's</h2>
							<p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
							<a href="" class="btn btn-reward">More Info.</a>
						</div>
						<div class="reward-block last">
							<h2>Payment Process</h2>
							<p>Curabitur accumsan sem sed velit ultrices fermentum. Pellentesque rutrum mi nec ipsum elementum aliquet. Sed id vestibulum eros. Nullam nunc velit, viverra sed consequat ac, pulvinar in metus.</p>
							<a href="" class="btn btn-reward">Pay</a>
						</div>

						<!--/reward blocks-->
					</div>
				</div>
				<!--/sidebar-->
			</div>
		</div>
	</div>
	<footer class="footer">
	<div class="container">
			<div class="row">
				<span class="copyright">Created by <a href="#" target="_blank">Team code.xxx</a></span>
			</div>
		</div>
	</footer>
	
	<!-- Global jQuery -->
	<script type="text/javascript" src="assets/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	
	<!-- Template JS -->
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>
