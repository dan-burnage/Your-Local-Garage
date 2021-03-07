<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Global Settings' order='2'>

	<cms:editable name='seo_group' label='SEO Information' desc='SEO, Open Graph and Twitter card data - Shown on list view' type='group' order='1' />

	<cms:editable name='page_title' label='Page title' desc='If different from global title' group='seo_group' type='text' />

	<cms:editable name='seo_title' label='SEO title' desc='Recomended length: 55–60 characters' group='seo_group' maxlength='60' type='text' />

	<cms:editable name='seo_desc' label='SEO description' desc='Recomended length: 150–155 characters' group='seo_group' maxlength='155' type='textarea' />

	<cms:editable name='seo_img' label='SEO image' desc='Recomended size: 1200px x 630px' group='seo_group' type='image' />

	<cms:editable name='superuser' label='Super User Settings' desc='You should check before changing these settings' type='group' order='2' />

	<cms:editable name='show_grid' label='Show site grid' desc='This change is only visible to Burnage' opt_values='Hide=false | Show=true' group='superuser' type='radio' />

	<cms:editable name='booking_link' label='Techman booking link' group='superuser' type='text' />

	<cms:editable name='php_version' type="message" group='superuser'>

		<div class="field k_element k_text ">
			<label class="field-label" >
				<span title="php_version">PHP Version</span> </label><br>
			<?php echo '' . phpversion(); ?>
		</div>

	</cms:editable>

</cms:template>

<cms:redirect url='/' />

<?php COUCH::invoke(); ?>
