<?php 
add_action( 'wp_enqueue_scripts', 'online_shoply_enqueue_styles' );
function online_shoply_enqueue_styles() {
	wp_enqueue_style( 'online-shoply-parent-style', get_template_directory_uri() . '/style.css' ); 
} 

function online_shoply_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'online_shoply_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => 'ffffff',
		'height'             	 => 400,
		'flex-height'            => true,
		'default-image'			=> get_theme_file_uri( '/img/bg-img-min.png' ),
		'wp-head-callback'       => 'online_shoply_header_style',
	) ) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => get_theme_file_uri( '/img/bg-img-min.png' ),
			'thumbnail_url' => get_theme_file_uri( '/img/bg-img-min.png' ),
			'description'   => _x( 'Default', 'Default header image', 'online-shoply' )
		),	
	) );

}
add_action( 'after_setup_theme', 'online_shoply_custom_header_setup' );
if ( ! function_exists( 'online_shoply_header_style' ) ) :
	function online_shoply_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = get_header_image();
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
			return;
		}
		?>
		<style type="text/css">
			.site-title a,
			.site-description,
			.logofont,
			.site-title,
			.logodescription {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
			<?php if ( ! display_header_text() ) : ?>
				.logofont,
				.logodescription {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
			<?php endif; ?>

			<?php header_image(); ?>"
			<?php
			if ( ! display_header_text() ) :
				?>
				.logofont,
				.site-title,
				p.logodescription{
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
				<?php
			else :
				?>
				.site-title a,
				.site-title,
				.site-description,
				.logodescription {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		</style>
		<?php
	}
endif;



function online_shoply_customize_register( $wp_customize ) {

	$wp_customize->add_setting( 'navigation_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_setting( 'navigation_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_setting( 'navigation_border_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_setting( 'navigation_cart_color', array(
		'default'           => '#d3a655',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
	) );
}
add_action( 'customize_register', 'online_shoply_customize_register', 999 );



/**
 * Google fonts
 */

function online_shoply_enqueue_assets() {
    // Include the file.
	require_once get_theme_file_path( 'webfont-loader/wptt-webfont-loader.php' );
    // Load the theme stylesheet.
	wp_enqueue_style(
		'superb-ecommerce',
		get_template_directory_uri() . '/style.css',
		array(),
		'1.0'
	);
    // Load the webfont.
	wp_enqueue_style(
		'Poppins',
		wptt_get_webfont_url( 'https://fonts.googleapis.com/css?family=Poppins:400,500,600' ),
		array(),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'online_shoply_enqueue_assets' );