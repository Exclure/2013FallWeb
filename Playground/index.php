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
			<div class="jumbotron">
				<h1>Hello World!</h1>
				<p>
					Welcome class of 2013 to Web Server Programming
				</p>
				<a class="btn btn-lg btn-success">Learn More</a>

			</div>
			<div class="row">
				<div class="col-xs-6 col-md-4">
					<h2>Heading</h2>
					<p>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</p>
					<p>
						<a class="btn btn-primary" href="#">View details »</a>
					</p>
				</div>
				<div class="col-xs-6 col-md-4">
					<h2>Important Stuff</h2>
					<p>
						Check out the August issue of Ludique Magazine The Mobile Photography Magazine
					</p>
					<p>
						<a class="btn btn-primary" href="http://ludiquemag.com/august2013.html">Check It Out »</a>
					</p>
				</div>
				<div class="col-xs-6 col-md-4">
					<h2>Heading</h2>
					<p>
						Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
					</p>
					<p>
						<a class="btn btn-primary" href="#">View details »</a>
					</p>
				</div>
			</div>

			<!-- Columns are always 50% wide, on mobile and desktop -->

		</div>
		</div>
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="Scripts/main.js"></script>
    	<script type="text/javascript">
    	$(function(){
    		$(".nav .home").addClass("active");
    	});

	</body>
</html>