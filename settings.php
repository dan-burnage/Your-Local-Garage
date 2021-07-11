<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Global Settings' order='1'>

	<cms:editable name='nav_group' label='Navigation Settings' type='group' order='1' />

		<cms:repeatable name='nav_links' label='Navigation links' group='nav_group' order=''>

			<cms:editable name='nav_links_text' label='Link Text' type='text' col_width='200' />
			<cms:editable name='nav_links_link' label='Link URL' desc="You can use section IDs as anchor links" type='text' />

		</cms:repeatable>

		<cms:editable name='nav_button' label='Navigation Button' desc='' type='text' group='nav_group' />

		<cms:editable name='nav_buttonlink' label='Navigation Button' desc='' type='text' group='nav_group' />

		<cms:editable name='nav_booking' label='Add booking link' type='radio' opt_values='No=false | Yes=true' group='nav_group' />

		<cms:editable name='nav_contact' label='Add contact button' type='radio' opt_values='No=false | Yes=true' group='nav_group' />

	<cms:editable name='footer_group' label='Footer Settings' type='group' order='2' />

		<cms:repeatable name='footer_links' label='Footer Links' group='footer_group' order=''>

			<cms:editable name='footer_links_text' label='Link Text' type='text' col_width='200' />

			<cms:editable name='footer_links_link' label='Link URL' type='text' />

		</cms:repeatable>

		<cms:editable name='facebook_link' label='Facebook page URL' type='text' group='footer_group' />

		<cms:editable name='instagram_link' label='Instagram page URL' type='text' group='footer_group' />

		<cms:editable name='twitter_link' label='Twitter page URL' type='text' group='footer_group' />

	<cms:editable name='superuser' label='Super User Settings' desc='You should check before changing these settings' type='group' order='3' />

		<cms:editable name='show_grid' label='Show site grid' desc='This change is only visible to Burnage' opt_values='Hide=false | Show=true' group='superuser' type='radio' order='4' />

		<cms:editable name='booking_link' label='Techman booking link' group='superuser' type='text' order='1' />

		<cms:editable name='phone_number' label='Global phone number' desc='This changes the number used accross phone buttons' group='superuser' type='text' order='2' />

		<cms:editable name='trustpilot' label='Truspilot embed code' desc='Add trustpilot embed code here' group='superuser' type='textarea' order='3' no_xss_check='1' />

		<cms:editable name='php_version' type="message" group='superuser' order='5'>

			<div class="field k_element k_text ">
				<label class="field-label" >
					<span title="php_version">PHP Version</span> </label><br>
				<?php echo '' . phpversion(); ?>
			</div>

		</cms:editable>

</cms:template>

<!--<cms:redirect url='/' />-->

<?php COUCH::invoke(); ?>
