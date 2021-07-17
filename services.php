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

			<cms:editable name='serv-sidebar-link' label='Buttonlink' type='text' />

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

	<header class="header">

		<nav class="wrapper">

			<div class="col-3 align-left nav-logo"><img src="static/images/joint-logo.svg" class="header-logo" /></div>

			<ul class="nav-menu col-9 align-right">

				<cms:get_field 'nav_links' masterpage='settings.php'>

					<cms:show_repeatable 'nav_links' >

						<li class="button-link"><a href="<cms:show nav_links_link />"><cms:show nav_links_text /></a></li>

					</cms:show_repeatable>

				</cms:get_field>

				<cms:if g_nav_contact = 'true'>
					<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><li class="button secondary"><cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone.svg" /></li></a>
				</cms:if>

				<cms:if g_nav_booking = 'true'>
					<li onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></li>
				</cms:if>

				<cms:if g_nav_button >
					<a href="<cms:get_field 'nav_buttonlink' masterpage='settings.php' />"><li class="button"><cms:get_field 'nav_button' masterpage='settings.php' /><img src="static/images/arrow-forward.svg" /></li></a>
				</cms:if>


			</ul>

			<div class="hamburger align-right">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</div>

		</nav>

	</header>

	<div class="sec-hero">
		<div class="wrapper">
			<div class="col-8 align-left">
				<cms:if hero_kicker>
					<p class="kicker">
						<cms:show hero_kicker />
					</p>
				</cms:if>
				<h1 class="h1-plus">
					<cms:show hero_title />
				</h1>
				<cms:if hero_button>
					<a href="<cms:show hero_buttonlink />"><span class="button secondary">
							<cms:show hero_button /><img src="static/images/arrow-forward.svg" />
						</span></a>
				</cms:if>
			</div>
		</div>
		<div class="background-image"><img src="<cms:show hero_image />" /></div>
	</div>

	<div class="sec-cta">
		<div class="wrapper">
			<div class="col-12 sec-cta-container">

				<div class="sec-cta-content">
					<h1 class="h1">
						<cms:show sec-cta-title />
					</h1>

					<cms:if sec-cta-booking='Yes' >
						<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
					</cms:if>

					<cms:if sec-cta-button>
						<a href="<cms:show sec-cta-link />"><span class="button">
								<cms:show sec-cta-button /><img src="static/images/arrow-forward.svg" />
							</span></a>
					</cms:if>

					<cms:if sec-cta-contact='Yes'>
						<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><span class="button secondary"><cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone.svg" /></span></a>
					</cms:if>
				</div>

				<div class="sec-cta-image"><img src="<cms:show sec-cta-image />" /></div>

			</div>

		</div>

	</div>


	<div class="sec-footer">

		<div class="wrapper" >

			<div class="col-3 align-left sec-footer-content">
				<img src="static/images/joint-logo-full.svg"/>
				<span class="caption opacity">Your Local Garage and FRESH MOTORS are <br>® registered trademarks of Fresh Motors Ltd</span>
			</div>

			<div class="col-4 sec-footer-content">
				<span class="caption"><strong><cms:get_field 'footer_info_title' masterpage='settings.php' /></strong></span>
				<span class="caption"><cms:get_field 'footer_info' masterpage='settings.php' /><br><br> Tel: <a href="">01953 797272</a><br>Email: <a href="">help@yourlocalgarage.co.uk</a></span>
			</div>

			<ul class="col-2 align-right sec-footer-content">
				<li class="caption"><strong><cms:get_field 'footer_address_title' masterpage='settings.php' /><br></strong></li>
				<li class="caption"><cms:nl2br><cms:get_field 'footer_address' masterpage='settings.php' /></cms:nl2br></li>
			</ul>

			<ul class="col-2 align-right sec-footer-content">
				<li class="caption"><strong>Quick links<br></strong></li>
				<cms:get_field 'quick_links' masterpage='settings.php' >
					<cms:show_repeatable 'quick_links'>
						<a href="<cms:show quick_links_link />"><li class="caption"><cms:show quick_links_text /><br></li></a>
					</cms:show_repeatable>
				</cms:get_field>
			</ul>

		</div>

		<div class="wrapper footer-bottom">

			<div class="align-left ">

				<span class="caption">Copyright &copy;
					<cms:date format='Y' /> — Your Local Garage Ltd &nbsp;
				</span>

				<cms:get_field 'footer_links' masterpage='settings.php' >

					<cms:show_repeatable 'footer_links'>

						<cms:if footer_links_link>
							<span class="caption">| &nbsp;</span><a href="<cms:show footer_links_link />"><span class="caption">
									<cms:show footer_links_text />
								</span></a>
						</cms:if>

					</cms:show_repeatable>

				</cms:get_field>

				<cms:if g_facebook_link>
					<span> &nbsp; |</span> <a href="<cms:get_field 'facebook_link' masterpage='settings.php' />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/facebook.svg" /></a>
				</cms:if>

				<cms:if g_instagram_link>
					<a href="<cms:get_field 'instagram_link' masterpage='settings.php' />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/instagram.svg" /></a>
				</cms:if>

				<cms:if g_twitter_link>
					<a href="<cms:get_field 'twitter_link' masterpage='settings.php' />" target="_blank" rel="noopener"><img class="social-icons" src="/static/images/twitter.svg" /></a>
				</cms:if>

			</div>

			<div class="align-right mobile-hide"><a href="https://www.danburnage.com" target="_blank" rel="noopener"><img class="portfolio-link" src="/static/images/smile-logo.svg" /></a></div>

		</div>

	</div>

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

		const hamburger = document.querySelector(".hamburger");
		const navMenu = document.querySelector(".nav-menu");

		hamburger.addEventListener("click", mobileMenu);

		function mobileMenu() {
			hamburger.classList.toggle("active");
			navMenu.classList.toggle("active");
		}

		const navLink = document.querySelectorAll(".nav-link");

		navLink.forEach(n => n.addEventListener("click", closeMenu));

		function closeMenu() {
			hamburger.classList.remove("active");
			navMenu.classList.remove("active");
		}

	</script>

	<script>
		$(document).ready(function() {
			$('.carousel-wrapper').slick({
				slidesToShow: 7,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				arrows: true,
				dots: false,
				pauseOnHover: false,
				responsive: [{
					breakpoint: 860,
					settings: {
						slidesToShow: 5
					}
				}, {
					breakpoint: 600,
					settings: {
						slidesToShow: 3
					}
				}, {
					breakpoint: 460,
					settings: {
						slidesToShow: 2
					}
				}]
			});
		});

	</script>

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
