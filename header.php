<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					    <h1><a class="navbar-brand" href="index.php"><i class="" aria-hidden="true"></i><img src="images/logo.png" /></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li><a class="hvr-overline-from-center button2 <?php if($page=="" || $page=="index.php") echo 'active"'; ?>" href="index.php">Home</a></li>
							<li><a class="hvr-overline-from-center button2 <?php if($page=="about.php") echo 'active"'; ?>" href="about.php">About</a></li>
							<li><a class="hvr-overline-from-center button2 <?php if($page=="profile.php") echo 'active"'; ?>" href="profile.php">Profile</a></li>
                            <li><a class="hvr-overline-from-center button2 <?php if($page=="apostille.php") echo 'active"'; ?>" href="apostille.php">Apostille</a></li>
                            <li><a class="hvr-overline-from-center button2 <?php if($page=="attestation.php") echo 'active"'; ?>" href="attestation.php">Attestation</a></li>
							<!--<li><a class="hvr-overline-from-center button2 <?php //if($page=="services.php") echo 'active"'; ?>" href="services.php">Services</a></li>-->
							<li><a class="hvr-overline-from-center button2 <?php if($page=="contact.php") echo 'active"'; ?>" href="contact.php">Contact</a></li>
						</ul>
						<!--<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>-->
					</div><!-- /navbar-collapse -->
					
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
				</nav>
			</div>
		</div>
</div>