<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
						</li>
						<li <? if($location == 'home')echo'class="active"' ?>>
							<a href="index.php">Home</a>
						</li>
						<li <? if($location == 'contact')echo'class="active"' ?>>
							<a href="contact.php">Contact</a>
						</li>
						<li <? if($location == 'links')echo'class="active"' ?>>
							<a href="links.php">Links</a>
						</li>
						<li <? if($location == 'store')echo'class="active"' ?>>
							<a href="store.php">Buy our Stuff</a>
						</li>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<p class="navbar-text pull-right"> Signed in as <a href="#" class="navbar-link">Lynton Merriwether</a></p>
				</div><!-- /.navbar-collapse -->
			</div>
		</div>
		<pre class="container">
	  	[{"url":"index.php","section":"home","title":"Home"},{"url":"links.php","section":"links","title":"Links"},{"url":"contact.php","section":"contact","title":"Contact Us"},{"url":"store.php","section":"store","title":"Buy our stuff"}]  		
	  	</pre>
