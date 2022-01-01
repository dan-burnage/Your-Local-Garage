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
				<a><button onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" class="button">Book now<img src="static/images/spanner.svg" alt="" /></button></a>
				<cms:if hero_button>
					<a href="<cms:show hero_buttonlink />"><button class="button secondary">
							<cms:show hero_button /><img src="static/images/arrow-forward.svg" alt="" />
						</button></a>
				</cms:if>
			</div>
		</div>
		<div class="sec-hero-scroll tablet-hide">
			<div class="scroller"></div>
		</div>
		<div class="background-image"><img src="<cms:show hero_image />" alt="" /></div>
	</div>

	<div id="services" class="sec-carousel">

		<div class="wrapper carousel-wrapper">

			<cms:get_field 'services' masterpage='services.php'>

				<cms:show_repeatable 'services'>

					<cms:if serv-li-content>
						<a href="/services.php#<cms:show serv-li-title />">
							<div class="carousel-item kicker">
								<img src="/static/images/service-icons/<cms:show serv-li-icon/>.svg" alt="" />
								<cms:if>
									<cms:show serv-li-shorttitle />
									<cms:else />
									<cms:show serv-li-title />
								</cms:if>
							</div>
						</a>
					</cms:if>

				</cms:show_repeatable>

			</cms:get_field>

		</div>

	</div>

	<cms:show_repeatable 'sections'>

		<cms:if section_type='Image-split Left'>

			<a id="<cms:show section_id />"></a>
			<div class="sec-split">
				<div class="wrapper">
					<div class="col-6 align-left">
						<img class="split-img" src="<cms:show sec-isl-image />" alt="">
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
								<a><button onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" class="button">Book now<img src="static/images/spanner.svg" alt="" /></button></a>
							</cms:if>
							<cms:if sec-isl-button>
								<a href="<cms:show sec-isl-link />"><button class="button">
										<cms:show sec-isl-button /><img src="static/images/arrow-forward.svg" alt="" />
									</button></a>
							</cms:if>
							<cms:if sec-isl-contact='Yes'>
								<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><button class="button secondary">
										<cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone-dark.svg" alt="" />
									</button></a>
							</cms:if>
						</div>
					</div>
				</div>
			</div>

		</cms:if>

		<cms:if section_type='Image-split Right'>

			<a id="<cms:show section_id />"></a>
			<div class="sec-split">
				<div class="wrapper">
					<div class="col-6 align-right" style="order:2;">
						<img class="split-img" src="<cms:show sec-isr-image />" alt="">
					</div>
					<div class="col-5 align-left">
						<div>
							<h2>
								<cms:show sec-isr-title />
							</h2>
							<p class="p-plus">
								<cms:show sec-isr-content />
							</p>
							<cms:if sec-isr-booking='Yes'>
								<a><button onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" class="button">Book now<img src="static/images/spanner.svg" alt="" /></button></a>
							</cms:if>
							<cms:if sec-isr-button>
								<a href="<cms:show sec-isr-link />"><button class="button">
										<cms:show sec-isr-button /><img src="static/images/arrow-forward.svg" alt="" />
									</button></a>
							</cms:if>
							<cms:if sec-isr-contact='Yes'>
								<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><button class="button secondary">
										<cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone-dark.svg" alt="" />
									</button></a>
							</cms:if>
						</div>
					</div>
				</div>
			</div>

		</cms:if>

		<cms:if section_type='Call to action'>

			<div class="sec-cta">
				<div class="wrapper">
					<div class="col-12 sec-cta-container">

						<div class="sec-cta-content">
							<h1>
								<cms:show sec-cta-title />
							</h1>

							<cms:if sec-cta-booking='Yes'>
								<a><button onclick="document.getElementById('modal', 'modal-overlay').style.display='inherit'" tabindex="0" class="button">Book now<img src="static/images/spanner.svg" alt="" /></button></a>
							</cms:if>

							<cms:if sec-cta-button>
								<a href="<cms:show sec-cta-link />"><button class="button">
										<cms:show sec-cta-button /><img src="static/images/arrow-forward.svg" alt="" />
									</button></a>
							</cms:if>

							<cms:if sec-cta-contact='Yes'>
								<a href="tel:<cms:get_field 'phone_number' masterpage='settings.php' />"><button class="button secondary">
										<cms:get_field 'phone_number' masterpage='settings.php' /><img src="static/images/phone.svg" alt="" />
									</button></a>
							</cms:if>
						</div>

						<div class="sec-cta-image"><img src="<cms:show sec-cta-image />" alt="" /></div>

					</div>

				</div>

			</div>

		</cms:if>

		<cms:if section_type='Reviews'>

			<a id="<cms:show section_id />"></a>
			<div class="sec-reviews">
				<div class="wrapper">

					<div class="col-6 align-left">
						<img class="split-img" src="<cms:show sec-reviews-image />" alt="">
						<div class="sec-reviews-container">
							<img class="review-stars" src="/static/images/<cms:get_field 'trustpilot_rating' masterpage='settings.php' />.png" alt="Trustpilot rating">
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
								<a href="<cms:show sec-reviews-link />"><button class="button">
										<cms:show sec-reviews-button /><img src="static/images/arrow-forward.svg" alt="" />
									</button></a>
							</cms:if>
						</div>
					</div>
				</div>
			</div>

		</cms:if>

	</cms:show_repeatable>

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
