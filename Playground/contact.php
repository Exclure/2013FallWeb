<!DOCTYPE html>
<html>
	<head>
		<title>Playground</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<style type="text/css">
    	body { padding-top: 70px; }
    </style>

	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Playground</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li class="active">
						<a href="contact.php">Contact</a>
					</li>
					<li>
						<a href="links.php">Links</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li>
								<a href="#">Another action</a>
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
							<li>
								<a href="#">Separated link</a>
							</li>
							<li>
								<a href="#">One more separated link</a>
							</li>
						</ul>
					</li>
				</ul>
				<p class="navbar-text pull-right">
					Signed in as <a href="#" class="navbar-link">Lynton Merriwether</a>
				</p>
			</div><!-- /.navbar-collapse -->
		</div>
		</nav>
		<div class="container">
			<div class="well">
				<h1>Hello World!</h1>
				<p>
					Welcome class of 2013 to Web Server Programming
				</p>
				<a class="btn btn-lg btn-success">Learn More</a>

			</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Contact Us</h2>
					<p>If you have a question or would like to submit something leave a message.</p>
					<form class="form-horizantal">
						<div class="form-group">
							<label for="inputEmail1" class="col-md-2 control-label">Your Email</label>
							<div class="col-md-10">
								<input type="email" class="form-control" id="inputEmail1" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="txtMsg" class="col-md-2 control-label">Message</label>
							<div class="col-md-10">
								<textarea class="form-control" id="txtMsg" placeholder="Enter your message here"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-10">
								<input type="submit" class="btn" value="Submit" />
							</div>
						</div>
					</form>
					<!-- Columns are always 50% wide, on mobile and desktop -->
				</div>
			</div>
			<script src="http://code.jquery.com/jquery.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</body>
</html>