<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Old' order='1'>

	<cms:editable name='landing_hero' label='Landing Hero' type='group' order='1' />
	<cms:editable name='kicker' label='Kicker' type='text' group='landing_hero' order='1' />
	<cms:editable name='title' label='Title' type='text' group='landing_hero' order='2' />
	<cms:editable name='button' label='Button text' type='text' group='landing_hero' order='3' />
	<cms:editable name='footer' label='Footer' type='group' order='3' />
	<cms:repeatable name='footer_links' label='Footer Links' group='footer' order=''>
		<cms:editable name='footer_links_text' label='Link Text' type='text' col_width='200' />
		<cms:editable name='footer_links_link' label='Link URL' type='text' />
	</cms:repeatable>
	<cms:editable name='facebook_link' label='Facebook page URL' type='text' group='footer' />
	<cms:editable name='instagram_link' label='Instagram page URL' type='text' group='footer' />
	<cms:editable name='twitter_link' label='Twitter page URL' type='text' group='footer' />
	<cms:editable name='header' label='Header' type='group' order='2' />
	<cms:editable name='contact_button' label='Contact us text' type='text' group='header' />
	<cms:editable name='contact_number' label='Contact us phone number' desc='Enter number with no spaces' type='text' group='header' />

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

<body>

	<cms:embed 'grid-overlay.html' />

	<div class="fullpage-wrapper">

		<div class="wrapper header">

			<div class="col-3"><img src="static/images/icon-logo.svg" class="hero-logo" /></div>
			<div class="align-right contact-link"><a href="tel:<cms:show contact_number />" class="button-link">
					<cms:show contact_button /><img src="static/images/phone.svg" />
				</a></div>

		</div>

		<div class="wrapper content">

			<div class="col-8">

				<cms:if kicker>
					<p class="kicker">
						<cms:show kicker />
					</p>
				</cms:if>

				<cms:if title>
					<h1 class="h1-plus">
						<cms:show title />
					</h1>
				</cms:if>

				<cms:if button>
					<div onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button-margin">
						<a class="button" >
							<cms:show button /><img src="static/images/arrow-forward.svg" />
						</a>
					</div>
				</cms:if>

			</div>

		</div>

	</div>

	<div class="wrapper footer">

		<div class="caption align-left">

			<span>Copyright &copy;
				<cms:date format='Y' /> — Your Local Garage Ltd &nbsp;
			</span>

			<cms:show_repeatable 'footer_links'>
				<cms:if footer_links_link>
					<span>| &nbsp;</span><a href="<cms:show footer_links_link />"><span>
							<cms:show footer_links_text />
						</span></a>
				</cms:if>
			</cms:show_repeatable>

			<cms:if facebook_link>
				<span> &nbsp; |</span> <a href="<cms:show facebook_link />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/facebook.svg" /></a>
			</cms:if>

			<cms:if instagram_link>
				<a href="<cms:show instagram_link />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/instagram.svg" /></a>
			</cms:if>

			<cms:if twitter_link>
				<a href="<cms:show twitter_link />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/twitter.svg" /></a>
			</cms:if>

		</div>

		<div class="align-right mobile-hide"><a href="https://www.danburnage.com" target="_blank" rel="noopener"><img class="portfolio-link" src="/static/images/smile-logo.svg" /></a></div>

		<div class="background-image"><img src="static/images/temp-bg-img.png" /></div>

	</div>

	<div id="modal">

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

	<div onclick="document.getElementById('modal').style.display='none'" id="modal-overlay" class="modal-overlay"></div>

	</div>

	<script>
		var modal = document.getElementById('modal', 'modal-overlay');
		function goBack() { window.history.back(); }
	</script>

</body>

</html>

<?php COUCH::invoke(); ?>
