<div class="banner">
	<div class="container">
		<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>

			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>Bright Education</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Global Thinking & Behaviour</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Prospective Career & Earnings</h3>
						</div>
					</li>
					<li>
						<div class="banner-info">
							<h3>Then Why You Are Waiting....</h3>
						</div>
					</li>
				</ul>
			</div>
	</div>
</div>