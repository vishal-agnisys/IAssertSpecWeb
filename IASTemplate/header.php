<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softee
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
	<?php

		global $wphash_opt;

		$wphash_layout_width = $wphash_opt['wphash_layout_width'];
		
		if ( isset( $wphash_layout_width ) ) {
			$wphash_layout_width_value = $wphash_layout_width;
		} else {
			$wphash_layout_width_value = $wphash_layout_width;
		};

		if( isset( $wphash_layout_width_value ) && 'boxed-layout' == $wphash_layout_width_value){
			$wphash_layout_width_body_class = 'boxed-layout-active';
		}else{
			$wphash_layout_width_body_class = 'wide-layout-active';
		}

	?>
<body <?php body_class( $wphash_layout_width_body_class ); ?>>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-2153239-6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-2153239-6');
</script>

	<div id="page" class="site site-wrapper <?php echo esc_attr( $wphash_layout_width_value ); ?>">
	<div id="wphash">

		<header>
			
			<?php  get_template_part('/inc/header/header-top-bar');

				// $onepage = get_post_meta(get_the_id(),'_wphash_page_menu_style',true);

				// if( !empty( $onepage == 'one_page' ) || !empty($wphash_opt ['wphash_header_layout'] == '3' )){
				// 	get_template_part('/inc/header/header-one-page');

				// }elseif( !empty($wphash_opt ['wphash_header_layout'] == '2')){
					
				// }else{
				// 	get_template_part('/inc/header/header-1');
				// }
			get_template_part('/inc/header/header-1');
			?>
			<script>(function(){window.webtracking_cookies_banner_required = "yes"; window.webtracking_cookies_banner_own_process = "no"; window.webtracking_cookies_banner_position = "top"; window.webtracking_cookies_banner_style = "dark"; window.webtracking_cookies_banner_domain = 'https://app.hatchbuck.com/'; window.webtracking_cookies_banner_hash = '845';})();</script> <script src='https://cdn.hatchbuck.com/webPageTrackingAgreement.min.js'></script>
		</header>
	<div id="content" class="site-content">
