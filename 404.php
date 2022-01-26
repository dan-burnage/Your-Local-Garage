<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='404 Page' hidden='1'>
</cms:template>

<!DOCTYPE html>

<html lang="en">

<head>

	<cms:embed 'gtag-head.html' />
	<cms:embed 'og-meta.html' />
	<cms:embed 'favicons.html' />
	<cms:embed 'head-links.html' />

</head>

<body style="height:100%; overflow:hidden;">

	<cms:embed 'gtag-body.html' />

	<cms:embed 'grid-overlay.html' />

	<div class="sec-hero sec-404">

		<div class="wrapper">
			<div class="col-4 align-left nav-logo"><a href="/"><img src="/static/images/ylg-logo-long.svg" alt="Your Local Garage Logo" class="header-logo" />Your Local Garage at Fresh Motors</a></div>
		</div>

		<div class="wrapper">
			<div class="col-9 align-left">
					<p class="kicker">
						404 Error: Page not found
					</p>
				<h1 class="">
					Looks like this isn't the page you're looking for ... try heading back to our homepage
				</h1>
				<a href="/"><button class="button">Back to homepage<img src="static/images/arrow-forward.svg" alt="" /></button></a>
			</div>
		</div>

		<div class="background-image"><img src="/static/images/404-background.png" alt="" /></div>
	</div>

</body>

</html>

<?php COUCH::invoke(); ?>
