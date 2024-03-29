<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Global Settings' order='1'>

	<cms:editable name='nav_group' label='Navigation Settings' type='group' order='1' />

		<cms:repeatable name='nav_links' label='Navigation links' group='nav_group' order=''>

			<cms:editable name='nav_links_text' label='Link Text' type='text' col_width='200' />
			<cms:editable name='nav_links_link' label='Link URL' desc="You can use section IDs as anchor links" type='text' />

		</cms:repeatable>

		<cms:editable name='nav_button' label='Navigation Button' desc='' type='text' group='nav_group' />

		<cms:editable name='nav_buttonlink' label='Button link' desc='' type='text' group='nav_group' />

		<cms:editable name='nav_booking' label='Add booking link' type='radio' opt_values='No=false | Yes=true' group='nav_group' />

		<cms:editable name='nav_contact' label='Add contact button' type='radio' opt_values='No=false | Yes=true' group='nav_group' />

	<cms:editable name='footer_group' label='Footer Settings' type='group' order='2' />

		<cms:editable name='footer_info_title' label='Info title' type='text' group='footer_group' order='1' />

		<cms:editable name='footer_info' label='Info content' type='textarea' group='footer_group' order='2' />

		<cms:editable name='footer_address_title' label='Address title' type='text' group='footer_group' order='3' />

		<cms:editable name='footer_address' label='Address content' type='textarea' group='footer_group' order='4' />

		<cms:repeatable name='serv_links' label='Service Links' group='footer_group' order='5'>

			<cms:editable name='serv_links_text' label='Link Text' type='text' col_width='200' />

			<cms:editable name='serv_links_link' label='Link URL' type='text' />

		</cms:repeatable>

		<cms:repeatable name='quick_links' label='Quick Links' group='footer_group' order='6'>

			<cms:editable name='quick_links_text' label='Link Text' type='text' col_width='200' />

			<cms:editable name='quick_links_link' label='Link URL' type='text' />

		</cms:repeatable>

		<cms:repeatable name='footer_links' label='Footer Links' group='footer_group' order='7'>

			<cms:editable name='footer_links_text' label='Link Text' type='text' col_width='200' />

			<cms:editable name='footer_links_link' label='Link URL' type='text' />

		</cms:repeatable>

		<cms:editable name='facebook_link' label='Facebook page URL' type='text' group='footer_group' order='8' />

		<cms:editable name='instagram_link' label='Instagram page URL' type='text' group='footer_group' order='9' />

		<cms:editable name='twitter_link' label='Twitter page URL' type='text' group='footer_group' order='10' />

	<cms:editable name='superuser' label='Super User Settings' desc='You should check before changing these settings' type='group' order='3' />

		<cms:editable name='show_grid' label='Show site grid' desc='This change is only visible to Burnage' opt_values='Hide=false | Show=true' group='superuser' type='radio' order='5' />

		<cms:editable name='phone_number' label='Global phone number' desc='This changes the number used accross phone buttons' group='superuser' type='text' order='2' />

		<cms:editable name='trustpilot' label='Truspilot embed code' desc='Add trustpilot embed code here' group='superuser' type='textarea' order='3' no_xss_check='1' />

		<cms:editable name='trustpilot_rating' label='Trustpilot rating' type='dropdown' opt_values='5 stars=trustpilot-5-stars | 4.5 stars=trustpilot-4-half-stars | 4 stars=trustpilot-4-stars | 3.5 stars=trustpilot-3-half-stars | 3 stars=trustpilot-3-stars | 2.5 stars=trustpilot-2-half-stars | 2 stars=trustpilot-2-stars | 1.5 stars=trustpilot-1-half-stars | 1 stars=trustpilot-1-stars' order='4' group='superuser'  />

		<cms:editable name='php_version' type="message" group='superuser' order='6'>

			<div class="field k_element k_text ">
				<label class="field-label" >
					<span title="php_version">PHP Version</span> </label><br>
				<?php echo '' . phpversion(); ?>
			</div>

		</cms:editable>

</cms:template>

<!--<cms:redirect url='/' />-->

<?php COUCH::invoke(); ?>
