<!DOCTYPE html>
<html>
	<head>
		<title>Denis's Portofolio</title>
		<meta name="keywords" content="Portofolio" />
		<meta name="description" content="This is Denis Eko Harbiyanto's portofolio" />
		<meta name="author" content="Denis Eko Harbiyanto" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="assets/js/pace.js" type="text/javascript"></script>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="assets/css/style.less">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
	<body>
		<div id="Block"></div>
		<div id="Display" style="display:none">
			<div class="navbar navbar-default navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">Portofolio</a>
					</div>
					<div class="collapse navbar-collapse" id="navbar-ex-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active">
								<a href="#">About Me</a>
							</li>
							<li>
								<a href="#">Skill</a>
							</li>
							<li>
								<a href="#">My Portofolio</a>
							</li>
							<li>
								<a href="#">Contact</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-xs-offset-2">
							<h1>A title</h1>
							<h3>A subtitle</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
								ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
								dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
								nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
								Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
								enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum
								felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
							elementum semper nisi.</p>
						</div>
						<div class="col-xs-4">
							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
							class="img-responsive">
						</div>
					</div>
				</div>
			</div>
			<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<h1 class="text-center">Team</h1>
							<p class="text-center">We are a group of skilled individuals.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
							class="center-block img-circle img-responsive">
							<h3 class="text-center">John Doe</h3>
							<p class="text-center">Developer</p>
						</div>
						<div class="col-xs-4">
							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
							class="center-block img-circle img-responsive">
							<h3 class="text-center">John Doe</h3>
							<p class="text-center">Developer</p>
						</div>
						<div class="col-xs-4">
							<img src="http://pingendo.github.io/pingendo-bootstrap/assets/user_placeholder.png"
							class="center-block img-circle img-responsive">
							<h3 class="text-center">John Doe</h3>
							<p class="text-center">Developer</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="header">
					<h1>Create your own page load progress bar with Pace.js</h1>
				</div>
				<div class="menu">
					<a  class="active" href="corner-indicator.html">Corner Indicator</a>
					<a  href="fill-left.html">Fill Left</a>
					<a href="center-atom.html">Center Atom</a>
					<a href="bounce.html">Bounce</a>
				</div>
				<div class="container">
					<p> PROGRESS AUTOMATICALLY CERTAIN TO ENTERTAIN (Pace.js), is a lightweight JavaScript library consists of cool and amazing progress bar indicator for your page load and ajax navigation. </p>
					<p> </p>
					<p>
						Pace.js comes with the following 14 built-in themes that you can choose from. No need to hook into any of your code, progress is detected automatically.
					</p>
					<ul>
						<li>Minimal</li>
						<li>Flash</li>
						<li>Barber Shop</li>
						<li>Mac OSX</li>
						<li>Fill Left</li>
						<li>Flat Top</li>
						<li>Big Counter</li>
						<li>Corner Indicator</li>
						<li>Bounce</li>
						<li>Loading Bar</li>
						<li>Center Circle</li>
						<li>Center Atom</li>
						<li>Center Radar</li>
						<li>Center Simple</li>
						<br style="clear: both;"/>
					</ul>
					<p>You can also create your own themes to fit for your own style.</p>
				</div>
				<footer id="footer">
					<p> ©2014 - <a href="http://www.1stwebdesigner.com/" target="_blank"> 1stwebdesigner.com</a> - All Rights Reserved</p>
				</footer>
				
			</div>
		</div>
		<script src="assets/js/less.js" type="text/javascript"></script>
		<script src="assets/js/jquery.js" type="text/javascript"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script type="text/javascript">
			Pace.on("done", function(){
				setTimeout(function(){
					$('#Block').fadeOut('slow');
					$("#Display").fadeIn('slow');
				}, 300)
			});
		</script>
	</body>
</html>
</html>