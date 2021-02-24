<?php require_once( 'couch/cms.php' ); ?>

<cms:template title='Global Settings' >

	<cms:editable name='seo_group' label='SEO information' desc='SEO, Open Graph and Twitter card data - Shown on list view' type='group' order='2' />

	<cms:editable name='page_title' label='Page title' desc='If different from global title' group='seo_group' type='text' />

	<cms:editable name='seo_title' label='SEO title' desc='Recomended length: 55–60 characters' group='seo_group' maxlength='60' type='text' />

	<cms:editable name='seo_desc' label='SEO description' desc='Recomended length: 150–155 characters' group='seo_group' maxlength='155' type='textarea' />

	<cms:editable name='seo_img' label='SEO image' desc='Recomended size: 1200px x 630px' group='seo_group' type='image' />

</cms:template>

<cms:redirect url='/' />

<?php COUCH::invoke(); ?>
