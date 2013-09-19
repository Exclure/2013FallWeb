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
		<? include('nav.php'); ?>
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
			<script src="Scripts/main.js"></script>
    		<script type="text/javascript">
	    	$(function(){
	    		$(".nav .contact").addClass("active");
	    	});
	</body>
</html>