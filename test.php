<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Homepage'>

	<cms:repeatable name='sections' label='Sections' stacked_layout='1'>

		<cms:editable name='section_id' label='Section ID' type='text' />

		<cms:editable name='section_type' type='dropdown' label='Choose section type' opt_values='Image-split Left | Image-split Right' />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Image-split Left'>show
				<cms:else />hide
			</cms:if>
		</cms:func>

		<cms:editable name='sec-isl-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

		<cms:editable name='sec-isl-title' label='Title' type='text' not_active=my_cond />

		<cms:editable name='sec-isl-content' label='Content' type='textarea' not_active=my_cond />

		<cms:editable name='sec-isl-button' label='Button' type='text' class='col-md-4' not_active=my_cond />

		<cms:editable name='sec-isl-link' label='Button Link' type='text' class='col-md-4' not_active=my_cond />

		<cms:editable name='sec-isl-booking' label='Add booking link' type='radio' opt_values='No | Yes' not_active=my_cond />

		<cms:editable name='sec-isl-contact' label='Add contact button' type='radio' opt_values='No | Yes' not_active=my_cond />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Image-split Right'>show
				<cms:else />hide
			</cms:if>
		</cms:func>

		<cms:editable name='sec-isr-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

		<cms:editable name='sec-isr-title' label='Title' type='text' not_active=my_cond />

		<cms:editable name='sec-isr-content' label='Content' type='textarea' not_active=my_cond />

		<cms:editable name='sec-isr-button' label='Button' type='text' class='col-md-4' not_active=my_cond />

		<cms:editable name='sec-isr-link' label='Button Link' type='text' class='col-md-4' not_active=my_cond />

		<cms:editable name='sec-isr-booking' label='Add booking link' type='radio' opt_values='No | Yes' not_active=my_cond />

		<cms:editable name='sec-isr-contact' label='Add contact button' type='radio' opt_values='No | Yes' not_active=my_cond />

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
	<div id="" class="sec-hero">

		<!-- Grid/layout wrapper -->
		<div class="wrapper">

			<div class="col-8 align-left">

				<p class="kicker">Kicker</p>
				<h1 class="h1-plus">Welcome to Your Local Garage</h1>
				<!-- JS Button wrapper for modal-->
				<div onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button"><a class="button">Book now<img src="static/images/arrow-forward.svg" /></a>
				</div>

			</div>

		</div>

		<div class="background-image"><img src="static/images/temp-bg-img.png" /></div>

	</div>


	<cms:show_repeatable 'sections'>

		<cms:if section_type='Image-split Left'>

			<!-- Section wrapper - Image Split Left  -->
			<div id="<cms:show section_id />" class="sec-split">

				<!-- Grid/layout wrapper -->
				<div class="wrapper">

					<div class="col-6 align-left">

						<img class="split-img" src="<cms:show sec-isl-image />">

					</div>

					<div class="col-5 align-right">

						<div>

							<h2>
								<cms:show sec-isl-title />
							</h2>

							<p class="p-plus">
								<cms:show sec-isl-content />
							</p>

							<cms:if sec-isl-booking='Yes'>
								<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
							</cms:if>

							<cms:if sec-isl-button>
								<a href="<cms:show sec-isl-link />"><span class="button">
								<cms:show sec-isl-button /><img src="static/images/arrow-forward.svg" /></span></a>
							</cms:if>

							<cms:if sec-isl-contact='Yes'>
								<a href="#"><span class="button secondary">01953 797 272<img src="static/images/phone-dark.svg" /></span></a>
							</cms:if>

						</div>

					</div>

				</div>

			</div>

		</cms:if>

		<cms:if section_type='Image-split Right'>

			<!-- Section wrapper - Image dSplit Right  -->
			<div id="<cms:show section_id />" class="sec-split">

				<!-- Grid/layout wrapper -->
				<div class="wrapper">

					<div class="col-5 align-left">

						<div>
							<h2>
								<cms:show sec-isr-title />
							</h2>

							<p class="p-plus">
								<cms:show sec-isr-content />
							</p>

							<cms:if sec-isr-booking='Yes'>
								<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
							</cms:if>

							<cms:if sec-ir-button>
								<a href="<cms:show sec-isr-link />"><span class="button">
										<cms:show sec-isr-button /><img src="static/images/arrow-forward.svg" />
									</span></a>
							</cms:if>

							<cms:if sec-isr-contact='Yes'>
								<a href="#"><span class="button secondary">01953 797 272<img src="static/images/phone-dark.svg" /></span></a>
							</cms:if>
						</div>

					</div>

					<div class="col-6 align-right">

						<img class="split-img" src="<cms:show sec-isr-image />">

					</div>

				</div>

			</div>

		</cms:if>

	</cms:show_repeatable>




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

		</div>

		<!-- Modal Overlay -->
		<div onclick="document.getElementById('modal').style.display='none'" id="modal-overlay" class="modal-overlay"></div>

	</div>

	<!-- iFrame back button script -->
	<script type="text/javascript">
		var modal = document.getElementById('modal', 'modal-overlay');

		function goBack() {
			window.history.back();
		}
	</script>

	<!-- Coucch Conditional JS -->
	<script type="text/javascript">
		//<![CDATA[
		<
		cms: conditional_js / >
		//]]>
	</script>

</body>

</html>

<?php COUCH::invoke(); ?>
