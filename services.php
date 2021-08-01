<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Services'>

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

	<cms:editable name='serv_cta_image' label='CTA Image' type='image' show_preview='1' preview_width='150' group='content_group' order='13' />

	<cms:editable name='serv_cta_title' label='CTA Title' type='text' group='content_group' order='8' />

	<cms:editable name='serv_cta_button' label='CTA Button' type='text' group='content_group' order='9' />

	<cms:editable name='serv_cta_link' label='CTA Button link' type='text' group='content_group' order='10' />

	<cms:editable name='serv_cta_booking' label='Add booking link' type='radio' opt_values='No | Yes' group='content_group' order='11' />

	<cms:editable name='serv_cta_contact' label='Add contact button' type='radio' opt_values='No | Yes' group='content_group' order='12' />

	<cms:editable name='services_group' label='Services' type='group' order='2' />

	<cms:repeatable name='services' label='Services content' stacked_layout='1' group='services_group' order=''>

		<cms:editable name='serv-li-icon' label='Service Icon' type='dropdown' opt_values='Air filter=air-filter | Aircon=aircon | Alloy wheel=alloy-wheel | Automatic gearbox=automatic-gearbox | Batter=battery | Bonnet=bonnet | Brake disc=brake-disc | Brakes=brakes | Blulb=bulb | Bumper=bumper | Bushes=bushes | Cambelt=cambelt | Car=car | Chasis=chasis | Coolant=coolant | Door inserts=door-inserts | Drive shaft=drive-shaft | Engine=engine | Exhaust=exhaust | Floormats=floormats | Front door=front-door | Front light=front-light | Fuel filter=fuel-filter | Fuel=fuel | Grill=grill | Interior=interior | Keys=keys | Lights=lights | Manual gearbox=manual-gearbox | Mats=mats | MOT=mot | Mudguards=mudguards | Oil filter=oil-filter | Oil=oil | Piston=piston | Pollen filter=pollen-filter | Quaterrpanel=quaterpanel | Radiator=radiator | Rear door=rear-door | Rear light=rear-light | Rear mirrror=rear-mirror | Roofbox=roofbox | Sparkplug=sparkplug | Speaker=speaker | Spedo=spedo | Steel wheel=steel-wheel | Steering wheel=steering-wheel | Steering=steering | Summer tyres=summer-tyres | Suspension=suspension | Tow bar=tow-bar | Turbo=turbo | Tyre=tyre | Tyres=tyres | Undertray=undertray | Wet tyres=wet-tyres | Wheel arches=wheel-arches | Wheel=wheel | Windscreen wipers=windscreen-wipers | Windscreen=windscreen | Wing mirror=wing-mirror | Winter tyres=winter-tyres' />

		<cms:editable name='serv-li-title' label='Service title' type='text' />

		<cms:editable name='serv-li-shorttitle' label='Short title' type='text' />

		<cms:editable name='serv-li-content' label='Content' type='richtext' />

	</cms:repeatable>

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

	<cms:embed 'gtag.html' />
	<cms:embed 'og-meta.html' />
	<cms:embed 'favicons.html' />
	<cms:embed 'head-links.html' />

</head>

<body>

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
							<cms:show hero_button /><img src="static/images/arrow-forward.svg" />
						</span></a>
				</cms:if>
			</div>
		</div>
		<div class="hero-image mobile-hide"><img src="<cms:show hero_image />" /></div>
	</div>

	<div class="serv-content">

		<div class="wrapper">

			<div class="col-7 align-left service-list">

				<cms:show_repeatable 'services'>

					<a id="<cms:show serv-li-title />"></a>
					<div class="service-item">
						<img src="/static/images/service-icons/<cms:show serv-li-icon />.svg" />
						<div>
							<h5>
								<cms:show serv-li-title />
							</h5>
							<cms:show serv-li-content />
						</div>
					</div>

				</cms:show_repeatable>

			</div>

			<div class="col-4 align-right">

				<div class="sidebar booking">
					<h4>Book your MOT or service online</h4>
					<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
					<img class="sidebar-image" src="<cms:show serv_cta_image />">
				</div>

				<cms:show_repeatable 'sidebar'>

					<div class="sidebar" style="background:<cms:show serv-sidebar-bg />">
						<h4>
							<cms:show serv-sidebar-title />
						</h4>
						<cms:if serv-sidebar-button>
							<a href="<cms:show serv-sidebar-link />"><span class="button secondary">
									<cms:show serv-sidebar-button /><img src="static/images/arrow-forward.svg" />
								</span></a>
						</cms:if>
						<img class="sidebar-image" src="<cms:show serv-sidebar-image />">
					</div>

				</cms:show_repeatable>

			</div>

		</div>

	</div>

	<div class="sec-cta">
		<div class="wrapper">
			<div class="col-12 sec-cta-container">

				<div class="sec-cta-content">
					<h1 class="h1">
						<cms:show serv_cta_title />
					</h1>

					<cms:if serv_cta_booking='Yes'>
						<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
					</cms:if>

					<cms:if serv_cta_button>
						<a href="<cms:show serv_cta_link />"><span class="button">
								<cms:show serv_cta_button /><img src="static/images/arrow-forward.svg" />
							</span></a>
					</cms:if>

					<cms:if serv_cta_contact='Yes'>
						<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><span class="button secondary">
								<cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone.svg" />
							</span></a>
					</cms:if>
				</div>

				<div class="sec-cta-image"><img src="<cms:show serv_cta_image />" /></div>

			</div>

		</div>

	</div>

	<cms:embed 'footer.html' />

	<cms:embed 'modal.html' />

	<cms:embed 'script.html' />

	<!-- Couch Conditional JS -->
	<script type="text/javascript">
		//<![CDATA[
		<
		cms: conditional_js / >
		//]]>

	</script>

</body>

</html>

<?php COUCH::invoke(); ?>
