<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Landing Page'>

	<cms:editable name='landing_hero' label='Landing Hero' type='group' />
	<cms:editable name='kicker' label='Kicker' type='text' group='landing_hero' order='1' />
	<cms:editable name='title' label='Title' type='text' group='landing_hero' order='2' />
	<cms:editable name='button' label='Button text' type='text' group='landing_hero' order='3' />


</cms:template>

<!DOCTYPE html>

<html lang="en">

<head>

	<cms:embed 'gtag.html' />
	<cms:embed 'og-meta.html' />
	<cms:embed 'favicons.html' />
	<cms:embed 'g-fonts.html' />

</head>

<body>

	<cms:embed 'grid-overlay.html' />

	<div class="wrapper header">

		<div class="col-3">Logo</div>
		<div class="col-3"><a>Get in touch</a></div>

	</div>

	<div class="wrapper content" >

		<div class="col-8" >

			<cms:if kicker >
				<p class="kicker"><cms:show kicker /></p>
			</cms:if>

			<cms:if title >
				<h1 class="h1-plus"><cms:show title /></h1>
			</cms:if>

			<cms:if button >
				<div class="button-margin">
				<a class="button"><cms:show button /><img src="static/images/arrow-forward.svg"/></a>
				</div>
			</cms:if>

		</div>

	</div>

	<div class="wrapper footer">

		<div class="col-3 caption">Footer text</div>
		<div class="align-right"><img class="portfolio-link" src="/static/images/smile-logo.svg" /></div>

	</div>

</body>

</html>

<?php COUCH::invoke(); ?>
