<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Homepage'>

	<cms:editable name='content_group' label='Page Content' type='group' order='1' />

	<cms:editable name='hero_kicker' label='Hero kicker' type='text' group='content_group' order='1' />

	<cms:editable name='hero_title' label='Hero title' type='text' group='content_group' order='2' />

	<cms:editable name='hero_button' label='Hero button' desc='Additional button to book now' type='text' group='content_group' order='3' />

	<cms:editable name='hero_buttonlink' label='Hero button link' type='text' group='content_group' order='3' />

	<cms:editable name='hero_image' label='Hero image' type='image' show_preview='1' preview_width='150' group='content_group' order='5' />

	<cms:editable name='divider_line' type='message' group='content_group' order='6'><br>
		<hr><br>
	</cms:editable>

	<cms:repeatable name='sections' label='Section Builder' stacked_layout='1' group='content_group' order='6'>

		<cms:editable name='section_id' label='Section ID' type='text' />

		<cms:editable name='section_type' type='dropdown' label='Section type' opt_values='Image-split Left | Image-split Right | Reviews | Call to action' />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Image-split Left'>show
				<cms:else />hide
			</cms:if>
		</cms:func>

			<cms:editable name='sec-isl-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

			<cms:editable name='sec-isl-title' label='Title' type='text' not_active=my_cond />

			<cms:editable name='sec-isl-content' label='Content' type='textarea' not_active=my_cond />

			<cms:editable name='sec-isl-button' label='Button' type='text' not_active=my_cond />

			<cms:editable name='sec-isl-link' label='Button Link' type='text' not_active=my_cond />

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

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Reviews'>show
				<cms:else />hide
			</cms:if>
		</cms:func>

			<cms:editable name='sec-reviews-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

			<cms:editable name='sec-reviews-title' label='Title' type='text' not_active=my_cond />

			<cms:editable name='sec-reviews-content' label='Content' type='textarea' not_active=my_cond />

			<cms:editable name='sec-reviews-button' label='Button' type='text' not_active=my_cond />

			<cms:editable name='sec-reviews-link' label='Button Link' type='text' not_active=my_cond />

		<cms:func _into='my_cond' section_type=''>
			<cms:if section_type='Call to action'>show
				<cms:else />hide
			</cms:if>
		</cms:func>

			<cms:editable name='sec-cta-image' label='Image' type='image' show_preview='1' preview_width='150' not_active=my_cond />

			<cms:editable name='sec-cta-title' label='Title' type='text' not_active=my_cond />

			<cms:editable name='sec-cta-button' label='Button' type='text' not_active=my_cond />

			<cms:editable name='sec-cta-link' label='Button Link' type='text' not_active=my_cond />

			<cms:editable name='sec-cta-booking' label='Add booking link' type='radio' opt_values='No | Yes' not_active=my_cond />

			<cms:editable name='sec-cta-contact' label='Add contact button' type='radio' opt_values='No | Yes' not_active=my_cond />

	</cms:repeatable>

	<cms:editable name='seo_group' label='SEO Details' type='group' order='2' />

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
				<a><span onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" id="button" class="button">Book now<img src="static/images/spanner.svg" /></span></a>
				<cms:if hero_button>
					<a href="<cms:show hero_buttonlink />"><span class="button secondary">
							<cms:show hero_button /><img src="static/images/arrow-forward.svg" />
						</span></a>
				</cms:if>
			</div>
		</div>
		<div class="sec-hero-scroll">
			<div class="scroller"></div>
		</div>
		<div class="background-image"><img src="<cms:show hero_image />" /></div>
	</div>

	<div id="services" class="sec-carousel">

		<div class="wrapper carousel-wrapper">

			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/car.svg" />Servicing
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/oil.svg" />Class 1–7 MOTs
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/car.svg" />Brakes
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/oil.svg" />Wheel alignment
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/car.svg" />Servicing
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/oil.svg" />Class 1–7 MOTs
			</div>
			<div class="carousel-item kicker">
				<img src="/static/images/service-icons/oil.svg" />Brakes
			</div>

		</div>

	</div>

	<cms:show_repeatable 'sections'>

		<cms:if section_type='Image-split Left'>

			<div id="<cms:show section_id />" class="sec-split">
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
										<cms:show sec-isl-button /><img src="static/images/arrow-forward.svg" />
									</span></a>
							</cms:if>
							<cms:if sec-isl-contact='Yes'>
								<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><span class="button secondary"><cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone-dark.svg" /></span></a>
							</cms:if>
						</div>
					</div>
				</div>
			</div>

		</cms:if>

		<cms:if section_type='Image-split Right'>

			<div id="<cms:show section_id />" class="sec-split">
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
								<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><span class="button secondary"><cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone-dark.svg" /></span></a>
							</cms:if>
						</div>
					</div>
					<div class="col-6 align-right">
						<img class="split-img" src="<cms:show sec-isr-image />">
					</div>
				</div>
			</div>

		</cms:if>

		<cms:if section_type='Call to action'>

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

		</cms:if>

		<cms:if section_type='Reviews'>

			<div id="<cms:show section_id />" class="sec-reviews">
				<div class="wrapper">

					<div class="col-6 align-left">
						<img class="split-img" src="<cms:show sec-reviews-image />">
						<div class="sec-reviews-container">
							<cms:get_field 'trustpilot' masterpage='settings.php' />
						</div>
					</div>

					<div class="col-5 align-right">
						<div>
							<h2>
								<cms:show sec-reviews-title />
							</h2>
							<p class="p-plus">
								<cms:show sec-reviews-content />
							</p>
							<cms:if sec-reviews-button>
								<a href="<cms:show sec-reviews-link />"><span class="button"><cms:show sec-reviews-button /><img src="static/images/arrow-forward.svg" /></span></a>
							</cms:if>
						</div>
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
