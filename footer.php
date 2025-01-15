<div class="vc_row-full-width vc_clearfix"></div>
<div class="vc_row vc_row-fluid ult-vc-hide-row vc_row-has-fill" data-rtl="false" data-row-effect-mobile-disable="true" style="position: relative; background:#333;"><div class="upb_row_bg" data-bg-override="full" style="background: rgb(51, 51, 51); min-width: 1322px; left: -61.1111px; width: 1322px;"></div><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="container"><div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1536355316742"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper">
	<div class="wpb_single_image wpb_content_element vc_align_center  vc_custom_1545452126536">
		
		<figure class="wpb_wrapper vc_figure">
			<div class="vc_single_image-wrapper   vc_box_border_grey"><img width="269" height="100" src="https://www.espacomatodentro.com.br/wp-content/uploads/2018/12/Espaço-Mato-Dentro-Eventos-em-Campinas-e-São-Paulo-Logo-269X100-png3.png" class="vc_single_image-img attachment-medium" alt="" srcset="https://www.espacomatodentro.com.br/wp-content/uploads/2018/12/Espaço-Mato-Dentro-Eventos-em-Campinas-e-São-Paulo-Logo-269X100-png3.png 269w, https://www.espacomatodentro.com.br/wp-content/uploads/2018/12/Espaço-Mato-Dentro-Eventos-em-Campinas-e-São-Paulo-Logo-269X100-png3-210x78.png 210w" sizes="(max-width: 269px) 100vw, 269px"></div>
		</figure>
	</div>
<div class="aio-icon-component  vc_custom_1545452381361   style_1"><a class="aio-icon-box-link"><div id="Info-box-wrap-3988" class="aio-icon-box top-icon" style=""><div class="aio-icon-description ult-responsive" data-ultimate-target="#Info-box-wrap-3988 .aio-icon-description" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;desktop:28px;&quot;}" style="font-family:'Arvo';color:#fff;"><p></p>
<p style="text-align: center;line-height:22px !important;">Ideal para todos os tipos e formatos de eventos. Desde os mais belos casamentos até hospedagens de finais de semana longe do stress urbano.</p>
<p></p></div> <!-- description --></div> <!-- aio-icon-box --></a></div> <!-- aio-icon-component --></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner"><div class="wpb_wrapper"><div id="ultimate-heading-85285c28091992751" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-85285c28091992751 uvc-8327 " data-hspacer="line_only" data-halign="center" style="text-align:center"><div class="uvc-main-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-85285c28091992751 h2" data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:18px;&quot;,&quot;line-height&quot;:&quot;desktop:30px;&quot;}"><h2 style="font-family:'Oswald';font-weight:300;color:#ffffff;margin-top:0px;margin-bottom:0px;"></h2></div><div class="uvc-heading-spacer line_only" style="margin-top:10px;margin-bottom:40px;height:3px;"><span class="uvc-headings-line" style="border-style: solid; border-bottom-width: 3px; border-color: rgb(211, 171, 85); width: 50px; margin: 0px auto;"></span></div><div class="uvc-sub-heading ult-responsive" data-ultimate-target=".uvc-heading.ultimate-heading-85285c28091992751 .uvc-sub-heading " data-responsive-json-new="{&quot;font-size&quot;:&quot;desktop:12px;&quot;,&quot;line-height&quot;:&quot;desktop:24px;&quot;}" style="font-family:'Arvo';font-weight:500;color:#fff;margin-top:0px;margin-bottom:0px;">Rua Rubens Gomes Balsas, 2300<br>
Campinas-SP<br>
contato@espacomatodentro.com.br<br>
(19) 98870-4375</div></div></div></div></div><div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_custom_1541602241747  vc_custom_1541602241747"><span class="vc_sep_holder vc_sep_holder_l"><span style="border-color:rgb(255,255,255);border-color:rgba(255,255,255,0.1);" class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span style="border-color:rgb(255,255,255);border-color:rgba(255,255,255,0.1);" class="vc_sep_line"></span></span>
</div></div></div></div></div>

<?php
/**
 * The template for displaying the footer
 */

global $post;

$benedicta_postId = ( isset( $post->ID ) ? get_the_ID() : NULL );

$benedicta_footer_class = '';

$benedicta_options_enable_prefooter = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('enable_prefooter') : 'hide';
$benedicta_enable_prefooter = get_post_meta( $benedicta_postId, 'benedicta_enable_prefooter', true ) ? get_post_meta( $benedicta_postId, 'benedicta_enable_prefooter', true ) : $benedicta_options_enable_prefooter;
$benedicta_options_footer = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer') : 'show';
$benedicta_enable_footer = get_post_meta( $benedicta_postId, 'benedicta_footer', true ) ? get_post_meta( $benedicta_postId, 'benedicta_footer', true ) : $benedicta_options_footer;

if ( !is_404() && !is_search() ) {
	$benedicta_options_footer_layout = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer_layout') : 'boxed';
	$benedicta_footer_layout = get_post_meta( $post->ID, 'benedicta_footer_layout', true ) ? get_post_meta( $post->ID, 'benedicta_footer_layout', true ) : $benedicta_options_footer_layout;
} else {
	$benedicta_footer_layout = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer_layout') : 'boxed';
}

$benedicta_footer_class .= $benedicta_footer_layout;

$benedicta_footer_backtop = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer_backtop') : 1;
if( $benedicta_footer_backtop != 0 ) {
	$benedicta_footer_class .= ' with_backtotop ';
}

$benedicta_footer_socials = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer-social') : 0;

$benedicta_onepage_menu = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('onepage_menu') : 0;
?>
		
		</div><!-- //page-content -->
		
		<?php if ( is_front_page() && $benedicta_onepage_menu != 0 ) { ?>
			<div class="onepage_div"></div>
		<?php } ?>

		<footer class="<?php echo esc_attr( $benedicta_footer_class ); ?>">
		
			<!-- Prefooter Area -->
			<?php if( $benedicta_enable_prefooter == 'show' ) { ?>
				<div id="prefooter_area">
					<div class="container">
						<div class="row">
							<?php
								$benedicta_widgets_grid = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('prefooter_col') : '4-4-4';
								$i = 1;
								foreach (explode('-', $benedicta_widgets_grid) as $benedicta_widgets_g) {
									echo '<div class="col-md-' . esc_attr( $benedicta_widgets_g ) . ' col-' . esc_attr( $i ) . '">';
										dynamic_sidebar("footer-area-$i");
									echo '</div>';
									$i++;
								}
							?>
						</div>
					</div>
				</div>
			<?php } ?>
			
			<!-- Footer Area -->
			<?php if( $benedicta_enable_footer == 'show' ) { ?>
				<div id="footer_bottom">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 copyright_wrap text-center">
								<?php $benedicta_footer_copyright = class_exists( 'ReduxFrameworkPlugin' ) ? benedicta_options('footer_copyright') : 'Copyright © 2018 Benedicta. All Rights Reserved.'; ?>
								<?php if(!empty( $benedicta_footer_copyright ) ) { echo '<div class="copyright">' . $benedicta_footer_copyright . '</div>'; } ?>
							</div>
							<div class="col-sm-6 social_links_wrap text-right">
								<?php if( $benedicta_footer_socials != 0 ) { ?>
									<?php echo benedicta_social_links(); ?>
								<?php } ?>
								<?php if( $benedicta_footer_backtop != 0 ) { ?>
									<a id="footer-backtop" href="javascript:void(0);"><i></i></a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</footer>
		
	</div><!-- //Page Wrap -->
	
<?php wp_footer(); ?>

</body>
</html>