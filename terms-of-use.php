<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Terms of use'>

	<cms:editable name='content_group' label='Page Content' type='group' order='1' />

	<cms:editable name='hero_kicker' label='Hero kicker' type='text' group='content_group' order='1' />

	<cms:editable name='hero_title' label='Hero title' type='text' group='content_group' order='2' />

	<cms:editable name='hero_content' label='Hero content' type='textarea' group='content_group' order='3' />

	<cms:editable name='hero_button' label='Hero button' desc='Additional button to book now' type='text' group='content_group' order='4' />

	<cms:editable name='hero_buttonlink' label='Hero button link' type='text' group='content_group' order='5' />

	<cms:editable name='hero_image' label='Hero image' type='image' show_preview='1' preview_width='150' group='content_group' order='6' />

	<cms:editable name='divider_line' type='message' group='content_group' order='7'><br>
		<hr><br>
	</cms:editable>

	<cms:editable name='page_content' label='Page Content' type='richtext' group='content_group' order='8' />

	<cms:editable name='divider_line2' type='message' group='content_group' order='9'><br>
		<hr><br>
	</cms:editable>

	<cms:editable name='serv_cta_image' label='CTA Image' type='image' show_preview='1' preview_width='150' group='content_group' order='15' />

	<cms:editable name='serv_cta_title' label='CTA Title' type='text' group='content_group' order='10' />

	<cms:editable name='serv_cta_button' label='CTA Button' type='text' group='content_group' order='11' />

	<cms:editable name='serv_cta_link' label='CTA Button link' type='text' group='content_group' order='12' />

	<cms:editable name='serv_cta_booking' label='Add booking link' type='radio' opt_values='No | Yes' group='content_group' order='13' />

	<cms:editable name='serv_cta_contact' label='Add contact button' type='radio' opt_values='No | Yes' group='content_group' order='14' />

	<cms:editable name='sidebar_group' label='Sidebar elements' type='group' order='3' />

	<cms:repeatable name='sidebar' label='Page sideboxes' stacked_layout='1' group='sidebar_group' order=''>

		<cms:editable name='serv-sidebar-title' label='Title' type='text' />

		<cms:editable name='serv-sidebar-button' label='Button' type='text' />

		<cms:editable name='serv-sidebar-link' label='Button link' type='text' />

		<cms:editable name='serv-sidebar-image' label='Image' type='image' show_preview='1' preview_width='150' />

		<cms:editable name='serv-sidebar-bg' label='Background Color' type='text' maxlength='7' no_xss_check='1' />

	</cms:repeatable>

	<cms:editable name='seo_group' label='SEO Details' type='group' order='4' />

	<cms:editable name='page_title' label='Page title' desc='If different from global title' group='seo_group' type='text' />

	<cms:editable name='seo_title' label='SEO title' desc='Recomended length: 55–60 characters' group='seo_group' maxlength='60' type='text' />

	<cms:editable name='seo_desc' label='SEO description' desc='Recomended length: 150–155 characters' group='seo_group' maxlength='155' type='textarea' />

	<cms:editable name='seo_img' label='SEO image' desc='Recomended size: 1200px x 630px' group='seo_group' type='image' />

</cms:template>

<cms:pages masterpage='settings.php'>
	<cms:set g_show_grid=show_grid 'global' />
	<cms:set g_nav_booking=nav_booking 'global' />
	<cms:set g_nav_contact=nav_contact 'global' />
	<cms:set g_nav_button=nav_button 'global' />
	<cms:set g_facebook_link=facebook_link 'global' />
	<cms:set g_instagram_link=instagram_link 'global' />
	<cms:set g_twitter_link=twitter_link 'global' />
</cms:pages>

<!DOCTYPE html>

<html lang="en">

<head>

	<cms:embed 'gtag-head.html' />
	<cms:embed 'og-meta.html' />
	<cms:embed 'favicons.html' />
	<cms:embed 'head-links.html' />

</head>

<body>

	<cms:embed 'gtag-body.html' />

	<cms:embed 'grid-overlay.html' />

	<cms:embed 'header.html' />

	<div class="sec-hero small-hero">
		<div class="wrapper">
			<div class="col-6 align-left">
				<cms:if hero_kicker>
					<p class="kicker">
						<cms:show hero_kicker />
					</p>
				</cms:if>
				<h1 class="h1">
					<cms:show hero_title />
				</h1>
				<p class="p-plus">
					<cms:show hero_content />
				</p>
				<cms:if hero_button>
					<a href="<cms:show hero_buttonlink />"><span class="button secondary">
							<cms:show hero_button /><img src="static/images/arrow-forward.svg" alt="" />
						</span></a>
				</cms:if>
			</div>
		</div>
		<div class="hero-image mobile-hide"><img src="<cms:show hero_image />" alt="" /></div>
	</div>

	<div class="serv-content">

		<div class="wrapper">

			<div class="col-7 align-left">

				<cms:show page_content />

			</div>

			<div class="col-4 align-right">

				<div class="sidebar booking">
					<h4><cms:show serv_cta_title /></h4>
					<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" alt="" /></span></a>
					<img class="sidebar-image" alt="" src="<cms:show serv_cta_image />">
				</div>

				<cms:show_repeatable 'sidebar'>

					<div class="sidebar" style="background:<cms:show serv-sidebar-bg />">
						<h4>
							<cms:show serv-sidebar-title />
						</h4>
						<cms:if serv-sidebar-button>
							<a href="<cms:show serv-sidebar-link />"><span class="button secondary">
									<cms:show serv-sidebar-button /><img src="static/images/arrow-forward.svg" alt="" />
								</span></a>
						</cms:if>
						<img class="sidebar-image" src="<cms:show serv-sidebar-image />" alt="">
					</div>

				</cms:show_repeatable>

			</div>

		</div>

	</div>

	<div class="sec-cta service-cta">
		<div class="wrapper">
			<div class="col-12 sec-cta-container">

				<div class="sec-cta-content">
					<h1 class="h1">
						<cms:show serv_cta_title />
					</h1>

					<cms:if serv_cta_booking='Yes'>
						<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" alt="" /></span></a>
					</cms:if>

					<cms:if serv_cta_button>
						<a href="<cms:show serv_cta_link />"><span class="button">
								<cms:show serv_cta_button /><img src="static/images/arrow-forward.svg" alt="" />
							</span></a>
					</cms:if>

					<cms:if serv_cta_contact='Yes'>
						<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><span class="button secondary">
								<cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone.svg" alt="" />
							</span></a>
					</cms:if>
				</div>

				<div class="sec-cta-image"><img src="<cms:show serv_cta_image />" alt="" /></div>

			</div>

		</div>

	</div>

	<cms:embed 'footer.html' />

	<cms:embed 'modal.html' />

	<cms:embed 'script.html' />

	<!-- Couch Conditional JS -->
	<script type="text/javascript">

		//<![CDATA[
		<cms:conditional_js />
		//]]>

	</script>

</body>

</html>

<?php COUCH::invoke(); ?>
