<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Landing Page'>

	<cms:editable name='hero_title' type='text' />

</cms:template>

<!DOCTYPE html>

<html lang="en">

<head>

	<cms:embed 'gtag.html' />

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<cms:embed 'opengraph.html' />

	<cms:embed 'favicons.html' />

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&display=swap" rel="stylesheet">
	<link async href="/static/responsive.css" rel="stylesheet" type="text/css" media="all">
	<link async href="/static/site.css" rel="stylesheet" type="text/css" media="all">

</head>



<body>

	<div id="grid-wrapper" class="">
		<div id="grid">
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
			<div class="col-1"></div>
		</div>
	</div>

	<div class="wrapper header">

		<div class="col-3">Logo</div>
		<div class="col-3"><a>Get in touch</a></div>

	</div>

	<div class="wrapper content">

		<div class="col-7">

			<h1 class="h1-plus">Heading 1 - Lorem ipsum dolor sit amet ...</h1>
			<h1>Heading 1+ - Lorem ipsum dolor sit amet ...</h1>
			<h2>Heading 2 - Lorem ipsum dolor sit amet ...</h2>
			<h3>Heading 3 - Lorem ipsum dolor sit amet ...</h3>
			<h4>Heading 4 - Lorem ipsum dolor sit amet ...</h4>
			<h5>Heading 5 - Lorem ipsum dolor sit amet ...</h5>
			<h6>Heading 6 - Lorem ipsum dolor sit amet ...</h6>
			<p>Paragraph 1 - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<p class="p-plus">Pargaraph+ - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			<a class="button">Button - Lorem ipsum dolor sit amet ...</a>
			<p class="caption">Caption - Lorem ipsum dolor sit amet ...</p>
			<p class="kicker">Kicker - Lorem ipsum dolor sit amet ...</p>

		</div>

	</div>

</body>

</html>

<?php COUCH::invoke(); ?>
