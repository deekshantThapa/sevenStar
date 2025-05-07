<?php
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Options',
        'menu_title'    => 'Theme Options',
        'menu_slug'     => 'theme-general-options',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

add_action( 'acf/init', 'sevenstar_acf_block_types' );

function sevenstar_acf_block_types(){

    if( function_exists( 'acf_register_block_type' ) ){
        acf_register_block_type(
			array(
				'name'            => 'sevenstar-banner',
				'title'           => __( 'Banner', 'sevenstar' ),
				'description'     => __( 'Single image or video or sliders', 'sevenstar' ),
				'render_template' => 'template-parts/blocks/banner.php',
				'category'        => 'sevenstar-blocks',
				// 'icon'              => 'images-alt2',
				'keywords'        => array( 'banner', 'banner video', 'banner slider' ),
				'post_types'      => array( 'page', 'sevenstar_product', 'guide-article' ),
				'mode'            => 'edit',
				'supports'        => array(
					'mode' => false,
					'anchor' => true
				),
			)
		);
    }

}