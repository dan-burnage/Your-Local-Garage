<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Landing Page'>

	<cms:editable name='hero_title' type='text' />

</cms:template>

<!DOCTYPE html>

<html lang="en">

<head>

	<!--INDEX.PHP — DETAILS TEMPLATE VIEW-->

	<cms:embed 'gtag.html' />

	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>

		<cms:if 'page_title' >
			<cms:get_custom_field 'page_title' masterpage='settings.php' />
			<cms:else />
			Your Local Garage | Watton
		</cms:if>

	</title>

	<cms:if 'seo_desc'><meta name="description" content="<cms:get_custom_field 'seo_desc' masterpage='settings.php' />"></cms:if>
	<meta name="theme-color" content="#111111">

	<!-- Open Graph data -->
	<cms:if 'seo_title'><meta property="og:title" content="<cms:get_custom_field 'seo_title' masterpage='settings.php' />"></cms:if>
	<meta property="og:url" content="<cms:show k_page_link />">
	<meta property="og:type" content="website">
	<cms:if 'seo_desc'><meta property="og:description" content="<cms:get_custom_field 'seo_desc' masterpage='settings.php' />"></cms:if>
	<cms:if 'seo_img'><meta property="og:image" content="<cms:get_custom_field 'seo_img' masterpage='settings.php' />"></cms:if>

	<!-- Twitter card data -->
	<meta name="twitter:card" content="summary">
	<meta name="twitter:site" content="<cms:show k_page_link />">
	<cms:if 'seo_title'><meta name="twitter:title" content="<cms:get_custom_field 'seo_title' masterpage='settings.php' />"></cms:if>
	<cms:if 'seo_desc'><meta name="twitter:description" content="<cms:get_custom_field 'seo_desc' masterpage='settings.php' />"></cms:if>
	<cms:if 'seo_img'><meta name="twitter:image" content="<cms:get_custom_field 'seo_img' masterpage='settings.php' />"></cms:if>

	<cms:embed 'favicons.html' />

	<link async href="/static/sitemain.css" rel="stylesheet" type="text/css" media="all">

</head>



<body>

	<h1>1. Hello world!</h1>
	<h1>2. <cms:show hero_title /></h1>
	<h1>3. <cms:get_custom_field 'seo_desc' masterpage='settings.php' /></h1>

</body>

</html>

<?php COUCH::invoke(); ?>
