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

	<link async href="/static/grid.css" rel="stylesheet" type="text/css" media="all">
	<link async href="/static/site.css" rel="stylesheet" type="text/css" media="all">

</head>



<body>

	<div class="site-wrapper">

		<div class="col-3" style="background-color:red;">Logo</div>
		<div class="col-3 align-right" style="background-color:red;">Link</div>

	</div>

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

</body>

</html>

<?php COUCH::invoke(); ?>
