<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Homepage' >

	<cms:repeatable name='sections' label='Sections' stacked_layout='1'>

		<cms:editable name='section_id' label='Section ID' type='text' />

		<cms:editable name='section_type' type='dropdown' label='Choose section type' opt_values='Image-split Left | Image-split Right' />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Image-split Left'>show<cms:else />hide</cms:if>
		</cms:func>

			<cms:editable name='sec-isl-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

			<cms:editable name='sec-isl-title' label='Title' type='text' not_active=my_cond />

			<cms:editable name='sec-isl-content' label='Content' type='textarea' not_active=my_cond />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Image-split Right'>show<cms:else />hide</cms:if>
		</cms:func>

			<cms:editable name='sec-isr-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

			<cms:editable name='sec-isr-title' label='Title' type='text' not_active=my_cond />

			<cms:editable name='sec-isr-content' label='Content' type='textarea' not_active=my_cond />

	</cms:repeatable>

</cms:template>

<cms:pages masterpage='settings.php'>

	<cms:set g_show_grid=show_grid 'global' />

</cms:pages>

<!DOCTYPE html>

<html lang="en">

<head>

	<cms:embed 'gtag.html' />
	<cms:embed 'og-meta.html' />
	<cms:embed 'favicons.html' />
	<cms:embed 'g-fonts.html' />

</head>

<body style="background:#FFFFFF !important;">

	<cms:embed 'grid-overlay.html' />

	<!-- Navigation section -->
	<div id="header">

		<div class="wrapper">

			<div class="col-3 align-left"><img src="static/images/icon-logo.svg" class="hero-logo" /></div>

			<div class="col-3 contact-link"><a href="tel:#" class="button-link">07749999022<img src="static/images/phone.svg" /></a></div>

		</div>

	</div>

	<!-- Section wrapper - Hero  -->
	<div id="sec-hero" >

		<!-- Grid/layout wrapper -->
		<div class="wrapper">

			<div class="col-8 align-left">

				<p class="kicker">Kicker</p>
				<h1 class="h1-plus">Welcome to Your Local Garage</h1>
				<!-- JS Button wrapper for modal-->
				<div onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button"><a class="button" >Book now<img src="static/images/arrow-forward.svg" /></a>
				</div>

			</div>

		</div>

		<div class="background-image"><img src="static/images/temp-bg-img.png" /></div>

	</div>

	<!-- Section wrapper - Image Split Left  -->
	<div id="sec-split" >

		<!-- Grid/layout wrapper -->
		<div class="wrapper">

			<div class="col-6 align-left">

				<img class="split-img" src="/static/images/test.png">

			</div>

			<div class="col-5 align-right">

				<div>
					<h2>Your new local garage</h2>
					<p class="p-plus">Alii autem, quibus ego cum soluta nobis est laborum et molestiae non intellegamus. Tum dicere exorsus est eligendi optio, cumque nihil ut calere ignem, nivem esse. P</p>
					<span class="button">Example Button<img src="static/images/arrow-forward.svg" /></span>
				</div>

			</div>

		</div>

	</div>

	<!-- Section wrapper - Image Split Right  -->
	<div id="sec-split" >

		<!-- Grid/layout wrapper -->
		<div class="wrapper">

			<div class="col-5 align-left">

				<div>
					<h2>Your new local garage</h2>
					<p class="p-plus">Alii autem, quibus ego cum soluta nobis est laborum et molestiae non intellegamus. Tum dicere exorsus est eligendi optio, cumque nihil ut calere ignem, nivem esse. P</p>
					<span class="button">Example Button<img src="static/images/arrow-forward.svg" /></span>
				</div>

			</div>

			<div class="col-6 align-right">

				<img class="split-img" src="/static/images/test.png">

			</div>

		</div>

	</div>

	<!-- Site footer wrapper -->
	<!-- <div class="wrapper footer">

		<div class="caption align-left">

			<span>Copyright &copy; <cms:date format='Y' /> — Your Local Garage Ltd &nbsp;</span>

			<span> &nbsp; |</span> <a href="#" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/facebook.svg" /></a>

			<a href="#" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/instagram.svg" /></a>

			<a href="#" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/twitter.svg" /></a>

		</div>

		<div class="align-right mobile-hide"><a href="https://www.danburnage.com" target="_blank" rel="noopener"><img class="portfolio-link" src="/static/images/smile-logo.svg" /></a></div>

	</div> -->

	<!-- Booking Modal Wrapper -->
	<div id="modal">

		<!-- Modal Container -->
		<div class="modal">
			<div class="modal-controls">
				<span onclick="goBack()" tabindex="0" class="caption label"><img src="static/images/arrow-backwards.svg" />Back</span>
				<span class="kicker label">Online booking</span>
				<span onclick="document.getElementById('modal').style.display='none'" tabindex="0" id="close-button" class="caption label">Close<img src="static/images/close.svg" /></span>
			</div>
			<div class="techman-wrapper">
				<cms:embed 'techman.html' />
			</div>

			<!-- iFrame back button script -->
			<script>
				var modal = document.getElementById('modal', 'modal-overlay');
				function goBack() { window.history.back(); }
			</script>

		</div>

		<!-- Modal Overlay -->
		<div onclick="document.getElementById('modal').style.display='none'" id="modal-overlay" class="modal-overlay"></div>

	</div>

</body>

</html>

<?php COUCH::invoke(); ?>
